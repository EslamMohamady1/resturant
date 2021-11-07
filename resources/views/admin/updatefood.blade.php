
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public" />
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
              <div style="position: relative; top:100px; right:-60px" >
                <form method="POST" action="{{ url('/adminupdatefood',$data->id) }}" enctype="multipart/form-data">
                    @csrf
        
                    <div>
                        <x-jet-label for="Title" value="{{ __('Title') }}" />
                        <x-jet-input id="Title" style="color: black" class="block mt-1 w-full" type="text" name="Title" value="{{$data->title}}" required autofocus autocomplete="Title" />
                    </div>
                    
        
                    <div class="mt-4">
                        <x-jet-label for="Price" value="{{ __('Price') }}" />
                        <x-jet-input id="Price" style="color: black" class="block mt-1 w-full" type="text" name="Price" value="{{$data->price}}" required />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="FoodImage" value="{{ __('FoodImage') }}" />
                        <x-jet-input style="color: black" id="FoodImage" class="block mt-1 w-full" type="file" name="FoodImage" required autocomplete="FoodImage" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="Descreption" value="{{ __('Descreption') }}" />
                        <x-jet-input style="color: black" id="Descreption" class="block mt-1 w-full" type="text" name="Descreption" value="{{$data->description}}" required autocomplete="Descreption" />
                    </div>
        
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
        
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-jet-button class="ml-4">
                            {{ __('UpdateFood') }}
                        </x-jet-button>
                        <div >
                            <img width="300px" height="100px" src="FoodImagefolder/{{$data->image}}"/>
                        </div>
                    </div>
                </form>

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
