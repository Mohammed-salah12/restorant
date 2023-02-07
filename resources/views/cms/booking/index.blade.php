@extends('cms.parent')

@section('title' , 'booking')
@section('main_title' , 'Index booking')
@section('sub_title' , 'index booking')

@section('styles')

@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('bookings.create') }}" type="button" class="btn btn-secondary">Create New Booking</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Person Name</th>
                <th>Person Number</th>
                <th>Date</th>
                <th>Mobile</th>
                <th>Category Name</th>
                <th>Note</th>

                <th>Setting</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking )
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->person_name }}</td>
                    <td>{{ $booking->person_number }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->mobile }}</td>
                    <td>{{ $booking->category->name }}</td>
                    <td>{{ $booking->note }}</td>


                    <td>
                        <div class="btn-group">
                            <a href="{{ route('bookings.edit' , $booking->id ) }}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" onclick="performDestroy({{ $booking->id }} , this)" class="btn btn-danger">
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
      {{ $bookings->links() }}
    </div>
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/bookings/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


