@section('meinmenu')
<div class="ui menu">
    <a class="header item" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>
    <div class="right menu">
        <button id="sidemenu" class="ui button item sidermanubt">
            <i class="sidebar icon"></i>
            Menu
        </button>

        <div class="ui item dropdown">
            <div class="text"> {{ Auth::user()->name }}</div>
            <i class="dropdown icon"></i>
            <div class="menu">
                <!-- add New admin -->
                <a class="item" href="{{ route('register') }}">{{ __('Register') }}</a>
                <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </div>
        </div>
    </div>

</div>
@endsection


<div class="ui sidebar left vertical menu">

    <div class="item ui accordion">
        <div class="title">
            {{ Auth::user()->name }}
            <i class=" dropdown icon arrow-right"></i>
        </div>
        <div class="content">
            <!-- USER Menu -->
            <div class="ui list">
                <div><a class="item" href="{{ route('register') }}">{{ __('Register') }}</a></div>
                <div><a class="item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></div>
            </div>
        </div>
    </div>
    <a class="item">Home</a>
    <a class="item"> Friends</a>
    <a class="item">History </a>

</div>