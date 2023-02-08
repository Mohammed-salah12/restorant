@extends('cms.parent')

@section('title' , 'Article Category')
@section('main_title' , 'Index Article Category')
@section('sub_title' , 'index article category')

@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              {{-- <h3 class="card-title"> Index Data of article_category</h3> --}}
              {{-- <a href="{{ route('article_categories.create') }}" type="button" class="btn btn-info">Add New article_category</a> --}}
              <form action="" method="get" style="margin-bottom:2%;">
                <div class="row">
                    <div class="input-icon col-md-2">
                        <input type="text" class="form-control" placeholder="Search By Name"
                           name='name' @if( request()->name) value={{request()->name}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div>
                <div class="col-md-4">
                      <button class="btn btn-success btn-md" type="submit"> filter</button>
                      <a href="{{route('article_categories.index')}}"  class="btn btn-danger"> end filter</a>
                      {{-- @can('Create-City') --}}

                      <a href="{{route('article_categories.create')}}"><button type="button" class="btn btn-md btn-primary"> Add new Category </button></a>
                      {{-- @endcan --}}
                </div>

                     </div>
            </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name of Article's Category</th>
                    <th>Number of Articles</th>
                    <th>Seeting</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($article_categories as $article_category )
                  {{-- <td><span class="tag tag-success">Approved</span></td> --}}




                  <tr>
                      <td>{{$article_category->id}}</td>
                      <td>{{ $article_category->name }}</td>
                      <td><span class="badge bg-info">({{$article_category->articles_count}}) Articles</td>
                      <td>
                          <div class="btn group">
                            <a href="{{route('article_categories.edit' , $article_category->id)}}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                              {{-- <i class="far fa-edit"></i> --}}
                            </a>
                            <a href="#" type="button" onclick="performDestroy({{ $article_category->id }} , this)" class="btn btn-danger">
                              <i class="fas fa-trash-alt"></i>
                            </a>

                          </div>
                        </td>

                      <td></td>
                    </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          {{ $article_categories->links()}}
        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/article_categories/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


