@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">

                        <h2>{{ $user->name }}</h2>

                            <form novalidate method="post" action="{{ route('avatar') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">

                                        <div class="form-group">
                                            <h5>File Input Field <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="avatar" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
