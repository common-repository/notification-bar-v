<?php
/*  
Plugin Name: Notification Bar  Vertical
Plugin URI:http://web-settler.com
Author URI :http://web-settler.com
Description:Simple Bar plugin is very helpful for attracting users attention.
Easy and simple to use, Clean and simple design.Best Bar Plugin on wordpress.
Version:1.0
Author: umarbajwa
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: http://web-settler.com
*/



function my_popup_html(){
  $mcb_vertical_position = get_option('mcb_vertical_position');
  $mcb_content = get_option('mcb_content');
  $mcb_background_color =get_option('mcb_background_color');
  $mcb_bar_height = get_option('mcb_bar_height');
  $mcb_text_wrap = get_option('mcb_text_wrap');
  $mcb_bar_position = get_option('mcb_bar_position');
  $mcb_cta_button = get_option('mcb_button_cta');
  $mcb_cta_email = get_option('mcb_email_cta');
  $mcb_gradient_color_ =get_option('mcb_gradient_color_');
  $mcb_cta_email_url =get_option('mcb_cta_email_url');
  $mcb_cta_button_url = get_option('mcb_cta_button_url');
  $mcb_cta_button_text = get_option('mcb_cta_button_text');
  $mcb_border_color = get_option('mcb_border_color');
  $mcb_border_width = get_option('mcb_border_width');
  $mcb_border_position =get_option('mcb_border_position');
  $mcb_close_position = get_option('mcb_close_position');
  $mcb_show_close_button = get_option('mcb_show_close_button');
  $mcb_bar_width = get_option('mcb_bar_width');
	?> 
  <div id="mp_wrap">
   
   
       <div id="main_mp_box">

       <div id="mp_content" style="font-family:helvetica, verdana, oswald, arial;text-align:center;"><?php echo $mcb_content;?><div id="cta_div" style="display:inline; text-align:center;">
      
        

       <a href="<?php echo $mcb_cta_button_url;?>" style="text-decoration:none;"><button id="mcb_cta_button"style="display:<?php echo $mcb_cta_button;?>;margin-left:10px; background-color:black; border-radius:5px; height:28px; min-width:100px; color:#fff; border:none; text-align:center;font-size:13px;
        "><b><?php echo $mcb_cta_button_text;?></b></button></a>
      </div>
    </div>
       </div>
   
      
       </div>

       <?php
   include 'mp_style.php';
   
}

add_filter('wp_footer','my_popup_html');

//Adding styles
add_action( 'init', 'register_mpb_styles' );
  function register_mpb_styles() {
  wp_register_style( 'mpb_box_style', plugins_url('simple-bar-premium/mp_style.css'));
	wp_enqueue_style( 'mpb_box_style');
}


 function my_mpb_script() {
	wp_enqueue_script( 'mpb_box_style', plugins_url('simple-bar-premium/mp_script.js'));
  
}
wp_enqueue_script("jquery");
add_action( 'init', 'my_mpb_script');
//Adding Options

register_activation_hook(__FILE__,'mcb_activating_options');
function mcb_activating_options(){
  add_option('mcb_content','Put Some Content Here!');
  add_option('mcb_background_color','#000');
  add_option('mcb_text_wrap','');
  add_option('mcb_bar_position','');
  add_option('mcb_button_cta');
  add_option('mcb_email_cta');
  add_option('mcb_gradient_color_','');
  add_option('mcb_cta_email_url');
  add_option('mcb_cta_button_url');
  add_option('mcb_cta_button_text','Click Here');
  add_option('mcb_border_color','#000');
  add_option('mcb_border_width','3px');
  add_option('mcb_border_position','top');
  add_option('mcb_close_position','');
  add_option('mcb_show_close_button');
  add_option('mcb_vertical_position','left');
  add_option('mcb_bar_width','5');
  add_option('mcb_bar_height','5');
}



