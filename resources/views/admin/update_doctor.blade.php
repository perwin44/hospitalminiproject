<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
@include('admin.css')

<style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->

     @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">

                    @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" aria-hidden="true" data-dismiss="alert">x</button>

                        {{session()->get('message')}}

                    </div>

                    @endif

                    <div class="container" align="center" style="padding: 100px;">

                        <form action="{{url('edit_doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div style="padding: 15px;">
                                <label>Doctor Name</label>
                                <input style="color: black" type="text" name="name" value="{{$data->name}}">
                            </div>

                            <div style="padding: 15px;">
                                <label>Phone</label>
                                <input style="color: black" type="number" name="phone" value="{{$data->phone}}">
                            </div>

                            <div style="padding: 15px;">
                                <label>Speciality</label>
                                <input style="color: black" type="text" name="speciality" value="{{$data->speciality}}">
                            </div>

                            <div style="padding: 15px;">
                                <label>Room</label>
                                <input style="color: black" type="text" name="room" value="{{$data->room}}">
                            </div>

                            <div style="padding: 15px;">
                                <label>Old Image</label>
                                <img style="height: 150px;width:100px;" src="doctorimage/{{$data->image}}">
                            </div>

                            <div style="padding: 15px;">
                                <label>Change Image</label>
                                <input type="file" name="file">
                            </div>

                            <div style="padding: 15px;">
                                <input type="submit" class="btn btn-primary">
                            </div>

                        </form>

                    </div>














                </div>
            </div>
        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
