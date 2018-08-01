@extends('admin.layout')

@section('header')
   <h1>
        Crear publicacion 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Post</li>
      </ol>
@stop

@section('content')

<h1>Dashboard</h1>

<div class="box box-primary">
    <div class="box-header">
              <h3 class="box-title">crear Posts</h3>
    </div>
    <form method="POST" action="{{ route('admin.posts.update',$post)}}">
        {{csrf_field()}} {{ method_field('PUT')}}
        <div class="col-md-8">  
                <div class="box-body">
                    <div class="form-group">
                        <label>Titulo pubicacion</label>
                        <input class="form-control" name="title" placeholder="titulo ....." value="{{old('title',$post->title)}}">
                         @if ($errors->any())
                                    @foreach ($errors->get('title') as $error)
                                    <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                     </div>
                                    @endforeach
                          @endif
                    </div> 

                    

                    <div class="form-group">
                        <label>Cuerpo pubicacion</label>
                        <textarea rows="10" class="form-control" id="editor1" name="body" placeholder="cuerpo ....." >{{old('body',$post->body)}}</textarea>
                        @if ($errors->any())
                                    @foreach ($errors->get('body') as $error)
                                    <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                     </div>
                                    @endforeach
                          @endif
                    </div>

                </div>
        </div> 
        
        <div class="col-md-4">  
             <div class="form-group">
                    <label>Fecha de publicacion:</label>

                   <div class="form-group">
                    <label>Date:</label>

                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker" value="{{old('published_at',$post->published_at ? $post->published_at->format('M d '): null)}}" name="published_at">
                    </div>
                    <!-- /.input group -->
                  </div>
                <!-- /.input group -->
              </div>
            
            <div class="form-group">
                <label>Categoria</label>
                <select name="category" class="form-control">
                    <option value="">Selecciona</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"
                           {{old('category',$post->category_id) == $category->id ? 'selected' : '' }}
                        
                        >{{$category->name}}</option>
                    @endforeach
                    
                </select>
                @if ($errors->any())
                                    @foreach ($errors->get('category') as $error)
                                    <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                     </div>
                                    @endforeach
                @endif
            </div>
            
            <div class="form-group">
                 <label>Etiquetas</label>
                <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Seleciona una o mas tag"
                            style="width: 100%;">
                       @foreach($tags as $tag)
                    <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id)? 'selected' : ''}} value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                  @if ($errors->any())
                                    @foreach ($errors->get('tags') as $error)
                                    <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                     </div>
                                    @endforeach
                          @endif
            </div>
            
                <div class="box-body">
                   

                     <div class="form-group">
                        <label>Resumen pubicacion</label>
                        <textarea class="form-control" name="excerpt" placeholder="resumen .....">{{old('excerpt',$post->excerpt)}}</textarea>
                         @if ($errors->any())
                                    @foreach ($errors->get('excerpt') as $error)
                                    <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                     </div>
                                    @endforeach
                          @endif
                    </div>
                    
                    

                    
 
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </div>
            
        </div> 
    </form>
    
</div>

@push('styles')
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css') }}">
@endpush
  
  
@push('scripts')  
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js') }}"></script>
   <script src="{{ asset('adminlte/bower_components/ckeditor/ckeditor.js') }}"></script>
   <script src="{{ asset('adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<script>
  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
    
     CKEDITOR.replace('editor1');
     
       $('.select2').select2();
       
    var myDropzone =   new Dropzone('.dropzone',{
          
           url: '{{ $post->id }}/photos',
           acceptedFiles:'image/*',
           paramName: 'photo',
           
           headers:  {
               'X-CSRF-TOKEN':'{{csrf_token()}}'
           },
           
           dictDefaultMessage: 'Arrastra las fotos aqui para subir'
       });
       
     myDropzone.on('error', function(file, res){
       var msg =  res.photo[0];
       $('.dz-error-message > span').text(msg);
     });
     Dropzone.autoDiscover = false;
       
</script>
 @endpush
@stop