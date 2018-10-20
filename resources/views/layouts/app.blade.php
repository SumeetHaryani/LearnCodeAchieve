<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        #nav {
  background-color: #012B74;
  color: white;


}

#nav a{
    color: white;
   

    }
#nav a:hover {
  background-color: #01B9F5;
 
 

}
#dropdown{
    color: black;
}
.post{
    margin-top: 15px;
    clear: both;
}
.create{
    float: right;
    margin-right: 198px;
    margin-bottom: 20px;
}
.delete{
    float: right;
    margin-right: 198px;
}
.edit{
    margin-left: 198px;
    margin-top: 20px;
}
.comment1{
    clear: both;
    margin-top: 30px;
}
.commentarea{
    margin-top: 15px;
}
.commentsection{
     
    width: 1140px;
    margin-left: 200px;
}
.comments li{
    margin-top: 40px;
    margin-left: 158px;
}
.title{
    margin-left: 198px;
    margin-top: 50px;
}
.title-message{
    margin-left: 198px;
    margin-top: 50px;
    margin-right: 198px;
}
</style>
</head>

<body>
    <div id="app">
        <nav id="nav" class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="{{ url('/') }}">LCA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/posts') }}">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/aboutUs') }}">About us</a>
                    </li>
                </ul>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline" style="margin-right:16px;">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary " type="submit">Search</button>
                    </form>
                    <!-- Authentication Links -->
                    @auth
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('/home') }}" role="button" style="margin-right: 16px">{{
                            __('DASHBOARD') }}</a>
                    </li>
                    @if (Auth::user()->usr_type=='Instructor')
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('/course/add') }}" role="button" style="margin-right: 16px">{{
                            __('ADD COURSE') }}</a>
                    </li>
                    @endif
                    @endauth

                    @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" role="button" href="{{ route('login') }}" style="color:white; margin-right: 16px;">{{
                            __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="btn btn-primary" role="button" style="color:white;" href="{{ route('register') }}">{{
                            __('Register') }}</a>
                        @endif
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a style="color:black;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                 @endguest
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @include('inc.messages')
            @yield('content')

        </main>
    </div>
</body>

</html>
