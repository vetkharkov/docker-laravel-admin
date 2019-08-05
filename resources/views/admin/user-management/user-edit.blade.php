<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
    <!-- Basic Forms -->
    <div class="box box-solid bg-dark">
        <div class="box-header with-border">
            <h4 class="box-title">Form Edit User {{ $user->login }}</h4>
            <h6 class="box-subtitle">{{ $user->name }}
                <a class="text-warning" href="{{ route('user.show', $user->id) }}">{{ $user->lastname }}</a>
            </h6>

            <ul class="box-controls pull-right">
                <li><a class="box-btn-close" href="#"></a></li>
                <li><a class="box-btn-slide" href="#"></a></li>
                <li><a class="box-btn-fullscreen" href="#"></a></li>
            </ul>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <form novalidate method="post" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <h5>Login <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="login" class="form-control"
                                               value="{{ $user->login }}"
                                               required
                                               data-validation-required-message="This field is required"
                                               minlength="6"
                                               maxlength="15">
                                    </div>
                                    <div class="form-control-feedback">
                                        {{--<small>Add <code>required</code> attribute to field for required validation.</small>--}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control"
                                               value="{{ $user->name }}"
                                               required
                                               data-validation-required-message="This field is required">
                                    </div>
                                    <div class="form-control-feedback">
                                        {{--<small>Add <code>required</code> attribute to field for required validation.</small>--}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Email Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control"
                                               value="{{ $user->email }}"
                                               required
                                               data-validation-required-message="This field is required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Password Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control"
                                               value="{{ $user->password }}"
                                               required
                                               data-validation-required-message="This field is required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password_confirmation"
                                               value="{{ $user->password }}"
                                               data-validation-match-match="password"
                                               class="form-control" required>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-12">

                                <div class="form-group">
                                    <h5>File Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="avatar" class="form-control">
                                        <input type="hidden" name="old_images" class="form-control" value="{{ $user->avatar }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Avatar</h5>
                                    <div class="controls">
                                        <div class="box box-body">
                                            <div class="flexbox align-items-center">
                                                <div class="flexbox">
                                                    <label class="toggler toggler-yellow">
                                                        <input type="checkbox" checked="">
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                    <h4 class="ml-10 mb-0"><a href="">{{ $user->name }}</a></h4>
                                                </div>

                                            </div>

                                            <div class="text-center pt-15">
                                                <a href="#" class="pull-left">
                                                    <img class="avatar avatar-xxl rounded" src="{{ '/uploads/avatars/' . $user->avatar }}" alt="{{ $user->name }}">
                                                </a>
                                                <h5 class="user-info mt-0 mb-5">{{ $user->login }}</h5>
                                                <p class="user-info mt-0 mb-5"><i class="fa fa-envelope pr-15"></i> {{ $user->email }}</p>
                                                <p class="user-info mt-0 mb-10"><i class="fa fa-phone pr-15"></i> +1 123 456 7890</p>
                                                <div class="gap-items user-social font-size-16">
                                                    <a class="text-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="text-instagram" href="#"><i class="fa fa-instagram"></i></a>
                                                    <a class="text-google" href="#"><i class="fa fa-google"></i></a>
                                                    <a class="text-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
