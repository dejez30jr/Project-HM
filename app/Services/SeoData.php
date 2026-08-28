<?php

namespace App\Services;

class SeoData
{
    /**
     * Data halaman layanan SEO (keyword landing pages).
     * Setiap entri memiliki konten unik, bukan copy-paste.
     */
    public function services(): array
    {
        return [
            [
                'slug' => 'jasa-spg',
                'h1' => 'Jasa SPG (Sales Promotion Girl) Terbaik di Indonesia',
                'meta_title' => 'Jasa SPG Indonesia | Agency SPG Hanz Management',
                'meta_desc' => 'Jasa SPG terbaik di Indonesia dari Hanz Management. Agency SPG profesional untuk event, mall, dan roadshow dengan talent terlatih dan berpengalaman.',
                'image' => 'images/service1.webp',
                'intro' => 'SPG (Sales Promotion Girl) adalah garda terdepan brand Anda di lapangan. Hanz Management menyediakan jasa SPG profesional yang terlatih untuk meningkatkan penjualan dan awareness produk di event, mall, toko, dan roadshow di seluruh Indonesia.',
                'body' => 'Setiap talent SPG kami melalui proses rekrutmen, training product knowledge, dan briefing khusus sesuai kebutuhan brand Anda. Kami memahami bahwa keberhasilan promosi sangat bergantung pada kualitas SDM di lapangan — itulah mengapa kami memastikan setiap SPG memiliki penampilan, komunikasi, dan pengetahuan produk yang mumpuni.',
                'features' => [
                    'SPG terlatih dengan product knowledge yang mendalam',
                    'Penampilan mumpuni sesuai image brand',
                    'Direct selling, sampling, dan demonstrasi produk',
                    'Briefing & training sebelum event',
                    'Manajemen jadwal dan laporan kegiatan',
                ],
                'cta' => 'Pesan Jasa SPG',
                'related_services' => ['jasa-spb', 'jasa-usher', 'manpower-event'],
            ],
            [
                'slug' => 'jasa-spb',
                'h1' => 'Jasa SPB (Sales Promotion Boy) & Promo di Mall',
                'meta_title' => 'Jasa SPB untuk Event & Mall | Hanz Management',
                'meta_desc' => 'Butuh jasa SPB (Sales Promotion Boy) untuk promosi produk di mall, retail, atau event? Hanz Management menyediakan SPB profesional di seluruh Indonesia.',
                'image' => 'images/promosi3.jpeg',
                'intro' => 'SPB (Sales Promotion Boy) menjadi pelengkap penting kegiatan promosi, terutama untuk produk yang membutuhkan tenaga tambahan pria. Hanz Management menyediakan SPB yang energik, terlatih, dan siap mendukung penjualan Anda.',
                'body' => 'Tim SPB kami tidak hanya membantu pusat penjualan, tetapi juga mendukung kegiatan roadshow, booth promotion, dan event launching produk. Kami memastikan setiap SPB memiliki etika kerja, kedisiplinan, dan kemampuan komunikasi yang baik untuk mendukung kesuksesan promosi Anda.',
                'features' => [
                    'SPB untuk booth, retail, dan roadshow',
                    'Tenaga tambahan untuk direct selling',
                    'Support event launching dan sampling',
                    'Talent disiplin, rapi, dan terlatih',
                ],
                'cta' => 'Pesan Jasa SPB',
                'related_services' => ['jasa-spg', 'jasa-usher', 'manpower-event'],
            ],
            [
                'slug' => 'jasa-usher',
                'h1' => 'Jasa Usher & Seragam Event Profesional',
                'meta_title' => 'Jasa Usher Event | Hanz Management',
                'meta_desc' => 'Jasa usher untuk event, seminar, dan acara corporate. Usher Hanz Management siap membantu kelancaran acara Anda di seluruh Indonesia.',
                'image' => 'images/promosi2.jpeg',
                'intro' => 'Usher berperan penting dalam menyambut dan memandu tamu di berbagai acara. Hanz Management menyediakan usher profesional yang membantu kelancaran acara Anda, dari seminar, launching, hingga event corporate berskala besar.',
                'body' => 'Kami memahami bahwa kesan pertama sangat menentukan. Usher kami dilatih untuk memberikan pelayanan terbaik — mulai dari penyambutan tamu, pembagian souvenir, hingga membantu koordinasi jalannya acara. Dengan penampilan yang rapi dan sikap yang ramah, usher dari Hanz Management siap meningkatkan kualitas acara Anda.',
                'features' => [
                    'Penyambutan dan pemanduan tamu',
                    'Pembagian merchandise dan souvenir',
                    'Support koordinasi jalannya acara',
                    'Penampilan rapi dan profesional',
                ],
                'cta' => 'Pesan Jasa Usher',
                'related_services' => ['jasa-spg', 'jasa-talent', 'event'],
            ],
            [
                'slug' => 'jasa-talent',
                'h1' => 'Jasa Talent / Host & Entertainer Profesional',
                'meta_title' => 'Jasa Talent, Host & MC Event | Hanz Management',
                'meta_desc' => 'Butuh talent, host, MC, atau entertainer untuk acara Anda? Hanz Management menyediakan talent profesional untuk memperkuat dan memeriahkan event.',
                'image' => 'images/hiburan3.webp',
                'intro' => 'Talent yang tepat dapat menghidupkan suasana acara. Hanz Management menyediakan talent, host, MC, dan entertainer profesional yang siap memperkuat acara Anda — baik untuk launching produk, roadshow, maupun event entertainment.',
                'body' => 'Kami memiliki kumpulan talent yang telah terkurasi dan berpengalaman di berbagai jenis acara. Setiap talent kami pilih berdasarkan kebutuhan spesifik acara Anda, memastikan keselarasan antara karakter talent, konsep acara, dan target audiens.',
                'features' => [
                    'Host dan MC profesional',
                    'Entertainer dan performer panggung',
                    'Talent untuk TVC, roadshow, dan launching',
                    'Kurasi talent sesuai konsep acara',
                ],
                'cta' => 'Pesan Jasa Talent',
                'related_services' => ['jasa-usher', 'entertainment', 'event'],
            ],
            [
                'slug' => 'manpower-event',
                'h1' => 'Manpower Event: Penyedia SDM Event Terlengkap',
                'meta_title' => 'Manpower Event & Penyedia SDM Event | Hanz Management',
                'meta_desc' => 'Penyedia manpower event: usher, runner, security, crew, SPG, dan SDM event lainnya. Hanz Management siap mensupport kebutuhan SDM acara Anda di seluruh Indonesia.',
                'image' => 'images/event5.webp',
                'intro' => 'Kesuksesan sebuah event sangat bergantung pada SDM pendukungnya. Hanz Management menyediakan manpower event lengkap — mulai dari SPG, SPB, usher, runner, crew panggung, hingga security — untuk memastikan acara Anda berjalan lancar.',
                'body' => 'Sebagai penyedia manpower event terpercaya, kami memiliki resource team di hampir setiap kota besar di Indonesia. Dengan struktur tim internal yang solid, kami siap mendukung hampir semua aktivitas dan kebutuhan SDM acara Anda, baik skala kecil maupun besar.',
                'features' => [
                    'SPG, SPB, usher, dan runner',
                    'Crew panggung dan support produksi',
                    'Security dan koordinator lapangan',
                    'Resource team tersebar di kota-kota besar',
                ],
                'cta' => 'Pesan Manpower Event',
                'related_services' => ['jasa-spg', 'jasa-usher', 'event'],
            ],
            [
                'slug' => 'event',
                'h1' => 'Jasa Event Organizer & Produksi Event',
                'meta_title' => 'Event Organizer Profesional | Hanz Management',
                'meta_desc' => 'Event organizer profesional di Indonesia. Hanz Management mengelola event, dekorasi, produksi, dan penyediaan manpower dari awal hingga selesai.',
                'image' => 'images/img-hero(1).avif',
                'intro' => 'Hanz Management adalah event organizer yang mengelola acara Anda secara menyeluruh — dari konsep, penyediaan SDM, dekorasi, hingga produksi. Kami hadir untuk memastikan setiap acara berjalan lancar dan berkesan.',
                'body' => 'Dengan pengalaman menangani berbagai brand ternama, kami memahami kompleksitas produksi event. Tim kami mengelola perencanaan konsep, koordinasi vendor, manajemen tempat, hingga eksekusi lapangan agar acara Anda sukses sesuai rundown.',
                'features' => [
                    'Perencanaan konsep dan manajemen acara',
                    'Dekorasi panggung dan produksi property',
                    'Penyediaan SDM event lengkap',
                    'Koordinasi vendor dan manajemen lapangan',
                ],
                'cta' => 'Konsultasi Jasa Event',
                'related_services' => ['manpower-event', 'jasa-usher', 'production'],
            ],
            [
                'slug' => 'promotion',
                'h1' => 'Jasa Promosi & Brand Activation',
                'meta_title' => 'Jasa Promosi & Brand Activation | Hanz Management',
                'meta_desc' => 'Jasa promosi dan brand activation: SPG, roadshow, booth promotion, dan sampling produk untuk meningkatkan penjualan dan awareness brand Anda.',
                'image' => 'images/promosi7.jpeg',
                'intro' => 'Kami membantu brand Anda lebih dikenal dan meningkatkan penjualan melalui kegiatan promosi yang terukur. Hanz Management mengelola roadshow, booth promotion, dan kegiatan brand activation dengan talent profesional.',
                'body' => 'Dari perencanaan hingga eksekusi, kami merancang strategi promosi yang tepat sasaran. Dengan tim SPG dan SPB yang terlatih, kami memastikan pengalaman brand Anda dihadirkan konsisten di setiap titik promosi.',
                'features' => [
                    'Roadshow dan booth promotion',
                    'Direct selling dan sampling produk',
                    'Brand activation di mall dan event',
                    'Laporan dan evaluasi kegiatan promosi',
                ],
                'cta' => 'Pesan Jasa Promosi',
                'related_services' => ['jasa-spg', 'jasa-spb', 'branding'],
            ],
            [
                'slug' => 'entertainment',
                'h1' => 'Jasa Entertainment & Hiburan Acara',
                'meta_title' => 'Jasa Entertainment Acara | Hanz Management',
                'meta_desc' => 'Jasa entertainment untuk memeriahkan acara: host, MC, live band, DJ, dan talent panggung profesional dari Hanz Management di Indonesia.',
                'image' => 'images/hiburan3.webp',
                'intro' => 'Hiburan yang tepat membuat acara Anda berkesan. Hanz Management menyediakan talent entertainment profesional — host, MC, live band, DJ, dan performer panggung — untuk berbagai konsep acara.',
                'body' => 'Kami menghadirkan hiburan sesuai tema dan target audiens acara Anda. Dengan talent yang berpengalaman menguasai panggung, kami pastikan setiap momen acara Anda hidup dan meninggalkan kesan positif bagi tamu.',
                'features' => [
                    'Host dan MC karismatik',
                    'Live music, band, dan DJ',
                    'Performer dan talent show',
                    'Konsep hiburan sesuai acara',
                ],
                'cta' => 'Pesan Jasa Entertainment',
                'related_services' => ['jasa-talent', 'event', 'branding'],
            ],
            [
                'slug' => 'production',
                'h1' => 'Jasa Produksi Booth & Properti Event',
                'meta_title' => 'Jasa Produksi Booth & Properti Event | Hanz Management',
                'meta_desc' => 'Jasa produksi booth, property event, dan dekorasi untuk memperkuat visual brand Anda. Hanz Management siap membantu kebutuhan produksi acara.',
                'image' => 'images/produk1.webp',
                'intro' => 'Visual yang kuat membuat brand Anda menonjol di setiap acara. Hanz Management menyediakan jasa produksi booth, property event, dan dekorasi yang disesuaikan dengan identitas brand Anda.',
                'body' => 'Tim produksi kami mengerjakan dari konsep hingga instalasi, mulai dari produksi booth, properti panggung, hingga pengadaan barang kebutuhan event. Kami memastikan hasil produksi berkualitas, tepat waktu, dan sesuai desain.',
                'features' => [
                    'Produksi booth dan properti event',
                    'Dekorasi panggung dan instalasi visual',
                    'Pengadaan barang kebutuhan produksi',
                    'Pengerjaan sesuai desain dan tepat waktu',
                ],
                'cta' => 'Konsultasi Produksi',
                'related_services' => ['event', 'branding', 'manpower-event'],
            ],
            [
                'slug' => 'branding',
                'h1' => 'Jasa Branding: Merchandise & Identitas Visual',
                'meta_title' => 'Jasa Branding & Merchandise | Hanz Management',
                'meta_desc' => 'Jasa branding: merchandise, signage, dan elemen visual untuk memperkuat identitas brand Anda di setiap acara dan promosi.',
                'image' => 'images/service4.webp',
                'intro' => 'Branding yang konsisten membangun kepercayaan. Hanz Management menyediakan jasa branding, merchandise, signage, dan elemen visual yang memperkuat identitas brand Anda di setiap titik kontak.',
                'body' => 'Dari merchandise promosi hingga signage event, kami hadirkan elemen visual yang selaras dengan identitas brand Anda. Dengan kualitas produksi yang baik, kami membantu brand Anda terlihat profesional dan berkesan.',
                'features' => [
                    'Merchandise dan merchandise branding',
                    'Signage dan media promosi',
                    'Elemen visual untuk booth dan event',
                    'Konsistensi identitas brand',
                ],
                'cta' => 'Konsultasi Branding',
                'related_services' => ['promotion', 'production', 'entertainment'],
            ],
        ];
    }

