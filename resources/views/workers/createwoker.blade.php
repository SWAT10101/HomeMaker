@extends('layouts.app')


@section('content')
<div class="ui grid stackable mt-5">
    <div class="four wide column"></div>

    <div class="eight wide column">
        <h3 class="ui top  attached header center aligned">{{ __('New Worker') }}</h3>
        <div class="ui attached blue segment">
            <form class="ui form error success" method="#" action="#">
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
                <!-- First Name input -->
                <div class="field required @error('FirstName') error @enderror ">
                    <label>{{ __('First Name') }}</label>
                    <input name="name" type="text" value="{{ old('FirstName') }}" placeholder="First Name">
                    @if ($errors->has('FirstName'))
                    <div class="ui pointing prompt label transition  visible ">@error('FirstName')
                        {{ $message }}@enderror
                    </div>
                    @endif
                </div>
                <!-- Middle Name input -->
                <div class="field required @error('MiddleName') error @enderror ">
                    <label>{{ __('Middle Name') }}</label>
                    <input name="text" type="text" value="{{ old('MiddleName') }}" placeholder="Middle Name">
                    @if ($errors->has('email'))
                    <div class="ui pointing prompt label transition  visible ">@error('MiddleName') {{ $message }}
                        @enderror
                    </div>
                    @endif
                </div>
                <!-- Last Name input -->
                <div class="field required @error('LastName') error @enderror">
                    <label>{{ __('Last Name') }}</label>
                    <input name="password" type="text" placeholder="Last Name">
                    @if ($errors->has('LastName'))
                    <div class="ui pointing prompt label visible ">@error('LastName') {{ $message }} @enderror</div>
                    @endif
                </div>
                <!-- Phone Number input -->
                <div class="field required @error('PhoneNumber') error @enderror">
                    <label>{{ __('Phone Number') }}</label>
                    <div class="ui right labeled input">
                        <label for="PhoneNumber" class="ui label">+02</label>
                        <input name="PhoneNumber" type="number" placeholder="Phone Number" id="PhoneNumber"
                            value="{{ old('PhoneNumber') }}">
                        @if ($errors->has('PhoneNumber'))
                        <div class="ui pointing prompt label visible ">@error('PhoneNumber') {{ $message }} @enderror
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Work Type input -->
                <div class="field required @error('WorkType') error @enderror">
                    <label>{{ __('Work Type') }}</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="WorkType">
                        <i class="dropdown icon"></i>
                        <div class="default text">Work Type</div>
                        <div class="menu">
                            @foreach($worktypes as $worktype)
                               <div class="item" data-value="{{ $worktype->id }}">{{ $worktype->worktype }}</div>
                            @endforeach
                        </div>
                    </div>
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
