<?php
/**
 * The template part for home intro
 *
 * @package sensible-wp
 */
?>


			<div class="home-content">
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                		
						<?php if ( get_theme_mod( 'intro_text' ) ) : ?>
        			  		
                            <h6 class="wow animated fadeInLeft"><?php echo wp_kses_post( get_theme_mod( 'intro_text' )); ?></h6>
                		
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'intro_textbox' ) ) : ?>
        			  		
                            <p class="wow animated fadeInRight"><?php echo wp_kses_post( get_theme_mod( 'intro_textbox' )); ?></p>  
                		
						<?php endif; ?>

                        <!-- VIDEO INSTITUCIONAL DA EMPRESA -->
                        <div class="video-empresa">

                        <iframe title="YouTube video player" class="youtube-player" type="text/html" 
                        width="640" height="390" src="https://www.youtube.com/embed/Pgmkdr74yr0"
                        frameborder="0" allowFullScreen></iframe>

                        </div>
                        <!-- ****************************** -->

                	</div><!-- col-1-1 --> 
        		</div><!-- grid -->
        	</div><!-- home-content -->