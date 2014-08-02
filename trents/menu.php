
<?php include('Header.php'); ?>



<section class="menu">

  
   <div class="menuViewer">
  <script type="text/javascript" id="-menuplatform-widget" src="http://opentable.menuplatform.com/menuwidget/mp.widget.opentable.v1.0.js?rid=103437&amp;no-style=true&amp;show-currency=true&amp;medium=web"></script><div id="-menuplatform-widget-widget-instance"><div class="locu-widget-wrapper" id="LOCU_INNER_WRAPPER"><div id="locu-render-output" class="locu-widget-reset"><div id="locu-medium-container" class="locu-web-menu"><div id="locu-outer">
  
  <div id="locu-menus"> 
    
      <div class="locu-menu locu-panel   locu-panel-active">
        <div class="locu-menu-name">Lunch</div>  
          
          
              
            </div>
          
        
      </div>
    
  </div>
</div>
<!--An element with this class must exist or OpenTable will show an error message.-->
<div class="-menuplatform-embed"></div>



<!-- Our 'tab' javascript code -->
<script>
  installLocuTabs();

  function getClassName(elem) {
    var className = elem['className'],
        class_ = elem['class'];
    if (className || className == '') {
      return className;
    }
    else if (class_ || class_ == '') {
      return class_;
    }
    return;
  }

  function setClassName(elem, value) {
    var className = elem['className'],
        class_ = elem['class'];
    if (className || className == '') {
      return (elem['className'] = value)
    }
    else if (class_ || class_ == '') {
      return elem.setAttribute('class', value);
    }
    return;
  }

  function locuShowPopup(event) {
    event = event || window.event;
    var locu_options = document.getElementById("locu-options");
    setClassName(locu_options, 'locu-options-visible');
    
    if (event.stopPropagation) {
      event.stopPropagation();
      } else {
      event.cancelBubble = true; 
    }
  }

  function locuHidePopup(event) {
    event = event || window.event;
    target = event.target || event.srcElement;
    if (target.id != "powered-by-locu") {
      var locu_options = document.getElementById('locu-options');
      setClassName(locu_options, '');
    } 
  }
  
  var powered_by_locu = document.getElementById('powered-by-locu');
  if (document.body.addEventListener) {
    powered_by_locu.addEventListener('click', locuShowPopup);
    document.body.addEventListener('click', locuHidePopup);
    document.body.addEventListener('touchstart', locuHidePopup);
  } else {
    powered_by_locu.attachEvent('onclick', locuShowPopup);
    document.body.attachEvent('onclick', locuHidePopup);
    document.body.attachEvent('touchstart', locuHidePopup);
  }
</script>

</div></div></div></div><div class="seo-response" style="display: none;">See the current menu for TR3NTS in London.</div>
  <script type="text/javascript">RestaurantProfileMenu.OnLoad({FailedText: "Sorry, we have no menus available for this restaurant at this time. Please check back later."});</script> 
</div>
</section>
  

</main>

</div>
</body>
</html>