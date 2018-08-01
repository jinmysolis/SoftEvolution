 {!! Form::open(['url' => $url, 'method' => $method]) !!}
 <div class="form-group">
        {{ Form::text('PreguntaUno',$Preguntauno->PreguntaUno,['class' => 'form-control', 'placeholder'=> 'pregunta...'])}}
                        
</div>
              
                       <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
            {!! Form::close() !!}
