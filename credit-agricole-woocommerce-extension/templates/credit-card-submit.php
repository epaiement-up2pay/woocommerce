<?php
/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by Crédit Agricole and are explicitly not part
 * of the Crédit Agricole range of products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License version 3 (GPLv3) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Crédit Agricole does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Crédit Agricole does not guarantee their full
 * functionality neither does Crédit Agricole assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Crédit Agricole does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */

/**
 * Html template : Credit Card Submit Button
 *
 * @since 2.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$html = '
				<button disabled id="seamless-submit" class="wd-submit checkout-button button alt wc-forward">' . __( 'Pay', 'woocommerce' ) . '</button>
				<div id="wd-cc-submit-spinner" class="spinner spinner-inline spinner-submit" style="display: none; background: url(\'' . admin_url() . 'images/loading.gif\') no-repeat;"></div>
			</div>
		';
