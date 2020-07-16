@section('meinmenu')
<div class="ui menu">
    <a class="header item" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>

    <div class="ui pointing dropdown link item">
        <span class="text">Add New</span>
        <i class="dropdown icon"></i>

        <div class="menu">
            <!-- Work Type menu -->
            <div class="item">
                <i class="dropdown icon"></i>
                <span class="text">Work Type</span>
                <div class="menu">
                    <a class="item" href="{{ route('worktype.create') }}">Add</a>
                    <a class="item" href="{{ route('worktype.index') }}">Edit</a>
                </div>
            </div>
            <!-- Workers -->
            <div class="item">
                <i class="dropdown icon"></i>
                <span class="text">Workers</span>
                <div class="menu">
                    <a class="item" href="{{ route('workers.create') }}">Add</a>
                    <div class="item">Edit</div>
                </div>
            </div>
            <div class="item">More on way :)</div>
        </div>
    </div>

    <!-- Right side menu button -->
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
                                                     document.getElementById('logout-form-topmenu').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form-topmenu" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

<!-- Left Sider bar menu for secreen less then 700px -->
<div class="ui sidebar left vertical menu accordion ">

    <!-- Admin user -->
    <div class="item ">
        <div class="title">
            {{ Auth::user()->name }}
            <i class="dropdown icon"></i>
        </div>
        <div class="content">
            <!-- USER Menu -->
            <div class="ui list">
                <div><a class="item" href="{{ route('register') }}">{{ __('Register') }}</a></div>
                <div><a class="item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <!-- Add work type & workers -->
    <div class=" item">
        <div class="ui styled">
            <div class="title">
                <i class="dropdown icon"></i>
                Add New
            </div>
            <div class="content">
                 <!-- Work Type dropmenu -->
                <div class="p-05 transition hidden">
                    <div class="title">
                        <i class="dropdown icon"></i>
                        Work Type
                    </div>
                    <div class="content menu">
                        <a class="item" href="{{ route('worktype.create') }}">Add</a>
                        <a class="item" href="{{ route('worktype.index') }}">Edit</a>
                    </div>

                </div>
                 <!-- workers dropmenu -->
                <div class="p-05 transition hidden">
                    <div class="title">
                        <i class="dropdown icon"></i>
                        Workers
                    </div>
                    <div class="content menu">

                    <a class="item" href="{{ route('workers.create') }}">Add</a>
                        <a class="item" href="#">
                            Edit
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <a class="item">More on Way :)</a>

</div>
