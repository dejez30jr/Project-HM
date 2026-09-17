<?php

use Illuminate\Support\Str;

if (!function_exists('canonical_url')) {
    /**
     * Menghasilkan URL canonical yang konsisten menggunakan domain resmi
     * (biasanya https://hanzmanagement.com), tanpa query parameter.
     *
     * Berguna agar canonical / og:url / structured data TIDAK pernah memakai
     * host request (yang bisa non-www) ataupun parameter tracking seperti
     * ?utm_source=..., ?utm_campaign=...
     *
     * @param string|null $path Path halaman, misalnya "layanan" atau "/jasa-spg".
     *                          Jika null, diambil dari current request path.
     */
    function canonical_url(?string $path = null): string
    {
        $base = rtrim((string) config('seo.canonical_base'), '/');

        if ($path === null) {
            $path = request()->path();
        }

        if (Str::startsWith($path, ['http://', 'https://'])) {
            $path = (string) parse_url($path, PHP_URL_PATH);
        }

        if ($path === '' || $path === '/') {
            return $base . '/';
        }

        return $base . '/' . ltrim($path, '/');
    }
}
