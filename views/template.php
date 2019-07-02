<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
 		<?php $view->style('theme', $params['style'] ? 'theme:css/theme.'.$params['style'].'.css' : 'theme:css/theme.css') ?>
        <?php $view->script('animatedtext', 'theme:js/animated-text.js', ['uikit']) ?>
		<?php $view->script('lib', 'theme:js/lib.js', ['jQuery']) ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky',  'uikit-lightbox',  'uikit-parallax', 'uikit-slider', 'uikit-grid', 'uikit-accordion', 'uikit-tooltip', 'animtedtext']) ?>
    </head>
	
    <body <?= $params['classes.body'] ?>>
				
        <?php if ($view->position()->exists('hero') || $params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
        <div id="tm-header" class="tm-block-header">

            <?php if ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                <?= $view->position('navbar', 'header-'.$params['header_layout'].'.php') ?>
            <?php endif ?>

            <?php if ($view->position()->exists('hero')) : ?>
            <div id="tm-hero" class="tm-hero tm-header-container uk-block uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_image'] ? "style=\"background-image: url('{$view->url($params['hero_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                <!--<div class="uk-container uk-container-center< ?= $params['hero_width'] ? ' uk-width-1-1' : '' ?>">-->
				<div class="<?= $params['hero_width'] ? ' uk-width-1-1' : '' ?>">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('hero', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

        </div>
        <?php endif ?>

		<div class="uk-background-norepeat uk-cover-background uk-background-center-center uk-background-fixed uk-section uk-section-large <?= $params['classes.image-alt'] ?>" 
			<?php if ($params['image_alt_enable']) : ?>
			<?php if ($params['image_alt']) : ?>
			<?= $params['image_alt'] ? "style=\"background-image: url('{$view->url($params['image_alt'])}');\"" : '' ?>
				
			<?php elseif ($params['image']) : ?>
			<?= $params['image'] ? "style=\"background-image: url('{$view->url($params['image'])}');\"" : '' ?>
			<?php endif ?>
			<?php endif ?>>

			<?php if ($view->position()->exists('top_a')) : ?>
			<div id="tm-top-a" class="tm-block-top-a <?php echo $params['block_classes.top_a'];?>" <?php echo $params['styles.top_a']; ?>>
				<div class="<?= $params['block.top_a.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('top_a', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>
			
			<?php if ($view->position()->exists('top_b')) : ?>
			<div id="tm-top-b" class="tm-block-top-b <?php echo $params['block_classes.top_b'];?>" <?php echo $params['styles.top_b']; ?>>
				<div class="<?= $params['block.top_b.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('top_b', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>		
				
			<?php if ($view->position()->exists('top_c')) : ?>
			<div id="tm-top-c" class="tm-block-top-c <?php echo $params['block_classes.top_c'];?>" <?php echo $params['styles.top_c']; ?>>
				<div class="<?= $params['block.top_c.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('top_c', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>

			<?php if ($view->position()->exists('top_d')) : ?>
			<div id="tm-top-d" class="tm-block-top-d <?php echo $params['block_classes.top_d'];?>" <?php echo $params['styles.top_d']; ?>>
				<div class="<?= $params['block.top_d.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('top_d', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>
			
			
			<div id="tm-main" class="tm-block-main <?php echo $params['block_classes.main'];?>" <?php echo $params['styles.main']; ?>>
				<div class="<?= $params['block.main.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-medium-1-1'; ?>">
							<?php if ($params['breadcrumbs'] && $view->position()->exists('breadcrumbs') ) : ?>
								<!--<div class="tm-breadcrumb-centered">-->
								<div class="tm-breadcrumb">
								<?= $view->position('breadcrumbs', 'position-blank.php') ?>
								<!--< ?= $view->render('breadcrumbs') ?>-->
								</div>
							<?php endif ?>
							<?= $view->render('content') ?>
						</main>
						<?php if ($view->position()->exists('sidebar')) : ?>
						<aside class="uk-width-medium-1-4 <?= $params['sidebar_first'] ? 'uk-flex-order-first-medium' : ''; ?>">
							<?= $view->position('sidebar', 'position-panel.php') ?>
						</aside>
						<?php endif ?>
					</section>
				</div>
			</div>
	
		
			<?php if ($view->position()->exists('bottom_a')) : ?>
			<div id="tm-bottom-a" class="tm-block-bottom-a <?php echo $params['block_classes.bottom_a'];?>" <?php echo $params['styles.bottom_a']; ?>>
				<div class="<?= $params['block.bottom_a.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('bottom', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>
			
			<?php if ($view->position()->exists('bottom_b')) : ?>
			<div id="tm-bottom-b" class="tm-block-bottom-b <?php echo $params['block_classes.bottom_b'];?>" <?php echo $params['styles.bottom_b']; ?>>
				<div class="<?= $params['block.bottom_b.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('bottom_b', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>
		
			<?php if ($view->position()->exists('bottom_c')) : ?>
			<div id="tm-bottom-c" class="tm-block-bottom-c <?php echo $params['block_classes.bottom_c'];?>" <?php echo $params['styles.bottom_c']; ?>>
				<div class="<?= $params['block.bottom_c.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('bottom_c', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>
			
			<?php if ($view->position()->exists('bottom_d')) : ?>
			<div id="tm-bottom-d" class="tm-block-bottom-d <?php echo $params['block_classes.bottom_d'];?>" <?php echo $params['styles.bottom_d']; ?>>
				<div class="<?= $params['block.bottom_d.container_width'] ?>">
					<section class="uk-grid uk-grid-match" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?= $view->position('bottom_d', 'position-grid.php') ?>
					</section>
				</div>
			</div>
			<?php endif ?>
		
		</div> <!-- Background Image -->	
		
		<?php if ($view->position()->exists('footer') || $view->position()->exists('footer_left')  || $view->position()->exists('footer_right') || $params['totop_scroller']) : ?>
		
		<div id="tm-footer" class="tm-block-footer <?php echo $params['block_classes.footer'];?>" <?php echo $params['styles.footer']; ?>>
				<div class="<?= $params['block.footer.container_width'] ?>">
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
