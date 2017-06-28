<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
 		<?php $view->style('theme', $params['style'] ? 'theme:css/theme.'.$params['style'].'.css' : 'theme:css/theme.css') ?>
        <?php $view->script('animatedtext', 'theme:js/animated-text.js', ['uikit']) ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky',  'uikit-lightbox',  'uikit-parallax', 'uikit-slider', 'uikit-grid', 'uikit-accordion', 'uikit-tooltip', 'animtedtext']) ?>
    </head>
	
    <body <?= $params['classes.body'] ?>>
				
        <?php if ($view->position()->exists('hero') || $params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
        <div id="tm-header" class="tm-block-header">

            <?php if ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                <?= $view->position('navbar', 'header-'.$params['header_layout'].'.php') ?>
            <?php endif ?>

            <?php if ($view->position()->exists('hero')) : ?>
            <div id="tm-hero" class="tm-hero tm-header-container uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_image'] ? "style=\"background-image: url('{$view->url($params['hero_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                <div class="uk-container uk-container-center<?= $params['hero_width'] ? ' uk-width-1-1' : '' ?>">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('hero', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

        </div>
        <?php endif ?>

		<!--<div class="uk-section-default" uk-scrollspy="{&quot;target&quot;:&quot;[uk-scrollspy-class]&quot;,&quot;cls&quot;:&quot;uk-animation-fade&quot;,&quot;delay&quot;:false}">-->
		<div class="uk-section-default">
			<div class="uk-background-norepeat uk-cover-background uk-background-center-center uk-background-fixed uk-section uk-section-large" 
				<?php if ($params['image_alt']) : ?>
				<?= $params['image_alt'] ? "style=\"background-image: url('{$view->url($params['image_alt'])}');\"" : '' ?>
				
				<?php elseif ($params['image']) : ?>
				<?= $params['image'] ? "style=\"background-image: url('{$view->url($params['image'])}');\"" : '' ?>
				<?php endif ?>
				>
				
				<div class="tm-background">
					<div class="uk-container uk-container-center">	
						<?php if ($view->position()->exists('top')) : ?>
						<section id="tm-top" class="tm-top uk-grid uk-grid-match" data-uk-grid-margin>
							<?= $view->position('top', 'position-grid.php') ?>
						</section>
						<?php endif; ?>

						<div id="tm-main" class="tm-main uk-grid" data-uk-grid-match data-uk-grid-margin>

							<main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-1-1'; ?>">
								<?= $view->render('content') ?>
							</main>

							<?php if ($view->position()->exists('sidebar')) : ?>
							<aside class="uk-width-medium-1-4 <?= $params['sidebar_first'] ? 'uk-flex-order-first-medium' : ''; ?>">
								<?= $view->position('sidebar', 'position-panel.php') ?>
							</aside>
							<?php endif ?>

						</div>
						

						
						<?php if ($view->position()->exists('bottom')) : ?>
						<section id="tm-bottom" class="tm-bottom uk-grid uk-grid-match" data-uk-grid-margin>
							<?= $view->position('bottom', 'position-grid.php') ?>
						</section>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>

		<?php if ($view->position()->exists('bottom_b')) : ?>
        <div id="tm-bottom-b" class="tm-bottom-b uk-block <?php echo $params['bottom_b_block_bg']; echo $params['bottom_b_block_padding']; echo $params['bottom_b_block_divider'] ? ' tm-block-divider' : ''; echo $params['bottom_b_block_contrast'] ? ' uk-contrast' : '';  ?>">
			<div class="<?= $params['bottom_b_container_width'] ?>">
                <section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                    <?= $view->position('bottom_b', 'position-grid.php') ?>
                </section>
            </div>
        </div>
        <?php endif ?>
	
		<?php if ($view->position()->exists('bottom_c')) : ?>
        <div id="tm-bottom-c" class="tm-bottom-c uk-block <?php echo $params['bottom_c_block_bg']; echo $params['bottom_c_block_padding']; echo $params['bottom_c_block_divider'] ? ' tm-block-divider' : ''; echo $params['bottom_c_block_contrast'] ? ' uk-contrast' : '';  ?>">
			<div class="<?= $params['bottom_d_container_width'] ?>">
                <section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                    <?= $view->position('bottom_c', 'position-grid.php') ?>
                </section>
            </div>
        </div>
        <?php endif ?>
		
		<?php if ($view->position()->exists('bottom_d')) : ?>
        <div id="tm-bottom-d" class="tm-bottom-d uk-block <?php echo $params['bottom_d_block_bg']; echo $params['bottom_d_block_padding']; echo $params['bottom_d_block_divider'] ? ' tm-block-divider' : ''; echo $params['bottom_d_block_contrast'] ? ' uk-contrast' : '';  ?>">
			<div class="<?php echo $params['bottom_d_container_width']; ?>">
                <section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                    <?= $view->position('bottom_d', 'position-grid.php') ?>
                </section>
            </div>
        </div>
        <?php endif ?>
		
		
		<?php if ($view->position()->exists('footer') || $view->position()->exists('footer_left')  || $view->position()->exists('footer_right') || $params['totop_scroller']) : ?>
		
		<div class="tm-block-footer uk-block <?php echo $params['footer_block_bg']; echo $params['footer_block_padding']; echo $params['footer_block_divider'] ? ' tm-block-divider' : ''; echo $params['footer_block_contrast'] ? ' uk-contrast' : '';  ?>">
			<div class="<?= $params['footer_container_width'] ?>">
				<?php if ($view->position()->exists('footer')) : ?>
				<section class="tm-footer uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('footer', 'position-grid.php') ?>
				</section>
				<?php endif ?>
			
				
				<?php if ($view->position()->exists('footer_left')  || $view->position()->exists('footer_right') || $params['totop_scroller']) : ?>
					<?= $view->position('footer_left', 'footer-'.$params['footer_layout'].'.php') ?>
				<?php endif ?>
			</div>	
		</div>	
		<?php endif ?>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

                <?php if ($params['logo_offcanvas']) : ?>
                <div class="uk-panel uk-text-center">
                    <a href="<?= $view->url()->get() ?>">
                        <img src="<?= $this->escape($params['logo_offcanvas']) ?>" alt="">
                    </a>
                </div>
                <?php endif ?>

                <?php if ($view->menu()->exists('offcanvas')) : ?>
                    <?= $view->menu('offcanvas', ['class' => 'uk-nav-offcanvas']) ?>
                <?php endif ?>

                <?php if ($view->position()->exists('offcanvas')) : ?>
                    <?= $view->position('offcanvas', 'position-panel.php') ?>
                <?php endif ?>

            </div>
        </div>
        <?php endif ?>

        <?php if ($view->position()->exists('fixed_bar')) : ?>
        <div class="tm-fixed-bar uk-hidden-small">
            <?= $view->position('fixed_bar', 'position-blank.php') ?>
        </div>
        <?php endif ?>
		
		<?php if ($view->position()->exists('smoothscroll')) : ?>
            <div class="tm-smoothscroll-bar uk-flex uk-flex-middle uk-visible-large">
 				<?= $view->position('smoothscroll', 'position-blank.php') ?>
            </div>
        <?php endif; ?>

        <?= $view->render('footer') ?>
	<!--</div>-->
    </body>
</html>
