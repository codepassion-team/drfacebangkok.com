<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lawyer Landing Page 
 */

$ed_section = lawyer_landing_page_home_section();
global $lawyer_landing_page_sections;
       
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}elseif( $ed_section ){ 
    get_header();
    foreach( $lawyer_landing_page_sections as $section ){ 
        if( get_theme_mod( 'ed_' . $section . '_section' ) == 1 ){
            get_template_part( 'sections/' . esc_attr( $section ) );
        } 
    }
    get_footer();
}else{ 
    include( get_page_template() ); 
}