<?php
	if( WC()->cart->get_coupons() ):
	foreach ( WC()->cart->get_coupons() as $code => $coupon ) :
			endforeach;
			
			$credit_max_amount = $coupon->get_meta( 'credit_max_amount' );
			$orders = WC()->cart->subtotal;
			$amount = $coupon->amount;
			$descounts = $orders * $amount / 100;
			$subtotal = $orders - $descounts;
			echo "TOTAL CUPON CREDITO: ";
			echo $credit_max_amount;
			echo "DESCUENTO PORCENTAJE: ";
			echo $amount;
			echo "DESCUENTO TOTAL: ";
			echo $descounts;
			echo "TOTAL COMPRA: ";
			echo $orders;
	     	echo "SUBTOTAL: ";
			echo $subtotal;
			$credit_max_amounts = $credit_max_amount - $subtotal;
			$coupon->update_meta_data( 'credit_max_amount', $credit_max_amounts );
			$coupon->save();
	endif;
	 ?> 