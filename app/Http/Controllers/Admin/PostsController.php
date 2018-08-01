<?php

namespace App\Http\Controllers\Admin;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $posts = Post::all();
          return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::all();
         $tags = Tag::all();
          return view('admin.posts.create', compact('categories','tags'));
          
       
    }


    
    
     public function store(Request $request)
   {
         
         $this->validate($request,['title'=>'required']);
         
         $post = Post::create(['title' => $request->get('title')]);
         
         return redirect()->route('admin.posts.edit', $post);
   }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, Request $request)
    {
          $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'excerpt' => 'required',
            'tags' => 'required',
            
        ]);
          
          
      
        
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')): null;
        $post->category_id = $request->get('category');
        
        $post->save();
        
        $post->tags()->sync($request->get('tags'));
        
        return back()->with('flash', 'tu publicacion ha sido editada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
         $tags = Tag::all();
         return view('admin.posts.edit', compact('categories','tags','post'));
          
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();


           return back()->with('flash','Foto elimidada');
          
           
        
    }
}
