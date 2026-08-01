<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    public function index()
    {
        $base = url('/');

        $urls = [
            ['loc' => $base . '/', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => $base . '/portfolio', 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => $base . '/portfolio/entertaiment', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => $base . '/portfolio/promotion', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => $base . '/portfolio/event', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => $base . '/portfolio/production', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ];

        return response()
            ->view('sitemap', ['urls' => $urls, 'lastmod' => date('Y-m-d')])
            ->header('Content-Type', 'application/xml');
    }
}
