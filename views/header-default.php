<div class="tm-container">

	<nav class="tm-navbar <?= $params['classes.header'] ?>" <?= $params['classes.sticky'] ?>>

        <div class="uk-container uk-container-center uk-flex uk-flex-space-between">
			
				<?php if ($params['logo'] || $params['title']) : ?>
				<div class="uk-navbar-left">
					<a class="tm-logo uk-navbar-brand uk-flex uk-flex-middle" href="<?= $view->url()->get() ?>">
						<?php if ($params['logo']) : ?>
							<img class="tm-logo uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
						<?php else : ?>
							<?= $params['title'] ?>
						<?php endif ?>
					</a>
				</div>
				<?php endif ?>

				<?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
				<div class="uk-navbar-center uk-flex uk-flex-center uk-visible-large">
					<?= $view->menu('main', 'menu-navbar.php') ?>
					<?= $view->position('navbar', 'position-blank.php') ?>
				</div>
				<?php endif ?>

				<?php if ($view->position()->exists('header-search')  || $view->position()->exists('header-social')  || $view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
				<div class="uk-navbar-right uk-navbar-flip">
					
					<?php if ($view->position()->exists('header_search')) : ?>
					<div class="tm-navbar-social tm-search uk-hidden-small">
						<div data-uk-dropdown="{mode:'click', pos:'left-center'}">
							<button class="tm-navbar-button tm-search-button"></button>
						    <div class="uk-dropdown-blank tm-navbar-dropdown">
								<?= $view->position('header_search', 'position-blank.php') ?>
							</div>
						</div>
					</div>
					<?php endif ?>

					<?php if ($view->position()->exists('header_social')) : ?>
					<div class="tm-navbar-social uk-hidden-small">
					   <div data-uk-dropdown="{mode:'click', pos:'left-center'}">
						   <button class="tm-navbar-button tm-navbar-social-button"></button>
						   <div class="uk-dropdown-blank tm-navbar-dropdown">
							   <?= $view->position('header_social', 'position-blank.php') ?>
						   </div>
					   </div>
					</div>
					<?php endif ?>
					
					
					<?php if ($view->position()->exists('navbar_more')) : ?>
						<div class="tm-navbar-social tm-login uk-hidden-small" div data-uk-dropdown="{mode:'click', pos:'bottom-center'}">
								<button class="tm-navbar-button tm-login-button"></button>
								<div class="uk-dropdown uk-dropdown-flip uk-dropdown-autoflip uk-dropdown-bottom">
								<?= $view->position('navbar_more', 'position-blank.php') ?>
								</div>
						</div>
					<?php endif; ?>
					

					<?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
					<div class="uk-flex uk-flex-center uk-flex-middle uk-hidden-large">
						<a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
					</div>
					<?php endif ?>

				</div>
				<?php endif ?>

        </div>
    </nav>
</div>
