<?php
/**
 * @package KMA
 * @subpackage kstrap
 * @since 1.0
 * @version 1.2
 */
?>
<div class="container-fluid">
	<h2 class="section-title text-center line-left line-right">Featured&nbsp;Listings</h2>
	<div class="row">
		<?php for ($i = 0; $i < 4; $i++) { ?>
			<div class="col-sm-6 col-lg-3 text-center">
				<?php include( locate_template( 'template-parts/partials/mini-listing.php' ) ); ?>
			</div>
		<?php } ?>
	</div>
	<div class="section-bottom">
		<div class="section-button text-center">
			<a class="btn btn-primary btn-outlined btn-reversed" href="/properties/" >Search All Property Types</a>
		</div>
	</div>
</div>