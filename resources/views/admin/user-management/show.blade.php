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
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </section>
@endsection

@section('content')
    @include('admin.user-management.user-profile')
@endsection
