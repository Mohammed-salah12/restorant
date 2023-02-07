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
                <div class="form-group col-md-6">
                    <label for="person_name"> Name</label>
                    <input type="text" class="form-control" name="person_name" id="person_name"
                    value="{{ $bookings->person_name }}"  placeholder="Enter name">
                </div>
                <div class="form-group col-md-6">
                    <label for="person_number">Person Number</label>
                    <input type="number" class="form-control" name="person_number" id="person_number"
                    value="{{ $bookings->person_number }}" placeholder="Enter person_number">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control"  value="{{ $bookings->mobile }}" name="mobile" id="mobile" placeholder="Enter mobile">
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control"  value="{{ $bookings->date }}" name="date" id="date" placeholder="Enter Date">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control select2" id="category_id" name="category_id"
                            style="width: 100%;">
                            <option selected>{{ $bookings->category->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group col-md-6">
                    <label for="note">Note</label>
                    <input type="text" class="form-control"  value="{{ $bookings->note }}" name="note" id="note" placeholder="Enter note">
                </div>
            </div>





      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$bookings->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('bookings.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();

formData.append('person_name',document.getElementById('person_name').value);
formData.append('person_number',document.getElementById('person_number').value);
formData.append('date',document.getElementById('date').value);
formData.append('category_id',document.getElementById('category_id').value);
formData.append('mobile',document.getElementById('mobile').value);
formData.append('note',document.getElementById('note').value);


storeRoute('/cms/admin/update-bookings/' +id , formData);
}

</script>
@endsection
