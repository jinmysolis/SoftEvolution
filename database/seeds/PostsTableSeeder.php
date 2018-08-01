<?php

use Illuminate\Database\Seeder;
use App\Post;
use Carbon\Carbon;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        
        
      $post = new Post;
       $post->title = "Mi primer post";
        $post->excerpt = "extracto de Mi primer post";
         $post->body = "cuerpo de Mi primer post";
          $post->published_at = Carbon::now();
            $post->category_id =1;
          $post->save();
      
    }
}
