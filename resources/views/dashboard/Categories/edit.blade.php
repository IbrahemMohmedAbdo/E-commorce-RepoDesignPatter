@extends('dashboard.layout.master')
@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="col-lg-12 p-t-10">
                            <div class="card-box">

                                <h3 class="card-title text-center">Edit Category</h3>
                                <br>
                                <div class="btn-group btn-group-justified m-b-10 text-right">
                                    <a href="{{ route('categories.index') }}">
                                <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                                    </a></div>

                                 {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT' ,'enctype' => 'multipart/form-data','class' => 'form']) !!}
                                  @csrf
                                  <div class="form-group">
                                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('description'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                                </div>


                                <div class="form-group">
                                    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
                                    {!! Form::file('image', ['class' => 'form-control-file']) !!}
                                    @if ($errors->has('image'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                                </div>

                                {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}

                                {!! Form::close() !!}


                            </div>
                        </div>


                        <!-- end row -->


                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->



            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


@endsection


