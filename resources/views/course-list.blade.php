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
                        <li class="breadcrumb-item active">Course List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <a href="{{ route('course.create') }}" class="btn btn-block btn-success" role="button">Add Course</a>
            </div>
        </div>
    </div>
</section>

    <!-- Main content -->  
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Course List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.n</th>
                    <th>Course Name</th>
                    <th>Course Duration</th>
                    <th>Course Code</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($courses as $course)
                 
                  <tr>
                    <td>{{ $no++ }}</td> 
                    <td>{{$course->courseName }}</td>
                    <td>{{$course->courseDuration }}</td>
                    <td>{{$course->courseCode }}</td>    
                    <td>
                    <form action="{{ route('course.destroy',$course->id) }}" method="POST">
                        <a class="btn-sm" href="{{ route('course.show',$course->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn-sm" href="{{ route('course.edit',$course->id) }}"><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                      
                  </td>                 
                  </tr>
                  @endforeach
                 
                
                  </tbody>                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

     <!-- Page specific script -->
     <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    @endsection