    /** Data halaman Local SEO (jasa SPG per kota) dengan konten lokal unik. */
    public function locations(): array
    {
        return [
            [
                'slug' => 'jasa-spg-jakarta',
                'city' => 'Jakarta',
                'meta_title' => 'Jasa SPG Jakarta | Agency SPG di Jakarta | Hanz Management',
                'meta_desc' => 'Cari jasa SPG di Jakarta untuk mall, event, dan roadshow? Hanz Management menyediakan SPG profesional di seluruh area Jakarta dan sekitarnya.',
                'intro' => 'Jakarta adalah pusat bisnis dan gaya hidup Indonesia, dengan ratusan mall, pusat perbelanjaan, dan venue event. Brand yang berpromosi di Jakarta membutuhkan SPG yang mampu menyesuaikan diri dengan ritme kota yang cepat dan beragam.',
                'area' => 'Kami melayani seluruh area DKI Jakarta: Jakarta Pusat, Jakarta Utara, Jakarta Selatan, Jakarta Timur, dan Jakarta Barat — termasuk pusat perbelanjaan dan kawasan bisnis utama.',
            ],
            [
                'slug' => 'jasa-spg-bogor',
                'city' => 'Bogor',
                'meta_title' => 'Jasa SPG Bogor | Agency SPG di Bogor | Hanz Management',
                'meta_desc' => 'Basis Hanz Management di Bogor! Jasa SPG Bogor untuk mall, event, dan roadshow dengan talent lokal terlatih. Hubungi kami hari ini.',
                'intro' => 'Sebagai perusahaan yang berbasis di Kota Bogor, kami memahami karakter masyarakat dan bisnis lokal secara mendalam. Layanan SPG kami di Bogor didukung resource team yang siap mobile ke berbagai lokasi di Kota dan Kabupaten Bogor.',
                'area' => 'Kami melayani area Kota Bogor dan sekitarnya: Bogor Tengah, Bogor Barat, Bogor Timur, Bogor Selatan, Tanah Sareal, serta lokasi-lokasi di Kabupaten Bogor seperti Sentul dan Cibinong.',
            ],
            [
                'slug' => 'jasa-spg-bandung',
                'city' => 'Bandung',
                'meta_title' => 'Jasa SPG Bandung | Agency SPG di Bandung | Hanz Management',
                'meta_desc' => 'Jasa SPG Bandung untuk mall, factory outlet, dan event. Agency SPG Hanz Management siap mendukung promosi brand Anda di Bandung.',
                'intro' => 'Bandung terkenal sebagai destinasi belanja dengan ribuan toko dan factory outlet yang selalu ramai pengunjung. Kegiatan promosi di Bandung membutuhkan SPG yang komunikatif dan dekat dengan target pasar yang kebanyakan anak muda dan wisatawan.',
                'area' => 'Kami melayani area Bandung Raya: Kota Bandung, Cimahi, dan Kabupaten Bandung — termasuk pusat perbelanjaan utama dan kawasan wisata belanja.',
            ],
            [
                'slug' => 'jasa-spg-depok',
                'city' => 'Depok',
                'meta_title' => 'Jasa SPG Depok | Agency SPG di Depok | Hanz Management',
                'meta_desc' => 'Jasa SPG Depok untuk mall, kampus, dan event. Agency SPG Hanz Management siap mendukung promosi brand Anda di Depok.',
                'intro' => 'Depok adalah kota yang berkembang pesat dengan banyak pusat perbelanjaan dan kawasan permukiman padat. Brand yang berpromosi di Depok membutuhkan SPG yang mampu menjangkau pasar keluarga dan pelajar/mahasiswa.',
                'area' => 'Kami melayani area Depok: Beji, Cimanggis, Sukmajaya, Pancoran Mas, dan sekitarnya — termasuk pusat perbelanjaan dan area kampus.',
            ],
            [
                'slug' => 'jasa-spg-bekasi',
                'city' => 'Bekasi',
                'meta_title' => 'Jasa SPG Bekasi | Agency SPG di Bekasi | Hanz Management',
                'meta_desc' => 'Jasa SPG Bekasi untuk mall, kawasan industri, dan event. Agency SPG Hanz Management siap mendukung promosi brand Anda di Bekasi.',
                'intro' => 'Bekasi memiliki kawasan industri terbesar di Indonesia sekaligus pusat perbelanjaan yang terus berkembang. Kegiatan promosi di Bekasi meliputi area residential, pusat perbelanjaan, dan perusahaan — membutuhkan SPG yang fleksibel dan profesional.',
                'area' => 'Kami melayani area Bekasi Raya: Bekasi Timur, Bekasi Barat, Cikarang, Tambun, dan sekitarnya.',
            ],
            [
                'slug' => 'jasa-spg-tangerang',
                'city' => 'Tangerang',
                'meta_title' => 'Jasa SPG Tangerang | Agency SPG di Tangerang | Hanz Management',
                'meta_desc' => 'Jasa SPG Tangerang untuk mall, BSD, dan event. Agency SPG Hanz Management siap mendukung promosi brand Anda di Tangerang.',
                'intro' => 'Tangerang, termasuk BSD dan Tangerang Selatan, adalah salah satu kawasan hunian dan pusat bisnis yang berkembang paling cepat. Promosi di Tangerang menjangkau keluarga modern dan pekerja profesional professional.',
                'area' => 'Kami melayani area Tangerang Raya: Kota Tangerang, Tangerang Selatan, BSD, Ciputat, dan sekitarnya.',
            ],
            [
                'slug' => 'jasa-spg-surabaya',
                'city' => 'Surabaya',
                'meta_title' => 'Jasa SPG Surabaya | Agency SPG di Surabaya | Hanz Management',
                'meta_desc' => 'Jasa SPG Surabaya untuk mall dan event di Jawa Timur. Agency SPG Hanz Management siap mendukung promosi brand Anda di Surabaya.',
                'intro' => 'Surabaya adalah ibu kota Jawa Timur dan pusat ekonomi terbesar kedua di Indonesia. Promosi di Surabaya menjangkau pasar yang luas dan beragam, dari pusat perbelanjaan modern hingga kawasan bisnis.',
                'area' => 'Kami melayani area Surabaya Raya: seluruh kota Surabaya, Sidoarjo, Gresik, dan kawasan sekitarnya di Jawa Timur.',
            ],
        ];
    }

    public function cities(): array
    {
        return array_column($this->locations(), 'city');
    }

    public function service(string $slug): ?array
    {
        foreach ($this->services() as $s) {
            if ($s['slug'] === $slug) {
                return $s;
            }
        }
        return null;
    }

    public function location(string $slug): ?array
    {
        foreach ($this->locations() as $l) {
            if ($l['slug'] === $slug) {
                return $l;
            }
        }
        return null;
    }
}
