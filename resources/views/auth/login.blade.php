<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/latest/css/bootstrap.min.css">
    <link href="{{ asset('../../css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">

    <form class="w-full max-w-lg col-md-4 offset-md-4" action="{{url('/admin/login')}}" method="POST" >
        @csrf
        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
              Email
            </label>
          </div>
          <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="email" name="email">
          </div>
        </div>
        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
              Password
            </label>
          </div>
          <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" name="password" placeholder="******************">
          </div>
        </div>

        <div class="md:flex md:items-center">
          <div class="md:w-1/3"></div>
          <div class="md:w-2/3">

            <input type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" value="Login" name="" id="">
          </div>
        </div>

        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            @if (session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
                                   @endif
                                   @if (session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
                                   @endif
                                   @if ($errors->all())
            @foreach ($errors->all() as $e)
            <div class="alert alert-danger">{{$e}}</div>
            @endforeach
                                   @endif
            </div>
      </form>


</div>
</body>
</html>
