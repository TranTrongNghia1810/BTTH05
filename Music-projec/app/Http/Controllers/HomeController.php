<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class HomeController extends Controller
{
    public function getAllArticle(){
        $articles = Article::all();
        return view('home',compact('articles'));
    }
}
