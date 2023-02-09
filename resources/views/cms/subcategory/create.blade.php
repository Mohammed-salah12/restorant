@extends('cms.parent')

@section('title' , 'Subcategory')
@section('main_title' , 'Create Subcategory')
@section('sub_title' , 'create subcategory')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data of Subcategory</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>

      <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Subcategory Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Subcategory Name">
              </div>

              <div class="form-group col-md-6">
                <label>Category</label>
                <select class="form-control select2" id="category_id" name="category_id" style="width: 100%;">
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
        <a href="{{ route('subcategories.index') }}" type="button" class="btn btn-info">Return Back</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')

<script>
    function performStore(){

let formData = new FormData();
formData.append('name',document.getElementById('name').value);
formData.append('category_id',document.getElementById('category_id').value);

store('/cms/admin/subcategories' , formData);
}

</script>

@endsection
