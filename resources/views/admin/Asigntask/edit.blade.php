@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Employee data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add employee data</li>
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
                <h3 class="card-title">Edit Employe data Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('admintask.update', $ap->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">EMPLOYEENAME</label>
                    <input type="text" name="employenames" id="employenames" class="form-control"  value="{{ $emp->employenames }}"  placeholder="employenames">
                  </div>
                 
                 
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">PROJECT NAME</label>
                    <input type="text" name="projectname" id="projectname" class="form-control"  value="{{ $ap->projectname}}"  placeholder="projectname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TASK</label>
                    <input type="text" name="task" id="task" class="form-control"  value="{{ $ap->task }}"  placeholder="task">
                  </div>
                
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">ASSIGN DATE</label>
                    <input type="date" name="assigndate" id="assigndate" class="form-control"  value="{{ $ap->assigndate }}"  placeholder="assigndate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">COMPLETE DATE</label>
                    <input type="date" name="completedate" id="completedate" class="form-control"  value="{{ $ap->completedate }}"  placeholder="completedate">
                  </div>
                  
                 
                  
                  
                  
                 </div>
                  <br>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
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