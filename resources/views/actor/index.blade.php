@extends('layout.master')
@section('content')
<div>
    <a href="{{route('actor.create')}}" class="btn btn-danger btn-rounded">Create</a>

</div>

<table class="table table-striped text-white" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Gender</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody >
@foreach ($actor as $a)
<tr class="text-white">
    <td >{{$a->name}}</td>
    <td>
        <img src="{{asset('/images/'.$a->image)}}" width="100px" height="100px" alt="">
    </td>
    <td>Male</td>
    <td>
        <a href="{{route('actor.edit',$a->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('actor.destroy',$a->id)}}" class="d-inline" method="POST" >
            @csrf
            @method('DELETE')
             <input type="submit" class="btn btn-danger d-inline" value='Delete'>
        </form>

    </td>
</tr>

@endforeach


    </tbody>
</table>



@endsection
