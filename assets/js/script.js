var tabButtons=document.querySelectorAll(".wrapper .myuploads .favourites .tagtype");
      var tabPanels=document.querySelectorAll(".wrapper .tabPanels");

      function showPanel(panelIndex) {
          tabButtons.forEach(function(node){
              node.style.backgroundColor="";
              node.style.color="";
          });
          
          tabPanels.forEach(function(node){
              node.style.display="none";
          });
          tabPanels[panelIndex].style.display="block";
      }
      showPanel(0);