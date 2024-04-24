@extends('dashboard.layout.master')
@section('content')

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="btn-group btn-group-justified m-b-10 text-left">
                                <a href="{{route('users.index')}}">
                            <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                                </a></div>
                            <h4 class="header-title m-t-0 m-b-30">Edit User</h4>

                            <p class="text-muted font-13 m-b-15">

                            </p>
                            <form action={{route('users.update',[$user->id])}} id="addForm" method="POST" enctype="multipart/form-data">

                                   @method('PUT')
                                @csrf


                                <div class="">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value={{$user->name  }} required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value={{ $user->email }} required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value={{ $user->phone }} required autocomplete="phone" autofocus>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                    <div class="col-md-6">
                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  required autocomplete="image" autofocus>

                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>





                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            submit
                                        </button>
                                    </div>
                                </div>

                        </form>


                        </div>
                    </div><!-- end col -->

                </div> <!-- container -->

            </div> <!-- content -->


        </div>


@endsection
