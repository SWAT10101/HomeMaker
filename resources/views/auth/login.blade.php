@extends('layouts.app')


@if ($errors->any())
@push('scriptsforloginpage')
<script type="text/javascript">
    $('.message .close') // for close alert 
        .on('click', function () {
            $(this).closest('.message').transition('fade');
        });

    for (var i = 0; i < 2; i++) { // for animation for pointing
        // setTimeout funaction for delay with 2500 milescound 
        setTimeout(function () {
            $('.pointing.prompt').transition('tada'); // <-- anmtion for pointing class
        }, 2500 * i);
    }


    console.log("TEST");

</script>
@endpush
@endif



@section('content')


<div class="ui grid stackable mt-5">

    <div class="four wide column"></div>

    <div class="eight wide column">
        <h3 class="ui top attached header">{{ __('Login') }}</h3>
        <div class="ui attached segment">

            <form class="ui form error success" method="POST" action="{{ route('login') }}">
                @csrf

                @if ($errors->any())
                <div class="ui floating error message">
                    <i class="close icon"></i>
                    <div class="header">We had some issues</div>
                    <ul class="list">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- Email input -->
                <div class="field required @error('email') error @enderror ">
                    <label>{{ __('E-Mail Address') }}</label>
                    <input name="email" type="text" value="{{ old('email') }}" placeholder="Email" class="">
                    @if ($errors->has('email'))
                    <div class="ui pointing prompt label transition  visible ">@error('email') {{ $message }}
                        @enderror</div>
                    @endif
                </div>
                <!-- Password input -->
                <div class="field required @error('password') error @enderror">
                    <label>{{ __('Password') }}</label>
                    <input name="password" type="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <div class="ui pointing prompt label visible ">@error('password') {{ $message }} @enderror</div>
                    @endif
                </div>
                <!-- Check box input -->
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label>{{ __('Remember Me') }}</label>
                    </div>
                </div>
                <!-- submit button -->
                <div class="extra content">
                    <button class="ui button" type="submit">{{ __('Login') }}</button>
                </div>

                <i class="american sign language interpreting icon"></i>
                <i class="assistive listening systems icon"></i>
                <i class="audio description icon"></i>
                <i class="blind icon"></i>
                <i class="braille icon"></i>
                <i class="closed captioning icon"></i>
                <i class="closed captioning outline icon"></i>
                <i class="deaf icon"></i>
                <i class="low vision icon"></i>
                <i class="phone volume icon"></i>
                <i class="question circle icon"></i>
                <i class="question circle outline icon"></i>
                <i class="sign language icon"></i>
                <i class="tty icon"></i>
                <i class="universal access icon"></i>
                <i class="wheelchair icon"></i>

                <i class="ban icon"></i>
                <i class="barcode icon"></i>
                <i class="bars icon"></i>
                <i class="beer icon"></i>
                <i class="bell icon"></i>
                <i class="bell outline icon"></i>
                <i class="bell slash icon"></i>
                <i class="bell slash outline icon"></i>
                <i class="bug icon"></i>
                <i class="bullhorn icon"></i>
                <i class="bullseye icon"></i>
                <i class="calculator icon"></i>
                <i class="calendar icon"></i>
                <i class="calendar outline icon"></i>
                <i class="calendar alternate icon"></i>
                <i class="calendar alternate outline icon"></i>
                <i class="calendar check icon"></i>
                <i class="calendar check outline icon"></i>
                <i class="calendar minus icon"></i>
                <i class="calendar minus outline icon"></i>
                <i class="calendar plus icon"></i>
                <i class="calendar plus outline icon"></i>
                <i class="calendar times icon"></i>
                <i class="calendar times outline icon"></i>
                <i class="certificate icon"></i>
                <i class="check icon"></i>
                <i class="check circle icon"></i>
                <i class="check circle outline icon"></i>
                <i class="check square icon"></i>
                <i class="check square outline icon"></i>
                <i class="circle icon"></i>
                <i class="circle outline icon"></i>
                <i class="clipboard icon"></i>
                <i class="clipboard outline icon"></i>
                <i class="clone icon"></i>
                <i class="clone outline icon"></i>
                <i class="cloud icon"></i>
                <i class="cloud download icon"></i>
                <i class="cloud upload icon"></i>
                <i class="coffee icon"></i>
                <i class="cog icon"></i>
                <i class="cogs icon"></i>
                <i class="copy icon"></i>
                <i class="copy outline icon"></i>
                <i class="cut icon"></i>
                <i class="database icon"></i>
                <i class="dot circle icon"></i>
                <i class="dot circle outline icon"></i>
                <i class="download icon"></i>
                <i class="edit icon"></i>
                <i class="edit outline icon"></i>
                <i class="ellipsis horizontal icon"></i>
                <i class="ellipsis vertical icon"></i>
                <i class="envelope icon"></i>
                <i class="envelope outline icon"></i>
                <i class="envelope open icon"></i>
                <i class="envelope open outline icon"></i>
                <i class="eraser icon"></i>
                <i class="exclamation icon"></i>
                <i class="exclamation circle icon"></i>
                <i class="exclamation triangle icon"></i>
                <i class="external alternate icon"></i>
                <i class="external square alternate icon"></i>
                <i class="eye icon"></i>
                <i class="eye slash icon"></i>
                <i class="eye slash outline icon"></i>
                <i class="file icon"></i>
                <i class="file outline icon"></i>
                <i class="file alternate icon"></i>
                <i class="file alternate outline icon"></i>
                <i class="filter icon"></i>
                <i class="flag icon"></i>
                <i class="flag outline icon"></i>
                <i class="flag checkered icon"></i>
                <i class="folder icon"></i>
                <i class="folder outline icon"></i>
                <i class="folder open icon"></i>
                <i class="folder open outline icon"></i>
                <i class="frown icon"></i>
                <i class="frown outline icon"></i>
                <i class="hashtag icon"></i>
                <i class="heart icon"></i>
                <i class="heart outline icon"></i>
                <i class="history icon"></i>
                <i class="home icon"></i>
                <i class="i cursor icon"></i>
                <i class="info icon"></i>
                <i class="info circle icon"></i>
                <i class="language icon"></i>
                <i class="magic icon"></i>
                <i class="meh icon"></i>
                <i class="meh outline icon"></i>
                <i class="microphone icon"></i>
                <i class="microphone slash icon"></i>
                <i class="minus icon"></i>
                <i class="minus circle icon"></i>
                <i class="minus square icon"></i>
                <i class="minus square outline icon"></i>
                <i class="paste icon"></i>
                <i class="pencil alternate icon"></i>
                <i class="plus icon"></i>
                <i class="plus circle icon"></i>
                <i class="plus square icon"></i>
                <i class="plus square outline icon"></i>
                <i class="qrcode icon"></i>
                <i class="question icon"></i>
                <i class="question circle icon"></i>
                <i class="question circle outline icon"></i>
                <i class="quote left icon"></i>
                <i class="quote right icon"></i>
                <i class="redo icon"></i>
                <i class="redo alternate icon"></i>
                <i class="reply icon"></i>
                <i class="reply all icon"></i>
                <i class="rss icon"></i>
                <i class="rss square icon"></i>
                <i class="save icon"></i>
                <i class="save outline icon"></i>
                <i class="search icon"></i>
                <i class="search minus icon"></i>
                <i class="search plus icon"></i>
                <i class="share icon"></i>
                <i class="share alternate icon"></i>
                <i class="share alternate square icon"></i>
                <i class="share square icon"></i>
                <i class="share square outline icon"></i>
                <i class="shield alternate icon"></i>
                <i class="sign in alternate icon"></i>
                <i class="sign out alternate icon"></i>
                <i class="signal icon"></i>
                <i class="sitemap icon"></i>
                <i class="sliders horizontal icon"></i>
                <i class="smile icon"></i>
                <i class="smile outline icon"></i>
                <i class="sort icon"></i>
                <i class="sort alphabet down icon"></i>
                <i class="sort alphabet up icon"></i>
                <i class="sort amount down icon"></i>
                <i class="sort amount up icon"></i>
                <i class="sort down icon"></i>
                <i class="sort numeric down icon"></i>
                <i class="sort numeric up icon"></i>
                <i class="sort up icon"></i>
                <i class="star icon"></i>
                <i class="star outline icon"></i>
                <i class="star half icon"></i>
                <i class="star half outline icon"></i>
                <i class="sync icon"></i>
                <i class="sync alternate icon"></i>
                <i class="thumbs down icon"></i>
                <i class="thumbs down outline icon"></i>
                <i class="thumbs up icon"></i>
                <i class="thumbs up outline icon"></i>
                <i class="times icon"></i>
                <i class="times circle icon"></i>
                <i class="times circle outline icon"></i>
                <i class="toggle off icon"></i>
                <i class="toggle on icon"></i>
                <i class="trash icon"></i>
                <i class="trash alternate icon"></i>
                <i class="trash alternate outline icon"></i>
                <i class="trophy icon"></i>
                <i class="undo icon"></i>
                <i class="undo alternate icon"></i>
                <i class="upload icon"></i>
                <i class="user icon"></i>
                <i class="user outline icon"></i>
                <i class="user circle icon"></i>
                <i class="user circle outline icon"></i>
                <i class="wifi icon"></i>
            </form>
        </div>


    </div>

    <div class="four wide column"></div>
</div>


@endsection
