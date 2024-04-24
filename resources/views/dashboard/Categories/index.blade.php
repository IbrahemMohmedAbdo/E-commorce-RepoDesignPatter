@extends('dashboard.layout.master')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">



            <div class="card-body ">
                @if (session('msg'))
                    <div class="alert alert-success col-md-3" role="alert">
                        {{ session('msg') }}
                    </div>
                @endif




            <div class="col-lg-12 p-t-10">
                <div class="card-box">
                    <h2 class="card-title text-center">Categories Page</h2>
                    <div class="btn-group btn-group-justified m-b-10 text-left">
                        <a href="#">
                    <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                        </a></div>
                        <div class="btn-group btn-group-justified m-b-10 text-left">
                            <form action="#" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-custom waves-effect waves-light w-md m-b-5">Export</button>
                            </form>
                           </div>

                    <div class="btn-group btn-group-justified m-b-10 text-right">
                        <a href="{{ route('categories.create') }}">
                    <button type="button" class="btn btn-custom waves-effect waves-light w-md m-b-5">Add New Category</button>

                        </a></div>

                    <h4 class="header-title m-t-0 m-b-30"> Categories in database</h4>

                    <p class="text font-18 m-b-15">

                    </p>

                    <table class="table table table-hover m-0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th> Name</th>
                                <th>Description</th>
                                <th>Image</th>

                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if (isset($categories))
                                 @foreach ($categories as $category )
                                <td> {{ $category->id }}</td>
                                <td> {{ $category->name }}</td>
                                <td> {{ $category->description }}</td>
                                <td ><img src="{{ asset($category->image) }}" width= '200' height='200' class="img img-responsive" /></td>
                            <td >

                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('categories.show', [$category->id]) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    &nbsp;
                                    <a href="{{ route('categories.edit',[$category->id]) }}">
                                        <button type="button" class="btn btn-custom btn-bordred waves-effect waves-light w-sd m-b-3">Edit</button>
                                    </a>&nbsp;

                                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE', 'style' => 'display: inline-block']) !!}
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure you want to delete this Category?")']) !!}
                                    {!! Form::close() !!}

                                </div>
                            </td>
                            </tr>
                            @endforeach
@endif
                        </tbody>
                    </table>

                </div>
            </div><!-- end col -->

        </div> <!-- container -->

    </div> <!-- content -->



</div>




@endsection
