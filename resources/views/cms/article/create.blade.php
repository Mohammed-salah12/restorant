@extends('cms.parent')

@section('title' , 'Article')
@section('main_title' , 'Create Article')
@section('sub_title' , 'create article')

@section('styles')

@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Data of Article</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="row">
            <input type="text" name="author_id" id="author_id" value="{{$id}}"
                  class="form-control form-control-solid" hidden/>
          </div>


        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Article Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Article Title">
              </div>
            <div class="form-group col-md-6">
                <label for="description">Article Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Article Description">
              </div>
          </div>
        <div class="row">

            <div class="form-group col-md-6">
                <label>Article Category</label>
                <select class="form-control select2" id="article_category_id" name="article_category_id" style="width: 100%;">
                @foreach($article_categories as $article_category)
                  <option value="{{ $article_category->id }}">{{ $article_category->name }}</option>
                @endforeach
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="image">Article Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Enter Profile Article">
              </div>
          </div>








      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
        <a href="{{ route('indexArticle' , $id) }}" type="button" class="btn btn-info">Return Back</a>

      </div>
    </form>
  </div>
@endsection


@section('scripts')

<script>
    function performStore(){

let formData = new FormData();
formData.append('title',document.getElementById('title').value);
formData.append('description',document.getElementById('description').value);
formData.append('article_category_id',document.getElementById('article_category_id').value);
formData.append('author_id',document.getElementById('author_id').value);
formData.append('image',document.getElementById('image').files[0]);

store('/cms/admin/articles' , formData);
}

</script>

@endsection
