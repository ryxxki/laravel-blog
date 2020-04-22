@extends('layout.app')
@section('konten')
<h1>Create Your Post</h1>
  <form action="{{route('post.store')}}" method="post">
    @csrf
    <div class="form form-group">
      <label for="title">Title : </label>
      <input type="text" name="title" class="form form-control">
    </div>
    <div class="form form-group">
      <label for="author">Author : </label>
      <input type="text" name="author" class="form form-control">
    </div>
    <div class="form form-group">
      <label for="text">Text : </label>
      <textarea name="text" cols="30" rows="10" class="form form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Add Post</button>
  </form>
@endsection