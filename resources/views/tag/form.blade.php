 {!! Form::open(['url' => $url, 'method' => $method]) !!}
 <div class="form-group">
        {{ Form::text('name',$tag->tag,['class' => 'form-control', 'placeholder'=> 'crear nuevo tag...'])}}
                        
</div>
              
                       <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
            {!! Form::close() !!}
