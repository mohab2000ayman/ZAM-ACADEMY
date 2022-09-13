@extends('layouts.index')
@section('title','Show')

@section('body')
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 50px">
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
    <img src="https://img.myloview.com/stickers/default-avatar-profile-button-icon-vector-in-trendy-style-400-275268460.jpg" class="center" style="width: 100px;height: 100px;margin-left: 635px">
    <h2 class="text-muted h-100 d-flex align-items-center justify-content-center ">Profile Info</h2>
    <table class="table table-bordered table-warning" >
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Course</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->course}}</td>

            </tr>
        </tbody>
    </table>


@endsection
{{--<ul>--}}
{{--    <li>{{$user->name}}</li>--}}
{{--    <li>{{$user->email}}</li>--}}
{{--    <li>{{$user->course}}</li>--}}
{{--</ul>--}}

