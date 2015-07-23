<?php
/*
 Plugin Name: Wp slider images from posts
 Plugin URI: http://mikityuk.tk/plugins/wp-slider-images-from-posts.zip
 Description: This plugin displays images with captions of your selected records and their beautiful looks through a ukazannm your interval. To set up the widget bar select photos , sign them and specify the interval turning.
 Version: 1.0
 Author: Mikityuk
 Author URI: http://mikityuk.tk/
 License: GPL2
*/
	function img_slider_language()
	{
		load_plugin_textdomain('img-slider', false, dirname( plugin_basename( __FILE__ )));
	}
	add_action('init', 'img_slider_language');
			
	function img_slider_css() {
		$img_slider_css_url  =  plugins_url('style.css', __FILE__);
		$img_slider_css_file =   plugin_dir_path(__FILE__).'style.css';
		if ( file_exists($img_slider_css_file) ) {
			wp_register_style('slider_css', $img_slider_css_url);
			wp_enqueue_style( 'slider_css');
		}
	}
	add_action('wp_print_styles', 'img_slider_css');

	class Slider_images_from_posts  extends Wp_widget
	{
		public function __construct()
		{
			parent::__construct("text_widget", "Slider show images from posts",
            array("description" => __('Slider images from posts','img-slider')));
		}
		
		public function form($instance)
		{
			$title = "Photos";	
			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">'.__('Title:','img-slider').'</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' . $tableName . '" value="' . $title . '"><br>';
			
			$interval = $this->get_field_name("interval");
			echo '<label for="' . $interval . '">'.__('Interval:','img-slider').'</label><br>';
			echo '<input  type="text" name="'. $interval .'" value="1000"> <br>';
			echo '<hr>';
			echo '<p>'.__('Select images and caption','img-slider').'</p>';
			
			$image1 = $this->get_field_name("image1");
				$posts = get_posts( array(
					'numberposts'     => 100, 
				) );
			echo '<select   id="y1"  name="'.$image1.'">';
				foreach($posts as $post)
				{
					if(strpos($post->post_content, "img" ))
					{
						preg_match('|src="(.*?)"|is',$post->post_content, $imagesArr );
						echo  '<option value="' . $imagesArr[1] . '">' . basename($imagesArr[1]) . '</option>' ;
					}
				}
			echo '</select>';
			$podpis1 = $this->get_field_name("podpis1");
			echo '<input  type="text" name="'. $podpis1 .'" value="'.__('caption','img-slider').'"> <br>';
			
			$href1 = $this->get_field_name("href1");
			echo '<input  type="text" name="'. $href1 .'" value="you link"> <br>';
			
			
			
			$image2 = $this->get_field_name("image2");
				$posts = get_posts( array(
					'numberposts'     => 100, 
				) );
			echo '<select   id="y2"  name="'.$image2.'">';
				foreach($posts as $post)
				{
					if(strpos($post->post_content, "img" ))
					{
						preg_match('|src="(.*?)"|is',$post->post_content, $imagesArr );
						echo  '<option value="' . $imagesArr[1] . '">' . basename($imagesArr[1]) . '</option>' ;
					}
				}
			echo '</select>';
			$podpis2 = $this->get_field_name("podpis2");
			echo '<input  type="text" name="'. $podpis2 .'" value="'.__('caption','img-slider').'">';
			
			$href2 = $this->get_field_name("href2");
			echo '<input  type="text" name="'. $href2 .'" value="you link"> <br>';
			
			$image3 = $this->get_field_name("image3");
				$posts = get_posts( array(
					'numberposts'     => 100, 
				) );
			echo '<select   id="y3"  name="'.$image3.'">';
				foreach($posts as $post)
				{
					if(strpos($post->post_content, "img" ))
					{
						preg_match('|src="(.*?)"|is',$post->post_content, $imagesArr );
						echo  '<option value="' . $imagesArr[1] . '">' . basename($imagesArr[1]) . '</option>' ;
					}
				}
			echo '</select>';
			$podpis3 = $this->get_field_name("podpis3");
			echo '<input  type="text" name="'. $podpis3 .'" value="'.__('caption','img-slider').'"> <br>';
			
			$href3 = $this->get_field_name("href3");
			echo '<input  type="text" name="'. $href3 .'" value="you link"> <br>';			
			
			
			$image4 = $this->get_field_name("image4");
				$posts = get_posts( array(
					'numberposts'     => 100, 
				) );
			echo '<select   id="y4"  name="'.$image4.'">';
				foreach($posts as $post)
				{
					if(strpos($post->post_content, "img" ))
					{
						preg_match('|src="(.*?)"|is',$post->post_content, $imagesArr );
						echo  '<option value="' . $imagesArr[1] . '">' . basename($imagesArr[1]) . '</option>' ;
					}
				}
			echo '</select>';
			$podpis4 = $this->get_field_name("podpis4");
			echo '<input  type="text" name="'. $podpis4 .'" value="'.__('caption','img-slider').'"> <br>';
			
			$href4 = $this->get_field_name("href4");
			echo '<input  type="text" name="'. $href4 .'" value="you link"> <br>';
			
			$image5 = $this->get_field_name("image5");
				$posts = get_posts( array(
					'numberposts'     => 25, 
				) );
			echo '<select   id="y5"  name="'.$image5.'">';
				foreach($posts as $post)
				{
					if(strpos($post->post_content, "img" ))
					{
						preg_match('|src="(.*?)"|is',$post->post_content, $imagesArr );
						echo  '<option value="' . $imagesArr[1] . '">' . basename($imagesArr[1]) . '</option>' ;
					}
				}
			echo '</select>';
			$podpis5 = $this->get_field_name("podpis5");
			echo '<input  type="text" name="'. $podpis5 .'" value="'.__('caption','img-slider').'"> <br>';
			$href5 = $this->get_field_name("href5");
			echo '<input  type="text" name="'. $href5 .'" value="you link"> <br>';			
		}
			
		public function update($newInstance, $oldInstance) 
		{
			$values = array();
			$values["title"]   =  $newInstance["title"];
			$values["interval"] =  $newInstance["interval"];
			$values["podpis1"] =  $newInstance["podpis1"];
			$values["podpis2"] =  $newInstance["podpis2"];
			$values["podpis3"] =  $newInstance["podpis3"];
			$values["podpis4"] =  $newInstance["podpis4"];
			$values["podpis5"] =  $newInstance["podpis5"];
			$values["image1"] =  $newInstance["image1"];
			$values["image2"] =  $newInstance["image2"];
			$values["image3"] =  $newInstance["image3"];
			$values["image4"] =  $newInstance["image4"];
			$values["image5"] =  $newInstance["image5"];
			$values["href1"] =  $newInstance["href1"];
			$values["href2"] =  $newInstance["href2"];			
			$values["href3"] =  $newInstance["href3"];
			$values["href4"] =  $newInstance["href4"];
			$values["href5"] =  $newInstance["href5"];			
			return $values;
		}
		
		public function widget($args, $instance)
		{
			echo $args["before_widget"];
			echo $args["before_title"] ;
			echo $instance["title"]; 
			echo $args["after_title"];
		?>
			<div class="owers">
				<div id="sid2">
					<div class="slide dblock">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href1"];?>">
								<img  style="display: block !important;"  src="<?php echo $instance["image1"];?>"alt="<?php echo $instance["podpis1"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis1"];?></p>
							</a>
					</div>
						
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href2"];?>">
								<img src="<?php echo $instance["image2"];?>" alt="<?php echo $instance["podpis2"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis2"];?></p>
							</a>
					</div>
					
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href3"];?>">
								<img src="<?php echo $instance["image3"];?>" alt="<?php echo $instance["podpis3"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis3"];?></p>
							</a>
					</div>
					
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href4"];?>">
								<img src="<?php echo $instance["image4"];?>" alt="<?php echo $instance["podpis4"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis4"];?></p>
							</a>
					</div>
					
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href5"];?>">
								<img src="<?php echo $instance["image5"];?>"  alt="<?php echo $instance["podpis5"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis5"];?></p>
							</a>
					</div>
				</div>
			</div>
			<script>
				jQuery(document).ready(function() {
					var p = 1;
					var interval;
					interval = setInterval(function()
					{ 
						jQuery('#sid2').addClass("imgslide"+p); p++; if(p==7){p=1; jQuery('#sid2').removeClass("imgslide2").removeClass("imgslide3").removeClass("imgslide4").removeClass("imgslide5");} 
					},  <?php echo $instance["interval"];?>);
				});
			</script>
				
		<?php		
			echo $args['after_widget'];
		}
	}
	add_action("widgets_init", function ()
{
    register_widget("Slider_images_from_posts");
});
?>