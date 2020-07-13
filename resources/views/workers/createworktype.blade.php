@extends('layouts.app')

@if ($errors->any())
@push('scriptsforworktypepage')
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


    console.log("Load Done");

</script>
@endpush
@endif

@section('content')
<div class="ui grid stackable mt-5">
    <div class="four wide column"></div>

    <div class="eight wide column">
        <h3 class="ui top  attached header center aligned">{{ __('New Work Type') }}</h3>
        <div class="ui attached blue segment">
            <form class="ui form error success" method="POST" action="{{ route('worktype.store') }}">
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
                <!-- Work Type input -->
                <div class="field required @error('worktype') error @enderror ">
                    <label>{{ __('Work Type') }}</label>
                    <input name="worktype" type="text" value="{{ old('worktype') }}" placeholder="Work Type">
                    @if ($errors->has('worktype'))
                    <div class="ui pointing prompt label transition  visible ">@error('worktype')
                        {{ $message }}@enderror
                    </div>
                    @endif
                </div>
                                 
                <!-- submit button -->
                <div class="extra content">
                    <button class="ui primary button" type="submit">{{ __('Add') }}</button>
                </div>
            </form>


        </div>

    </div>

    <div class="four wide column"></div>

</div>

@endsection
