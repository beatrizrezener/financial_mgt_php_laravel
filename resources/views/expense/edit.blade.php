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
    Edit Expense
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
      <form method="post" action="{{ route('expense.update', $expense->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Description:</label>
              <input type="text" class="form-control" name="description" value="{{$expense->description}}"/>
          </div>

          <div class="form-group">
              <label for="data">Date:</label>
              <input type="datetime" class="form-control" name="date" value="{{$expense->date}}"/>
          </div>
          <div class="form-group">
              <label for="value">Value:</label>
              <input type="number" class="form-control" name="value" value="{{$expense->value}}"/>
          </div> 

          <div class="form-group">
              <label for="category_id">Category:</label>
              <select class="form-control" name="category_id" value="{{$expense->category_id}}" >
              @foreach($categories as $category)
                <option value="{{$category->id}}" 
                <?php if($category->id == $expense->category_id)  echo "selected"; ?>
                > {{$category->description}}</option>
              @endforeach
              </select>
          </div>  
          
          <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
@endsection
</div>