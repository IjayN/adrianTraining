@extends('admin.facilitator.layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <!-- right column -->
     <div class="col-xl-6 col-lg-6">
       <!-- Horizontal Form -->
       <div class="box box-solid box-primary">
         <div class="box-header with-border">
           <h4 class="box-title">Add Programme</h4>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
     <form class="form-horizontal form-element" method="post" action="{{action('ProgrammeController@store')}}">
           @csrf
           <div class="box-body">
             <div class="form-group row">
               <label for="Programme" class="col-sm-2 control-label">Programme Name</label>

               <div class="col-sm-10">
                 <input type="text" class="form-control" id="programme" placeholder="Add Programme" name="programme">
               </div>
             </div>


           </div>
           <!-- /.box-body --><div class="box-footer">
             <button type="submit" class="btn btn-outline-info btn-block">{{__('Add Programme')}}</button>
           </div>

           <!-- /.box-footer -->
         </form>
       </div>
       <!-- /.box -->
</div>

            <div class="col-xl-6 col-lg-12">
      <div class="box">
        <div class="box-header with-border">
          <h5 class="box-title">My Programmes</h5>
        </div>
        <div class="box-body p-0">
          <div class="media-list media-list-hover media-list-divided">
              @foreach($programme as $programmes)
                  <a class="media media-single" href="#">
                      <div class="media-body">
                          <h6>{{$programmes->programme}}</h6>
                          <small class="text-fader">{{$programmes->id}}</small>
                      </div>
                  </a>
                  @endforeach

        </div>

      </div>
      </div>



            </div>
        </section>
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->
@endsection
