<?php
/**
* Template Name: DCTP Fees
*
* @package WordPress
* @subpackage DTHA / DCTP
* 
*/
get_header(); ?>
	<div class="dctp-header shadow">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<a href="<?php echo get_home_url(); ?>/dctp">
					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/12/dctp-logo.png' ) . '" class="float-right img-fluid" width="70" alt="Delaware Certified Thoroughbred Program">';?>
					</a>
				</div>
				<div class="col-9">
					<h3 class="text-left h1 pt-3 dctp--title">Delaware Certified Thoroughbred Program</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container dctp-container">
		<div class="row">
			<div class="col-lg-3 pb-5">
				<h2 class="h3 mt-1">DCTP Menu:</h2>
				<?php bellows( 'main' , array( 'theme_location' => 'dctp_menu' ) ); ?>
			</div>
			<div class="col-lg-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>

						<div class="col">
							<?php the_content(); ?>
							
						</div>

				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="dctpModal" tabindex="-1" aria-labelledby="dctpModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="dctpModalLabel">Delaware Certified Thoroughbred Program Application Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="embed-responsive embed-responsive-1by1 mt-3 mb-3">
						<iframe title="_DCTP_Website_Application_Form Web Form" src="https://c0cre244.caspio.com/dp/241c30005ca6ea8a11414b30b036" name="_DCTP_Website_Application_Form Web Form">Sorry, but your browser does not support frames.</iframe>
						<br />
						<br />
						<br/ >
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
							<input name="hosted_button_id" type="hidden" value="V4QXQX7AEK42L" />
							<table>
								<tbody>
									<tr>
										<td><input name="on0" type="hidden" value="Horse Age" />Horse Age</td>
									</tr>
									<tr>
										<td>
											<select name="os0">
												<option value="Weanling">Weanling $50.00 USD</option>
												<option value="Yearling">Yearling $100.00 USD</option>
											</select>
										</td>
									</tr>
								</tbody>
							</table>
							<input name="currency_code" type="hidden" value="USD" />
							<input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" type="image" />
							<img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" />
						</form>
						<br />
						<br />
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">&times; Close</button>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>