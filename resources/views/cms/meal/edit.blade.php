@extends('cms.parent')

@section('title' , 'Meal')
@section('main_title' , 'Edit Meal')
@section('sub_title' , 'edit meal')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data of Meal</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>SubCategory</label>
                  <select class="form-control select2" id="subcategory_id" name="subcategory_id" style="width: 100%;">
                    <option value="{{ $meals->subcategory->id }}" selected> {{ $meals->subcategory->name }} </option>
                    @foreach($subcategories as $subcategory)
                    @if($meals->subcategory->id != $subcategory->id)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endif
                  @endforeach
                  </select>
                </div>
              </div>
            </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Meal Name</label>
                <input type="text" class="form-control" value="{{ $meals->name }}" name="name" id="name" placeholder="Enter Meal name">
              </div>
            <div class="form-group col-md-6">
                <label for="description">Meal Description</label>
                <input type="text" class="form-control" value="{{ $meals->description }}" name="description" id="description" placeholder="Enter Meal Description">
              </div>
          </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="price">Meal Price</label>
                <input type="text" class="form-control" value="{{ $meals->price }}"  name="price" id="price" placeholder="Enter Meal Price">
              </div>
            <div class="form-group col-md-6">
                <label for="meal_number">Meal Number</label>
                <input type="text" class="form-control"  value="{{ $meals->meal_number }}" name="meal_number" id="meal_number" placeholder="Enter Meal Number">
              </div>
          </div>

             <div class="row">
              <div class="form-group col-md-6">
              <label for="image">Meal Image</label>
              <input type="file" class="form-control" value="{{ $meals->image }}"  id="image" name="image" placeholder="Enter Profile Meal">
            </div>
             </div>




      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$meals->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('meals.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();

formData.append('name',document.getElementById('name').value);
formData.append('description',document.getElementById('description').value);
formData.append('price',document.getElementById('price').value);
formData.append('subcategory_id',document.getElementById('subcategory_id').value);
formData.append('meal_number',document.getElementById('meal_number').value);
formData.append('image',document.getElementById('image').files[0]);
storeRoute('/cms/admin/update-meals/' +id , formData);
}

</script>
@endsection
