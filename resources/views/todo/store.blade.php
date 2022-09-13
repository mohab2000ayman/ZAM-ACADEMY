<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>courses</title>
</head>
<body>


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

<h2 class="text-muted h-100 d-flex align-items-center justify-content-center ">Choose a Course to Purchase</h2>

    <div class="container">
    <div class="row">

<form class="col-3" action="{{route('todo.storeb','id')}}" method="post" >
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <div  class="card text-white bg-dark border-info mb-3" style="width: 17rem; ">
            <img class="card-img-top" src={{url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG
            90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80')}}  alt="buisness">
            <div class="card-body">
                <h5 class="card-title">English<span class="badge bg-primary">New</span></h5>
                <p class="card-text">
                <ul>
                    <li>Negotiating</li>
                    <li>Meetings</li>
                    <li>Making Presentations</li>
                </ul>
                </p>
                    <button value="english" type="submit" name="course" id="course" class="btn btn-primary">purchase now!</button>
            </div>
        </div>
    </div>
</form>



<form class="col-3" action="{{route('todo.storeb','id')}}" method="post" >
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <div class="card text-white bg-danger border-secondary mb-3" style="width: 17rem; ">
            <img class="card-img-top" src={{url("https://thumbs.dreamstime.com/b/java-programming-language-application-web-development-concept-virtual-screen-java-programming-language-application-web-156385935.jpg")}}  alt="buisness">
            <div class="card-body">
                <h5 class="card-title">Java</h5>
                <p class="card-text">
                <ul>
                    <li>Syntax</li>
                    <li>Intro to OOP</li>
                    <li>Data Structures with Java</li>
                </ul>
                </p>

                <button value="JAVA" type="submit" name="course" id="course" class="btn btn-primary">purchase now!</button>
            </div>
        </div>
    </div>
</form>




 <form class="col-3" action="{{route('todo.storeb','id')}}" method="post" >
     @csrf
     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     <div>
         <div class="card text-white bg-dark border-info mb-3" style="width: 17rem; ">
             <img class="card-img-top" src={{url('https://miro.medium.com/max/1000/1*FtlxJ12yF6RvJuIrDJAvrg.jpeg')}}  alt="buisness">
             <div class="card-body">
                 <h5 class="card-title">Python</h5>
                 <p class="card-text">
                 <ul>
                     <li>Functions</li>
                     <li>Data Structures with Python</li>
                     <li>Using Database with Python</li>
                 </ul>
                 </p>
                 <button value="Python" type="submit" name="course" id="course" class="btn btn-primary">purchase now!</button>
             </div>
         </div>
     </div>
 </form>




 <form class="col-3" action="{{route('todo.storeb','id')}}" method="post" >
     @csrf
     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     <div >
         <div class="card text-white bg-danger border-secondary mb-3" style="width: 17rem; ">
             <img class="card-img-top" src={{url("https://thumbs.dreamstime.com/b/php-programming-language-web-development-coding-concept-100712197.jpg")}}  alt="buisness">
             <div class="card-body">
                 <h5 class="card-title">PHP</h5>
                 <p class="card-text">
                 <ul>
                     <li>Introduction to PHP</li>
                     <li>Basics of Syntax</li>
                     <li>PHP Forms</li>
                 </ul>
                 </p>
                 <button value="PHP" type="submit" name="course" id="course" class="btn btn-primary">purchase now!</button>
             </div>
         </div>
     </div>
    </form>

    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
