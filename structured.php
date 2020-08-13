<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>MACH3BI | Structured</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
   <style type="text/css">
     
      .tabPanels{
          display: block;
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
        padding: 10px 0 20px 0;
      }
      .updaterow {
        box-sizing: border-box;
      }

      /* Create two equal columns that floats next to each other */
      .columnleft {
        float: left;
        width: 20%;
        padding: 10px;
        background-color: #ffffff;
        height: 600px;
      }
      .columnright {
        float: left;
        width: 20%;
        padding: 10px;
        background-color: #ffffff;
        height: 600px;
      }
      .columncenter {
        float: left;
        width: 60%;
        padding: 10px;
        background-color: #ffffff;
        height: 600px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
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
                    <div class="wrapper">
                          <nav>
                            <input type="radio" name="tab" id="myuploads" checked>
                            <input type="radio" name="tab" id="favourites">
                            <input type="radio" name="tab" id="tagtype">
                            <label for="myuploads" onclick="showPanel(0)" class="myuploads"><a href="#"><i class="fas fa-home"></i>Upload File</a></label>
                            <label for="favourites" onclick="showPanel(1)" class="favourites"><a href="#"><i class="far fa-comment"></i>Data</a></label>
                            <label for="tagtype" onclick="showPanel(2)" class="tagtype"><a href="#"><i class="far fa-envelope"></i>History</a></label>
                            <div class="tab"></div>
                            
                          </nav>
                            
                        <div class="tabPanels">



                            <div class="updaterow" id="uploadApp">
                                <div class="columnleft">
                                </div>
                                <div class="columncenter">
                                
                                <div style="font-size: 16px; line-height: normal; padding: 20px; background-color: #4CAF50; color: white; opacity: 0.83; transition: opacity 0.6s; margin-bottom: 15px;" v-if="successAlert">
                                    <a href="#" class="close" aria-label="close" @click="successAlert=false">&times;</a>
                                    {{ successMessage }}
                                </div>

                                <div style="font-size: 16px; line-height: normal; padding: 20px; background-color: #f44336; color: white; opacity: 0.83; transition: opacity 0.6s; margin-bottom: 15px;" v-if="errorAlert" >
                                    <a href="#" class="close" aria-label="close" @click="errorAlert=false">&times;</a>
                                    {{ errorMessage }}
                                </div>

                                  
                                   <h3 class="panel-title">Upload File</h3>
                                  
                               
                                  <div class="upload" >
                                      <input id="file" ref="file" type="file" style="display:none" multiple/>
                                      <p>Drag files here or <a id="fileInputButton" onclick="document.getElementById('file').click()"><span>Browse</span></a></p>
                                  </div>
                                  
                                  <span v-if="!file || !file.length">No files selected</span>
                                    <ul v-else>
                                      <li v-for="file in application" :key="file.name">{{application.file.name}}</li>
                                    </ul>
                                  <button type="button" @click="uploadFiles" class="btn btn-primary">Upload All</button>

                                  
                                  </div>

                                  <div class="columnright">
                                  </div>
                                  </div>
                                 
                                
                               
                                
                              <!--<div class="wrapper">
                                
                                <div class="upload" >
                                    <input id="file" ref="file" type="file" style="display:none" v-on:change="uploadImage()" multiple/>
                                    {{ fileName }}<p>Drag files here or <a id="fileInputButton" onclick="document.getElementById('file').click()">Browse</span></p>
                                </div>
                                <div style="display:block" v- class="uploaded uploaded--one">
                                  <i class="far fa-file-pdf"></i>
                                  <div class="file">
                                    <div class="file__name">
                                      <p v-if="file">{{ data.file }}</p>
                                      <i class="fas fa-times"></i>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:100%"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="uploaded uploaded--two">
                                  <i class="far fa-file-pdf"></i>
                                  <div class="file">
                                    <div class="file__name">
                                      <p>dolor_sit.pdf</p>
                                      <i class="fas fa-times"></i>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:80%"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="uploaded uploaded--three">
                                  <i class="far fa-file-pdf"></i>
                                  <div class="file">
                                    <div class="file__name">
                                      <p>amet_consectetur.pdf</p>
                                      <i class="fas fa-times"></i>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:60%"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>-->
                            
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
        var application = new Vue({
        el:'#uploadApp',
        data:{
          file:'',
          successAlert:false,
          errorAlert:false,
          uploadedfile:''
         },
         methods:{
          uploadFiles:function(){

           application.file = application.$refs.file.files[0];

           var formData = new FormData();

           formData.append('file', application.file);

           axios.post('upload.php', formData, {
            header:{
             'Content-Type' : 'multipart/form-data'
            }
           }).then(function(response){

            if(response.data.file == '')
            {
             application.errorAlert = true;
             application.successAlert = false;
             application.errorMessage = response.data.message;
             application.successMessage = ''
            }
            else
            {
             application.errorAlert = false;
             application.successAlert = true;
             application.errorMessage = '';
             application.successMessage = response.data.message;
             application.$refs.file.value = '';
            }
           });
          }
         },
        });
            
    </script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    

</body>
</html>