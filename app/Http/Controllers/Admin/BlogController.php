<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('landingpage.landingBlog.blog');
    }

    public function detailblog(){
        return view('landingpage.landingBlog.detailblog');
    }
}
