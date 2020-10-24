<!-- category.blade.php -->

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

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Code</td>
          <td>Description</td>
          <td>Date</td>
          <td>Value</td>
        </tr>
    </thead>
    <tbody>
        @foreach($expenses as $expense)
        <tr>
            <td>{{$expense->id}}</td>
            <td>{{$expense->description}}</td>
            <td>{{$expense->date}}</td>
            <td>{{$expense->value}}</td>            
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
</div>