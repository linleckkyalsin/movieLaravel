@extends('layout.master')
@section('content')
<h1>Create</h1>
<form action="{{route('anime.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-white mb-3">
        <label for="name">Enter Anime Name</label>
        <input type="text" name="name" class="form-control mt-3" id="">

    </div>
    <div class="form-group text-white mb-3">
        <label for="name">Release Date</label>
        <input type="text" name="release_date" class="form-control mt-3" id="">

    </div>
    <div class="form-group text-white mb-3">
        <label for="name">Enter Year</label>
        <input type="number" name="enter_year" class="form-control mt-3" id="">

    </div>
    <div class="form-group text-white mb-3">
        <label for="name">Episode</label>
        <input type="number" name="ep" class="form-control mt-3" id="">

    </div>
    <div class="form-group  text-white mb-3">
        <label for="description">Description</label>
        <div><textarea name="description" id="" cols="100" rows="10"></textarea></div>

    </div>
    <label class="text-white">Category</label>
    <div class="form-group">

        @foreach ($category as $c)

        <div class="form-check form-check-inline text-white">

         <input type="checkbox" class="form-check-input" name="categories[]" value="{{$c->id}}" id="{{$c->name}}">
         <label  for="{{$c->name}}">{{$c->name}}</label>
        </div>
        @endforeach

    </div>
    <label class="text-white">Genre</label>
    <div class="form-group">
        @foreach ($genre as $g)
        <div class="form-check form-check-inline text-white">

            <input type="checkbox" class="form-check-input" name="genres[]" value="{{$g->id}}" id="{{$g->name}}">
            <label  for="{{$g->name}}">{{$g->name}}</label>
           </div>
        @endforeach
    </div>

    <label class="text-white">Type</label>
    <div class="form-group">
        @foreach ($type as $t)
        <div class="form-check form-check-inline text-white">
            <input class="form-check-input" type="radio" name="typeoptions" id="{{$t->name}}" value="{{$t->id}}">
            <label class="form-check-label" for="{{$t->name}}">{{$t->name}}</label>
          </div>
        @endforeach
    </div>

    <div class="form-group text-white mb-3">
        <label for="name">Duration Time</label>
        <input type="text" name="duration_time" class="form-control mt-3" id="">

    </div>

    <div class="form-group  mb-3">
        <label class="text-white" for="year">Years</label>
        <select name="year_id" class="form-control" id="" >
            @foreach ($year as $y)
            <option value="{{$y->id}}">{{$y->year}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group  mb-3">
        <label class="text-white" for="director">Director</label>
        <select name="year_id" class="form-control" id="director" >
            @foreach ($director as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
            @endforeach
        </select>
    </div>
    
    <label class="text-white">Voice Actor</label>
    <div class="form-group">

        @foreach ($actor as $a)

        <div class="form-check form-check-inline text-white">
            <label for="{{$a->name}}"> <img src="{{asset('/images/'.$a->image)}}" width="70px" height="70px" alt=""></label>

         <input type="checkbox" class="form-check-input" name="actors[]" value="{{$a->id}}" id="{{$a->name}}">
         <label  for="{{$a->name}}">{{$a->name}}</label>
        </div>
        @endforeach

    </div>


{{-- @foreach ($actor as $a)
<div class="text-white">
    {{$a->name}}
</div>
@endforeach --}}

    <div class="form-group  text-white mb-3" >

        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="">
    </div>
        <div class="mt-3">


<input type="submit" class="btn btn-lg btn-danger"  value="Create">
        </div>


</form>
@endsection
