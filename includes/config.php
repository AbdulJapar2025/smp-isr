<?php
/**
 * Global URL/Path config (PHP 7+ compatible)
 * - Auto-detect subfolder deployment
 * - Gunakan url('...') & asset('...') di semua view
 */

/* ---- Polyfills untuk PHP 7.x ---- */
if (!function_exists('str_starts_with')) {
  function str_starts_with($haystack, $needle) {
    if ($needle === '') return true;
    return strncmp($haystack, $needle, strlen($needle)) === 0;
  }
}
if (!function_exists('str_ends_with')) {
  function str_ends_with($haystack, $needle) {
    if ($needle === '') return true;
    return substr($haystack, -strlen($needle)) === $needle;
  }
}

/* ---- Scheme & Host ---- */
$__scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$__host   = $_SERVER['HTTP_HOST'] ?? 'localhost';

/* ---- Hitung base path proyek thd DOCUMENT_ROOT ---- */
$docRoot = isset($_SERVER['DOCUMENT_ROOT'])
  ? rtrim(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])), '/')
  : '';

$appDir  = str_replace('\\', '/', dirname(__DIR__)); // parent dari /includes = root proyek
$subdir  = '';

if ($docRoot && str_starts_with($appDir, $docRoot)) {
  $rel = trim(substr($appDir, strlen($docRoot)), '/'); // contoh: company-profil-sma
  $subdir = $rel ? '/' . $rel : '';
} else {
  // fallback: coba dari SCRIPT_NAME
  $scriptName = $_SERVER['SCRIPT_NAME'] ?? '/';
  // ambil sampai folder root proyek (diasumsikan parent dari /includes)
  // biasanya tidak perlu, tapi aman sebagai cadangan
  $subdir = rtrim(dirname(dirname($scriptName)), '/\\');
  if ($subdir === '\\' || $subdir === '.') $subdir = '';
  if ($subdir !== '' && $subdir[0] !== '/') $subdir = '/' . $subdir;
}

/* ---- BASE_URL ---- */
define('BASE_URL', "{$__scheme}://{$__host}{$subdir}/"); // selalu diakhiri '/'

/* ---- Direktori (opsional) ---- */
define('ASSETS_DIR', 'assets');
define('IMAGES_DIR', ASSETS_DIR . '/img');
define('UPLOADS_DIR', 'uploads');
define('VIDEOS_DIR', ASSETS_DIR . '/videos');

/* ---- Helper URL ---- */
function url($path = '') {
  $path = ltrim((string)$path, '/');
  return BASE_URL . $path;
}
function asset($path = '') {
  $path = ltrim((string)$path, '/');
  return BASE_URL . $path;
}