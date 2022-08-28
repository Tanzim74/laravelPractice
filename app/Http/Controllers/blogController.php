<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
    public function viewBlog()
    {
        $blogs = Blog::all();

        return view('blog', compact('blogs'));
    }

    public function blogForm()
    {
        return view('blogForm');
    }

    public function createBlog(Request $request)
    {
        $title = $request->title;

        $description = $request->editor1;

        $short_description = $request->short_description;

        $blogImage = $request->file('file');

        $name_gen = hexdec(uniqid());

        $img_ext = strtolower($blogImage->getClientOriginalExtension());

        $image_name = $name_gen . '.' . $img_ext;
        $up_location = 'blogImage/';
        $blogImageLocation = $up_location . $image_name;
        $blogImage->move($up_location, $image_name);

        Blog::insert([
            'Title' => $title,
            'Description' => $description,
            'image' => $blogImageLocation,
            'short_description' => $short_description,
        ]);

        return redirect()->back();
    }
    public function updateBlog()
    {
    }

    public function deleteBlog()
    {
    }
    public function readBlog($id)
    {
        $blogs = Blog::where('id', $id)->get();

        $allBlogs = Blog::where('id', '!=', $id)->paginate(5);

        return view('readBlog', compact('blogs', 'allBlogs'));
    }

    public function getFunctionalities(){
        
        return view('functionalities');
    }
}
