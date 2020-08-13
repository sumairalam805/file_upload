<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>MACH3BI | PDFAi</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    
   <style type="text/css">
     
      .tabPanels{
          display: flex;
          background-color: #ffffff;
          color: #333333;
          text-align: center;
          margin-top: 14px;
          box-sizing: border-box;
          font-family: sans-serif;
          font-size: 22px;
          border-radius: 4px;
          box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.2);
      }
      .tabPanels h3 {
        padding: 10px 0 10px 0;
      }
   </style>

</head>
<body>
    

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
            
            <ul class="navbar-item flex-row">
                <li class="nav-item align-self-center page-heading">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>MACH3BI | PDFAi</h3>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row search-ul">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>

            
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.php" class="nav-link">PDFAi</a>
                    </li>
                    <li class="nav-item toggle-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left sidebarCollapse"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    </li>
                </ul>
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="myfiles.php" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>My Files</span>
                            </div>
                            
                        </a>
                        
                    </li>

                    <li class="menu active">
                        <a href="#" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Data Type</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                            <li>
                                <a href="structured.php"> Structured </a>
                            </li>
                            <li>
                                <a href="document.php"> Document </a>
                            </li>
                            <li>
                                <a href="audio.php"> Audio </a>
                            </li>
                            <li>
                                <a href="video.php"> Video </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->
        
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    
                          <h4 style="text-align: center; width: 100%;">Welcome To The MACH3BI | PDFAi Files Uploading Portal.</h4>
                      
                  </div>
              </div>

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/script.js" type="text/javascript"></script>
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    

</body>
</html>