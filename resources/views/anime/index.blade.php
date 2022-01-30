@extends('layout.master')
@section('content')
<div>
    <a href="{{route('anime.create')}}" class="btn btn-danger btn-rounded">Create</a>

</div>

<table class="table table-striped text-white" >
    <thead>
        <tr>
            <th>Name</th>
             <th>Image</th>
             <th>episode</th>
             <th>Duration Time</th>
             <th>Release Date</th>
           <th>Anime Type</th>
           <th>Year</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody >
@foreach ($anime as $a)
<tr class="text-white">
    <td >{{$a->name}}</td>
    <td>{{$a->bg_img}}</td>
    <td>{{$a->episode}}</td>
    <td>{{$a->duration_time}}</td>
    <td>{{$a->release_date}}</td>
    <td>{{$a->type['name']}}</td>
    <td>{{$a->year}}</td>
    <td>
        <a href="" class="btn btn-primary">Edit</a>
        <form action="" class="d-inline" method="POST" >
            @csrf
            @method('DELETE')
             <input type="submit" class="btn btn-danger d-inline" value='Delete'>
        </form>

    </td>
</tr>

{{-- <p class="text-white">{{$a->type['name']}}</p> --}}
@endforeach


    </tbody>
</table>

@endsection



