<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Canonical Base URL
    |--------------------------------------------------------------------------
    |
    | Domain resmi / canonical dari website. Semua URL indexable (canonical,
    | Open Graph, sitemap, dan structured data) harus konsisten memakai domain
    | ini, terlepas dari host request (www / non-www) atau APP_URL.
    |
    */

    'canonical_base' => env('SEO_CANONICAL_URL', 'https://hanzmanagement.com'),

];
