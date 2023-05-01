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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Employe data Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('use.update', $td->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">PROJECT/TASK</label>
                    <input type="text" name="protask" id="protask" class="form-control"  value="{{ $td->protask }}"  placeholder="protask">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">PRIORITY</label>
                    <input type="text" name="priority" id="phone" class="form-control"  value="{{ $td->priority }}"  placeholder="priority">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">DIFICULTY LEVEL</label>
                    <input type="text" name="level" id="level" class="form-control"  value="{{ $td->level }}"  placeholder="level">
                  </div>
                
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">ASSIGN DATE</label>
                    <input type="date" name="assign" id="assign" class="form-control"  value="{{ $td->assign }}"  placeholder="assign">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">COMPLETE DATE</label>
                    <input type="date" name="cdate" id="cdate" class="form-control"  value="{{ $td->cdate }}"  placeholder="cdate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TEAM NAME</label>
                    <input type="text" name="tname" id="tname" class="form-control"  value="{{ $td->tname }}"  placeholder="tname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">DEADLINE</label>
                    <input type="date" name="dline" id="dline" class="form-control"  value="{{ $td->dline }}"  placeholder="dline">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NOTES</label>
                    <input type="text" name="notes" id="notes" class="form-control"  value="{{ $td->notes }}"  placeholder="tname">
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