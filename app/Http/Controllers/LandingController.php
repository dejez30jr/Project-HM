<?php

namespace App\Http\Controllers;

use App\Services\SeoData;

class LandingController extends Controller
{
    protected $seo;

    public function __construct(SeoData $seo)
    {
        $this->seo = $seo;
    }

    /** Titik masuk tunggal untuk semua landing SEO: layanan (mis. /jasa-spg) & local (mis. /jasa-spg-jakarta) */
    public function index($slug)
    {
        // Halaman local SEO (kota) -> /jasa-spg-{kota}
        $location = $this->seo->location($slug);

        if ($location) {
            return view('pages.seo-location', [
                'location' => $location,
                'cities' => $this->seo->locations(),
                'services' => $this->seo->services(),
            ]);
        }

        // Halaman layanan SEO
        $service = $this->seo->service($slug);

        if (!$service) {
            abort(404);
        }

        $related = [];
        foreach ($service['related_services'] as $rs) {
            $found = $this->seo->service($rs);
            if ($found) {
                $related[] = $found;
            }
        }

        return view('pages.seo-service', [
            'service' => $service,
            'related' => $related,
            'cities' => $this->seo->locations(),
        ]);
    }
}
