@extends('cms.parent')

@section('title' , 'Article Category')
@section('main_title' , 'Create Article Category')
@section('sub_title' , 'create article category')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data of Article Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Article Category Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Article's Category">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
        <a href="{{ route('article_categories.index') }}" type="button" class="btn btn-info">Return Back</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')

<script>
    function performStore(){

let formData = new FormData();
formData.append('name',document.getElementById('name').value);

store('/cms/admin/article_categories' , formData);
}

</script>

@endsection
