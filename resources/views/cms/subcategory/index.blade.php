@extends('cms.parent')

@section('title' , 'Subgategory')
@section('main_title' , 'Index Subgategory')
@section('sub_title' , 'index subgategory')

@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              {{-- <h3 class="card-title"> Index Data of subgategory</h3> --}}
              {{-- <a href="{{ route('subcategories.create') }}" type="button" class="btn btn-info">Add New subgategory</a> --}}
              <form action="" method="get" style="margin-bottom:2%;">
                <div class="row">
                    <div class="input-icon col-md-2">
                        <input type="text" class="form-control" placeholder="Search By Name"
                           name='name' @if( request()->name) value={{request()->name}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div>


                <div class="col-md-4">
                      <button class="btn btn-success btn-md" type="submit"> filter</button>
                      <a href="{{route('subcategories.index')}}"  class="btn btn-danger"> end filter</a>
                      {{-- @can('Create-City') --}}

                      <a href="{{route('subcategories.create')}}"><button type="button" class="btn btn-md btn-primary"> Add new subgategory </button></a>
                      {{-- @endcan --}}
                </div>

                     </div>
            </form>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>subgategory Name</th>
                    <th>Number of Meals</th>
                    <th>Category Name</th>
                    <th>Seeting</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subcategories as $subgategory )
                  {{-- <td><span class="tag tag-success">Approved</span></td> --}}




                  <tr>
                      <td>{{$subgategory->id}}</td>
                      <td>{{ $subgategory->name }}</td>
                      <td><a href="{{route('indexMeal',['id'=>$subgategory->id])}}"
                        class="btn btn-info">({{$subgategory->meals_count}})
                        meal/s</a> </td>
                      <td>{{ $subgategory->category->name }}</td>

                      <td>
                          <div class="btn group">
                            <a href="{{route('subcategories.edit' , $subgategory->id)}}" type="button" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                              {{-- <i class="far fa-edit"></i> --}}
                            </a>
                            <a href="#" type="button" onclick="performDestroy({{ $subgategory->id }} , this)" class="btn btn-danger">
                              <i class="fas fa-trash-alt"></i>
                            </a>

                          </div>
                        </td>

                      <td></td>
                    </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          {{ $subcategories->links()}}
        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/admin/subcategories/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection


