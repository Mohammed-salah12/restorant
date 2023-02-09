@extends('cms.parent')

@section('title' , ' Article')

@section('main-title' , 'Article Bin')

@section('sub-title' , 'article bin')

@section('styles')

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('article-bin') }}" type="button" class="btn btn-secondary">Back to Index</a>

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
                                <button type="button" onclick="performDestroy({{ $article->id }} , this)" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                  </button>
                                <button type="button" onclick="performRestore({{ $article->id }} , this)" class="btn btn-info">
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
            {{ $articles->links()}}
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/article-delete/'+id;

    }
    function performRestore(id , referance){
      let url = '/cms/admin/article-restore/'+id;
    }
</script>
@endsection





