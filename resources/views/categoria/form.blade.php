 {!! Form::open(['url' => $url, 'method' => $method]) !!}
 <div class="form-group">
        {{ Form::text('name',$categoria->categoria,['class' => 'form-control', 'placeholder'=> 'crear nueva categoria...'])}}
                        
</div>
              
                       <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
            {!! Form::close() !!}
