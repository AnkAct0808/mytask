@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Our Assign project </h3>
          <div class="text-right">
          <!-- <button class="pull-right btn-danger btn"><a class="text-white" href="{{ route('admintask.create') }}">Assign project</a></button>  -->
          </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.no</th>
              <th>EMPLOYEENAME</th>
                <th>PROJECTNAME</th>
                <th>TASK </th>
               <th>ASSIGN DATE</th>
               <th>COMPLETE DATE </th>
                 
             
              
               <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cap as $key=> $temp )
                @if (Auth::user()->id==$temp->employenames) 
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $temp->employenames}}</td>
                <td>{{ $temp->projectname }}</td>
                <td>{{ $temp->task }}</td>
                <td>{{ $temp->assigndate }}</td>
                <td>{{ $temp->completedate }}</td>
               
               
                <td>
                <form action="{{ route('admintask.destroy', $temp->id) }}" method="POST" >
                <a href="{{ route('admintask.edit', $temp->id) }}"> <i class="fa fa-cloud"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none"> <i class="fa fa-trash text-danger"></i></button>
                            </form>
                          </td>
                        </tr>
                        @endif
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