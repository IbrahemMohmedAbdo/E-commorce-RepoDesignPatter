@extends('dashboard.layout.anti-master')
@section('admin')
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="#" class="logo"><span>Dashboard</span></a>
                <h5 class="text-muted m-t-0 font-600"></h5>
            </div>
        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="{{route('save.admin.login')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('msg'))
                                <div class="alert alert-warning" role="alert">
                                    {{ session('msg') }}
                                </div>
                            @endif
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" required="" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="#" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card-box-->


        </div>
        <!-- end wrapper page -->

@endsection

