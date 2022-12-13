<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    // Add index method
    public function index(): Factory|View|Application
    {
        return view('admin.blog.blog');
    }

    // Add update method
    public function update($id): Factory|View|Application
    {
        return view('admin.blog.blog-post', ['id' => $id]);
    }
}
