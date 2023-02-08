@extends('cms.parent')

@section('title' , ' About')
@section('main_title' , 'Index  about')
@section('sub_title' , 'index  about')

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
              {{-- <h3 class="card-title"> Index Data of about</h3> --}}
              {{-- <a href="{{ route('abouts.create') }}" type="button" class="btn btn-info">Add New about</a> --}}
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
                      <a href="{{route('abouts.index')}}"  class="btn btn-danger"> end filter</a>
                      {{-- @can('Create-City') --}}

                      <a href="{{route('abouts.create')}}"><button type="button" class="btn btn-md btn-primary"> Add new about </button></a>
                      {{-- @endcan --}}
                </div>

                     </div>
            </form>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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
                    <th>Title</th>
                    <th>Content</th>
                    <th>Setting</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($abouts as $about )
                  {{-- <td><span class="tag tag-success">Approved</span></td> --}}




                  <tr>
                      <td>{{$about->id}}</td>
                      <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('storage/images/about/'.$about->image)}}" width="60" height="60" alt="User Image">
                     </td>
                      <td>{{ $about->title }}</td>
                      <td>{{ $about->content }}</td>



                      <td>
                        <div class="btn group">
                            @can('update-about')
                              <a href="{{ route('abouts.edit' , $about->id ) }}" type="button" class="btn btn-info">
                                <i class="fas fa-edit"> </i>
                             </a>
                             @endcan
                             @can('delete-about')
                              <button type="button" class="btn btn-info" onclick="performDestroy({{ $about->id }} , this)">
                                <i class="fas fa-trash"></i>
                              </button>
                              @endcan

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
          {{ $abouts->links()}}
        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/abouts/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


