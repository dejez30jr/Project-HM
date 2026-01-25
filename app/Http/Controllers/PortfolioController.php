<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index($category)
    {
        $images = $this->getImages();
        
        if ($category) {
            $images = $images->where('category', $category);
        }

        return view('pages.portfolio', [
            'images' => $images,
            'activeCategory' => $category
        ]);
    }

    private function getImages()
    {
        // This simulates a database collection
        return collect([
            ['path' => 'images/hiburan1.jpeg', 'category' => 'entertaiment'],
            ['path' => 'images/hiburan2.jpeg', 'category' => 'entertaiment'],
            ['path' => 'images/hiburan3.jpeg', 'category' => 'entertaiment'],
            ['path' => 'images/promosi1.jpeg', 'category' => 'promotion'],
            ['path' => 'images/promosi2.jpeg', 'category' => 'promotion'],
            ['path' => 'images/promosi3.jpeg', 'category' => 'promotion'],
            ['path' => 'images/promosi4.jpeg', 'category' => 'promotion'],
            ['path' => 'images/promosi5.jpeg', 'category' => 'promotion'],
            ['path' => 'images/promosi6.jpeg', 'category' => 'promotion'],
            ['path' => 'images/promosi7.jpeg', 'category' => 'promotion'],
            ['path' => 'images/event1.jpg', 'category' => 'event'],
            ['path' => 'images/event2.jpg', 'category' => 'event'],
            ['path' => 'images/event3.jpg', 'category' => 'event'],
            ['path' => 'images/event4.jpg', 'category' => 'event'],
            ['path' => 'images/event5.jpg', 'category' => 'event'],
            ['path' => 'images/event6.jpg', 'category' => 'event'],
            ['path' => 'images/event7.jpg', 'category' => 'event'],
            ['path' => 'images/event8.jpg', 'category' => 'event'],
            ['path' => 'images/event9.jpg', 'category' => 'event'],
            ['path' => 'images/produk1.jpg', 'category' => 'production'],
        ]);
    }
}