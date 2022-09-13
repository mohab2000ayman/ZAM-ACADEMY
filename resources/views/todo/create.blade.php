@extends('layouts.index')
@section('title','Login')
@section('body')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="header">
            <img src="https://i.ibb.co/whYxDxP/ZAMA.png" alt="logo" width="100px" height="100px" style="margin-right: 20px"  />
        </div>
        <a class="navbar-brand" href="">ZAM ACADEMY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('todo.about')}}">About-US</a>
                </li>

            </ul>

        </div>
    </nav>



    <h2  class="text-muted h-100 d-flex align-items-center justify-content-center "style="margin-bottom: 20px;margin-top: 20px">Login Page</h2>

    <div class="h-100 d-flex align-items-center justify-content-center">


        <form action="{{route('todo.store')}}" method="post">
            @csrf
            <!-- /resources/views/post/create.blade.php -->


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Create Post Form -->
            <div class="mb-3">
                <label for="name" class="form-label" style="font-size: larger">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="font-size: larger">Email address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </div>
@endsection

