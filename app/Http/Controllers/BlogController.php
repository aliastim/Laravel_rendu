<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$posts =
            [
                'Article 1' => 'je suis l\'article 1',
                'Article 2' => 'je suis l\'article 2',
                'Article 3' => 'je suis l\'article 3',
                'Article 4' => 'je suis l\'article 4',
                'Article 5' => 'je suis l\'article 5',
                'Article 6' => 'je suis l\'article 6'
            ];*/

        //$posts = DB::table('posts')->get();
        $posts = Post::all();
        //dd($posts);

        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'status' => 'required'
        ]);

        $post = new Post;
        $post->user_id = $request->user()->id;
        $post->title = $request->get('title');
        $post->slug = str_slug($request->get('title'));
        $post->body = $request->get('body');
        $post->status = $request->post('status');
        $post->save();

        return redirect()->route('blog.index');
        //dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if(!$post)
        {
            return redirect()->route('blog.index');
        }
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
