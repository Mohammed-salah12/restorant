@extends('cms.parent')

@section('title' , 'Meal')
@section('main_title' , 'Index Meal')
@section('sub_title' , 'index meal')

@section('styles')

@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('createMeal' , $id) }}" type="button" class="btn btn-info">Add New Meal</a>
            <a href="{{ route('subcategories.index') }}" type="button" class="btn btn-secondary">Back to SubCategories</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Meal Number</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>SubCategory</th>
                <th>Description</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($meals as $meal )
                <tr>
                    <td>{{ $meal->meal_number }}</td>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{asset('storage/images/meal/'.$meal->image)}}" width="60" height="60" alt="User Image">
                     </td>
                    <td>{{ $meal->name }}</td>
                    <td>{{ $meal->price }}</td>
                    <td>{{ $meal->subcategory->name }}</td>
                    <td>{{ $meal->description }}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{ route('meals.edit' , $meal->id ) }}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" onclick="performDestroy({{ $meal->id }} , this)" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                              </button>
                          </div>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      {{ $meals->links() }}
    </div>
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/meals/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


