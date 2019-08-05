@extends('layouts.admin')

@section('content-header')
    <section class="content-header">
        <h1>
            Users List
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}"><i class="fa fa-user"></i> Users</a></li></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </section>
@endsection

@section('content')
    @include('admin.user-management.user-edit')
@endsection

@section('js')
    <!-- Form validator JavaScript -->
    <script src="{{ asset('fab-admin/main/js/pages/validation.js') }}"></script>
    <script>
        !function (window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>
@endsection
