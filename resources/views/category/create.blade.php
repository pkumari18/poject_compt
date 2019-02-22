@extends('layout')
@section('content')
<style>
.uper {
  margin-top: 40px;
}
</style><br>
<br>
<a href="{{ route('inventory.index') }}" class="btn btn-primary">Back</a>

<div class="card uper">

  <div class="card-header">
    Add Category
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    
    <form method="post" action="{{ route('category.store') }}">

      <div class="form-group">
        @csrf
        <label for="name">Name:</label>
        <input type="text" class="form-control"   name ="name"/>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
</div>
@endsection