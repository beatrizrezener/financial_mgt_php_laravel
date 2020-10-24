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
    <a href="{{ route('category.create')}}" class="btn btn-primary">Add new category</a>
  <br /> <br />


  <table class="table table-striped">
    <thead>
        <tr>
          <td>Code</td>
          <td>Description</td>
          <td colspan="2"></td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td><a href="{{ route('expense.category',$category->id)}}">{{$category->description}}</a></td>
            <td><a href="{{ route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('category.destroy', $category->id)}}" method="post">
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