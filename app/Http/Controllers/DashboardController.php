<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Nette\Utils\Image;
use App\Models\Contact;
use App\Models\Cdpap;
use App\Models\Homecare;

use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function index(Request $req)
    {
        $submissions = [];
        $queries = [];
        $blogs = [];
        $blog = [];
        $cdpaps = [];
        $homecares = [];

        if ($req->get('route') == 'submissions') {
            $submissions = Contact::whereNull('phone')->get();
        }
        if ($req->get('route') == 'queries') {
            $queries = Contact::whereNotNull('phone')->get();
        }
        if ($req->get('route') == 'blogs') {
            $blogs = Blog::all();
        }
        if ($req->get('route') == 'edit_blog' && $req->get('blog_id')) {
            $blog = Blog::find($req->get('blog_id'));
        }


        if ($req->get('route') == 'cdpaps') {
            $cdpaps = Cdpap::all();
        }

        if ($req->get('route') == 'homecares') {
            $homecares = Homecare::all();
          
        }



        return view('dashboard.index', compact('submissions', 'blogs', 'blog', 'queries', 'cdpaps','homecares'));
    }

    public function store_blog(Request $req)
    {
        $image_path = $req->file('img')->store('image', 'public');
        $formFields = [
            'title' => $req->title,
            'content' => $req->content,
            'short_description' => $req->short_description,
            'img' => $image_path
        ];
        Blog::create($formFields);
        return redirect('/dashboard?route=blogs');
    }
    public function delete_blog(Request $req, Blog $blog)
    {
        $blog->delete();
        return redirect('/dashboard?route=blogs');
    }
    public function update_blog(Request $req, Blog $blog)
    {
        if ($req->file('img')) {
            $image_path = $req->file('img')->store('image', 'public');
            $blog->img = $image_path;
        }

        $blog->title = $req->title;
        $blog->content = $req->content;
        $blog->short_description = $req->short_description;
        $blog->update();
        return redirect('/dashboard?route=blogs');
    }
}
