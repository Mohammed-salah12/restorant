@extends('cms.parent')

@section('title', 'Role')

@section('main_title', 'Index Role')

@section('sub_title', 'index_Role')


@section('styles')

@endsection




@section('content')
    <section class="content">
        <div class="container-fluid px-2">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Index Data Of Role</h3>
                            <a href="{{ route('roles.create') }}" type="button" class="btn btn-info">Add New Role</a>
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
                                    <th>ID</th>
                                    <th>Guard Name</th>
                                    <th>Role Name</th>
                                    <th>Permissions</th>
                                    <th>Seeting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}

                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->guard_name }}</td>
                                            <td>{{ $role->name }}</td>

                                            <td><a href="{{ route('roles.permissions.index', $role->id) }}"
                                                    class="btn btn-info">({{ $role->permissions_count }})
                                                    permissions/s</a> </td>


                                            <td>
                                                <div class="btn group">
                                                    <a href="{{ route('roles.edit', $role->id) }}" type="button"
                                                        class="btn btn-info">
                                                        <i class="fas fa-edit"></i>
                                                        {{-- <i class="far fa-edit"></i> --}}
                                                    </a>
                                                    <a href="#" type="button"
                                                        onclick="performDestroy({{ $role->id }} , this)"
                                                        class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>

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
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        function performDestroy(id, reference) {
            let url = "/cms/admin/roles/" + id;
            confirmDestroy(url, reference);
        }
    </script>
@endsection
