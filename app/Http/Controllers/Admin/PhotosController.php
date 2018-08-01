<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Post;
use App\Photo;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    public function store(Post $post)
    {  $this->validate(request(),[
        'photo' => 'image|required'
    ]);
    
       $photo = request()->file('photo')->store('public');
       
        
       
     Photo::create([
         'url' => Storage::url ($photo) ,
         'post_id' => $post->id,
     ]);
       
    }
}
