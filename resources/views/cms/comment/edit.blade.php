@extends('cms.parent')

@section('title' , 'comment')
@section('main_title' , 'Edit comment')
@section('sub_title' , 'edit comment')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data of comment</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Article</label>
                  <select class="form-control select2" id="article_id" name="article_id" style="width: 100%;">
                    <option value="{{ $comments->article->id }}" selected> {{ $comments->article->title }} </option>
                    @foreach($articles as $article)
                    @if($comments->article->id != $article->id)
                    <option value="{{ $article->id }}">{{ $article->title }}</option>
                    @endif
                  @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{ $comments->name }}" name="name" id="name" placeholder="Enter Name">
                  </div>
                <div class="form-group col-md-6">
                    <label for="text">Comment Text</label>
                    <input type="text" class="form-control" value="{{ $comments->text }}" name="text" id="text" placeholder="Enter comment text">
                  </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{ $comments->email }}" name="email" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" value="{{ $comments->image }}" id="image" name="image" placeholder="Enter Image">
                  </div>
              </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$comments->id}})" class="btn btn-primary">Update</button>
        <a href="{{ route('comments.index') }}" type="button" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
<script>

function performUpdate(id){

let formData = new FormData();

formData.append('name',document.getElementById('name').value);
formData.append('email',document.getElementById('email').value);
formData.append('text',document.getElementById('text').value);
formData.append('article_id',document.getElementById('article_id').value);
formData.append('image',document.getElementById('image').files[0]);
storeRoute('/cms/admin/update-comments/' +id , formData);
}

</script>
@endsection
