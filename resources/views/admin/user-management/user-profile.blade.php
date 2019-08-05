<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box card-inverse bg-img"
                 style="background-image: url({{ asset('fab-admin/images/gallery/full/image-bg.jpg') }}); padding-top: 200px">
                <div class="flexbox align-items-center px-20" data-overlay="4">
                    <div class="flexbox align-items-center mr-auto">
                        <a href="{{ route('user.edit', $user->id) }}">
                            <img class="avatar avatar-xl avatar-bordered"
                                 src="{{ '/uploads/avatars/' . $user->avatar }}" alt="{{ $user->name }}">
                        </a>
                        <div class="pl-10 d-none d-md-block">
                            <h5 class="mb-0"><a class="hover-primary text-white" href="">{{ $user->name }}</a></h5>
                            <span>{{ $user->login }}</span>
                        </div>
                    </div>

                    <ul class="flexbox flex-justified text-center py-20">
                        <li class="px-10">
                            <span class="opacity-60">Followers</span><br>
                            <span class="font-size-20">9.6K</span>
                        </li>
                        <li class="px-10">
                            <span class="opacity-60">Following</span><br>
                            <span class="font-size-20">9845</span>
                        </li>
                        <li class="pl-10">
                            <span class="opacity-60">Tweets</span><br>
                            <span class="font-size-20">8456</span>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Profile Image -->
            <div class="box">
                <div class="box-body box-profile">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="profile-user-info">
                                <p>Email :<span class="text-gray pl-10">{{ $user->email }}</span></p>
                                <p>Phone :<span class="text-gray pl-10"></span></p>
                                <p>Address :<span class="text-gray pl-10"></span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="profile-user-info">
                                <p class="margin-bottom">Social Profile</p>
                                <div class="user-social-acount">
                                    <button class="btn btn-circle btn-social-icon btn-facebook"><i
                                            class="fa fa-facebook"></i></button>
                                    <button class="btn btn-circle btn-social-icon btn-twitter"><i
                                            class="fa fa-twitter"></i></button>
                                    <button class="btn btn-circle btn-social-icon btn-instagram"><i
                                            class="fa fa-instagram"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
        <!-- /.row -->

</section>
<!-- /.content -->
