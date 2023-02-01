<?php

namespace App\Http\Controllers\Landing;


use App\Models\blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blog(){
        $data=blog::latest()->paginate(3);
        return view('landingpage.landingBlog.blog', compact('data'));
    }

    public function detailblog($id){
        $detailblog=blog::find($id);
        $min = blog::all()->first();
        $max = blog::all()->last();
        $previous = blog::where('id', '<', $detailblog->id)->max('id');
        $next = blog::where('id', '>', $detailblog->id)->min('id');
        $blogside=blog::latest()->limit(5)->get();
        return view('landingpage.landingBlog.detailblog', compact('detailblog','blogside', 'previous','next','min','max'));
    }
}
