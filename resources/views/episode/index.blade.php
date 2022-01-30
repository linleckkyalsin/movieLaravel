@extends('layout.master')
@section('content')
<div>
    <a href="{{route('episode.create')}}" class="btn btn-danger btn-rounded">Create</a>

</div>

<table class="table table-striped text-white" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Season</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody >

@foreach ($ep as $e)

        <tr class="text-white">
            <td >{{$e->name}}</td>
            <td>{{$e->season}}</td>
            <td>{{$e->description}}</td>
            <td>
                <a href="{{route('episode.edit',$e->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('episode.destroy',$e->id)}}" class="d-inline" method="POST" >
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
