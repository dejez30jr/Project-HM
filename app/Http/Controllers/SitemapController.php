<?php

namespace App\Http\Controllers;

use App\Services\BlogData;
use App\Services\SeoData;

class SitemapController extends Controller
{
    public function index()
    {
        $base = url('/');

        $seo = new SeoData();
        $blog = new BlogData();

        $urls = [
            ['loc' => $base . '/', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => $base . '/portfolio', 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => $base . '/portfolio/entertaiment', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => $base . '/portfolio/promotion', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => $base . '/portfolio/event', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => $base . '/portfolio/production', 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => $base . '/services', 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => $base . '/services/entertainment', 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => $base . '/services/promotion', 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => $base . '/services/event', 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => $base . '/services/production-branding', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ];

        // Halaman layanan SEO
        foreach ($seo->services() as $service) {
            $urls[] = [
                'loc' => $base . '/' . $service['slug'],
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ];
        }

        // Halaman local SEO per kota
        foreach ($seo->locations() as $location) {
            $urls[] = [
                'loc' => $base . '/' . $location['slug'],
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ];
        }

        // Blog
        $urls[] = ['loc' => $base . '/blog', 'changefreq' => 'weekly', 'priority' => '0.8'];
        foreach ($blog->posts() as $post) {
            $urls[] = [
                'loc' => $base . '/blog/' . $post['slug'],
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ];
        }

        return response()
            ->view('sitemap', ['urls' => $urls, 'lastmod' => date('Y-m-d')])
            ->header('Content-Type', 'application/xml');
    }
}
