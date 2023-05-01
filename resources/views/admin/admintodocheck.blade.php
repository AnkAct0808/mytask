@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Our TO DO LIST </h3>
          <div class="text-right">
          <!-- <button class="pull-right btn-success btn"><a class="text-white" href="{{ route('todo.create') }}">ADD TO DO List data</a></button>  -->
          </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>id</th>
              <th>PROJECT/TASK</th>
                <th>PRIORITY</th>
                <th>DIFICULTY LEVEL</th>
               <th>ASSIGN DATE</th>
               <th>COMPLETE DATE </th>
               <th>TEAM NAME </th>
               <th>DEADLINE </th>
               <th>NOTES</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ctd as $key=> $temp )
           
              <tr>
                
                <td>{{ $temp->id }}</td>
                <td>{{ $temp->protask }}</td>
                <td>{{ $temp->priority }}</td>
                <td>{{ $temp->level }}</td>
                <td>{{ $temp->assign }}</td>
                <td>{{ $temp->cdate }}</td>
                <td>{{ $temp->tname }}</td>
                <td>{{ $temp->dline }}</td>
                <td>{{ $temp->notes }}</td> 
               
                <td>
                <form action="{{ route('todo.destroy', $temp->id) }}" method="POST" >
                <a href="{{ route('todo.edit', $temp->id) }}"> <i class="fa fa-cloud"></i></a>
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