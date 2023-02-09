@extends('cms.parent')

@section('title' , 'Comment')
@section('main_title' , 'Index Comment')
@section('sub_title' , 'index comment')

@section('styles')

@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('comments.create') }}" type="button" class="btn btn-info">Add New Comment</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Text</th>
                <th>Email</th>
                <th>Article Title</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment )
                <tr>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('storage/images/comment/'.$comment->image)}}" width="60" height="60" alt="User Image">
                     </td>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->text }}</td>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->article->title }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('comments.edit' , $comment->id ) }}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" onclick="performDestroy({{ $comment->id }} , this)" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                              </button>
                          </div>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      {{ $comments->links() }}
    </div>
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/comments/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


