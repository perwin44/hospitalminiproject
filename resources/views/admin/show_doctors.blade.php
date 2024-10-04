<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
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


                    <div align="center" style="padding: 50px;">

                        <table>

                            <tr style="background-color: rgb(56, 41, 1)">
                                <th style="padding: 10px;">Doctor name</th>
                                <th style="padding: 10px;">Phone</th>
                                <th style="padding: 10px;">Speciality</th>
                                <th style="padding: 10px;">Room No</th>
                                <th style="padding: 10px;">Image</th>
                                <th style="padding: 10px;">Delete</th>
                                <th style="padding: 10px;">Update</th>
                            </tr>

                            @foreach ($data as $data)

                            <tr align="center" style="background-color: skyblue;">
                                <td>{{$data->name}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->speciality}}</td>
                                <td>{{$data->room}}</td>
                                <td>
                                    <img style="height: 100px;width:100px;" src="/doctorimage/{{$data->image}}">
                                </td>
                                <td>
                                    <a onclick="return confirm('Are You sure to delete this?')" class="btn btn-danger" href="{{url('delete_doctor',$data->id)}}">Delete</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{url('update_doctor',$data->id)}}">Update</a>
                                </td>
                            </tr>
                            @endforeach

                        </table>


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
