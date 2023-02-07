@extends('cms.parent')

@section('title', 'Information')

@section('main_title', 'create_Information')

@section('sub_title', 'create_Information')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data Of Information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                            value="{{ $informations->email }}" placeholder="Enter Title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="map">Map</label>
                            <input type="url" class="form-control" id="map" name="map"
                            value="{{ $informations->map }}" placeholder="Enter map ">
                        </div>
                    </div>







                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                            value="{{ $informations->mobile }}" placeholder="Enter Information Mobile">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                            value="{{ $informations->address }}"  placeholder="Enter Information Addess">
                        </div>
                    </div>




                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="button" onclick="performUpdate({{ $informations->id }})" class="btn btn-primary">Update</button>
                        <a href="{{ route('informations.index') }}" type="button" class="btn btn-info">Return Back</a>
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
            formData.append('map', document.getElementById('map').value);
            formData.append('email',document.getElementById('email').value);
            formData.append('mobile',document.getElementById('mobile').value);
            formData.append('address',document.getElementById('address').value);

            storeRoute('/cms/admin/update-informations/'+id , formData)
        }
    </script>
@endsection
