<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Importa le categorie per le funzioni
use App\Article;
use App\Category;
use App\Tag;


class BlogController extends Controller
{
    public function articles()
    {
        return response()->json([
            'success' => 'true',
            'data'=> Article::all()
        ],200);
    }

    public function categories()
    {
        return response()->json([
            'success' => 'true',
            'data'=> Category::all()
        ],200);
    }

    public function tags()
    {
        return response()->json([
            'success' => 'true',
            'data'=> Tag::all()
        ],200);
    }
}
