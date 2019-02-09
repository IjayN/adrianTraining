@extends('admin.facilitator.layouts')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Editors
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Editors</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Add Questions<br>
                                <small>Bootstrap html5 editor</small>
                            </h4>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                        title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form method="post" action="/add_questions">
                                @csrf
                                <div class="form-group">
                                    <h5>Title</h5>
                              <div class="controls">
                                        <input type="text" name="title" class="form-control" placeholder="" required data-validation-required-message="This field is required" > </div>
                                </div>

                                <div class="form-group">
                                  <h5>Select Programme</h5>
                                      <select class="form-control" name="programme">
                                          @foreach($programme as $programmes)
                                          <option value="{{$programmes->programme}}">{{$programmes->programme}}</option>
                                          @endforeach
                                       </select>
                                  </div>

                                <textarea class="textarea" placeholder="Input Question Here" name="body"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                <button class="btn btn-block btn-success" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.box -->


                    <div class="box">
                        <div class="box-header">
                            </h4>
                            <!-- tools box -->
                            <!-- <div class="pull-right box-tools">
                                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                        title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div> -->
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" hidden>

                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                    </textarea>
                            </form>
                        </div>
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
