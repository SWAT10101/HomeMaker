@auth()
    @include('navbars.navs.auth')
@endauth

@guest()
    @include('navbars.navs.guest')
@endguest