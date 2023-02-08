@extends('cms.parent')

@section('title', 'Information')

@section('main_title', 'Create Information')

@section('sub_title', 'create_Information')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Of Information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter Title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="map">Map</label>
                            <input type="url" class="form-control" id="map" name="map"
                                placeholder="Enter map ">
                        </div>
                    </div>







                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                placeholder="Enter Information Mobile">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter Information Addess">
                        </div>
                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                        <a href="{{ route('informations.index') }}" type="button" class="btn btn-info">Return Back</a>
                    </div>
            </form>
            <!-- form end -->
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('map', document.getElementById('map').value);
            formData.append('email',document.getElementById('email').value);
            formData.append('mobile',document.getElementById('mobile').value);
            formData.append('address',document.getElementById('address').value);

            store('/cms/admin/informations', formData)
        }
    </script>
@endsection
