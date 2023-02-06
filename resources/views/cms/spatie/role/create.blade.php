@extends('cms.parent')

@section('title', 'Role')

@section('main_title', 'Create Role')

@section('sub_title', 'create_Role')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Of Role</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">

                    <div class="form-group col-md-6">
                        <label for="guard_name">Guard Name</label>
                        <select name="guard_name" id="guard_name" class="form-select form-select-sm" style="width: 100%;">
                            <option value="admin">Admin</option>
                            <option value="author">Author</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Role Name">
                        </div>
                    </div>







                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                    <a href="{{ route('roles.index') }}" type="button" class="btn btn-info">Return Back</a>
                </div>
            </form>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            formData.append('guard_name', document.getElementById('guard_name').value);

            store('/cms/admin/roles', formData)
        }
    </script>
@endsection
