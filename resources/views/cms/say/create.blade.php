@extends('cms.parent')

@section('title', 'Customer Say')

@section('main_title', 'Create Customer Say')

@section('sub_title', 'create_Customer Say')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Of Customer Say</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Customer Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Customer  name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="message">Customer Say </label>
                            <input type="text" class="form-control" id="message" name="message"
                                placeholder="Enter Customer Say ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="rate">Rate</label>
                            <input type="number" class="form-control" id="rate" name="rate"
                                placeholder="Enter Customer rate">
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
                        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                        <a href="{{ route('says.index') }}" type="button" class="btn btn-info">Return Back</a>
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
            formData.append('message', document.getElementById('message').value);
            formData.append('name', document.getElementById('name').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('rate', document.getElementById('rate').value);
            formData.append('image', document.getElementById('image').files[0]);

            store('/cms/admin/says', formData)
        }
    </script>
@endsection
