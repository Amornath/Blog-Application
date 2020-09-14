<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Reply;

class UserFromOutSideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = $request->all();
      
        $input['password']=bcrypt($request->password);
        User::create($input);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $post = Post::findOrFail($id);
        $comments = $post->comments()->where('is_active',1)->get();
        return view('post-detail',compact('post','comments','categories'));
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

    public function commentStore(Request $request){

        if(Auth::check()){
            $user = Auth::user();
        $data = [

         'post_id'=>$request->post_id,
         'author'=>$user->name,
         'email'=>$user->email,
         'body'=>$request->body

        ];

        Comment::create($data);
        $request->session()->flash('comment_message','Your comment is under processing');
        return redirect()->back();
        }
        else {
            return redirect('/');
        }

        

    }

    public function replyStore(Request $request){

        if(Auth::check()){
        $user = Auth::user();
        $data = [

         'comment_id'=>$request->comment_id,
         'author'=>$user->name,
         'email'=>$user->email,
         'body'=>$request->body

        ];

     Reply::create($data);
     $request->session()->flash('reply_message','Your reply is under processing');
        return redirect()->back();

        }
        else{
            return redirect('/');
        }

    }


}
