<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\MyWork;
use App\Models\about;



class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('body',['posts' => $posts]);
       
    }
    public function MyWorks()
    {
        $works = MyWork::all();
        return view('myworks' ,['works'=>$works]);
    }
    public function about()
    {
        $info = about::all();
        return view('about',['info' => $info]);
    }
}
