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

                            <a
                                @if(Cache::has('user-is-online-' . $user->id))
                                    class="avatar avatar-lg status-success"
                                @else
                                    class="avatar avatar-lg status-danger"
                                @endif
                            href="">
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
                                <a class="media-action lead" href="777" data-toggle="tooltip" title="Login"  onclick="event.preventDefault();document.getElementById('login-{{ $user->id }}').submit();"><i
                                        class="fa fa-key"></i></a>
                                <form id="login-{{ $user->id }}" action="{{ route('xxx') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="userId" value="{{ $user->id }}">
                                </form>

                                <a class="media-action lead" href="{{ route('user.show', $user->id) }}" data-toggle="tooltip" title="Profile"><i
                                        class="fa fa-fw fa-user"></i></a>

                                <div class="btn-group">
                                    <a class="media-action lead" href="#" data-toggle="dropdown"><i
                                            class="ion-android-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('user.show', $user->id) }}"><i
                                                class="fa fa-fw fa-user"></i> Profile</a>
                                        <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}"><i
                                                class="fa fa-fw fa-edit"></i> Edit</a>
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
