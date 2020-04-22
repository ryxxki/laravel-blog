@if(count($errors) > 0)
  @foreach ($errors->all() as $item)
      <div class="alert alert-danger">
          <b>{{$item}}</b>
      </div>
  @endforeach
@endif

@if(session('success'))
  <div class="alert alert-success">
  {{session('success')}}
  </div>
@endif