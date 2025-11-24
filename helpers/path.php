<?php

if (!function_exists('project_root')) {
    function project_root() {
        // protocol
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            ? "https://"
            : "http://";

        // host
        $host = $_SERVER['HTTP_HOST'];

        // ambil folder project
        // contoh: /smp-isr/admin/index.php → jadi /smp-isr
        $path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

        // kalau sekarang di folder /admin, hilangkan "/admin"
        if (preg_match('#/admin$#', $path)) {
            $path = substr($path, 0, -6); // hilangkan "/admin"
        }

        return rtrim($protocol . $host . $path, '/') . '/';
    }
}

if (!function_exists('img_src')) {
    function img_src($p) {
        $p = trim((string)$p);

        if ($p === '') {
            return project_root() . 'assets/img/placeholder.png';
        }

        if (preg_match('#^https?://#i', $p)) {
            return $p;
        }

        $p = ltrim(str_replace('\\','/',$p), '/');

        return project_root() . $p;
    }
}
