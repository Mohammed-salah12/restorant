@extends('cms.parent')

@section('title' , 'Article Category')
@section('main_title' , 'Edit Article Category')
@section('sub_title' , 'edit article category')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data of Article Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Article Category Name</label>
          <input type="text" class="form-control" value="{{ $article_categories->name }}" name="name" id="name" placeholder="Enter Name of Article's Category">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$article_categories->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('article_categories.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();

formData.append('name',document.getElementById('name').value);

storeRoute('/cms/admin/update-article_categories/' +id , formData);
}

</script>
@endsection
