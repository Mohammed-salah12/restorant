@extends('cms.parent')

@section('title' , 'Admin')

@section('main_title' , 'Index Admin')

@section('sub_title' , 'index_Admin')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h3 class="card-title">Index Data Of Admin</h3> --}}
                        <a href="{{ route('admins.create') }}" type="button" class="btn btn-info">Add New Admin</a>
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
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/admin/'.$admin->user->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>{{ ($admin->user->first_name . ' ' . $admin->user->last_name ) ?? "" }}</td>
                                    <td>{{ $admin->email  }}</td>
                                    <td>{{ $admin->user->mobile ?? "" }}</td>
                                    <td>{{ $admin->user->address ?? ""}}</td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('admins.edit' , $admin->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                          <button type="button" class="btn btn-info" onclick="performDestroy({{ $admin->id }} , this)">
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
                {{ $admins->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/admins/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
