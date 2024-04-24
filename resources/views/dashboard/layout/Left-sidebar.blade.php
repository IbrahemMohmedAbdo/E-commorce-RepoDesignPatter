<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{asset('assets/images/users/5907.jpg')}}" title="Mat Helme" class="img-circle" style="width: 82px">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">Welcome</a> </h5>
            <ul class="list-inline p-t-10">


                <li>
                    <a href="#" class="text-custom">
                        <i class="zmdi zmdi-settings"></i>
                    </a>

                    <form method="POST" action="#">
                        @csrf
                        <button type="submit" class="zmdi zmdi-power" style="color: red">logout</button>
                      </form>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-center font-18 menu-title">Modules</li>

                <div class="btn-group btn-group-justified m-b-10 text-center">
                    <a href="{{ route('categories.index') }}">
                <button type="button" class="btn btn-custom waves-effect waves-light w-md m-b-5">All Category</button>

                    </a></div>

                <div class="btn-group btn-group-justified m-b-10 text-center">
                    <a href="{{ route('products.index') }}">
                <button type="button" class="btn btn-custom waves-effect waves-light w-md m-b-5">All Product</button>

                    </a></div>













            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>


