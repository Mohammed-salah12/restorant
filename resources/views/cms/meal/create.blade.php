@extends('cms.parent')

@section('title' , 'Meal')
@section('main_title' , 'Create Meal')
@section('sub_title' , 'create meal')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data of Meal</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="row">
            <input type="text" name="subcategory_id" id="subcategory_id" value="{{$id}}"
                  class="form-control form-control-solid" hidden/>
          </div>


        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Meal Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Meal name">
              </div>
            <div class="form-group col-md-6">
                <label for="description">Meal Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Meal Description">
              </div>
          </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="price">Meal Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter Meal Price">
              </div>
            <div class="form-group col-md-6">
                <label for="meal_number">Meal Number</label>
                <input type="text" class="form-control" name="meal_number" id="meal_number" placeholder="Enter Meal Number">
              </div>
          </div>

             <div class="row">
              <div class="form-group col-md-6">
              <label for="image">Meal Image</label>
              <input type="file" class="form-control" id="image" name="image" placeholder="Enter Profile Meal">
            </div>
             </div>





      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
        <a href="{{ route('indexMeal' , $id) }}" type="button" class="btn btn-info">Return Back</a>

      </div>
    </form>
  </div>
@endsection


@section('scripts')

<script>
    function performStore(){

let formData = new FormData();
formData.append('name',document.getElementById('name').value);
formData.append('description',document.getElementById('description').value);
formData.append('price',document.getElementById('price').value);
formData.append('subcategory_id',document.getElementById('subcategory_id').value);
formData.append('meal_number',document.getElementById('meal_number').value);
formData.append('image',document.getElementById('image').files[0]);

store('/cms/admin/meals' , formData);
}

</script>

@endsection
