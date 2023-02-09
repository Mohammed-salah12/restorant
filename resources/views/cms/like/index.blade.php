@extends('cms.parent')

@section('title' , 'Like')
@section('main_title' , 'Index Like')
@section('sub_title' , 'index like')

@section('styles')

@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('likes.create') }}" type="button" class="btn btn-info">Add New like</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Like</th>
                <th>Article Name</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($likes as $like )
                <tr>
                    <td>{{ $like->user->first_name .' '. $like->user->last_name }}</td>
                    <td>{{ $like->like }}</td>
                    <td>{{ $like->article->title }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('likes.edit' , $like->id ) }}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" onclick="performDestroy({{ $like->id }} , this)" class="btn btn-danger">
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
      {{ $likes->links() }}
    </div>
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/likes/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


