
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
              <div style="position: relative; top:60px; right:-60px" >
                <table style="bgcolor:rgba(128, 128, 128, 0); border:3px">
                  <tr >
                    <th style="padding: 30px; color:whitesmoke" >name</th>
                    <th style="padding: 30px">email</th>
                    <th style="padding: 30px">action</th>
                  </tr>
                  @foreach ($data as $user)
                    <tr>
                      <td style="padding: 30px">{{$user->name}}</td>
                      <td style="padding: 30px">{{$user->email}}</td>
                      
                      @if ($user->usertype=='0')
                        <td><a href="{{url('/deletuser',$user->id)}}">Delet</a></td>
                        @else
                          <td>not allowed</td>
                      @endif                    
                    </tr>
                  @endforeach
               
                </table>
             </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
   @include('admin.scriept')
    <!-- End custom js for this page -->
  </body>
</html>
