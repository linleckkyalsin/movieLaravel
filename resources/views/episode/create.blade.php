@extends('layout.master')
@section('content')
<h1>Create</h1>
<form action="{{route('episode.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-white ">
        <label for="name">Enter Name</label>
        <input type="text" name="name" class="form-control mt-3" id="">
    </div>
    <div class="form-group  mb-3">
        <label class="text-white" for="anime">Anime</label>
        <select name="anime_id" class="form-control" id="anime" >
            @foreach ($anime as $a)
            <option value="{{$a->id}}">{{$a->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group  mb-3">
        <label class="text-white" for="anime">Season</label>
        <select name="season_id" class="form-control" id="season" >
            @foreach ($season as $s)
            <option value="{{$s->id}}">{{$s->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group  mb-3">
        <label for="description">Description</label>
        <div><textarea name="description" id="" cols="100" rows="10"></textarea></div>

    </div>
    <div class="form-group text-white mb-3">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="">
    </div>
    <div class="form-group text-white ">
        <label for="duration">Duration</label>
        <input type="text" name="duration" class="form-control mt-3" id="">
    </div>
        <div class="mt-3">
<input type="submit" class="btn btn-lg btn-danger"  value="Create">
        </div>


</form>
@endsection
