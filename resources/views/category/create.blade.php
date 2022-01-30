@extends('layout.master')
@section('content')
<h1>Create</h1>
<form action="{{route('category.store')}}" method="POST">
    @csrf
    <div class="form-group text-white ">
        <label for="name">Enter Category</label>
        <input type="text" name="name" class="form-control mt-3" id="">
        <div class="mt-3">
<input type="submit" class="btn btn-lg btn-danger"  value="Create">
        </div>
    </div>

</form>
@endsection
