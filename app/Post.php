<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Photo;
class Post extends Model
{
    protected  $guarded = [];
    protected $dates = ['published_at'];
    
    
    public function category(){
        
        return $this->belongsTo(Category::class);
    }
    
    public function tags(){
        
        return $this->belongsToMany(Tag::class);
    }
    
     public function photos(){
        
        return $this->hasMany(Photo::class);
    }
    
    public function scopePublished($query){
        $query->whereNotNull('published_at')
                ->where('published_at', '<=', Carbon::now())
                ->latest('published_at');
                
    }
    
    
}
