@extends('cms.parent')

@section('title', 'Author')

@section('main_title', 'Update Author')

@section('sub_title', 'Update_Author')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data Of Author</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="first_name">Author First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                value="{{ $authors->user->first_name }}" placeholder="Enter Author First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Author Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ $authors->user->last_name }}" placeholder="Enter Author Last Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" value="{{ $authors->email }}" class="form-control" id="email"
                                name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" disabled class="form-control" id="password" name="password"
                                placeholder="Enter Password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                value="{{ $authors->user->mobile }}" placeholder="Enter Author Mobile">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ $authors->user->address }}" placeholder="Enter Author Addess">
                        </div>
                    </div>

                  

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="DOB">Date Of Birth</label>
                            <input type="date" value="{{ $authors->user->DOB }}" class="form-control" id="DOB"
                                name="DOB" placeholder="">
                        </div>


                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="">
                        </div>
                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="button" onclick="performUpdate({{ $authors->id }})"
                            class="btn btn-primary">Update</button>
                        <a href="{{ route('authors.index') }}" type="button" class="btn btn-info">Return Back</a>
                    </div>
            </form>
            <!-- form end -->
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        function performUpdate(id) {
            let formData = new FormData();
            formData.append('first_name', document.getElementById('first_name').value);
            formData.append('last_name', document.getElementById('last_name').value);
            formData.append('email', document.getElementById('email').value);
            // formData.append('password',document.getElementById('password').value);
            formData.append('mobile', document.getElementById('mobile').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('DOB', document.getElementById('DOB').value);

            formData.append('image', document.getElementById('image').files[0]);
            storeRoute('/cms/admin/update-authors/' + id, formData)
        }
    </script>
@endsection
