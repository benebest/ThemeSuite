<?php
// TODO Add this factory method
HighlightJsPackage::withStyle('rainbow');
?>
<div id="mainWrapper">
	<div class="container">

		<header id="topBg" class="layout">
			<div class="row">
				<!--				<div class="col-sm-4 col-md-4" id="searchBox">
								</div>-->
				<div class="col-xs-12 col-sm-6 col-md-8" >
					<a class="logo-img" href="/" title="maslosoft">
					</a>
					<a class="logo-text" href="/" title="maslosoft - from bit to system">
						<h1>maslosoft</h1>
						<div>from bit to system</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4" id="searchBox">
					<?php
					echo new SearchDrawer([
				'id' => 'top-search'
					]);
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" >
					<nav id="menuBg" class="clearfix">
						<?php
						echo PageLinks::widget([
							'sticky' => true,
							'code' => 'mainMenu',
//							'authLink' => true,
							'flags' => true
						]);
						?>
					</nav>
				</div>
			</div>
		</header>
		<div class="layout">
			<?php
			echo Breadcrumbs::widget([
				'homeLink' => [tx('Home page') => (string) $homeUrl . '/'],
				'links' => $this->breadcrumbs,
				'encodeLabel' => false,
				'separator' => ' <i class="fa fa-angle-right"></i> '
			]);
			?>
		</div>
		<?= $content; ?>
	</div>
	<footer id="bottomBg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h6><a href="https://meno.pro/" style="color: white;">Making content management expressive</a></h6>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="networkIcons">
						<?= SocialIcons::widget(['squareIcons' => false]); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id="bottomWrapper">
		<div class="container">
			<div id="leafBot" class="layout">				
				<div class="row">
					<?php
					echo LinkBlocks::widget([
						'columns' => [
							'sm' => 4,
							'xs' => 6
						],
						'showTitles' => true,
						'codes' => [
							'bottomLeft',
							'bottomCenter',
							'bottomRight'
					]]);
					?>
				</div>
				<hr />
				<div id="copyright" class="row">
					<div class="col-xs-12 col-md-12">
						<p>&copy; <?= Decorator::copyright('2012'); ?> all rights reserved - <a href="http://maslosoft.com/">maslosoft</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>