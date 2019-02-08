@extends('admin.layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Facilitator
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active">Form Validation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     <!-- Basic Forms -->
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h6 class="box-subtitle text-white">Bootstrap Form Validation check the <a href="" class="text-danger">official website </a></h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">

            	<form method="post" action="/register_facilitator" novalidate>
                @csrf
					<div class="form-group">

						<div class="controls">
							<input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
						<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
					</div>
					<div class="form-group">
						<h5>Email Field <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
					</div>
					<div class="form-group">
						<h5>Password Input Field <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
					</div>
					<div class="form-group">
						<h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
					</div>
					<div class="text-xs-right">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</form>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection
