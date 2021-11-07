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
      
        <div id="top" style="padding-top: 150px">
            <div style=" top:30px; right:-60px"  >
                <table style="bgcolor:rgba(128, 128, 128, 0); border:3px">
                  <tr >
                    <th style="padding-left: 50px;  " >Food Name</th>
                    <th style="padding-left: 50px">Price</th>
                    
                    <th style="padding-left: 50px">Quantity</th>
                    <th style="padding-left: 50px">Name</th>
                    <th style="padding-left: 50px">Address</th>
                    <th style="padding-left: 50px">Phone</th>
                    <th style="padding-left: 50px">Total Price</th>
                    
                  </tr>
        
                
                  @foreach ($data as $foods)
                    <tr>
                    <td style="padding-left: 50px ; ">
                        
                        {{$foods->foodname}}
                    </td>
                      <td style="padding-left: 50px">
                        
                        {{$foods->price}}$
                    </td>
                      
                      <td style="padding-left: 50px">
                        
                        {{$foods->quantity}}
                    </td>
                    
                     
                      <td style="padding-left: 50px">
                        
                        {{$foods->name}}
                    </td>
                      <td style="padding-left: 50px">{{$foods->address}}</td>
                      <td style="padding-left: 50px">{{$foods->phone}}</td>
                      <td style="padding-left: 50px">{{$foods->price * $foods->quantity}}$</td>
                      
                                    
                    </tr>
                    <br/>
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
