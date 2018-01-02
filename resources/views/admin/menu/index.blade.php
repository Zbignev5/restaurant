@extends ('layouts.admin')

@section('content')



  <div class="col-md-4">
    <ul class='list-group'>

    @foreach($menus as $menu)
<li class="list-group-item"> {{ $menu->title }}
  <a href="#"> <button type="button" class="btn btn-primary" name="button">Edit</button> </a>
  <a href="#"> <button type="button" class="btn btn-danger" name="button">Delete</button></a>
</li>
    @endforeach
  </ul>
  <a href="{{route('admin')}}" class="btn btn-warning">Atgal</a>
  <a href="{{route('menu.create')}}" class="btn btn-primary">Sukurti</a>
  </div>

@endsection
