<?php

namespace App\Http\Controllers;

use App\Services\BlogData;

class BlogController extends Controller
{
    protected $blog;

    public function __construct(BlogData $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        return view('pages.blog', [
            'posts' => $this->blog->posts(),
        ]);
    }

    public function show($slug)
    {
        $post = $this->blog->post($slug);

        if (!$post) {
            abort(404);
        }

        return view('pages.blog-detail', [
            'post' => $post,
            'related' => collect($this->blog->posts())
                ->where('slug', '!=', $slug)
                ->take(3)
                ->values(),
        ]);
    }
}
