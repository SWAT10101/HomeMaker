@extends('layouts.app')


@section('content')
<div class="ui grid stackable mt-5">
    <div class="three wide column"></div>

    <div class="ten wide column">
        <h5 class="ui  top attached header">
            Editing Work Type
        </h5>
        <div class="ui green attached segment">
            <table class="ui center aligned celled table">
                <thead>
                    <tr>
                        <th>{{__('Work Type')}}</th>
                        <th>{{__('Created At')}}</th>
                        <th>{{__('Update At')}}</th>
                        <th>{{__('Operations')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($workstypes as $worktype)
                    <tr>
                        <td>{{$worktype->worktype}}</td>
                        <td>{{$worktype->created_at}}</td>
                        <td>{{$worktype->updated_at}}</td>
                        <td>

                            <button class="small ui basic blue button">
                                <i class="edit outline icon"></i>
                                Edit
                            </button>
                            <button class="small ui basic red button">
                                <i class="trash alternate outline icon"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>


    </div>


    <div class="three wide column"></div>

</div>

@endsection
