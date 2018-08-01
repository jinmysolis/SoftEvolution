
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="{{ route('admin.posts.store')}}">
        {{csrf_field()}}
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agragar titulo de la publicacion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                               <label>Titulo pubicacion</label>
                               <input class="form-control" name="title" placeholder="titulo ....." value="{{old('title')}}" required>
                                @if ($errors->any())
                                           @foreach ($errors->get('title') as $error)
                                           <div class="alert alert-danger" role="alert">
                                                   {{$error}}
                                            </div>
                                           @endforeach
                                 @endif
                           </div> 
                   </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button  class="btn btn-primary">Craer publicacion</button>
            </div>
          </div>
        </div>
    </form>
</div>