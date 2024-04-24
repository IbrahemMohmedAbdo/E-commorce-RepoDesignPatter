@extends('dashboard.layout.master')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="btn-group btn-group-justified m-b-10 text-left p-t-10">
                <a href="{{route('users.index')}}">
            <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                </a></div>

                <div class="card text-center "  >



                <div class="text-xl-start card-box" style="height:70vh">

                    <div>
                        <img src="{{ asset($user->image) }}" class="img-circle thumb-xl img-thumbnail m-b-10 " alt="profile-image">

                        <p class="text-muted font-13 m-b-30">

                        </p>

                        <div class="text-left  m-b-0 col-xs-12">
                            <p class="text font-16 m-t-5 "><strong>Full Name  :</strong> <span class="p-0"> {{$user->name}}</span></p>
                            <br>
                            <p class="text font-16 m-t-5 "><strong>Mobile  :</strong><span class="p-0 ">{{$user->phone}}</span></p>
                            <br>
                            <p class="text font-16 m-t-5 "><strong>Email  :</strong> <span class="p-0">{{$user->email}}</span></p>



                        </div>

                    </div>

                </div>
            </div>
        </div>








        </div> <!-- container -->

    </div> <!-- content -->



</div>




@endsection
