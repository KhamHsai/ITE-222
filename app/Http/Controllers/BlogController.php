<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
        return view('blogs.create');
    }

    public function index(){
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required | string | max:255',
            'content' => 'required | string',
        ]);

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created');
    }
}