add_action('wp_head','mcb_sett_to_head');
function mcb_sett_to_head(){
  $mcb_vertical_position = get_option('mcb_vertical_position');
  $mcb_content = get_option('mcb_content');
  $mcb_background_color =get_option('mcb_background_color');
  $mcb_bar_height = get_option('mcb_bar_height');
  $mcb_bar_width = get_option('mcb_bar_width');
  $mcb_text_wrap = get_option('mcb_text_wrap');
  $mcb_bar_position = get_option('mcb_bar_position');
  $mcb_cta_button = get_option('mcb_button_cta');
  $mcb_cta_email = get_option('mcb_email_cta');
  $mcb_gradient_color_ = get_option('mcb_gradient_color_');
  $mcb_cta_email_url =get_option('mcb_cta_email_url');
  $mcb_cta_button_url = get_option('mcb_cta_button_url');
  $mcb_cta_button_text = get_option('mcb_cta_button_text');
  $mcb_border_color = get_option('mcb_border_color');
  $mcb_border_width = get_option('mcb_border_width');
  $mcb_border_position =get_option('mcb_border_position');
  $mcb_close_position =get_option('mcb_close_position');
  $mcb_show_close_button =get_option('mcb_show_close_button');
  include 'mp_style.php';

}

add_action('admin_init','mcb_reg_sett');
function mcb_reg_sett(){
  register_setting('mcb_setting_group','mcb_content');
  register_setting('mcb_setting_group','mcb_background_color');
  register_setting('mcb_setting_group','mcb_bar_height');
  register_setting('mcb_setting_group','mcb_text_wrap');
  register_setting('mcb_setting_group','mcb_bar_position');
  register_setting('mcb_setting_group','mcb_button_cta');
  register_setting('mcb_setting_group','mcb_email_cta');
  register_setting('mcb_setting_group','mcb_gradient_color_');
  register_setting('mcb_setting_group','mcb_cta_email_url');
  register_setting('mcb_setting_group','mcb_cta_button_url');
  register_setting('mcb_setting_group','mcb_cta_button_text');
  register_setting('mcb_setting_group','mcb_border_color');
  register_setting('mcb_setting_group','mcb_border_width');
  register_setting('mcb_setting_group','mcb_border_position');
  register_setting('mcb_setting_group','mcb_close_position');
  register_setting('mcb_setting_group','mcb_show_close_button');
  register_setting('mcb_setting_group','mcb_vertical_position');
  register_setting('mcb_setting_group','mcb_bar_width');
}

add_action('admin_menu','mpb_menu_set');

function mpb_menu_set(){
  add_menu_page(
  'Simple Bar Maker',
  'Simple Bar',
  'administrator',
  'mpb_settings',
  'admin_mpb_page' 

  );
  }
