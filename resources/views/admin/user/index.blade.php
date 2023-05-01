@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Our employee Data</h3>
          <div class="text-right">
          <button class="pull-right btn-danger btn"><a class="text-white" href="{{ route('use.create') }}">ADD Employee data</a></button> 
          </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.no</th>
              <th>EMPLOYEENAME</th>
                <th>PHONE</th>
                <th>DOB</th>
               <th>ADDRESS</th>
               <th>EMAIL </th>
               <!-- <th>PASSWORD </th> -->
             
              
               <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($emp as $key=> $temp )
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $temp->employename }}</td>
                <td>{{ $temp->phone }}</td>
                <td>{{ $temp->dob }}</td>
                <td>{{ $temp->address }}</td>
                <td>{{ $temp->email }}</td>
                <!-- <td>{{ $temp->password }}</td> -->
               
                <td>
                <form action="{{ route('use.destroy', $temp->id) }}" method="POST" >
                <a href="{{ route('use.edit', $temp->id) }}"> <i class="fa fa-cloud"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none"> <i class="fa fa-trash text-danger"></i></button>
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
  </div>
</div>
  @endsection