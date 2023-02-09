@extends('cms.parent')

@section('title' , 'Like')
@section('main_title' , 'Create Like')
@section('sub_title' , 'create like')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data of Like</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">

        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Like</label>
                <input type="text" class="form-control" name="like" id="like" placeholder="Enter like">
              </div>
          </div>


        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Article</label>
                <select class="form-control select2" id="article_id" name="article_id" style="width: 100%;">
                @foreach($articles as $article)
                  <option value="{{ $article->id }}">{{ $article->title }}</option>
                @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>User</label>
                <select class="form-control select2" id="user_id" name="user_id" style="width: 100%;">
                @foreach($users as $user)
                  <option value="{{ $user->id }}">{{ $user->first_name ." ". $user->last_name }}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
        <a href="{{ route('likes.index') }}" type="button" class="btn btn-info">Return Back</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')

<script>
    function performStore(){

let formData = new FormData();
formData.append('like',document.getElementById('like').value);
formData.append('user_id',document.getElementById('user_id').value);
formData.append('article_id',document.getElementById('article_id').value);
store('/cms/admin/likes' , formData);
}

</script>

@endsection
