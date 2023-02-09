@extends('cms.parent')

@section('title' , 'Like')
@section('main_title' , 'Edit Like')
@section('sub_title' , 'edit like')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data of Like</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">


            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Like</label>
                    <input type="text" class="form-control" value="{{ $likes->like }}" name="like" id="like" placeholder="Enter Like">
                  </div>
              </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Article</label>
                  <select class="form-control select2" id="article_id" name="article_id" style="width: 100%;">
                    <option value="{{ $likes->article->id }}" selected> {{ $likes->article->title }} </option>
                    @foreach($articles as $article)
                    @if($likes->article->id != $article->id)
                    <option value="{{ $article->id }}">{{ $article->title }}</option>
                    @endif
                  @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Article</label>
                  <select class="form-control select2" id="user_id" name="user_id" style="width: 100%;">
                    <option value="{{ $likes->user->id }}" selected> {{ $likes->user->first_name ." ".  $likes->user->last_name}} </option>
                    @foreach($users as $user)
                    @if($likes->article->id != $article->id)
                    <option value="{{ $user->id }}">{{ $user->first_name ." ". $user->last_name }}</option>
                    @endif
                  @endforeach
                  </select>
                </div>
              </div>
            </div>



      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$likes->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('likes.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();

formData.append('like',document.getElementById('like').value);
formData.append('user_id',document.getElementById('user_id').value);
formData.append('article_id',document.getElementById('article_id').value);
storeRoute('/cms/admin/update-likes/' +id , formData);
}

</script>
@endsection
