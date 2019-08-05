<section class="content">
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">User registration</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-user-plus font-size-40 text-primary"></span>
                    <a href=" {{ route('user.index') }}"><span class=" font-size-30">{{ $users->count() }}</span></a>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">Unactivated Ads</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-warning text-danger font-size-40"></span>
                    <span class=" font-size-30">0000</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">Activated Ads</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-picture-o text-info font-size-40"></span>
                    <span class=" font-size-30">0000</span>
                </div>
            </div>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">Listed Companies</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-building font-size-40 text-success"></span>
                    <span class=" font-size-30">0000</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</section>
