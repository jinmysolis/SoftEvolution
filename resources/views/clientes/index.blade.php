@extends('admin.layout')

@section('header')
   <h1>
        Todas los usuarios
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Post</li>
      </ol>
@stop

@section('content')

<h1>Dashboard</h1>

<h1>Lista todos los usuarios</h1>

  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listados de usuarios</h3>
            
           

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="posts-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>nombre</th>
                  <th>email</th>
                  <th>creado</th>
                  <th>actualizado</th>
                  
                </tr>
                </thead>
                
                <tbody>
                    @foreach ($usuarios as $usuarios)
                    <tr>
                        <td>{{$usuarios->id}}</td>
                        <td>{{$usuarios->name}}</td>
                        <td>{{$usuarios->email}}</td>
                        <td>{{$usuarios->created_at}}</td>
                        <td>{{$usuarios->updated_at}}</td>
                        
                       
                    </tr>
                    
                    @endforeach
                </tbody>
                
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>


 
@stop