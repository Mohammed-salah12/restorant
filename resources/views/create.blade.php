<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Library Fontawesme -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" />
</head>
<body>

    <section class="container-fluid">
        <div class="card card-primary">
            <div>
                @if(session::has('success'))
                    <div class="alert alert-success">
                        {{session::get('success')}}
                    </div>
                @endif
            </div>

            <div class="card-header">
                <h3 class="card-title">Create Data Of Viewer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">



                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="first_name">Viewer First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                placeholder="Enter Viewer First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Viewer Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                placeholder="Enter Viewer Last Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter Password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                placeholder="Enter Admin Mobile">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter Admin Addess">
                        </div>
                    </div>



                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="DOB">Date Of Birth</label>
                            <input type="date" class="form-control" id="DOB" name="DOB" placeholder="">
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
                        <button type="button" onclick="performStore()" class="btn btn-primary">Register</button>
                        {{-- <a href="{{ route('viewers.index') }}" type="button" class="btn btn-info">Return Back</a> --}}
                    </div>
            </form>
            <!-- form end -->
        </div>
    </section>

    <script src="{{ asset('cms/js/crud.js') }}"></script>

    <script>
        function performStore(){
        let formData = new FormData();
        formData.append('first_name',document.getElementById('first_name').value);
        formData.append('last_name',document.getElementById('last_name').value);
        formData.append('email',document.getElementById('email').value);
        formData.append('password',document.getElementById('password').value);
        formData.append('mobile',document.getElementById('mobile').value);
        formData.append('address',document.getElementById('address').value);
        formData.append('DOB',document.getElementById('DOB').value);
        formData.append('image',document.getElementById('image').files[0]);
        store('/cms/admin/viewers' , formData)
      }

    </script>

</body>
</html>






