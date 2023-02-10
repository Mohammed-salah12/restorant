@extends('cms.parent')

@section('title' , ' Meal')

@section('main-title' , 'Index Meal')

@section('sub-title' , 'index meal')

@section('styles')

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('meals.index') }}" type="button" class="btn btn-dark">Back to Index</a>

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
                        <td>{{ $meal->description }}</td>
                                <td>
                                    <a href="{{ route('meal-restore' , $meal->id) }}"  class="btn btn-info">Restore</a>
                                    <a href="{{ route('meal-delete' , $meal->id) }}"  class="btn btn-danger ">Force Delete</a>
                                </td>
                      </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            {{ $meals->links()}}
          </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection





