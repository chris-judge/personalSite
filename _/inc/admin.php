<?php


// Adding is login page function
function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

// changing the logo link from wordpress.org to your site
function quindo_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'quindo_login_url' );

// changing the alt text on the logo to show your site name
function quindo_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertitle', 'quindo_login_title' );

// Remove unwanted items from admin menu
function quindo_remove_admin_menu_items() {
    $remove_menu_items = array(__('Comments'),);
    global $menu;
    end ($menu);
    while (prev($menu)){
        $item = explode(' ',$menu[key($menu)][0]);
        if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
        unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'quindo_remove_admin_menu_items');    

// Register styles for WYSIWYG editor
function quindo_editor_styles() {
    if (WP_ENV === 'production')
        $quindo_file_suffix = '.min';
    add_editor_style( '_/css/editor-style'.$quindo_file_suffix.'.css' );
}
add_action( 'after_setup_theme', 'quindo_editor_styles' );

// Register styles for login page
// function quindo_login_css() {
//     if (WP_ENV === 'production')
//         $quindo_file_suffix = '.min';
//     wp_enqueue_style( 'logincss', get_template_directory_uri() . '/_/css/login'.$quindo_file_suffix.'.css?'.filemtime(get_template_directory()."/_/css/login" . $quindo_file_suffix . ".css"), false );
// }
// add_action( 'login_enqueue_scripts', 'quindo_login_css', 10 );

// Allow Thumbnails in Posts
add_theme_support( 'post-thumbnails' );

// Disable admin editor. Should be in config.php but let's add it here just in case
define('DISALLOW_FILE_EDIT', TRUE);

// Change Excerpt notation
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function flourish( $atts, $content = null ) {
    $sdu = get_stylesheet_directory_uri();
    return '<div class="flourish"><img src="'.$sdu.'/_/img/pro/flourish.png" alt="Line break"></div>';
}
add_shortcode("flourish", "flourish");



//Don't jump page with gravity form is submitted.
add_filter( 'gform_confirmation_anchor', '__return_false' );

//Remove triangle after submission on contact page
add_action( 'gform_after_submission', 'set_post_content', 10, 1 );
function set_post_content( $entry, $form ) {
    ?>
    <script>
        if($('.contact-wrap').length){
            $('.submit-wrap .loading-gif').removeClass('active');
            $('.form-wrap').addClass('fade');
            $('.topics').addClass('fade');
            setTimeout(function(){
                $('.form-wrap').addClass('dn');
                $('.topics').addClass('dn');
                $('.thank-you').removeClass('dn');
                setTimeout(function(){
                    $('.thank-you').addClass('active');
                },25)
            },250)
        }
    </script>
    <?php 
}


/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );






// Hook up the AJAX actions
add_action( 'wp_ajax_nopriv_gf_button_get_form', 'gf_button_ajax_get_form' );
add_action( 'wp_ajax_gf_button_get_form', 'gf_button_ajax_get_form' );

// Add the "button" action to the gravityforms shortcode
// e.g. [gravityforms action="button" id=1 text="button text"]
add_filter( 'gform_shortcode_button', 'gf_button_shortcode', 10, 3 );

function gf_button_shortcode( $shortcode_string, $attributes, $content ){
    $a = shortcode_atts( array(
        'id' => 0,
        'text' => 'Show me the form!',
    ), $attributes );

    $form_id = absint( $a['id'] );

    if ( $form_id < 1 ) {
        return 'Missing the ID attribute.';
    }

    // Enqueue the scripts and styles
    gravity_form_enqueue_scripts( $form_id, true );

    $ajax_url = admin_url( 'admin-ajax.php' );

    $html = sprintf( '<button id="gf_button_get_form_%d">%s</button>', $form_id, $a['text'] );
    $html .= sprintf( '<div id="gf_button_form_container_%d" style="display:none;"></div>', $form_id );
    $html .= "<script>
                (function (SHFormLoader, $) {
                $('#gf_button_get_form_{$form_id}').click(function(){
                    var button = $(this);
                    $.get('{$ajax_url}?action=gf_button_get_form&form_id={$form_id}',function(response){
                        $('#gf_button_form_container_{$form_id}').html(response).fadeIn();
                        button.remove();
                        if(window['gformInitDatepicker']) {gformInitDatepicker();}
                    });
                });
            }(window.SHFormLoader = window.SHFormLoader || {}, jQuery));
            </script>";
    return $html;
}

function gf_button_ajax_get_form(){
    $form_id = isset( $_GET['form_id'] ) ? absint( $_GET['form_id'] ) : 0;
    // Render an AJAX-enabled form.
    // https://www.gravityhelp.com/documentation/article/embedding-a-form/#function-call
    gravity_form( $form_id,true, false, false, false, true );
    die();
}