@extends ('layouts.admin')

@section('content')
<div class='col-md-8'>
<form action="{{route('menu.store')}}" method="post">
  {{csrf_field()}}
  <div class='form-group'>
  <input type="text" name="title" placeholder="Menu">
  <input type="submit" name="Submit">
</div>
</form>
</div>
@endsection
