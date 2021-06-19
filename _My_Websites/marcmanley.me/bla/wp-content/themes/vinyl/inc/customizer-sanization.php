<?php
/**
 * vinyl Theme Customizer: General Style
 *
 * @package vinyl
 */

/**
 * Data Satinization
 */
// text input
function ht_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

// logo style
function ht_sanitize_circle( $input ) {
    $valid = array(
        '0' => 'Square',
		'50%' => 'Circle',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// displey none or block
function ht_sanitize_display( $input ) {
    $valid = array(
        'block' => 'Yes',
        'none' => 'No'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// displey yes or no
function ht_sanitize_yesno( $input ) {
    $valid = array(
        'no' => 'No',
        'yes' => 'Yes'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// border style
function ht_sanitize_border_style( $input ) {
    $valid = array(
        'none'   => 'none',
        'dotted' => 'Dotted',
        'dashed' => 'Dashed',
        'solid'  => 'Solid',
        'double' => 'double',
        'groove' => 'groove',
        'ridge'  => 'ridge',
        'inset'  => 'inset',
        'outset' => 'outset'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// columns
function ht_sanitize_columns( $input ) {
    $valid = array(
        '1' => '1 Column',
        '2' => '2 Columns',
        '3' => '3 Columns'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// grid
function ht_sanitize_grid( $input ) {
    $valid = array(
        '100%' => 'Default',
        '50%' => 'Grid 2',
        '33%' => 'Grid 3',
        '25%' => 'Grid 4'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// checkbox
function ht_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

// sidebar left or right
function ht_sanitize_sidebar( $input ) {
    $valid = array(
        'right' => 'Right',
        'left' => 'Left'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// fonts
function ht_sanitize_fonts( $input ) {
    $valid = ht_fonts();
    
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// font weight
function ht_sanitize_font_weight( $input ) {
    $valid = ht_weight();
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// font size
function ht_sanitize_font_size( $input ) {
    $valid = ht_size();
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// text align
function ht_sanitize_text_align( $input ) {
    $valid = ht_text_align();
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// text transform
function ht_sanitize_text_transform( $input ) {
    $valid = ht_text_transform();
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// letter spacing
function ht_sanitize_letter_spacing( $input ) {
    $valid = ht_letter_spacing();
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// font style
function ht_sanitize_font_style( $input ) {
    $valid = ht_font_style();
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}