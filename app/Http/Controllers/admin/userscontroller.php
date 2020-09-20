<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $posts = Post::count();
        if ($posts < 16) {
            $post = Post::latest()->get();
        }else {
            $post = Post::latest()->paginate(15);
        }

        // dd($post[2]->likeuser[0]->id);
        return view('admin.dashboard', ['user' => $user, 'post' => $post, 'posts' => $posts]);
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
        $request->validate([
            'post' => 'required',
            'file' => 'image'
        ]);
        // dd($request);
        $image = $request->file;
        if ($image) {
            $new_image = time().$image->getClientOriginalName();

            Post::create([
                'id_user' => $request->userid,
                'text' => $request->post,
                'image' => $new_image,
                'lokasi' => $request->lokasi
            ]);            


            $image->move('uploads/posts/', $new_image);
        }else {
            Post::create([
                'id_user' => $request->userid,
                'text' => $request->post,
                'image' => '',
                'lokasi' => $request->lokasi
            ]);
        }

        return redirect()->back()->with('success', 'Postingan telah berhasil di posting!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $idpost = $request->segment(3);
        $post = Post::where('id', $idpost)->first();
        $id = Auth::id();
        $user = User::where('id', $id)->first();

        return view('admin.post.detail', ['user' => $user, 'post' => $post]);

        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    public function like(Request $request){
        // return $request->id_post;
        Like::create([
            'id_user' => $request->id_user,
            'id_post' => $request->id_post,
            'id_comment' => '',
            'is_active' => 1

        ]);
        return 0;
    }

    public function unlike(Request $request){
        // return $request->id_post;
        Like::where('id_user', $request->id_user)->where('id_post', $request->id_post)->delete();
        return 1;
    }

    public function commentstore(Request $request) {
        // dd($request);
        $request->validate([
            'comment' => 'required'
        ]);

        Comment::create([
            'id_user' => $request->id_user,
            'id_post' => $request->id_post,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan komentar!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
