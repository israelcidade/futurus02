<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sensible-wp
 */
?>

	</section><!-- #content --> 
    
    
    <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?> 
        
        	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
        		<div class="social-bar">
        	<?php else : ?>
        		<div class="social-bar-none"> 
        	<?php endif; ?>
            
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                
                	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
        			  	
                        <span class="wow animated fadeIn"><?php echo wp_kses_post( get_theme_mod( 'footer_social_text' )); ?></span>
                	
					<?php endif; ?> 
              			
                        <div class="wow animated fadeIn">
                        
                        	<?php get_template_part( 'content', 'social' ); // Social Icons ?> 	
                            
                        </div>   
                
                	</div><!-- col-1-1 -->
        		</div><!-- grid -->
        	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>  
        		</div><!-- social-bar -->
        	<?php else : ?>
        		</div><!-- social-bar  -->
        	<?php endif; ?>
        
       
		<?php endif; ?>
		
        
    <?php if( get_theme_mod( 'active_footer_contact' ) == '') : ?>
    
    
    <div class="footer-contact">
        <div class="grid grid-pad">
            
            <div class="col-1-1">
            
            	<?php if ( get_theme_mod( 'footer_title_text' ) ) : ?> 
    				
                    <h6><?php echo wp_kses_post( get_theme_mod( 'footer_title_text' )); // footer title ?></h6>
    			
				<?php endif; ?>
                
            </div><!-- col-1-1 -->
            	
                <div class="col-1-3">
            		<div class="footer-block">
                    
                    	<?php if ( get_theme_mod( 'bottom_footer_icon_1' ) ) : ?> 
    						
                            <i class="fa <?php echo wp_kses_post( get_theme_mod( 'bottom_footer_icon_1', __( 'fa-map-marker', 'sensible-wp' ) )); // first icon ?>"></i>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'first_text' ) ) : ?> 
    						
                            <h5><?php echo wp_kses_post( get_theme_mod( 'first_text' )); // first icon ?></h5>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'sensiblewp_footer_first' ) ) : ?> 
    						
                            <p><?php echo wp_kses_post( get_theme_mod( 'sensiblewp_footer_first' )); // first icon ?></p>
    					
						<?php endif; ?>  
            		
            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->
                
            	<div class="col-1-3">
            		<div class="footer-block">
            			
                        <?php if ( get_theme_mod( 'bottom_footer_icon_2' ) ) : ?> 
    						
                            <i class="fa <?php echo wp_kses_post( get_theme_mod( 'bottom_footer_icon_2', __( 'fa-mobile', 'sensible-wp' ) )); // second icon ?>"></i>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'second_text' ) ) : ?> 
    						
                            <h5><?php echo wp_kses_post( get_theme_mod( 'second_text' )); // second icon ?></h5>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'sensiblewp_footer_second' ) ) : ?> 
    						
                            <p><?php echo wp_kses_post( get_theme_mod( 'sensiblewp_footer_second' )); // second icon ?></p>
    					
						<?php endif; ?> 
                 
            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->
                
            	<div class="col-1-3">
            		<div class="footer-block">
                    	
                        <?php if ( get_theme_mod( 'bottom_footer_icon_3' ) ) : ?> 
    						
                            <i class="fa <?php echo wp_kses_post( get_theme_mod( 'bottom_footer_icon_3', __( 'fa-envelope-o', 'sensible-wp' ) )); // third icon ?>"></i>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'third_text' ) ) : ?> 
    						
                            <h5><?php echo wp_kses_post( get_theme_mod( 'third_text' )); // third icon ?></h5> 
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'sensiblewp_footer_third' ) ) : ?>  
    						
                            <p><?php echo wp_kses_post( get_theme_mod( 'sensiblewp_footer_third' )); // third icon ?></p> 
    					  
						<?php endif; ?>  
            		  

            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->
                
    	</div><!-- grid -->
        
    </div><!-- footer-contact --> 

    <!-- MAPA GOOGLE -->
        <div class="mapa-futurus">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3664.1047756073935!2d-51.14386268537536!3d-23.31195698480728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eb4379488b554d%3A0x940f8b8873765fcf!2sAv.+Theodoro+Victorelli%2C+769+1+º+andar+-+Jardim+Morumbi%2C+Londrina+-+PR!5e0!3m2!1spt-BR!2sbr!4v1473366301943&zoom=20" scrollwheel="false" width="100%" height="440" frameborder="0" style="border:0;" allowfullscreen></iframe>
         </div>
    <!-- MAPA GOOGLE --> 
        
    <?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
			<div class="site-info col-1-1">
				<?php if ( get_theme_mod( 'sensiblewp_footerid' ) ) : ?> 
                    <div class="rodape">
                        <div class="rodape-left">
        			         <?php echo wp_kses_post( get_theme_mod( 'sensiblewp_footerid' )); // footer id ?>
                        </div>
                        <div class="rodape-right">
                          <a href="http://www.mrbulb.com.br" target="_blank"><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2016/09/Logo-04-final.png' ) ); ?>"></a>
                        </div>
                    </div>

				<?php else : ?>  
    				<?php printf( __( 'Theme: %1$s by %2$s', 'sensible-wp' ), 'Sensible', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?>
				<?php endif; ?>
			</div><!-- .site-info --> 
        </div><!-- grid -->
	</footer><!-- #colophon -->

</div><!-- #page --> 



<?php wp_footer(); ?>

</body>
</html>
