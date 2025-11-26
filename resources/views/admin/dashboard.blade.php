@extends('layouts.admin')

@section('favicon')

@stop

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mind Re-wire Dashboard</title>
@stop

@section('css')
    <link rel="stylesheet" href="{{ version_url('assets/admin/css/dashboard.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('content')
    <div class="main_dashboard_body client_dashboard dashboard_wrapper">
        <h1 class="MainHeading">Dashboard</h1>

        <div class="ProfileSection">
            <div class="ProfileImgBox">
                <img src="{{ url('assets/images/common-images/logo_mindrewire.png') }}" alt="Logo" />
            </div>
            <div class="ProfileDetails">
                <div>
                    <h1>Hello, {{ auth()->user()->name }}</h1>
                    <h4>Welcome back!</h4>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer_script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.form-select').select2({
            selectionCssClass: "my-select2",
            dropdownCssClass: "my-select2-dropdown",
            placeholder: function() {
                return $(this).data('placeholder');
            },
        });
    </script>
@stop
