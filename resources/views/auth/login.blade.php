@extends('layouts.app')


@if ($errors->any())
@push('scriptsforloginpage')
<script type="text/javascript">
    $('.message .close') // for close alert 
        .on('click', function () {
            $(this)
                .closest('.message')
                .transition('fade');
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
                </form>
            </div>
    

    </div>

    <div class="four wide column"></div>
</div>


@endsection
