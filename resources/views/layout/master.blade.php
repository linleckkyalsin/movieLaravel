<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/latest/css/bootstrap.min.css">
    <link href="{{ asset('../../css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light  justify-content-between" style="background: black">
    <a class="navbar-brand" href="#">
        <img src="{{asset('/images/loo.png')}}" width="150px" height="60px" alt="">
    </a>

    <form class="form-inline">
        <button class="btn btn-outline-danger  m-3" type="submit">Sign In</button>
        <button class="btn btn-outline-danger  m-3" type="submit">Logout</button>
      </form>

  </nav>
<body class="bg-dark">

{{-- <div class="container bg-indigo-500">
    <div class="card bg-indigo-500">
        <div class="row">

            <div class="col-md-3" >
                <ul class="list-group border-0">
                    <a href="{{route('category.index')}}"  class="list-group-item list-group-item-action border-0"> <li class="list-group-item border-0">Category</li></a>

                    <li class="list-group-item border-0">Genre</li>

                  </ul>
            </div>
            <div class="col-md-9">

                @yield('content')
            </div>
        </div>
    </div>



</div> --}}
{{-- <div class="grid grid-cols-4 gap-4">


  </div> --}}

  {{-- <div class="flex justify-around ...">
    <div>
        <ul class="list-group border-0">
                   <a href="{{route('category.index')}}"  class="list-group-item list-group-item-action border-0"> <li class="list-group-item border-0">Category</li></a>

                   <li class="list-group-item border-0">Genre</li>

                 </ul>
   </div>
    <div>@yield('content')</div>
  </div> --}}
  <div class="grid grid-cols-3 gap-4 mt-6">

    <div class="... ">
        <ul class="list-group border-0 ">
            <a href="{{route('category.index')}}"  class="m-3 border-0 bg-gray-800"> <li class="list-group-item border-0 bg-gray-800/75 text-white "> <p class="hover:text-red-700">Category</p> </li></a>
            <a href="{{route('genre.index')}}"  class="m-3 border-0 bg-gray-800"> <li class="list-group-item border-0 bg-gray-800/75 text-white "> <p class="hover:text-red-700">Genre</p> </li></a>
            <a href="{{route('actor.index')}}"  class="m-3 border-0 bg-gray-800"> <li class="list-group-item border-0 bg-gray-800/75 text-white "> <p class="hover:text-red-700">Voice Actor</p> </li></a>
            <a href="{{route('anime.index')}}"     class="m-3 border-0 bg-gray-800"> <li class="list-group-item border-0 bg-gray-800/75 text-white "> <p class="hover:text-red-700">Anime</p> </li></a>

            <a href="{{route('category.index')}}"  class="m-3 border-0 bg-gray-800"> <li class="list-group-item border-0 bg-gray-800/75 text-white "> <p class="hover:text-red-700">Character</p> </li></a>
            <a href="{{route('episode.index')}}"  class="m-3 border-0 bg-gray-800"> <li class="list-group-item border-0 bg-gray-800/75 text-white "> <p class="hover:text-red-700">Episode</p> </li></a>
            <a href="{{route('director.index')}}"  class="m-3 border-0 bg-gray-800"> <li class="list-group-item border-0 bg-gray-800/75 text-white "> <p class="hover:text-red-700">Director</p> </li></a>
          </ul>
    </div>
    <div class="col-span-2 ...">
        <div>
            @if (session()->has('success'))
<div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            @if (session()->has('error'))
<div class="alert alert-danger">
    {{session()->get('error')}}
</div>
            @endif
            @if ($errors->all())
<div class="alert alert-danger">
  @foreach ($errors->all() as $e)
{{$e}}
  @endforeach
</div>
            @endif
        </div>
        @yield('content')
    </div>
  </div>
</body>
</html>
