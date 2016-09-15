<?php
/**
 * The template part for displaying home services
 *
 * @package sensible-wp
 */
?>


			<div class="home-services">
            	
				<?php if ( get_theme_mod( 'services_text' ) ) : ?>
                
        			<div class="grid grid-pad">
                    
            			<div class="col-1-1">
                        	<h6 class="wow animated fadeIn"><?php echo wp_kses_post(get_theme_mod( 'services_text' )); ?></h6>
                        </div>
                        
            		</div><!-- grid -->
                    
				<?php endif; ?>
                
                <?php $services_columns_number = esc_html( get_theme_mod( 'sensiblewp_services_columns_number', '3' )); ?>  
                
        		<div class="grid grid-pad no-top">
                    
					<div class="col-1-<?php echo esc_html( $services_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-1">
                        
                        <?php if( get_theme_mod( 'active_service_1' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_1' ) ) : ?>
                				<a class="link-ferramenta" href="http://sitecontabil.com.br/certidoes.htm" target="_blank"><i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_1' )); ?>"></i></a>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_1' ) ) : ?>
              					<h5 class="link-ferramenta">
                          <a class="link-ferramenta" href="http://sitecontabil.com.br/certidoes.htm" target="_blank"><?php echo wp_kses_post( get_theme_mod( 'service_title_1' )); ?></a>
                        </h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_1' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_1' )); ?></p>
                            <?php endif; ?>
                            
                        <?php endif; ?>  
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 
                    
                    <div class="col-1-<?php echo esc_html( $services_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-2">
                        
                        <?php if( get_theme_mod( 'active_service_2' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_2' ) ) : ?>
                				<a class="link-ferramenta" href="http://sitecontabil.com.br/consultas/calculos.html" target="_blank"><i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_2' )); ?>"></i></a>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_2' ) ) : ?>
              					<h5 class="link-ferramenta">
                          <a class="link-ferramenta" href="http://sitecontabil.com.br/consultas/calculos.html" target="_blank"><?php echo wp_kses_post( get_theme_mod( 'service_title_2' )); ?></a>
                        </h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_2' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_2' )); ?></p>
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 
     
                    <div class="col-1-<?php echo esc_html( $services_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-3">
                        
                         <?php if( get_theme_mod( 'active_service_3' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_3' ) ) : ?>
                				<a href="http://sitecontabil.com.br/facilitador.htm" target="_blank"><i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_3' )); ?>"></i></a>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_3' ) ) : ?>
              					<h5 class="link-ferramenta">
                          <a class="link-ferramenta" href="http://sitecontabil.com.br/facilitador.htm" target="_blank"><?php echo wp_kses_post( get_theme_mod( 'service_title_3' )); ?></a>
                        </h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_3' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_3' )); ?></p> 
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

          <!-- Feito por Mr. Bulb-->
           <div class="col-1-5  wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
                <div class="servico-item service sbox-1">
                            <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/contabil' ) ); ?>" ><i class="servicos-fa fa fa-balance-scale"></i></a>
                            <h5 class="link-ferramenta">
                              <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/contabil' ) ); ?>" >Contábil</a>
                            </h5>    
                </div><!-- service --> 
            </div><!-- col-1-3 --> 

            <div class="col-1-5 wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
                <div class="servico-item service sbox-1">
                            <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/gestao-de-condominio' ) ); ?>" ><i class="servicos-fa fa fa-building"></i></a>
                            <h5 class="link-ferramenta">
                              <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/gestao-de-condominio' ) ); ?>" >Gestão de Condomínio</a>
                            </h5>    
                </div><!-- service --> 
            </div><!-- col-1-3 --> 
          <!-- FEITO POR MR.BULB->        

  
        		</div><!-- grid -->
                
                <?php if ( get_theme_mod( 'service_button_text' ) ) : ?>
                    
                    	<?php if ( get_theme_mod( 'service_button_url' ) ) : ?>
                    		<a href="<?php echo esc_url( get_page_link( get_theme_mod('service_button_url'))) ?>" class="featured-link"> 
						<?php endif; ?>
                            
                          	<button class="wow animated fadeIn" data-wow-delay="0.25s">
							
              					<?php echo wp_kses_post( get_theme_mod( 'service_button_text' )); ?> 
                            
                            </button></a>
                        
				<?php endif; ?> 
                
        	</div><!-- home-services --> 
