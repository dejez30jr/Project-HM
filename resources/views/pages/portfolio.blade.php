<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
       body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #fff;
      color: #333;
    }

    h1 {
      text-align: center;
      font-size: 2em;
      margin: 30px 0px 0px;
      color: #0d1c5b;
    }

    .filters {
      margin-top: 12px;
      text-align: center;
      margin-bottom: 10px;
    }

    .filters button {
      background: none;
      border: none;
      font-size: 1rem;
      margin: 0 10px;
      cursor: pointer;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    .filters button:hover,
    .filters button.active {
      background: #0d1c5b;
      color: #fff;
    }

    .portfolio {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      padding: 20px;
      max-width: 1200px;
      margin: auto;
    }

    .portfolio-item {
      background: #f4f4f4;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .portfolio-item img {
      width: 100%;
      display: block;
      filter: grayscale(10%) contrast(1.1);
      transition: filter 0.3s ease, transform 0.3s ease;
    }

    .portfolio-item:hover img {
      filter: none;
      transform: scale(1.03);
    }

    @media (max-width: 600px) {
      .filters button {
        margin: 5px;
        display: inline-block;
      }
    }
</style>
<body>

   @extends('layouts.app')

   @section('content')
  <div class="filters">
     <a href="{{ route('portfolio', 'all') }}" 
       class="inline-block px-6 py-2 {{ $activeCategory === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
        All
    </a>
    <a href="{{ route('portfolio', 'entertaiment') }}" 
       class="inline-block px-6 py-2 {{ $activeCategory === 'entertaiment' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
        Entertainment
    </a>
    <a href="{{ route('portfolio', 'promotion') }}" 
       class="inline-block px-6 py-2 {{ $activeCategory === 'promotion' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
        Promotion
    </a>
    <a href="{{ route('portfolio', 'event') }}" 
       class="inline-block px-6 py-2 {{ $activeCategory === 'event' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
        Event
    </a>
    <a href="{{ route('portfolio', 'production') }}" 
       class="inline-block px-6 py-2 {{ $activeCategory === 'production' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
        Production
    </a>
  </div>

  <div class="portfolio">
    @foreach($images as $image)
    <div class="portfolio-item">
        <img src="{{ asset($image['path']) }}" alt="{{ $image['category'] }}" class="w-full h-64 object-cover">
    </div>
    @endforeach
  </div>

  @endsection
</body>
</html>