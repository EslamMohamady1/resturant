<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li  class="btn btn-success">
                                @auth
                                <a href="{{url('/showcart')}}" >
                                Cart[{{$count}}] </a>                                   
                                @endauth   
                                @guest
                                    Cart[0]
                                @endguest
                                
                            
                           
                            
                            
                            </li>
                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <li><x-app-layout>
   
                                        </x-app-layout>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
  <div id="top" style="padding-top: 150px">
    <div style=" top:30px; right:-60px"  >
        <table style="bgcolor:rgba(128, 128, 128, 0); border:3px">
          <tr >
            <th style="padding-left: 50px;  " >Title</th>
            <th style="padding-left: 50px">Price</th>
            <th style="padding-left: 50px">Descreption</th>
            <th style="padding-left: 50px">Quantity</th>
            <th style="padding-left: 50px">Name</th>
            <th style="padding-left: 50px">Email</th>
            <th style="padding-left: 50px">FoodImage</th>
            <th style="padding-left: 50px ; ">Action</th>
            
          </tr>

        <form method="POST" action="{{url('orderconfirm')}}">
            @csrf
          @foreach ($data as $foods)
            <tr>
            <td style="padding-left: 50px ; ">
                <input type="text" name="foodname[]" value="{{$foods->title}}" hidden =""/>
                {{$foods->title}}
            </td>
              <td style="padding-left: 50px">
                <input type="text" name="price[]" value="{{$foods->price}}" hidden =""/>
                {{$foods->price}}
            </td>
              <td style="padding-left: 50px">{{$foods->description}}</td>
              <td style="padding-left: 50px">
                <input type="text" name="quantity[]" value="{{$foods->quantity}}" hidden =""/>
                {{$foods->quantity}}
            </td>
             @foreach ($datauser as $item)
                 
             @endforeach
             
              <td style="padding-left: 50px">
                <input type="text" name="name[]" value="{{$item->name}}" hidden =""/>
                {{$item->name}}
            </td>
              <td style="padding-left: 50px">{{$item->email}}</td>
           
              
              <th style="padding-left: 50px"><img  style="width: 250px; padding-bottom:50px" src="FoodImagefolder/{{$foods->image}}"/></th>
              
                <td style="padding-left: 50px; "><a href="{{url('/userdeletcart',$foods->id)}}">Delet</a></td>
                            
            </tr>
            <br/>
          @endforeach
       
        </table>
        <div id="order" align ="center">
            <input  class="btn btn-primary" type="button" value="Order"/>
        </div>
        <br/>
            <br/>
        <div id="appear" align ='center' style="display: none">
           
            
            <input type="number" name="phone" placeholder="Phone Number" />
            <br/>
            <br/>
            <input type="text" name="address" placeholder="Address" />
            <br/>
            <br/>
            <input class="btn btn-success" type="submit" />
            <input id="close" class="btn btn-danger" type="button" value="Close"/>
        </div>
        <br/>
    </form>
     </div>    
</div>

<script>
    $('#order').click(
        function(){
            $('#appear').show();
        });
        $('#close').click(
        function(){
            $('#appear').hide();
        });
</script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>