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
            <li class="breadcrumb-item active">{{ $img->login }}</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif

        <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <h4 class="card-title">{{ $img->name }}</h4>
                        <img class="card-img-top" src="{{ Storage::url('avatar/'.$img->imgpath)}}">
                        <form action="{{ route('dropzone') }}" class="dropzone" method="post" enctype="multipart/form-data">
                            @csrf
                        </form>
                        <div class="card-body">
                            <strong class="card-title">{{ $img->image }}</strong>
                            <p class="card-text">{{ $img->created_at }}</p>
                            <form action="{{ route('deletefile', $img->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
            <div class="col-md-8 offset-md-2">

            </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/dropzone.js') }}"></script>


@endsection
