<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       

        <!-- Bootstrap -->
        {{Html::style('assets/css/bootstrap.min.css')}}
            {{--font awesome--}}
        {{Html::style('assets/css/font-awesome.css')}}
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>

            {{Html::script('assets/js/html5shiv.min.js')}}
            {{Html::script('assets/js/respond.min.js')}}
            <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
            <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
        <![endif]-->



        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                /* font-weight: 100; */
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 60vh;
            }
            .footer-height {
                height: 5vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            /* .subTitle {
                font-size: 36px;
            } */

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* .subTitle> a {
                font-size: 25px;
                font-weight: inherit;

            } */
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" title="Medical Symptoms And Diagnosis System">
                    MS<b>&</b>DS
                </div>
            </div>
            
        </div>
        <div class="subTitle content m-b-md footer-height links"  >
            <b class="alert alert-primary" role="alert">Hi . I can help you find out what's going on, Just start a <a href="#">Symptom Assessment</a>.</b> 
            
        </div>



        <div>
            <div class="row mb-2">
                <div class="col-md-3">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Worried about your health?</a>
                    </h3>                  
                    <p class="card-text mb-auto">talk to our expert health system to begin a symptom assessment.</p>
                    <a href="#">Start chat</a>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                        <a class="text-dark" href="#">Find safe health info</a>
                        </h3>                  
                        <p class="card-text mb-auto">visit our condition library.</p>
                        <a href="#">Visit library</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                            <a class="text-dark" href="#">Your health profile
                                    
                                    </a>
                            </h3>                  
                            <p class="card-text mb-auto">Add your personal information for personalised service.</p>
                            <a href="#">Update profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                            <a class="text-dark" href="#">Emergency case</a>
                            </h3>                  
                            <p class="card-text mb-auto">Find closest healhcare provider closest to your location.</p>
                            <a href="#">Visit map</a>
                        </div>
                        </div>
                    </div>
        </div>

    </body>
</html>
