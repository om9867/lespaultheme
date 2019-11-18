<?php 
/* Template Name: Blog Demo  */
?>
	<div class="row">
		<?php 
			$blog_feeds=get_latest_blog_feeds(); 
			if (!empty($blog_feeds)) 
			{ 
				foreach ($blog_feeds as $feed) 
				{  
                  $imgpattern = '/src="(.*?)"/i';
                  preg_match($imgpattern, $feed['desc'], $matches);
                  $image = @$matches[1];
				  				  			  
                  // $widthpattern = '/width="(.*?)"/i';
                  // preg_match($widthpattern, $feed['desc'], $matches);
                  // $width = @$matches[1];
                  // $heightpattern = '/height="(.*?)"/i';
                  // preg_match($heightpattern, $feed['desc'], $matches);
                  // $height = @$matches[1];       
                  // $active = ($x == 1) ? 'active':'';
                  // $str = "-".$width."x".$height;
                  // $full_image = str_replace($str,'',$image);				  
				  
                  $title= (!empty($feed['title']))?$feed['title']:'';
                  $link= (!empty($feed['link']))?$feed['link']:'';
                  $title = (strlen($title) <=60) ? $title:substr($title,0,60).'...';
                  
                  preg_match_all('#<p>(.*?)<\/p>#', $feed['desc'], $str_matches);
                  $str_matches = $str_matches[1];   
				?>
					<div class="col-md-4">
						<div class="blog_inner"> 
							<div class="img_cont">
								<a href="<?php echo $link; ?>"><img alt="<?php echo $title; ?>" src="<?php echo $image;?>" width="300" height="150"></a>
							</div>                    
							<h4><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h4>
							<p><?php echo (strlen($str_matches[1]) <=132) ? $str_matches[1]:substr($str_matches[1],0,132).'...'; ?>
								<!-- <br><a href="<?php //echo $link; ?>">Read more</a> --></p>
						</div>
					</div>
				<?php 
				}
			} 
		?>           
	</div>

<?php //echo 
//get_latest_blog_feeds();
?>