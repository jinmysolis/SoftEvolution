
@extends('admin.layout')

@section('header')
   <h1>
        Todas las publiciones
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Post</li>
      </ol>
@stop

@section('content')

<h1>Dashboard</h1>

<h1>Lista todos los post</h1>

  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listados de Posts</h3>
              <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Crear publicacion</button>
         
           

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="posts-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Extracto</th>
                  <th>Acciones</th>
                  
                </tr>
                </thead>
                
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->excerpt}}</td>
                        
                        <td>
                            <a href="{{ route('posts.show',$post->id)}}" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> </a>
                            <a href="{{ route('admin.posts.edit',$post->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> </a>
                            
                            <form method="POST" action="{{ route('admin.posts.destroy',$post)}}"  style="display: inline">
                            {{csrf_field()}} {{method_field('DELETE')}}

                            <button  class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </form>
                            
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
                
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>


 
@stop