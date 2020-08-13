<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>MACH3BI | My Files</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
     
   

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
                    <div class="wrapper">
                          <nav>
                            <input type="radio" name="tab" id="myuploads" checked>
                            <input type="radio" name="tab" id="favourites">
                            <input type="radio" name="tab" id="tagtype">
                            <label for="myuploads" onclick="showPanel(0)" class="myuploads"><a href="#"><i class="fas fa-home"></i>My Uploads</a></label>
                            <label for="favourites" onclick="showPanel(1)" class="favourites"><a href="#"><i class="far fa-comment"></i>Favourites</a></label>
                            <label for="tagtype" onclick="showPanel(2)" class="tagtype"><a href="#"><i class="far fa-envelope"></i>Tag/Type</a></label>
                            <div class="tab"></div>
                            
                          </nav>
                          
                          <div class="tabPanels">
                              <h3>My Uploads</h3>
                            <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Sale</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Shaun</td>
                                        <td>10/08/2020</td>
                                        <td>320</td>
                                        <td class="text-center"><span class="badge badge-success">Approved</span></td>
                                        <td class="text-center">
                                            
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alma</td>
                                        <td>11/08/2020</td>
                                        <td>420</td>
                                        <td class="text-center"><span class="badge badge-primary">In Progress</span></td>
                                        <td class="text-center">
                                            
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kelly</td>
                                        <td>12/08/2020</td>
                                        <td>130</td>
                                        <td class="text-center"><span class="badge badge-warning">Suspended</span></td>
                                        <td class="text-center">
                                            
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Xavier</td>
                                        <td>13/08/2020</td>
                                        <td>260</td>
                                        <td class="text-center"><span class="badge badge-danger">Blocked</span></td>
                                        <td class="text-center">
                                            
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Andy</td>
                                        <td>14/08/2020</td>
                                        <td>99</td>
                                        <td class="text-center"><span class="badge badge-secondary">On leave</span></td>
                                        <td class="text-center">                                                    
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Justin</td>
                                        <td>15/08/2020</td>
                                        <td>555</td>
                                        <td class="text-center"><span class="badge badge-info">Pending</span></td>
                                        <td class="text-center">                                                    
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Amy</td>
                                        <td>16/08/2020</td>
                                        <td>300</td>
                                        <td class="text-center"><span class="badge badge-dark">Deleted</span></td>
                                        <td class="text-center">
                                            
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                            
                          </div>
                          <div class="tabPanels">Tab 2:Content</div>
                          <div class="tabPanels">Tab 3:Content</div>
                    </div>
                    
                        
                      </div>
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