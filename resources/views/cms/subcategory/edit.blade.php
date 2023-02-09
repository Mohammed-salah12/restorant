@extends('cms.parent')

@section('title' , 'Subcategory')
@section('main_title' , 'Edit Subcategory')
@section('sub_title' , 'edit subcategory')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data of Subcategory</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Subcategory Name</label>
          <input type="text" class="form-control" value="{{ $subcategories->name }}" name="name" id="name" placeholder="Enter Subcategory Name">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$subcategories->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('subcategories.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();

formData.append('name',document.getElementById('name').value);

storeRoute('/cms/admin/update-subcategories/' +id , formData);
}

</script>
@endsection
