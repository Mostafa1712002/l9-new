<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return str("hello world")->upper();
        // return str()->slug("hello world");
        // return str("hello world")->slug();


        // return to_route("home");
        // return redirect()->route("home");
        // return redirect("/");
    }
}
