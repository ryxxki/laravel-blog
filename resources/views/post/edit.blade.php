@extends('layout.app')
@section('konten')
<h1>Update Your Post</h1>
  <form action="{{route('post.update', $data->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="form form-group">
      <label for="title">Title : </label>
      <input type="text" name="title" class="form form-control" value="{{$data->title}}">
    </div>
    <div class="form form-group">
      <label for="author">Author : </label>
      <input type="text" name="author" class="form form-control" value="{{$data->author}}">
    </div>
    <div class="form form-group">
      <label for="text">Text : </label>
      <textarea name="text" cols="30" rows="10" class="form form-control">{{$data->text}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Update Post</button>
  </form>
@endsection