@extends('cms.parent')

@section('title' , 'Comment')
@section('main_title' , 'Create Comment')
@section('sub_title' , 'create comment')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data of comment</h3>
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
                @foreach($articles as $article)
                  <option value="{{ $article->id }}">{{ $article->title }}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
              </div>
            <div class="form-group col-md-6">
                <label for="text">comment Text</label>
                <input type="text" class="form-control" name="text" id="text" placeholder="Enter comment text">
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
              </div>
              <div class="form-group col-md-6">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
              </div>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
        <a href="{{ route('comments.index') }}" type="button" class="btn btn-info">Return Back</a>
      </div>
    </form>
  </div>
@endsection


@section('scripts')

<script>
    function performStore(){

let formData = new FormData();
formData.append('name',document.getElementById('name').value);
formData.append('email',document.getElementById('email').value);
formData.append('text',document.getElementById('text').value);
formData.append('article_id',document.getElementById('article_id').value);
formData.append('image',document.getElementById('image').files[0]);
store('/cms/admin/comments' , formData);
}

</script>

@endsection



