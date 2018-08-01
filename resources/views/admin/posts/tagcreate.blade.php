
<div class="modal fade" id="exampleModal222" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <form method="POST" action="{{ route('admin.posts.tagstore')}}">
        {{csrf_field()}}
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Agragar tag</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                               <label>Titulo tag</label>
                               <input class="form-control" name="name" placeholder="titulo del tag....." value="{{old('name')}}" required>
                                @if ($errors->any())
                                           @foreach ($errors->get('name') as $error)
                                           <div class="alert alert-danger" role="alert">
                                                   {{$error}}
                                            </div>
                                           @endforeach
                                 @endif
                           </div> 
                   </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button  class="btn btn-primary">Craer tag</button>
            </div>
          </div>
        </div>
    </form>
</div>