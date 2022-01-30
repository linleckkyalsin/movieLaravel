@extends('layout.master')
@section('content')
<div>
    <a href="{{route('category.create')}}" class="btn btn-danger btn-rounded">Create</a>

</div>

<table class="table table-striped text-white" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody >
        @foreach ($category as $c)
        <tr>
            <td class="text-white">{{$c->name}}</td>
            <td>
                <a href="{{route('category.edit',$c->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('category.destroy',$c->id)}}" class="d-inline" method="POST" >
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