function admin_mpb_page(){
  include 'mp_style.php';
   ?>
     <?php settings_fields( 'mcb_setting_group' );?>
<?php do_settings_sections( 'mcb_setting_group' );?>
  <h1>Notification Bar Plugin</h1>

   <br>
    <br>
    <div class="formLayout">
   <form method="post" action="options.php" id="content_input_form">
        <?php settings_fields( 'mcb_setting_group' );?>
<?php do_settings_sections( 'mcb_setting_group' );?>
  <label for="mcb_bar_height"><span style="color :red;"> * </span> <b>Bar Height :</b></label>
  <input type="text" style="width:20%;" name="mcb_bar_height" min="1" max=""  value="<?php echo get_option('mcb_bar_height'); ?>"/>
  <br>
  <label for="mcb_bar_width"><span style="color :red;"> * </span> <b>Bar Width :</b></label>
  <input type="text" style="width:20%;" name="mcb_bar_width" min="1" max="" value="<?php echo get_option('mcb_bar_width'); ?>"/>

  <br>
  <label for="mcb_gradient_color_"><h4>CSS Gradients : </h4></label>
  <input type="text" style="width:200px height:300px;" name="mcb_gradient_color_" value ="<?php get_option('mcb_gradient_color_'); ?>">
  <br>
   <label for="mcb_background_color"><b>Background Color  :</b> </label>
   <input type="color" name="mcb_background_color" class="mcb_bg_color" value="<?php echo get_option('mcb_background_color'); ?>"> 
   <hr>
   <br>
   <br>
   <h3>Position : </h3>
   <br>
   <br>

   <label for="mcb_vertical_position"><b>Position :</b></label>
   <select name="mcb_vertical_position">
   <option value="left:0;right:0;"  

<?php selected('left:0;right:0;', get_option('mcb_vertical_position')); ?>

   >Left</option>
   <option value="right:31px;"

<?php selected('right:20px;', get_option('mcb_vertical_position')); ?>

   >Right</option>
 </select>
   <br>
   <br>


   <label for="mcb_bar_position"><span style="color :red;"> * </span> Bottom : </label>
   <input type="radio" name="mcb_bar_position" value="bottom:0%;"   style="width:10px"
   <?php checked('bottom:0%;', get_option('mcb_bar_position')); ?>

   >
   <br>
   <br>
   <label for="mcb_bar_position"><span style="color :red;">*</span> Top : </label>
   <input type="radio" name="mcb_bar_position" value="top:0%;" style="width:10px"
   <?php checked('top:0%;', get_option('mcb_bar_position')); ?>
   >
   <br>
   <br>
   <label for="mcb_bar_position"><span style="color :red;"> * </span> Middle : </label>
   <input type="radio" name="mcb_bar_position" value="top:30%;bottom:30%;"   style="width:10px"
   <?php checked('top:30%;bottom:30%;', get_option('mcb_bar_position')); ?>

   >
   <br>
   <br>
   <label for="mcb_text_wrap"><b>Text Wrap : </b></label>
   <input type="checkbox" name="mcb_text_wrap" class="mcb_text_wrap" value='1em' style="width:10px;"></div>
   <p id="textwrap_msg" style="width:350px;left:500px;">Select only if there are more lines than one.</p>
   <div class="formLayout">
   <hr style="">
   <h3 style="">Border : </h3>
   <label for="mcb_border_position"><b>Border - Position : </b></label>
   <select name="mcb_border_position">
   <option value="top"  

<?php selected('top', get_option('mcb_border_position')); ?>

   >Top</option>
   <option value="bottom"

<?php selected('bottom', get_option('mcb_border_position')); ?>

   >Bottom</option>
   <option value="left"

<?php selected('left', get_option('mcb_border_position')); ?>

   >Left</option>
   <option value="right"

<?php selected('right', get_option('mcb_border_position')); ?>

   >Right</option>
   </select>
   <br>
   <br>
   <label for="mcb_border_color"><b>Border Color : </b></label>
   <input type="color" name="mcb_border_color" value="<?php echo get_option('mcb_border_color');?>">
<label for="mcb_border_width"><b>Width : </b></label>
   <input type="number" name="mcb_border_width" value="<?php echo get_option('mcb_border_width'); ?>" >
   <br>
   <hr>
   
  <br>
  <br>
  
  <label for="mcb_button_cta">Call To Action Button :</label>
<select name="mcb_button_cta">
  <option value="inline"
<?php selected('inline', get_option('mcb_button_cta')) ?>
  >On</option>
  <option value="none" 

<?php selected('none', get_option('mcb_button_cta')) ?>
   >Off</option>
</select>
<br>
<br>
<label for="mcb_cta_button_url">Call To Action Button :</label>
  <input type="url" name="mcb_cta_button_url" value="<?php echo get_option('mcb_cta_button_url');?>">
<br>
<br>
<label for="mcb_cta_button_text">Button Text :</label>
<input type="text" name="mcb_cta_button_text" value="<?php echo get_option('mcb_cta_button_text');?>">
<br>
  <br>
  
  <br>
  <br>
   <?php
   $settings = array('media_buttons'=> false,'mcb_content');
   $mcb_content = get_option('mcb_content');
   wp_editor($mcb_content,'mcb_content',$settings);


   ?>
   <?php submit_button( 'Save Changes');  ?>
 </form>
</div>

<a href="http://web-settler.com" style="width:200px;height:50px; background: #a9db80; text-decoration:none;">Check Other Plugins</a>
 <style type="text/css">
 #wpfooter{
  display:none;
 }
 </style>
<?php

 };



?>