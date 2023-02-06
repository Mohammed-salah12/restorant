@extends('cms.parent')

@section('title' , 'Category')
@section('main_title' , 'Edit Category')
@section('sub_title' , 'edit category')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data of Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" value="{{ $categories->name }}" name="name" id="name" placeholder="Enter Category name">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$categories->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();

formData.append('name',document.getElementById('name').value);

storeRoute('/cms/admin/update-categories/' +id , formData);
}

</script>
@endsection
