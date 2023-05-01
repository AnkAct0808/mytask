@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add To Do List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add To do List</li>
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add TO DO List Here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('todo.index') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">PROJECT/TASK</label>
                    <input type="text" name="protask" class="form-control" placeholder="protask">
                  </div>
                 
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1"> PRIORITY</label>
                    <input type="text" name="priority" class="form-control" placeholder="priority">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> DIFICULTY LEVEL</label>
                    <input type="text" name="level" class="form-control" placeholder="level">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1"> ASSIGN DATE</label>
                    <input type="date" name="assign" class="form-control" placeholder="assign">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> COMPLETE DATE</label>
                    <input type="date" name="cdate" class="form-control" placeholder="cdate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> TEAM NAME</label>
                    <input type="text" name="tname" class="form-control" placeholder="tname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> DEADLINE</label>
                    <input type="date" name="dline" class="form-control" placeholder="dline">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> NOTES</label>
                    <input type="text" name="notes" class="form-control" placeholder="notes">
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