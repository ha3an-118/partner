<?php

 function ha_partner_posttype_register(){

   // TODO: make argoman for function register_post_type(name , Arg)

   $label = array(
     'name' => __( 'همکاران' ),
     'singular_name' => __( 'همکار' ),
   );
   $arg = array(
     'labels' => $label,
     'public' => true,
     'menu_position' => 10,
     'supports' =>array(
       'title',
       'custom-fields',
       'excerpt',
       'thumbnail',
     ),

   );
   register_post_type("partner",$arg);

 }


 add_action( 'init', 'ha_partner_posttype_register' );



 ?>
