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
            <li class="breadcrumb-item active">Users</li>
        </ol>
    </section>
@endsection

@section('content')
    @include('admin.user-management.users-list')
@endsection


