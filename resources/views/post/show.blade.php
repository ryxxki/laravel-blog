@extends('layout.app')
@section('konten')
  <h1>{{$data->title}}</h1>
  <p><b>Author :</b> {{$data->author}}</p>
  <hr>
  <p>{{$data->text}}</p>
  <a href="{{route('post.edit', $data->id)}}" class="btn btn-success">Edit Data</a>
  <form action="{{route('post.destroy', $data->id)}}" method="post" class="mt-1">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete Data</button>
  </form>
@endsection