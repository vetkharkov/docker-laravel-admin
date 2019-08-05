@extends('layouts.admin')

@section('css')
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('content-header')
    <section class="content-header">
        <h1>
            Users List
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}"><i class="fa fa-user"></i> Users</a></li>
            <li class="breadcrumb-item active">Form upload image</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('dropzone') }}" class="dropzone" method="post" enctype="multipart/form-data">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/dropzone.js') }}"></script>
@endsection
