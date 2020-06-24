@extends('layouts.app')



@push('scripts')
<script type="text/javascript">
    $('.message .close') // for close alert 
        .on('click', function () {
            $(this)
                .closest('.message')
                .transition('fade');
        });

    for (var i = 0; i < 2; i++) { // for animation for pointing
        $('.pointing.prompt').transition('tada');
    }
    console.log("TEST");

</script>
@endpush


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-6">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ui stackable three column grid ">

    <div class="column">
        <div class="ui segment">1</div>
    </div>

    <div class="column centered">
        <div class="ui card container center ">
            <div class="content">
                <div class="header">{{ __('Login') }}</div>
            </div>
            <div class="content">
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

                    <div class="field required @error('email') error @enderror ">
                        <label>{{ __('E-Mail Address') }}</label>
                        <input name="email" type="text" value="{{ old('email') }}" placeholder="Email" class="">
                        @if ($errors->has('email'))
                        <div class="ui pointing prompt label transition  visible ">@error('email') {{ $message }} @enderror</div>
                        @endif
                    </div>
                    <div class="field required @error('password') error @enderror">
                        <label>{{ __('Password') }}</label>
                        <input name="password" type="password" placeholder="Password">
                        @if ($errors->has('password'))
                        <div class="ui pointing prompt label visible ">@error('password') {{ $message }} @enderror</div>
                        @endif
                    </div>
                    <div class="field ">
                        <div class="ui checkbox">
                            <input name="remember" type="checkbox" class="hidden"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label> {{ __('Remember Me') }} </label>
                        </div>
                    </div>
                    <div class="extra content">
                        <button class="ui button" type="submit">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="column">
        <div class="ui segment">3</div>
    </div>
</div>


@endsection
