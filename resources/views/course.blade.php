@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Course</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Course</li>
                </ol>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <a href="{{ route('course.index') }}" class="btn btn-block btn-success" role="button">Course List</a>
            </div>
        </div>
    </div>
</section>
<!-- Main content -->

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">New Course Registration Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('course.store') }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtCourseName">Course Name</label>
                                <input type="text" class="form-control" id="txtCourseName" name="txtCourseName" placeholder="Enter course name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtCourseDuration">Course Duration</label>
                                <input type="text" class="form-control" id="txtCourseDuration" name="txtCourseDuration" placeholder="Enter course duration">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtCourseCode">Course Code</label>
                                <input type="text" class="form-control" id="txtCourseCode" name="txtCourseCode" placeholder="Enter course code">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (left) -->
</div>
<!-- /.row -->

@endsection