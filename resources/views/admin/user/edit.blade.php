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
              <form id="quickForm" action="{{ route('use.update', $emp->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">EMPLOYEENAME</label>
                    <input type="text" name="employename" id="employename" class="form-control"  value="{{ $emp->employename }}"  placeholder="employename">
                  </div>
                 
                 
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">CONTACT</label>
                    <input type="text" name="phone" id="phone" class="form-control"  value="{{ $emp->phone }}"  placeholder="phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">DOB</label>
                    <input type="date" name="dob" id="dob" class="form-control"  value="{{ $emp->dob }}"  placeholder="dob">
                  </div>
                
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">ADDRESS</label>
                    <input type="text" name="address" id="address" class="form-control"  value="{{ $emp->address }}"  placeholder="address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL</label>
                    <input type="text" name="email" id="email" class="form-control"  value="{{ $emp->email }}"  placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PASSWORD</label>
                    <input type="text" name="password" id="password" class="form-control"  value="{{ $emp->password }}"  placeholder="password">
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