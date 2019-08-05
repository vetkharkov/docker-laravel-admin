<section class="content">
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="box">
                <div class="box-body">
                    <div class="contact-page-aside">
                        <ul class="list-style-none font-size-16">
                            <li class="box-label"><a href="{{ route('user.index') }}">All User
                                    <span>{{ $count }}</span></a></li>
                            <li class="divider"></li>
                            <li><a class="text-success" href="javascript:void(0)">Online <span
                                        class="text-success">{{ $countActive }}</span></a></li>
                            <li><a class="text-danger" href="javascript:void(0)">Offline <span
                                        class="text-danger">{{ $count-$countActive }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /. box -->
        </div>

        <div class="col-lg-9 col-12">
            <div class="box">
                <div class="media-list media-list-divided media-list-hover">
                    @foreach($users as $user)
                        <div class="media align-items-center">
                            @if(Cache::has('user-is-online-' . $user->id))
                                <span class="badge badge-dot badge-success"></span>
                            @else
                                <span class="badge badge-dot badge-danger"></span>
                            @endif

                            <a class="avatar avatar-lg status-success" href="{{ route('allfile') }}">
                                <img src="{{ '/uploads/avatars/' . $user->avatar }}" alt="{{ $user->name }}">
                            </a>

                            <div class="media-body">
                                <p>
                                    <a href="{{ route('user.edit', $user->id) }}"><strong>{{ $user->name }}</strong></a>
                                    <small class="sidetitle">{{ $user->login }}</small>
                                </p>
                                <p>{{ $user->email }}</p>

                                <nav class="nav mt-2">
                                    <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                                    <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                                </nav>
                            </div>

                            <div class="media-right gap-items">
                                <a class="media-action lead" href="#" data-toggle="tooltip" title="Orders"><i
                                        class="ti-shopping-cart"></i></a>
                                <a class="media-action lead" href="#" data-toggle="tooltip" title="Receipts"><i
                                        class="ti-receipt"></i></a>
                                <div class="btn-group">
                                    <a class="media-action lead" href="#" data-toggle="dropdown"><i
                                            class="ion-android-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('user.show', $user->id) }}"><i
                                                class="fa fa-fw fa-user"></i> Profile</a>
                                        <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}"><i
                                                class="fa fa-fw fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" href="{{ route('showimages', $user->id) }}"><i class="fa fa-fw fa-image"></i> Images</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                            <i class="fa fa-fw fa-remove"></i> Remove
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <nav class="mt-15 pb-10">
                    {{ $users->links() }}
                </nav>

            </div>
        </div>

    </div>


</section>
<!-- /.content -->
