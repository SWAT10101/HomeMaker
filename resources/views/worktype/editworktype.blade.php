@extends('layouts.app')


@push('scriptsForDeleteWorkTypeItem')

@foreach ($workersTypes as $workersType)
<script>
    $("#delete{{$workersType->id}}").click(function () {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'ui green button',
                cancelButton: 'ui red button',
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            width: 600,
            padding: '3em',
            background: '#38485F',
            backdrop:  'rgba(0, 0, 0, 0.4)',
            title: 'Are you sure?',
            html: "You won't to delete <b>{{$workersType->worktype}}</b> !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true,
            heightAuto: false, // false becouse not compatible with project layout
        }).then((result) => {
            if (result.value) {
                $("#deleteform{{$workersType->id}}").submit();  // if clik on confirm button it will sunmit the delete form
            } else if (result.dismiss === Swal.DismissReason.cancel) {

                swalWithBootstrapButtons.fire({
                    width: 600,
                    padding: '3em',
                    background: '#38485F',
                    backdrop:  'rgba(0, 0, 0, 0.4)',
                    heightAuto: false, // false becouse not compatible with project layout
                    icon: 'error',
                    title: 'Cancelled',
                    text: 'Your imaginary file is safe :)',
                })
            }
        });
    });

</script>
@endforeach

@endpush


@section('content')
<div class="ui grid stackable mt-5">
    <div class="three wide column"></div>

    <div class="ten wide column">
        <h3 class="ui top attached header center aligned">
            Editing Work Type
        </h3>
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
                    @foreach ($workersTypes as $workersType)
                    <tr>
                        <td>{{$workersType->worktype}}</td>
                        <td>{{$workersType->created_at}}</td>
                        <td>{{$workersType->updated_at}}</td>
                        <td>
                            <a class="small ui basic blue button icon" href="{{ route('worktype.edit', $workersType->id) }}">
                                <i class="edit outline icon"></i>

                            </a>

                            <a class="small ui negative basic button icon" id="{{ 'delete' . $workersType->id}}">
                                <i class="trash alternate outline icon"></i>

                            </a>

                            <form action="{{ route('worktype.destroy', $workersType) }}" method="post" id="{{ 'deleteform' . $workersType->id }}">
                                @csrf
                                @method('delete')
                            </form>
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
