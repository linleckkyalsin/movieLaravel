@extends('layout.master')
@section('content')
<h1>Update</h1>
<form action="{{route('category.update',$category->id)}}" method="POST">
    @csrf
   @method('PUT')
    <div class="form-group text-white ">
        <label for="name">Edit Category</label>
        <input type="text" name="name" class="form-control mt-3" value="{{$category->name}}" id="">
        <div class="mt-3">
<input type="submit" class="btn btn-lg btn-danger"  value="Update">
        </div>
    </div>

</form>
@endsection
