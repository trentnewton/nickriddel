<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<header><h2 class="fade-in-right"><?php _e( 'Customer Details', 'woocommerce' ); ?></h2></header>

<table class="shop_table customer_details fade-in-left">
	<?php if ( $order->get_customer_note() ) : ?>
		<tr>
			<th><?php _e( 'Note:', 'woocommerce' ); ?></th>
			<td><?php echo wptexturize( $order->get_customer_note() ); ?></td>
		</tr>
	<?php endif; ?>

	<?php if ( $order->get_billing_email() ) : ?>
		<tr>
			<th><?php _e( 'Email:', 'woocommerce' ); ?></th>
			<td><?php echo esc_html( $order->get_billing_email() ); ?></td>
		</tr>
	<?php endif; ?>

	<?php if ( $order->get_billing_phone() ) : ?>
		<tr>
			<th><?php _e( 'Phone:', 'woocommerce' ); ?></th>
			<td><?php echo esc_html( $order->get_billing_phone() ); ?></td>
		</tr>
	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>
</table>

<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

<div class="row addresses">
	<div class="small-6 columns fade-in-left">

<?php endif; ?>

<header class="title">
	<h3><?php _e( 'Billing Address', 'woocommerce' ); ?></h3>
</header>
<address>
	<?php echo ( $address = $order->get_formatted_billing_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
</address>

<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

	</div><!-- /.col-1 -->
	<div class="small-6 columns fade-in-right">
		<header class="title">
			<h3><?php _e( 'Shipping Address', 'woocommerce' ); ?></h3>
		</header>
		<address>
			<?php echo ( $address = $order->get_formatted_shipping_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
		</address>
	</div><!-- /.col-2 -->
</div><!-- /.col2-set -->

<?php endif; ?>

<div class="clear"></div>
<div class="row double-space-top fade-in-up">
	<div class="columns text-center">
		<a href="<?php echo home_url(); ?>/" class="button"><?php _e( 'Home Page', 'nickriddel' ); ?></a>
	</div>
</div>


