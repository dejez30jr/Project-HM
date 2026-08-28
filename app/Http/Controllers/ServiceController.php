<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services', [
            'services' => $this->getServices(),
        ]);
    }

    public function show($slug)
    {
        $service = $this->getServices()->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        $all = $this->getServices();

        return view('pages.service-detail', [
            'service' => $service,
            'services' => $all,
            'others' => $all->where('slug', '!=', $slug)->values(),
        ]);
    }

    private function getServices()
    {
        return collect([
            [
                'slug' => 'entertainment',
                'name' => 'Entertainment',
                'heading' => 'Layanan Hiburan & Entertainment Acara',
                'image' => 'images/hiburan3.webp',
                'short' => 'Talent penghibur profesional untuk memeriahkan acara Anda: host (MC), live band, DJ, dan performer panggung.',
                'portfolios' => ['images/hiburan1.jpeg', 'images/hiburan2.jpeg', 'images/hiburan3.webp'],
                'features' => [
                    'Host / MC profesional yang berpengalaman menguasai panggung',
                    'Live music, band, dan DJ untuk berbagai konsep acara',
                    'Talent show & performer untuk roadshow dan launching',
                    'Dokumentasi foto & video hasil hiburan acara',
                ],
                'desc' => 'Hanz Management menyediakan layanan hiburan dan entertainment untuk memeriahkan berbagai acara Anda. Kami menghadirkan talent-talent profesional yang terlatih — mulai dari host dan MC yang karismatik, live band, DJ, hingga performer panggung yang siap menyesuaikan konsep acara Anda.',
            ],
            [
                'slug' => 'promotion',
                'name' => 'Promotion',
                'heading' => 'Layanan Promosi & Brand Activation',
                'image' => 'images/service1.webp',
                'short' => 'Jasa SPG, SPB, dan kegiatan promosi untuk meningkatkan penjualan dan awareness brand Anda di berbagai lokasi.',
                'portfolios' => ['images/promosi1.jpeg', 'images/promosi2.jpeg', 'images/promosi6.jpeg'],
                'features' => [
                    'SPG (Sales Promotion Girl) dan SPB (Sales Promotion Boy) terlatih',
                    'Roadshow dan booth promotion di mall, event, dan tempat ramai',
                    'Direct selling dan sampling produk untuk brand Anda',
                    'Talent briefing & training sesuai produk dan target pasar',
                ],
                'desc' => 'Layanan promosi dan brand activation Hanz Management membantu brand Anda lebih dikenal dan meningkatkan penjualan. Dengan tim SPG, SPB, dan talent promosi yang terlatih, kami mengelola kegiatan roadshow, booth promotion, hingga sampling produk di berbagai lokasi strategis di Indonesia.',
            ],
            [
                'slug' => 'event',
                'name' => 'Event',
                'heading' => 'Event Organizer & Produksi Event',
                'image' => 'images/img-hero(1).avif',
                'short' => 'Event organizer profesional yang mengelola konsep, SDM, hingga produksi acara Anda dari awal sampai selesai.',
                'portfolios' => ['images/event1.jpg', 'images/event3.webp', 'images/event5.webp'],
                'features' => [
                    'Perencanaan konsep dan manajemen acara dari awal hingga akhir',
                    'Penyediaan SDM: usher, runner, security, dan crew event',
                    'Manajemen tempat, rundown, dan koordinasi vendor',
                    'Support logistik dan teknis saat acara berlangsung',
                ],
                'desc' => 'Hanz Management adalah event organizer profesional yang siap mengelola acara Anda secara menyeluruh. Dari perencanaan konsep, penyediaan SDM, hingga produksi dan koordinasi lapangan — kami pastikan setiap acara berjalan lancar, sesuai rundown, dan memberikan kesan terbaik bagi tamu serta brand Anda.',
            ],
            [
                'slug' => 'production-branding',
                'name' => 'Production & Branding',
                'heading' => 'Produksi Booth & Branding Acara',
                'image' => 'images/service4.webp',
                'short' => 'Produksi properti event, dekorasi, dan branding untuk memperkuat identitas visual brand Anda di setiap acara.',
                'portfolios' => ['images/produk1.webp', 'images/event2.jpg', 'images/event6.jpg'],
                'features' => [
                    'Produksi booth dan properti event sesuai desain brand',
                    'Dekorasi panggung dan instalasi visual untuk acara',
                    'Branding merchandise, signage, dan media promosi',
                    'Pengadaan barang kebutuhan produksi event',
                ],
                'desc' => 'Layanan produksi & branding Hanz Management menghadirkan properti event, dekorasi, dan elemen visual yang memperkuat identitas brand Anda. Dari produksi booth, dekorasi panggung, hingga pengadaan merchandise dan signage, kami wujudkan konsep visual yang konsisten dan berkesan di setiap acara.',
            ],
        ]);
    }
}
