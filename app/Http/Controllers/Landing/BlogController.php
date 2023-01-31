<?php

namespace App\Http\Controllers\Landing;

use App\Models\blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blog(){
<<<<<<< HEAD
        $data=blog::latest()->get();
        $dataa=blog::paginate(3);
        return view('landingpage.landingBlog.blog', compact('data','dataa'));
=======
        $data=blog::latest()->paginate(2);
        // dd($data);
        return view('landingpage.landingBlog.blog', compact('data'));
>>>>>>> cc969161a1f62cd94a9f1d091ca4fd85c9b78f75
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
