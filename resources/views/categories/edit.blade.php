@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>Edit Category</h2>
    <div class="row">
      <div class="col-sm-4">
        <form action="/category-update/{{ $category->id }}" method="post">
          @csrf
          @method ('put')
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $category->title }}"/><br>
        <button class="btn btn-info" type="submit">Update</button>
        </form>
      </div>

    </div>
</div>

@endsection

