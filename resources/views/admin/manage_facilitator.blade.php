@extends('admin.layouts.admin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
         
          <!-- /.box -->
         
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Hover Export Data Table</h4>
              <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Age</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        @foreach ($facilitators as $facilitator)
                            <tr>
                                <td>{{$facilitator->id}}</td>
                                <td>{{$facilitator->name}}</td>
                                <td>{{$facilitator->email}}</td>
                                <td>61</td>
                                <td>
                                    <form action="{{action('FacilitatorController@destroy',$facilitator['id'])}}" method="POST" >
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

					</tbody>				  
					<tfoot>
						<tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Action</th>
							
						</tr>
					</tfoot>
				</table>
				</div>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

@endsection