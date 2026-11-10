<?php
// Proxy de imagenes del blog: las fotos se suben desde el Admin de BonairePaguera (/uploads).
// Se piden desde el servidor y se sirven desde este dominio, evitando CORS/hotlinking.

// En local (atalaya.a / bonaire.a) el origen es el Bonaire local; en produccion, bonairepaguera.com
$es_local = (bool)preg_match('/\.a(:\d+)?$/i', $_SERVER['HTTP_HOST'] ?? '');
define('ORIGEN_UPLOADS', $es_local ? 'http://bonaire.a/uploads/' : 'https://bonairepaguera.com/uploads/');
const CACHE_SEGUNDOS = 86400;

$f = basename((string)($_GET['f'] ?? ''));   // basename evita rutas (../)
if (!preg_match('/^[\w.\- ]+\.(jpe?g|png|gif|webp)$/i', $f)) {
    http_response_code(404);
    exit;
}

$tipos = ['jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif', 'webp' => 'image/webp'];
$tipo = $tipos[strtolower(pathinfo($f, PATHINFO_EXTENSION))];

$cache_dir = sys_get_temp_dir() . '/atalaya_blog_img';
$cache = $cache_dir . '/' . md5($f) . '.bin';

if (!is_file($cache) || (time() - filemtime($cache)) > CACHE_SEGUNDOS) {
    $ch = curl_init(ORIGEN_UPLOADS . rawurlencode($f));
    curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER => true, CURLOPT_FOLLOWLOCATION => true, CURLOPT_TIMEOUT => 15]);
    $datos = curl_exec($ch);
    $codigo = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($datos === false || $codigo != 200) {
        if (!is_file($cache)) {
            http_response_code(404);
            exit;
        }
        // origen caido: se sirve la copia antigua
    } else {
        if (!is_dir($cache_dir)) {
            @mkdir($cache_dir, 0755, true);
        }
        @file_put_contents($cache, $datos);
        if (!is_file($cache)) {   // sin cache escribible: se sirve directamente
            header('Content-Type: ' . $tipo);
            header('Cache-Control: public, max-age=' . CACHE_SEGUNDOS);
            echo $datos;
            exit;
        }
    }
}

header('Content-Type: ' . $tipo);
header('Content-Length: ' . filesize($cache));
header('Cache-Control: public, max-age=' . CACHE_SEGUNDOS);
readfile($cache);
