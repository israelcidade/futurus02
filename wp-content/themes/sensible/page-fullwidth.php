<?php
/**
Template Name: Page - Fullwidth
 *
 * @package sensible-wp 
 */

get_header(); ?> 

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
            
    	<header class="featured-img-header" data-speed="8" data-type="background" style="background: url('<?php echo $image; ?>') 50% 0 no-repeat fixed;">
    		<div class="grid grid-pad">
        		<div class="col-1-1"> 
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div>
        	</div>
		</header><!-- .entry-header --> 
    
		<?php else : ?>
        
        <header style="background-color: #FAFAFA;" class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
        			<div class="titulo-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
        		</div>
        	</div>
		</header><!-- .entry-header -->
        
	<?php endif; ?>
    
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>


			<?php endwhile; // end of the loop. ?>

			<!-- TRABALHA NA TELA SERVICOS  feito por Mr. Bulb-->
			<?php $titulo = $post->ID; ?>
			<?php if($titulo == 20) { ?>
			<div class="grid grid-pad no-top">

					<div class="col-1-6 wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                       <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/societaria' ) ); ?>" > <i class="servicos-fa fa fa-street-view"></i> </a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/societaria' ) ); ?>" >Societária</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-6 wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/trabalhista' ) ); ?>"><i class="servicos-fa fa fa-users"></i></a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/trabalhista' ) ); ?>">Trabalhista</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-6  wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/fiscal' ) ); ?>" ><i class="servicos-fa fa fa-calculator"></i><a/>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/fiscal' ) ); ?>" >Fiscal</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-6  wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/contabil' ) ); ?>" ><i class="servicos-fa fa fa-balance-scale"></i></a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/contabil' ) ); ?>" >Contábil</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-6  wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/pessoa-fisica' ) ); ?>" ><i class="servicos-fa fa fa-user"></i></a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/pessoa-fisica' ) ); ?>" >Pessoa Física</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-6 wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/gestao-de-condominio' ) ); ?>" ><i class="servicos-fa fa fa-building"></i></a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="<?php echo esc_url( home_url( '/gestao-de-condominio' ) ); ?>" >Gestão de Condomínio</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 
                    
           	</div>
           	<?php } ?>
			<!-- TRABALHA NA TELA SERVICOS -->

			<!-- TRABALHA NA TELA FERRAMENTAS  feito por Mr. Bulb-->
			<?php $titulo = $post->ID; ?>
			<?php if($titulo == 41 || $titulo == 39) { ?>
			<div class="grid grid-pad no-top">
					<div class="col-1-4  wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="http://sitecontabil.com.br/certidoes.htm"><i class="servicos-fa fa fa-file-text-o"></i></a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="http://sitecontabil.com.br/certidoes.htm">Certidões Negativas</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-4  wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="http://sitecontabil.com.br/consultas/calculos.html" ><i class="servicos-fa fa fa-percent"></i><a/>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="http://sitecontabil.com.br/consultas/calculos.html" >Impostos Atrasados</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-4 wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                       <a class="link-ferramenta" href="http://sitecontabil.com.br/facilitador.htm" > <i class="servicos-fa fa fa-check-square"></i> </a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="http://sitecontabil.com.br/facilitador.htm" >Facilitador Contábil</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-4  wow animated fadeIn animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; -webkit-animation-delay: 0.25s; animation-name: fadeIn; -webkit-animation-name: fadeIn;"> 
    					<div class="servico-item service sbox-1">
	                        <a class="link-ferramenta" href="http://sitecontabil.com.br/links.html" ><i class="servicos-fa fa fa-align-justify"></i></a>
	                        <h5 class="link-ferramenta">
	                          <a class="link-ferramenta" href="http://sitecontabil.com.br/links.html" >Links Úteis</a>
	                        </h5>    
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 
                    
           	</div>
           	<?php } ?>
			<!-- TRABALHA NA TELA SERVICOS -->
			
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->

<?php get_footer(); ?>
