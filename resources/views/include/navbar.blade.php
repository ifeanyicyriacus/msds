<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('')}}">
        <img src="{{url('assets/images/loading.gif')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        MS&DS
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <form style="display: inline" action="{{url('')}}" method="post">
                {{csrf_field()}}
                @if (Auth::guest())
                    <input type="email" hidden name="userid" value="Anonymous@Anonymous.com">
                @else
                    <input type="email" hidden name="userid" value="{{ Auth::user()->email }}">
                @endif
                <button class="nav-link btn btn-link" type="submit">Home <span class="sr-only">(Home Page)</span></button>
              </form>
        </li>
        <li class="nav-item">

            <form style="display: inline" action="{{url('dydx')}}" method="post">
                {{csrf_field()}}
                @if (Auth::guest())
                    <input type="email" hidden name="userid" value="Anonymous@Anonymous.com">
                @else
                    <input type="email" hidden name="userid" value="{{ Auth::user()->email }}">
                @endif
                <button class="nav-link btn btn-link" type="submit">Symptom Assessment.</button>
              </form>
              {{-- <a class="nav-link" href="{{url('dydx')}}">Symptoms Assessment<span class="sr-only">(current page)</span></a> --}}
          </li>
        <li class="nav-item">
                <a href="{{url('library')}}"><button class="nav-link btn btn-link">Library</button></a>
        </li>
        <li class="nav-item">
            <form style="display: inline" action="{{url('profile')}}" method="post">
                {{csrf_field()}}
                @if (Auth::guest())
                <input type="email" hidden name="userid" value="Anonymous@Anonymous.com">
                @else
                <input type="email" hidden name="userid" value="{{ Auth::user()->email }}">
                @endif          
                <button class="nav-link btn btn-link" type="submit">Profile</button>
              </form>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle btn btn-link" type="submit" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Other Services
          </button>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('911')}}">Emergency</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('about')}}">About</a>
            <a class="dropdown-item" href="{{url('FAQ')}}">FAQ</a>
            <a class="dropdown-item" href="{{url('TC')}}">Terms & Conditions</a>
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
      </ul>
      <form class="form-inline my-2 my-lg-0 pull-left" action="{{url('library')}}">
        <input name="condition" class="form-control mr-sm-2" type="search" placeholder="Search Condition library" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
        @if (Route::has('login'))
            @auth
                <a href="#" class="pull-right">
                    <div class="pull-left">
                        <strong class="pull-right">{{ Auth::user()->fname }}</strong><br>
                        <em class="pull-right">{{ Auth::user()->lname }}</em>
                    </div>
                    <div class="pull-right img-thumbnail"><img src="{{url('assets/images/avatar/male1.jpg')}}" height="35px" width="35px" alt="profile Picture"></div>
                </a>
                @else
                    <div href="#" class="pull-right">
                    <div class="pull-left">
                    <strong class="pull-right"><a href="{{ route('login') }}">Sign In</a></strong><br>
                    <em class="pull-right"><a href="{{ route('register') }}">Create an Account</a></em>
                    </div>
                    <div class="pull-right img-thumbnail"><img src="{{url('assets/images/avatar/male1.jpg')}}" height="35px" width="35px" alt="profile Picture"></div>
                    </div>
                    @endauth
                @endif

    </div>
  </nav>