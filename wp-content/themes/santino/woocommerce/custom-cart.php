<?php

if( Bw::get_option( 'show_woo_filter' ) ) {
    
    global $woocommerce;
    
    echo '
<div class="isotope-filter filter-shop">
    <div class="filter-content">
        <em class="round">
            <i class="fa fa-caret-right"></i>
        </em>
        <a id="cart-location" href="' . $woocommerce->cart->get_cart_url() . '" style="display:none;"></a>
        <a href="' . $woocommerce->cart->get_cart_url() . '" class="cart-contents">
            <span>' . $woocommerce->cart->cart_contents_count . '</span>
            <p class="price">
                <strong>' . $woocommerce->cart->get_cart_total() . '</strong>
            </p>
        </a>
    </div>
</div>';
    foreach( array() as $row ) {
        $term = get_term_by('id', (int) $row, 'portfolio');
        echo '<li data-filter="bw-filter-' . $row . '">' . $term->name . '</li>';
    }
}