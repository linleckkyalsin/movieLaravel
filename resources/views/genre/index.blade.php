@extends('layout.master')
@section('content')
<div>
    <a href="{{route('genre.create')}}" class="btn btn-danger btn-rounded">Create</a>

</div>

<table class="table table-striped text-white" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody >
        @foreach ($genre as $g)
        <tr>
            <td class="text-white">{{$g->name}}</td>
            <td>
                <a href="{{route('genre.edit',$g->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('genre.destroy',$g->id)}}" class="d-inline" method="POST" >
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
