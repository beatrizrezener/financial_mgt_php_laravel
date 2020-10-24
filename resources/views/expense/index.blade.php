<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  

  <div class="container">
    <a href="{{ route('expense.create')}}" class="btn btn-primary">Add new expense</a>
  <br /> <br />


  <table class="table table-striped">
    <thead>
        <tr>
          <td>Code</td>
          <td>Description</td>
          <td>Date</td>
          <td>Value</td>
          <td colspan="2"></td>
        </tr>
    </thead>
    <tbody>
        @foreach($expenses as $expense)
        <tr>
            <td>{{$expense->id}}</td>
            <td>{{$expense->description}}</td>
            <td>{{$expense->date}}</td>
            <td>{{$expense->value}}</td>
            <td><a href="{{ route('expense.edit',$expense->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('expense.destroy', $expense->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Remove</button>                  
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
</div>