@extends('admin.layout')

@section('content')



<div class="container bg-white pt-5 pb-5 border border-info">
    <div class="row">
        <div class="col-6">
           @include('tag.form',['tag' => $tag,'url' => '/tag', 'method'=> 'POST'])
         </div>
        
    </div>
</div>
    
            
       

   
   



            
       


@endsection