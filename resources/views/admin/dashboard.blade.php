@extends('admin.layouts.admin')
@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-4">
                    <div class="box">


                      <div class="box-body">
                        <p class="text-success text-uppercase">Nature</p>
                        <h4><a href="#">Beautiful Image Blog Post</a></h4>
         <br>
                        <br>
                        <hr class="my-0">

                        <div class="flexbox align-items-center mt-15">
                          <small>1 minutes ago</small>

                          <a class="text-muted" href="#">
                            <i class="ion-chatbox"></i>
                            <span>{{$facilitator}}</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- /.col -->
                <div class="col-xl-4">
                    <div class="box">


                      <div class="box-body">
                        <p class="text-success text-uppercase">Nature</p>
                        <h4><a href="#">Beautiful Image Blog Post</a></h4>
         <br>
                        <br>
                        <hr class="my-0">

                        <div class="flexbox align-items-center mt-15">
                          <small>14 minutes ago</small>

                          <a class="text-muted" href="#">
                            <i class="ion-chatbox"></i>
                            <span>{{$user}}</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- /.col -->
                <div class="col-xl-4">
                    <div class="box">


                      <div class="box-body">
                        <p class="text-success text-uppercase">Nature</p>
                        <h4><a href="#">Beautiful Image Blog Post</a></h4>
         <br>
                        <br>
                        <hr class="my-0">

                        <div class="flexbox align-items-center mt-15">
                          <small>14 minutes ago</small>

                          <a class="text-muted" href="#">
                            <i class="ion-chatbox"></i>
                            <span>4</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- /.col -->
              </div>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
