<?php 
  
function advotis_style_script(){
    

  //Enqueing Styles
wp_enqueue_style('bootstrap-css' , ctri . '/css/bootstrap.min.css' , array(), '4.0' , 'all');
wp_enqueue_style('font-awesome' , ctri . '/css/font-awesome.min.css' , array(), '4.7' , 'all');
wp_enqueue_style('flaticon' , ctri . '/vendors/flaticon/flaticon.css' , array(), '1.0' , 'all');
wp_enqueue_style('linearicons' , ctri . '/vendors/linearicons/style.css' , array(), '4.0' , 'all');
wp_enqueue_style('strokeicons' , ctri . '/vendors/stroke-icon/style.css' , array(), '4.0' , 'all');
wp_enqueue_style('nice-select-css' , ctri . '/vendors/nice-selector/css/nice-select.css' , array(), '1.0' , 'all');
wp_enqueue_style('owl-carousel-css' , ctri . '/vendors/owl-carousel/assets/owl.carousel.min.css' , array(), '1.0' , 'all');
wp_enqueue_style('magnific-popup' , ctri . '/vendors/popup/magnific-popup.css' , array(), '1.0' , 'all');
wp_enqueue_style('main-style' , ctri . '/css/style.css' , array(), '1.0' , 'all');
wp_enqueue_style('responsive' , ctri . '/css/responsive.css' , array(), '1.0' , 'all');
  
  // Enqueing Scripts 

wp_enqueue_script('popper' , ctri . '/js/popper.min.js' , array('jquery'), '1.0' , true);
wp_enqueue_script('bootstrap' , ctri . '/js/bootstrap.min.js' , array('jquery'), '1.0' , true);
wp_enqueue_script('nice-select-js' , ctri . '/vendors/nice-selector/js/jquery.nice-select.min.js' , array(null), '1.0' , true);
wp_enqueue_script('owl-carousel-js' , ctri . '/vendors/owl-carousel/owl.carousel.min.js' , array('jquery'), '1.0' , true);
wp_enqueue_script('magnificpopup' , ctri . '/vendors/popup/jquery.magnific-popup.min.js' , array('jquery'), '1.0' , true);
  
}

add_action('wp_enqueue_scripts','advotis_style_script');

?>
  