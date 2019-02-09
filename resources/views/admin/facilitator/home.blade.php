@extends('admin.facilitator.layouts')
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
                            <h4><a href="#">Total Facilitators</a></h4>

                            <h3><strong>{{$facilitator}}</strong></h3>

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
                            <h4><a href="#">Total Users</a></h4>

                            <h3><strong>{{$user}}</strong></h3>
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
                            <h4><a href="#">Total Questions Posted</a></h4>
                            <h3><strong>40</strong></h3>
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

        <div class="row" style="margin-left: 100px;">
        <div class="col-xl-3 col-md-6 col">
            <div class="info-box bg-info">
                <span class="info-box-icon push-bottom"><i class="ion ion-ios-pricetag-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Clients</span>
                    <span class="info-box-number">450</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 45%"></div>
                    </div>
                    <span class="progress-description">
                    45% Increase in 28 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
            <div class="info-box bg-success">
                <span class="info-box-icon push-bottom"><i class="ion ion-ios-eye-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Visits</span>
                    <span class="info-box-number">15,489</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <span class="progress-description">
                    40% Increase in 28 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
            <div class="info-box bg-primary">
                <span class="info-box-icon push-bottom"><i class="ion ion-ios-cloud-download-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Downloads</span>
                    <span class="info-box-number">55,005</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 85%"></div>
                    </div>
                    <span class="progress-description">
                    85% Increase in 28 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    </div>
    <!-- /.content-wrapper -->
@endsection
