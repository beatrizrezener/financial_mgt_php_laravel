<!-- create.blade.php -->

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
      <form method="post" action="{{ route('expense.store') }}">
          <div class="form-group">
              @csrf
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>    
          <div class="form-group">
              <label for="date">Date:</label>
              <input type="date" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="value">Value:</label>
              <input type="number" class="form-control" name="value"/>
          </div>   

          <div class="form-group">
              <label for="category_id">Category:</label>
              <select class="form-control" name="category_id" >
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->description}}</option>
              @endforeach
              </select>
          </div>   

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
</div>