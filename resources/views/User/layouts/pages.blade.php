<!doctype html>
<html lang="en">

  <head>
 @include('User.includes.head')
  </head>

  <body>

   <!-- header -->
    
  @include('User.includes.header')

   <!-- end_header -->

   @yield('content')
   
   <!-- section_rent_car -->

  @include('User.includes.rent')

   <!-- end_section_rent_car -->


   <!-- footer -->

  @include('User.includes.footer')

   <!-- end_footer -->
  
   <!-- footer.js -->

  @include('User.includes.footerJs')

  <!-- end_footer.js -->
  </body>

</html>