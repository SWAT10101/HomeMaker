<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"> </script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

@stack('scriptsforloginpage')

<script>
        $('.ui.sidebar')
        .sidebar('setting', {
                             dimPage             : false,
                             transition          : 'overlay',
                             mobileTransition    : 'uncover',})
        .sidebar('attach events', '#sidemenu');

    

    $('.ui.dropdown').dropdown();

    $('.ui.accordion').accordion({ exclusive: false });
    $('.ui.vertical.accordion').accordion({ exclusive: false });
</script>
