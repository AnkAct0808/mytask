@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign project data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> assign project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Add Assign data Here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('admintask.index') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">employename</label>
                    <select class="form-control" name="employenames">
                     <option>SELECT EMPLOYENAME</option>
                     @foreach ($ap as $temp)
                     <option value="{{ $temp->id }}">{{ $temp->employename }}</option>
                     @endforeach
                   </select>
                  </div>
                 <div>
                 
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">PROJECT</label>
                    <input type="text" name="projectname" class="form-control" placeholder="projectname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> TASK</label>
                    <input type="text" name="task" class="form-control" placeholder="task">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1"> ASSIGN DATE</label>
                    <input type="date" name="assigndate" class="form-control" placeholder="assigndate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> COMPLETE DATE</label>
                    <input type="date" name="completedate" class="form-control" placeholder="completedate">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection