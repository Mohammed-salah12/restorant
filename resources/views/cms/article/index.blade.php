@extends('cms.parent')

@section('title' , 'Article')
@section('main_title' , 'Index Article')
@section('sub_title' , 'index article')

@section('styles')

@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('createArticle' , $id) }}" type="button" class="btn btn-info">Add New Article</a>
            <a href="{{ route('categories.index') }}" type="button" class="btn btn-secondary">Back to Categories</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article )
                <tr>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('storage/images/article/'.$article->image)}}" width="60" height="60" alt="User Image">
                     </td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->articleCategory->name }}</td>
                    <td>{{ $article->description }}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{ route('Articles.edit' , $article->id ) }}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" onclick="performDestroy({{ $article->id }} , this)" class="btn btn-danger">
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
      {{ $articles->links() }}
    </div>
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/articles/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


