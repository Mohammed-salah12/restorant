@extends('cms.parent')

@section('title', 'About')

@section('main_title', 'Update About')

@section('sub_title', 'update_About')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data Of About</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                            value="{{ $abouts->title }}"  placeholder="Enter title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="content">Content </label>
                            <input type="text" class="form-control" id="content" name="content"
                            value="{{ $abouts->content }}"  placeholder="Enter Customer Say ">
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
                        <button type="button" onclick="performUpdate({{ $abouts->id }})" class="btn btn-primary">Update</button>
                        <a href="{{ route('abouts.index') }}" type="button" class="btn btn-info">Return Back</a>
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
            formData.append('title', document.getElementById('title').value);
            formData.append('content', document.getElementById('content').value);
            formData.append('image', document.getElementById('image').files[0]);

            storeRoute('/cms/admin/update-abouts/'+id , formData)
        }
    </script>
@endsection
