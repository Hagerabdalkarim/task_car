<!DOCTYPE html>
<html lang="en">
  <head>
    @include("Admin.includes.head")
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
              <i class="fa fa-car"></i></i> <span>Rent Car Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include("Admin.includes.info")
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include("Admin.includes.sidebar_menu")
				
					<!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include("Admin.includes.top_nav")
        <!-- /top navigation -->

        <!-- page content -->
       @yield("content")
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
      </div>
    </div>
@include("Admin.includes.footer")
  
  </body>
</html>