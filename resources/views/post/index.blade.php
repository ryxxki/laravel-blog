@extends('layout.app')
@section('konten')
<h1>Semua Postingan</h1>
    @if (count($data) > 0)
        @foreach ($data as $i)
            <div class="list-group-item">
                <h3><a href="{{route('post.show', $i->id)}}">{{$i->title}}</a></h3>
                <small>{{$i->author}}</small>
            </div>
        @endforeach
    @else
    <div class="list-group-item">
        <h4>Tidak Ada Postingan !!</h4>
    </div>
    @endif
@endsection