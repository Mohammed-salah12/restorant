@extends('cms.parent')

@section('title' , 'Author')

@section('main_title' , 'Index Author')

@section('sub_title' , 'index_Author')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h3 class="card-title">Index Data Of Author</h3> --}}
                        <a href="{{ route('authors.create') }}" type="button" class="btn btn-info">Add New Author</a>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Articles</th>
                                    <th>Address</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($authors as $author)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $author->id }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/author/' . $author->user->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>{{ ($author->user->first_name . ' ' . $author->user->last_name ) ?? "" }}</td>
                                    <td>{{ $author->email  }}</td>
                                    <td><a href="{{route('indexArticle',['id'=>$author->id])}}"
                                        class="btn btn-info">({{$author->articles_count}})
                                        article/s</a> </td>
                                    <td>{{ $author->user->address ?? ""}}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('authors.edit' , $author->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                          <button type="button" class="btn btn-info" onclick="performDestroy({{ $author->id }} , this)">
                                            <i class="fas fa-trash"></i>
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
                {{ $authors->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/authors/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
