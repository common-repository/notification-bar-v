<style>

#mp_wrap{
	position: fixed;
	max-width:20%;
	max-height:<?php echo $mcb_bar_height;?>;
	min-width:max-height:<?php echo $mcb_bar_height;?>; 
	bottom:0px;
 <?php echo $mcb_vertical_position;?>%;
  z-index:999999;
}

#main_mp_box{
	position:fixed;
	background-color:<?php echo $mcb_background_color; ?>;
  <?php echo $mcb_gradient_color;?>
	width: <?php echo $mcb_bar_width;?>;
	max-height:<?php echo $mcb_bar_height;?>;
	min-height:max-height:<?php echo $mcb_bar_height;?>; 
  text-align:center;  
  <?php echo $mcb_bar_position;?>
  border-<?php echo $mcb_border_position?>:solid <?php echo $mcb_border_width;?>px <?php echo $mcb_border_color;?>; 
  
  
  }
#mp_content{
  
  margin-left: 30%;
  font-size: 1em;

  position: absolute;
  top: 25%; left: 0; bottom: 0; right: 0;
  line-height:<?php echo $mcb_text_wrap; ?>;

  writing-mode:tb-rl;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -o-transform: rotate(90deg);
    white-space:nowrap;
    display:block;
    
    width:20px;
    height:20px;
  
   }
  
  

   @media only screen and (max-width: 320px) {

   #mp_content { font-size: 0.8em; }

}


#mp_close{
  font-size:15px;
  position:fixed;
  <?php echo $mcb_close_position;?>  
  <?php echo $mcb_bar_position;?>
  color:<?php echo $mcb_background_color;?>;
  <?php echo $mcb_gradient_color;?>
  color: <?php echo $mcb_gradient_color;?>;
  z-index:1 ;
  font-family: verdana;
  background-color: white;
  border-radius:2px;
  width:55px;
  height:22px;
  text-align: center;
  margin:0.3em;
  opacity: 0.5;
  display: <?php echo $mcb_show_close_button;?>;

}
#mp_close:hover{
	opacity:1;
  transition:opacity .5s ease-in-out;
	cursor:pointer; 
  z-index:2000;
}

#mp_open{
  display: none;
  font-size: 15px;
  position:fixed;
  
  <?php echo $mcb_close_position;?> 
  <?php echo $mcb_bar_position;?>
  color:<?php echo $mcb_background_color;?>;
  <?php echo $mcb_gradient_color;?>

  z-index:10 ;
  font-family: verdana;
  background-color: white;
  border-radius:2px;
  text-align: center;
  margin-top: 10px;
  opacity: 0.5;
   width:60px;
   height:22px;
}
#mp_open:hover{
  opacity:1;
  transition:opacity .5s ease-in-out;
  cursor:pointer; 
}


#textwrap_msg{
  border: 2px solid red;
  position:relative;
  left: 120px;
  top:-34px;
  width:270px;  
  visibility: hidden;
}







.formLayout
    {
        
        padding: 10px;
        width: 350px;
        margin: 10px;
    }
    
    .formLayout label 
    {
        display: block;
        width: 195px;
        float: left;
        margin-bottom: 10px;
        margin-left: 20px;
    }
    .formLayout input{
          display: block;
        width: 100px;
        float: left;
        margin-bottom: 10px;

    }
 
    .formLayout label
    {
        text-align: right;
        padding-right: 20px;
        font-size: 16px;
        font-weight: bold;
    }
 
    br
    {
        clear: left;
    }



    
</style>