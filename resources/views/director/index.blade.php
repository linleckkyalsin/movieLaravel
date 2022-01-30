@extends('layout.master')
@section('content')
<div>
    <a href="{{route('director.create')}}" class="btn btn-danger btn-rounded">Create</a>

</div>

<table class="table table-striped text-white" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody >
        @foreach ($director as $d)
        <tr>
            <td class="text-white">{{$d->name}}</td>
            <td>
                <a href="{{route('director.edit',$d->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('director.destroy',$d->id)}}" class="d-inline" method="POST" >
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
