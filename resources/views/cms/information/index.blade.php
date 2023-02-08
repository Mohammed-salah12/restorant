@extends('cms.parent')

@section('title' , ' information')
@section('main_title' , 'Index  information')
@section('sub_title' , 'index  information')

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
              {{-- <h3 class="card-title"> Index Data of information</h3> --}}
              {{-- <a href="{{ route('informations.create') }}" type="button" class="btn btn-info">Add New information</a> --}}
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
                      <a href="{{route('informations.index')}}"  class="btn btn-danger"> end filter</a>
                      {{-- @can('Create-City') --}}

                      <a href="{{route('informations.create')}}"><button type="button" class="btn btn-md btn-primary"> Add new information </button></a>
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
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>map</th>
                    <th>Setting</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($informations as $information )
                  {{-- <td><span class="tag tag-success">Approved</span></td> --}}




                  <tr>
                      <td>{{$information->id}}</td>

                      <td>{{ $information->email }}</td>
                      <td>{{ $information->mobile }}</td>

                      <td>{{ $information->address }}</td>
                      <td>{{ $information->map }}</td>



                      <td>
                        <div class="btn group">
                            @can('update-information')

                              <a href="{{ route('informations.edit' , $information->id ) }}" type="button" class="btn btn-info">
                                <i class="fas fa-edit"> </i>
                             </a>
                             @endcan
                             @can('delete-information')
                              <button type="button" class="btn btn-info" onclick="performDestroy({{ $information->id }} , this)">
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
          {{ $informations->links()}}
        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/informations/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


