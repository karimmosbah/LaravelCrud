@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>Categories <a class="btn btn-info" href="/category-create">New Category</a></h2>
  @if(session()->has('success'))
  <div class="alert alert-info" role="alert">
    <strong>{{session()->get('success')}}</strong>
  </div>
  @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->title}}</td>
        <td>
            <div class="d-flex">
            <a href="/category-edit/{{ $category-> id }}" class="btn btn-sm btn btn-info">Edit</a>
            <form action="/category-delete/{{ $category-> id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
            </form>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{$categories->links()}}
</div>

@endsection

