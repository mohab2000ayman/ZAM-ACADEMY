@extends('layouts.index')
@section('title','home page')
@section('body')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="header">
            <img src="https://i.ibb.co/whYxDxP/ZAMA.png" alt="logo" width="150px" height="150px" style="margin-right: 20px"  />
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





                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#aboutus" >About-US</a>
                </li>

            </ul>

        </div>
    </nav>




    <div class="container"  >
        <h1 class=" h-100 d-flex align-items-center justify-content-center "style="margin-bottom: 20px;margin-top: 20px;color:#c6c9ff;text-decoration: underline">Courses That ZAM Offer </h1>
        <div class="row">

            <form class="col-3" >
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
                    <div class="card" style="width: 18rem;">
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
                        </div>
                    </div>
                </div>
            </form>



            <form class="col-3">
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
                    <div class="card" style="width: 18rem;">
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

                        </div>
                    </div>
                </div>
            </form>




            <form class="col-3" >
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
                    <div class="card" style="width: 18rem;">
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
                        </div>
                    </div>
                </div>
            </form>




            <form class="col-3" >
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
                    <div class="card" style="width: 18rem;">
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
                        </div>
                    </div>
                </div>
            </form>



        </div>


    </div>

    <a class="btn btn-primary "  href="{{route('todo.login')}}" style="margin-left:655px;  margin-top: 20px; height: fit-content;width: 100px;">Login</a>



    <div class="container" id="aboutus" style="margin-top: 250px">
        <table cellspacing="20px">
            <body>
            <tr>
                <td><img src="https://i.ibb.co/whYxDxP/ZAMA.png" alt="logo" height=250px;
                         width=250px;></td>

                <td><h1>Welcome to MAZ Academy</h1>
                    <p style="  line-height: 2">
                        <strong>MAZ Academy is an educational platform for learning web and programming in English,including tests and step by step projects to insure understanding well.</strong></p></td>
            </tr>
            </body>
        </table>




        <hr style="
  border: dotted 6px;
  border-bottom: none;
  width: 4%;
  margin: 100px auto;
  color:black;"
            }

        >
        <div class="contact-me" style="text-align:center;">
            <h2>Get In Touch</h2>
            <h3>Want to say hi?</h3>
            <a href="mailto:MAZ@gmail.com"style="  background: #11cdd4;
  background-image:webkit-linear-gradient(top, #11cdd4, #11999e);
  background-image:-moz-linear-gradient(top, #11cdd4, #11999e);
  background-image:-ms-linear-gradient(top, #11cdd4, #11999e);
  background-image:o-linear-gradient(top, #11cdd4, #11999e);
  background-image:linear-gradient(to bottom, #11cdd4, #11999e);
  -moz-border-radius: 8;*/
  border-radius:8px;
  font-family: 'Montserrat', sans-serif;
  color:#ffffff;
  font-size:20px;
  padding:10px 20px 10px 20px;
  text-decoration:none;
  ">CONTACT ME</a>
            <p style="color:black;margin-top: 10px">©2022 MAZ Academy.</p>
        </div>
@endsection
