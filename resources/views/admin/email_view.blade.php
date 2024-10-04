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


                <div class="container" align="center" style="padding-top: 50px;">

                    <form action="{{url('send_email',$data->id)}}" method="POST">
                        @csrf

                        <div style="padding: 15px;">
                            <label>Greeting</label>
                            <input type="text" style="color: black" name="greeting"  required>
                        </div>

                        <div style="padding: 15px;">
                          <label>Body</label>
                          <input type="text" style="color: black" name="body"  required>
                      </div>



                    <div style="padding: 15px;">
                      <label>Action Text</label>
                      <input type="text" style="color: black" name="actiontext" required>
                  </div>

                  <div style="padding: 15px;">
                    <label>Action Url</label>
                    <input type="text" style="color: black" name="actionurl" required>
                </div>

                <div style="padding: 15px;">
                    <label>End Part</label>
                    <input type="text" style="color: black" name="endpart" required>
                </div>



                <div style="padding: 15px;">

                  <input type="submit" style="color: black" class="btn btn-success">
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
