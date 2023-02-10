@extends('cms.parent')

@section('title' , ' Article')

@section('main-title' , 'Index Article')

@section('sub-title' , 'index article')

@section('styles')

@endsection

@section('content')
{{-- <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('article-bin') }}" type="button" class="btn btn-warning"> Go to Recycle Bin</a>

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
                                <a href="{{ route('articles.edit' , $article->id ) }}" type="button" class="btn btn-info">
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
      let url = '/cms/admin/articles/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection
