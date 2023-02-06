@extends('cms.parent')

@section('title' , 'Category')
@section('main_title' , 'Create Category')
@section('sub_title' , 'create category')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data of Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category name">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
        <a href="{{ route('categories.index') }}" type="button" class="btn btn-info">Return Back</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')

<script>
    function performStore(){

let formData = new FormData();
formData.append('name',document.getElementById('name').value);

store('/cms/admin/categories' , formData);
}

</script>

@endsection
