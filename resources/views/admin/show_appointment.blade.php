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
                                <th style="padding: 10px;">Customer name</th>
                                <th style="padding: 10px;">Email</th>
                                <th style="padding: 10px;">Phone</th>
                                <th style="padding: 10px;">Doctor Name</th>
                                <th style="padding: 10px;">Date</th>
                                <th style="padding: 10px;">Message</th>
                                <th style="padding: 10px;">Status</th>
                                <th style="padding: 10px;">Approved</th>
                                <th style="padding: 10px;">Canceled</th>
                                <th style="padding: 10px;">Send Mail</th>
                            </tr>

                            @foreach ($data as $data)

                            <tr align="center" style="background-color: skyblue">
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->doctor}}</td>
                                <td>{{$data->date}}</td>
                                <td>{{$data->message}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('approved',$data->id)}}">Approved</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{url('canceled',$data->id)}}">Canceled</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{url('email_view',$data->id)}}">Send Mail</a>
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
