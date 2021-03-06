<?php
/**
Template Name: Home Page
 *
 * @package sensible-wp
 */

get_header(); ?>

		<?php if( get_theme_mod( 'active_hero' ) == '') : ?>

            <?php $texto_principal = get_theme_mod( 'sensiblewp_first_heading'); ?>
            <?php $aux =  explode('|', $texto_principal); ?>
            
            <div id="slideshow">
               <div>
                 <img src="<?php echo esc_url(home_url('/wp-content/uploads/2016/09/teste3.jpg')); ?>">
                     <div class="texto-center">
                        <h2 class="animated fadeInDown delay"><?php echo esc_textarea( $aux[0]) ?> <br> <?php echo $aux[1]?></h2>
                        <div class="texto-center-button">
                            <a href="<?php echo esc_url(home_url('/quem-somos'));?>">
                                <button class="wow animated fadeInDown delay">
                                    <?php echo esc_html( get_theme_mod( 'sensiblewp_hero_button_text')) ?>
                                </button>
                            </a>
                        </div>
                    </div>
               </div>
               <div>
                    <img src="<?php echo esc_url(home_url('/wp-content/uploads/2016/09/empresaria-slider-min.jpg')); ?>">
                    <div class="texto-center">
                        <h2 class="animated fadeInDown delay"><?php echo esc_textarea( $aux[0]) ?> <br> <?php echo $aux[1]?></h2>
                        <div class="texto-center-button">
                            <a href="<?php echo esc_url(home_url('/quem-somos'));?>">
                                <button class="wow animated fadeInDown delay">
                                    <?php echo esc_html( get_theme_mod( 'sensiblewp_hero_button_text')) ?>
                                </button>
                            </a>
                        </div>
                    </div>
               </div>
               <div>
                    <img src="<?php echo esc_url(home_url('/wp-content/uploads/2016/09/calculadora-slider.jpg')); ?> ">
                    <div class="texto-center">
                        <h2 class="animated fadeInDown delay"><?php echo esc_textarea( $aux[0]) ?> <br> <?php echo $aux[1]?></h2>
                        <div class="texto-center-button">
                            <a href="<?php echo esc_url(home_url('/quem-somos'));?>">
                                <button class="wow animated fadeInDown delay">
                                    <?php echo esc_html( get_theme_mod( 'sensiblewp_hero_button_text')) ?>
                                </button>
                            </a>
                        </div>
                    </div>
               </div>
            </div>



	       <!-- <section id="hero-header" 
                    data-speed="8" 
                    data-type="background" 
                    style="background: url('<?php echo esc_url( get_theme_mod( 'sensiblewp_main_bg', ( get_stylesheet_directory_uri( 'stylesheet_directory') . '/img/hero-1.jpg'))); ?>')  50% 0 no-repeat fixed;"> 
            <div class="hero-content-container">
        	<div class="hero-content">
                    
                    <span>
                    
                    <?php if ( get_theme_mod( 'sensiblewp_first_heading' ) ) : ?>
                        
                        <?php $texto_principal = get_theme_mod( 'sensiblewp_first_heading'); ?>
                        <?php $aux =  explode('|', $texto_principal)?>
       					<h2 class="animated fadeInDown delay"><?php echo esc_textarea( $aux[0]) ?> <br> <?php echo $aux[1]?></h2>
                        
					<?php endif; ?> 
                    
                    <?php if ( get_theme_mod( 'sensiblewp_hero_button_text' ) ) : ?>
                    
                    	<?php if ( get_theme_mod( 'hero_button_url' ) ) : ?>
                    
            				<a href="<?php echo esc_url( get_page_link( get_theme_mod('hero_button_url'))) ?>" class="featured-link"> 
                        
						<?php endif; ?>

            			<?php if ( get_theme_mod( 'page_url_text' ) ) : ?> 
                    
							<a href="<?php echo esc_url( get_theme_mod ( 'page_url_text' )) ?>" class="featured-link" target="_blank">
                           
						<?php endif; ?> 
                    
                    			<button class="wow animated fadeInDown delay">
									<?php echo esc_html( get_theme_mod( 'sensiblewp_hero_button_text')) ?>
                    			</button>
                    
                    		</a>
                       
                    <?php endif; ?> 
                    
                       	  
        			</span>
                     
    	   </div>
	       </div>
       </section><!-- hero-header -->
           
				
        
	<?php endif; ?>
		
        
   	<?php if( get_theme_mod( 'active_social' ) == '') : ?>
        
        	<?php if ( get_theme_mod( 'social_text' ) ) : ?>
        		<div class="social-bar">
        	<?php else : ?>
        		<div class="social-bar-none">
        	<?php endif; ?> 
            
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                
                	<?php if ( get_theme_mod( 'social_text' ) ) : ?>
        			  	
                        <span class="wow animated fadeIn"><?php echo wp_kses_post(get_theme_mod( 'social_text' )); ?></span> 
                	
					<?php endif; ?> 
              			
                        <div class="wow animated fadeIn">
                        	
                            <?php get_template_part( 'content', 'social' ); // Social Icons ?> 
                            
                        </div>   
                
                	</div><!-- col-1-1 -->
        		</div><!-- grid -->
                
        	<?php if ( get_theme_mod( 'social_text' ) ) : ?>
        		</div><!-- social bar -->
        	<?php else : ?>
        		</div><!-- social bar --> 
        	<?php endif; ?>
        
        
		<?php endif; ?>
		
        
        <?php if( get_theme_mod( 'active_intro' ) == '') : ?>  
        
        	 <?php get_template_part( 'content', 'intro' ); // intro ?> 
        
		<?php endif; ?>
        
        
        <?php if( get_theme_mod( 'active_services' ) == '') : ?>    
        		
        	<?php get_template_part( 'content', 'services' ); // services ?> 
              
		<?php endif; ?>
        
        
        <?php if( get_theme_mod( 'active_blog' ) == '') : ?> 
        
        	<?php get_template_part( 'content', 'news' ); // news ?> 
        
		<?php endif; ?>
		
        
        <?php if( get_theme_mod( 'active_team' ) == '') : ?>   
        
        	<?php get_template_part( 'content', 'team' ); // team ?>
        
		<?php endif; ?>
		
        
        <?php if( get_theme_mod( 'active_home_widget' ) == '') : ?>
        
        	<?php get_template_part( 'content', 'home-widget' ); // home widget ?> 
		
		<?php endif; ?>
		
        <script type="text/javascript">
        jQuery("#slideshow > div:gt(0)").hide();

        setInterval(function() { 
          jQuery('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
        },  5000);
        </script>
    
<?php get_footer(); ?>