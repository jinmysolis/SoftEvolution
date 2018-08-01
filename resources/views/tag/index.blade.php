@extends('layouts.myapp4')

@section('content')



<div id="welcome-parte-1">
     <div class="container-fluid">
       <div class="row">
             <div class="col">
        @foreach($titulo as $titulo)
        <button type="button" class="btn btn-primary btn-lg btn-block mt-5 mb-5 bg-success animated  zoomInRight"><div class="display-4">{{$titulo->titulo}}</div></button>
        @endforeach

    </div></div></div>
    
    <div class="container">
        <div class="row">
          
            
          
            
            
            
 <div class="card border-info mb-3 w-100 mx-auto" >
     
    @foreach($Preguntauno as $Preguntauno)
  <div class="card-header display-2 text-center">{{$Preguntauno->PreguntaUno}}</div>
  
<!--<a href="{{url('/preguntaUno/'.$Preguntauno->id.'/edit')}}">Editar</a>-->
   @endforeach
  <div class="card-body">
    
   @foreach($Respuestauno as $Respuestauno)
    <a href="{{ url('/preguntaDos') }}" class="btn btn-success btn-lg btn-block   animated bounceInUp">{{$Respuestauno->RespuestasUno}}</a>
<!--    <a href="{{url('/respuestasUno/'.$Respuestauno->id.'/edit')}}">Editar</a>-->
    @endforeach
    
   
   
  </div>
</div>
            
       

   
   


 
            
       


@endsection