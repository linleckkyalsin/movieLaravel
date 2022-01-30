@extends('layout.master')
@section('content')
<h1>Create</h1>
<form action="{{route('actor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-white ">
        <label for="name">Enter Name</label>
        <input type="text" name="name" class="form-control mt-3" id="">
    </div>
    <div class="form-group text-white mb-3">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="">
    </div>
    <div class="form-check form-check-inline text-white">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check form-check-inline text-white">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female">Female</label>
      </div>
        <div class="mt-3">
<input type="submit" class="btn btn-lg btn-danger"  value="Create">
        </div>


</form>
@endsection
