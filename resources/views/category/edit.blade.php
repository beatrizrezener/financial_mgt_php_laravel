<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="container">

<div class="card uper">
  <div class="card-header">
    Edit Category
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
      <form method="post" action="{{ route('category.update', $category->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Description:</label>
              <input type="text" class="form-control" name="description" value="{{$category->description}}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
@endsection
</div>