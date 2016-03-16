<!DOCTYPE html>
<html>
<head>
    <title>Cannerberg System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{HTML::style('http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css')}}
    <style>
        body {
            background-image: url(/images/P1130598.jpg); /*You will specify your image path here.*/
            -moz-background-size: cover;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: top center !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed;
        }

        .container-fluid {
            padding-top: 65px;
        }

        .border
        {
            margin: 0 auto;
            border: 1px black solid;
            background-color: rgba(240,240,224,0.8);
            width: 1000px;
            font-style: normal;
            border-radius: 5px;
            letter-spacing: 2px;
            /* These three lines are for transparency in all browsers. */
            -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=0.94);
            z-index: 1;
        }

        .text-form
        {
            margin: 20px 20px;
        }

        .block1
        {
            margin-left: 30px;
            width: 300px;
            float: left;
        }

    </style>

    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/locales.min.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <link href="/kartik-v/bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="/kartik-v/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript"></script>
</head>

<body>
<div class="page">
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Cannerberg</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    @if (Auth::check())
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Invoeren <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/">Medewerker</a></li>
                                <li class="divider"></li>
                                <li><a href="/department/create">Afdeling</a></li>
                                <li><a href="/jobrole/create">Functie</a></li>
                                <li><a href="/rank/create">Rang</a></li>
                                <li><a href="/nationality/create">Nationaliteit</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Overzicht<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/employee">Medewerker</a></li>
                                <li><a href="showMap">Kaart</a></li>
                            </ul>
                        </li>
                    </ul>
                    @endif

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li><a href="/logout">Log Out</a></li>
                            <li><a href="/profile">{{ Auth::user()->first_name }}</a></li>
                        @else
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Sign Up</a></li>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

            @yield('login')
            @if (Auth::check())
            <div class="border">
                <div class="text-form">
                    @yield('title')
                    @yield('table')
                    <div class="block1">
                        @yield('block1form')
                    </div>
                        @yield('block2form')
                        @yield('pagination')
                </div>
            @endif
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    @if(Session::has('message'))
                        <div class="alert-box success">
                            <h2>{{ Session::get('message') }}</h2>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
@show
</body>

</html>