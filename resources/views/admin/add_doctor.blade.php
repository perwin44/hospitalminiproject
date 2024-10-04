<!DOCTYPE html>
<html lang="en">
  <head>
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

                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div style="padding: 15px;">
                            <label>Doctor Name</label>
                            <input type="text" style="color: black" name="name" placeholder="Write the name" required>
                        </div>

                        <div style="padding: 15px;">
                          <label>Phone</label>
                          <input type="number" style="color: black" name="phone" placeholder="Write the number" required>
                      </div>

                      <div style="padding: 15px;">
                        <label>Speciality</label>
                       <select name="speciality" style="color: black;width:200px;" required>
                        <option>--Select--</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Gynecologist">Gynecologist</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="Orthopedic">Orthopedic</option>
                       </select>
                    </div>

                    <div style="padding: 15px;">
                      <label>Room Number</label>
                      <input type="text" style="color: black" name="room" placeholder="Write the room number" required>
                  </div>

                  <div style="padding: 15px;">
                    <label>Doctor Image</label>
                    <input type="file" name="file" style="color: black" required>
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
