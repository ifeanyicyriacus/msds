@extends('layouts.master')
@section('page_title')
    
@endsection
@section('page_style')
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

@endsection
@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <div class="dropdown" style="cursor: pointer">
                    <span class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <b>Welcome :)  {{ Auth::user()->fname }}</b> <span class="caret"></span>
                    </span>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <span href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Create an Account</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md" title="Medical Symptoms And Diagnosis System">
            MS<b>&</b>DS
        </div>
    </div>
    
</div>
<div class="card subTitle content m-b-md footer-height links"  >
    <b class="alert alert-primary" role="alert" >
        Hi! I am 
        <span style="font-size: 1.25rem;">
            <span style="color:#28a745">M</span><span style="color:#007bff">S</span><span style="color:black">&</span><span style="color:#ffc107">D</span><span style="color:#dc3545">S</span>. 
        </span> 
        I can help you find out what's going on, Just start a<form style="display: inline" action="{{url('dydx')}}" method="post">
                {{csrf_field()}}
                @if (Auth::guest())
                <input type="hidden" name="userid" value="Anonymous">
                @else
                <input type="hidden" name="userid" value="{{ Auth::user()->email }}">
                @endif
                <button class="btn btn-sm btn-outline-primary" type="submit"><strong>Symptom Assessment.</strong></button></form>  

        
    </b> 
    
</div>

<div>
    <div class="row mb-2">
        <div class="col-md-3">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
            <h3 class="mb-0">
                <a class="text-dark" href="{{url('dydx')}}">Worried about your health?</a>
            </h3>                  
            <p class="card-text mb-auto">talk to our expert health system to begin a symptom assessment.</p>
            <form action="{{url('dydx')}}" method="post">
                {{csrf_field()}}
                @if (Auth::guest())
                <input type="hidden" name="userid" value="Anonymous">
                @else
                <input type="hidden" name="userid" value="{{ Auth::user()->email }}">
                @endif
                <button type="submit" class="btn btn-success"><strong>Start chat</strong></button>
            </form>
            
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-0">
                <a class="text-dark" href="{{url('library')}}">Find safe health info</a>
                </h3>                  
                <p class="card-text mb-auto">Browse our condition library.</p>
                <a href="{{url('library')}}" class="btn btn-primary"><strong>Visit library</strong></a>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                    <a class="text-dark" href="{{url('profile')}}">Your health profile
                            
                    </a>
                    </h3>                  
                    <p class="card-text mb-auto">Add your personal information for personalised service.</p>
                    <form action="{{url('profile')}}" method="post">
                            {{csrf_field()}}
                            @if (Auth::guest())
                            <input type="hidden" name="userid" value="Anonymous">
                            @else
                            <input type="hidden" name="userid" value="{{ Auth::user()->email }}">
                            @endif
                            <button type="submit" class="btn btn-warning"><strong>Update profile</strong></button>
                        </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                    <a class="text-dark" href="{{url('911')}}">Emergency case</a>
                    </h3>                  
                    <p class="card-text mb-auto">Find closest healhcare provider closest to your location.</p>
                    <a href="{{url('911')}}" class="btn btn-danger"><strong>Hospital Search</strong></a>
                </div>
                </div>
            </div>
</div>

@endsection