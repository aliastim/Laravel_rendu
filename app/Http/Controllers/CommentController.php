<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
        $comments = Comment::all();
        //dd($comments);

        return view('comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Test the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
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
            'username' => 'required',
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->user_id = $request->user()->id;
        $comment->numarticle = $request->get('numarticle');
        $comment->username = $request->get('username');
        $comment->comment = $request->get('comment');
        $comment->save();

        return redirect()->route('comment.index');
        //dd($request);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $comment = Comment::where('id', $id)->first();

        if(!$comment)
        {
            return redirect()->route('comment.index');
        }
        return view('comment.editcom', compact('comment'));
        //return view('comment.editcom');
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
       //return redirect()->route('comment.index');

        $this->validate($request, [
            'username' => 'required',
            'comment' => 'required'
        ]);

        $comment = Comment::find($id);
        //$comment = Comment::where('id', $id);
        $comment->username = $request->get('username');
        $comment->comment = $request->get('comment');
        $comment->save();

        //dd($comment);

        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $comment = Comment::find($id);
        $comment->delete();

        // redirect
        return redirect()->route('comment.index');
    }
}
