@extends('cms.parent')

@section('title', 'Customer Say')

@section('main_title', 'Create About')

@section('sub_title', 'create_About')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Of About</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter Title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="content">Content</label>
                            <input type="text" class="form-control" id="content" name="content"
                                placeholder="Enter Content ">
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
                        <a href="{{ route('abouts.index') }}" type="button" class="btn btn-info">Return Back</a>
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
            formData.append('title', document.getElementById('title').value);
            formData.append('content', document.getElementById('content').value);
            formData.append('image', document.getElementById('image').files[0]);

            store('/cms/admin/abouts', formData)
        }
    </script>
@endsection
