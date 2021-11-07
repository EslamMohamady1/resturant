
<x-app-layout>

</x-app-layout>

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
        <div style=" top:30px; right:-60px"  >
            <table style="bgcolor:rgba(128, 128, 128, 0); border:3px">
              <tr >
                <th style="padding: 20px;  color:whitesmoke" >Name</th>
                <th style="padding: 20px">Email</th>
                <th style="padding: 20px">Phone</th>
                <th style="padding: 20px">Guest Number</th>
                <th style="padding: 20px">Date</th>
                <th style="padding: 20px">Time</th>
                <th style="padding: 20px">Message</th>
                <th style="padding: 20px">Action</th>
                
              </tr>
              @foreach ($showreservation as $order)
                <tr>
                  <td style="padding: 20px ;">{{$order->name}}</td>
                  <td style="padding: 20px">{{$order->email}}</td>
                  <td style="padding: 20px">{{$order->phone}}</td>
                  <td style="padding: 20px">{{$order->guest}}</td>
                  <td style="padding: 20px">{{$order->date}}</td>
                  <td style="padding: 20px">{{$order->time}}</td>
                  <td style="padding: 20px">{{$order->message}}</td>
                  
                  
                    <td><a href="{{url('/deletfood',$order->id)}}">Delet</a></td>
                    <td><a href="{{url('/updatefood',$order->id)}}">Delet</a></td>
                                  
                </tr>
              @endforeach
           
            </table>
         </div>    
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


