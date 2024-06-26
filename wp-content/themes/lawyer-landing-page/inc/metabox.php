<?php
/**
 * lawyer_landing_page Meta Box
 * 
 * @package lawyer_landing_page
 */

 add_action('add_meta_boxes', 'lawyer_landing_page_add_sidebar_layout_box');

function lawyer_landing_page_add_sidebar_layout_box(){    
    add_meta_box(
        'lawyer_landing_page_sidebar_layout', // $id
        __( 'Sidebar Layout', 'lawyer-landing-page' ), // $title
        'lawyer_landing_page_sidebar_layout_callback', // $callback
        'page', // $page
        'normal', // $context
        'high'  // $priority    
    );
}

$lawyer_landing_page_sidebar_layout = array(         
    'right-sidebar' => array(
        'value' => 'right-sidebar',
        'label' => __( 'Right sidebar (default)', 'lawyer-landing-page' ),
        'thumbnail' => get_template_directory_uri() . '/images/right-sidebar.png'
    ),
    'no-sidebar' => array(
        'value'     => 'no-sidebar',
        'label'     => __( 'No sidebar', 'lawyer-landing-page' ),
        'thumbnail' => get_template_directory_uri() . '/images/no-sidebar.png'
    )   
);

function lawyer_landing_page_sidebar_layout_callback(){
    global $post, $lawyer_landing_page_sidebar_layout;
    wp_nonce_field( basename( __FILE__ ), 'lawyer_landing_page_sidebar_layout_nonce' ); ?>
    <table class="form-table">
        <tr>
            <td colspan="4"><em class="f13"><?php esc_html_e( 'Choose Sidebar Template', 'lawyer-landing-page' ); ?></em></td>
        </tr>
        <tr>
            <td>
            <?php  
                foreach( $lawyer_landing_page_sidebar_layout as $field ){  
                    $sidebar_layout = get_post_meta( $post->ID, 'lawyer_landing_page_sidebar_layout', true ); ?>

                <div class="radio-image-wrapper" style="float:left; margin-right:30px;">
                    <label class="description">
                        <span><img src="<?php echo esc_url( $field['thumbnail'] ); ?>" alt="<?php echo esc_attr( $field['label'] ); ?>" /></span><br/>
                        <input type="radio" name="lawyer_landing_page_sidebar_layout" value="<?php echo esc_attr( $field['value'] ); ?>" <?php checked( $field['value'], $sidebar_layout ); if( empty( $sidebar_layout ) ) { checked( $field['value'], 'right-sidebar' ); } ?>/>&nbsp;<?php echo esc_html( $field['label'] ); ?>
                    </label>
                </div>
                <?php } // end foreach 
                ?>
                <div class="clear"></div>
            </td>
        </tr>
    </table>
    <?php        
}

/**
 * save the custom metabox data
 * @hooked to save_post hook
 */
function lawyer_landing_page_save_sidebar_layout( $post_id ) { 
    global $lawyer_landing_page_sidebar_layout; 

    // Verify the nonce before proceeding.
    if( !isset( $_POST[ 'lawyer_landing_page_sidebar_layout_nonce' ] ) || !wp_verify_nonce( sanitize_key( $_POST[ 'lawyer_landing_page_sidebar_layout_nonce' ] ), basename( __FILE__ ) ) )
        return;

    // Stop WP from clearing custom fields on autosave
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )  
        return;
        
    if( 'page' == $_POST['post_type'] ){  
        if( ! current_user_can( 'edit_page', $post_id ) ) return $post_id;  
    }elseif( ! current_user_can( 'edit_post', $post_id ) ){  
        return $post_id;  
    }  
    
    $layout = isset( $_POST['lawyer_landing_page_sidebar_layout'] ) ? sanitize_key( $_POST['lawyer_landing_page_sidebar_layout'] ) : 'right-sidebar';

    if( array_key_exists( $layout, $lawyer_landing_page_sidebar_layout ) ){
        update_post_meta( $post_id, 'lawyer_landing_page_sidebar_layout', $layout );
    }else{
        delete_post_meta( $post_id, 'lawyer_landing_page_sidebar_layout' );
    }
}
add_action('save_post', 'lawyer_landing_page_save_sidebar_layout'); 