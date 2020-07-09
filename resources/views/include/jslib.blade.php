<!-- Scripts -->
<script type="text/javascript" src="{{ secure_asset ('js/app.js') }}"> </script>



@stack('scriptsforloginpage')
@stack('scriptsforregisterpage')

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
