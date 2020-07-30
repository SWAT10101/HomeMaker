@extends('layouts.app')

@push('scriptsForCreateWorker')
  <script>
     $('#WorkTypeSelection').dropdown('set selected', {{old('WorkType')}}); // To select the old value
  </script>
@endpush


@section('content')
<div class="ui grid stackable mt-5">
    <div class="four wide column"></div>

    <div class="eight wide column">
        <h3 class="ui top  attached header center aligned">{{ __('New Worker') }}</h3>
        <div class="ui attached blue segment">
            <form class="ui form error success" method="post" action="{{ route('workers.store') }}">
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
                <div class="field required @error('First_Name') error @enderror ">
                    <label>{{ __('First Name') }}</label>
                    <input name="First_Name" type="text" value="{{ old('First_Name') }}" placeholder="First Name">
                    @if ($errors->has('First_Name'))
                    <div class="ui pointing prompt label transition  visible ">@error('First_Name')
                        {{ $message }}@enderror
                    </div>
                    @endif
                </div>
                <!-- Middle Name input -->
                <div class="field required @error('Middle_Name') error @enderror ">
                    <label>{{ __('Middle Name') }}</label>
                    <input name="Middle_Name" type="text" value="{{ old('Middle_Name') }}" placeholder="Middle Name">
                    @if ($errors->has('email'))
                    <div class="ui pointing prompt label transition  visible ">@error('Middle_Name') {{ $message }}
                        @enderror
                    </div>
                    @endif
                </div>
                <!-- Last Name input -->
                <div class="field required @error('Last_Name') error @enderror">
                    <label>{{ __('Last Name') }}</label>
                    <input name="Last_Name" type="text" value="{{ old('Last_Name') }}" placeholder="Last Name">
                    @if ($errors->has('Last_Name'))
                    <div class="ui pointing prompt label visible ">@error('Last_Name') {{ $message }} @enderror</div>
                    @endif
                </div>
                <!-- Phone Number input -->
                <div class="field required @error('Phone_Number') error @enderror">
                    <label>{{ __('Phone Number') }}</label>
                    <div class="ui right labeled input">
                        <label for="Phone_Number" class="ui label">+02</label>
                        <input name="Phone_Number" type="number" placeholder="Phone Number"  value="{{ old('Phone_Number') }}">
                        @if ($errors->has('Phone_Number'))
                        <div class="ui pointing prompt label visible ">@error('Phone_Number') {{ $message }} @enderror
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Work Type input -->
                <div class="field required @error('WorkType') error @enderror">
                    <label>{{ __('Work Type') }}</label>
                    <div class="ui selection dropdown" id="WorkTypeSelection">
                        <input type="hidden" name="WorkType">
                        <i class="dropdown icon"></i>
                        <div class="default text">---</div>
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

