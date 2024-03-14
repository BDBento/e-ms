<?php

function add_theme_scripts(){

    wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.js', array('jquery'),'3.4.1', true );
    
    wp_enqueue_script('maior_menor', get_template_directory_uri().'/assets/js/maior_menor.js', array('jquery'),'3.6.0' );

    wp_enqueue_script( 'contrast', get_template_directory_uri().'/assets/js/contrast.js',true );

    wp_enqueue_script( 'bootstrap-buble-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.3.3', true );
    
    wp_enqueue_style( 'sa2css', get_template_directory_uri().'/libs/sweetalert2/sweetalert2.min.css', '', '', $media = 'all' );

	wp_enqueue_script( 'sa2js', get_template_directory_uri().'/libs/sweetalert2/sweetalert2.min.js', array( 'jquery' ), '' , true );

    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', '', '', $media = 'all' );

	wp_enqueue_script( 'datatablejs', get_template_directory_uri().'/libs/DataTables/datatables.min.js', 'jquery', false, true );

    wp_enqueue_style( 'datatablecss', get_template_directory_uri().'/libs/DataTables/datatables.min.css', '', '', $media = 'all' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// *******************************************************************************************************************************************************
//                                                                  Title Truncate
// *******************************************************************************************************************************************************

function titulo($max) {
    $titulo = get_the_title(); /* ou você pode usar get_the_title() */
    $getlength = strlen($titulo);
    $thelength = $max;
    if($getlength > $max) {
        echo substr($titulo, 0, $thelength) . "...";
    } else {
        echo $titulo;
    }
}

// *******************************************************************************************************************************************************
//                                                                //Title Truncate
// *******************************************************************************************************************************************************

function footer_widgets() {

    register_sidebar( array(
        'name'          => 'Widget Footer',
        'id'            => 'footer-widgets',
        'description'   => 'Widgets para o footer',
        'before_widget' => '<div id="%1$s" style="display:flex" class="footer-widget %2$s"> ',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="footer-widget-title col-4">',
        'after_title'   => '</h6>',
    ) );

}
add_action( 'widgets_init', 'footer_widgets' );


// *******************************************************************************************************************************************************
//                      Verifica se não existe nenhuma função com o nome maisVistos_register_widget e contabiliza as visualizações
// *******************************************************************************************************************************************************


// Verifica se não existe nenhuma função com o nome tutsup_session_start
if ( ! function_exists( 'tutsup_session_start' ) ) {
    // Cria a função
    function tutsup_session_start() {
        // Inicia uma sessão PHP
        if ( ! session_id() ) session_start();
    }
    // Executa a ação
    add_action( 'init', 'tutsup_session_start' );
}

// Verifica se não existe nenhuma função com o nome tp_count_post_views
if ( ! function_exists( 'tp_count_post_views' ) ) {
    // Conta os views do post
    function tp_count_post_views () {	
        // Garante que vamos tratar apenas de posts
        if ( is_single() ) {
        
            // Precisamos da variável $post global para obter o ID do post
            global $post;
            
            // Se a sessão daquele posts não estiver vazia
            if ( empty( $_SESSION[ 'tp_post_counter_' . $post->ID ] ) ) {
                
                // Cria a sessão do posts
                $_SESSION[ 'tp_post_counter_' . $post->ID ] = true;
            
                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                // Se a chave estiver vazia, valor será 1
                if ( empty( $key_value ) ) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } // Verifica o valor
                
            } // Checa a sessão
            
        } // is_single
        
        return;
        
    }
    add_action( 'get_header', 'tp_count_post_views' );
}

// *******************************************************************************************************************************************************
// Verifica se não existe nenhuma função com o nome maisVistos_register_widget e contabiliza as visualizações //
// *******************************************************************************************************************************************************



if ( function_exists('register_sidebar') )
//Código para o widget.
register_sidebar(array(
'name' => __( 'Sistemas Mais Acessados' ),
'id' => 'sistemas_mais_acessados',
'description' => __( 'Sistemas Mais Acessados' ),
'before_widget' => '<div class="mais_acessados">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));






// Paginacao
function paginacao() {
    if( is_singular() )
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="paginacao"><ul  class="list-unstyled list-inline">' . "\n";
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="txt">%s</li>' . "\n", get_previous_posts_link() );
    /** Link para a primeira página, mais reticências se necessário */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)),'1');
        if ( ! in_array( 2, $links ) )
        echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
        echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="txt">%s</li>' . "\n", get_next_posts_link() );
    echo '</ul"></div>' . "\n";
}



// Add theme support for post thumbnails    
add_theme_support( 'post-thumbnails' );

// Add theme support for custom backgrounds
add_theme_support( 'custom-background' );

// Add theme support for automatic feed links
add_theme_support( 'automatic-feed-links' );


// Add theme support for custom logo
add_theme_support( 'custom-logo' );

// Add theme support for HTML5
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Add theme support for title tag
add_theme_support( 'title-tag' );

// Add theme support for custom editor style
add_editor_style( 'editor-style.css' );

// Add theme support for selective refresh for widgets
add_theme_support( 'customize-selective-refresh-widgets' );

// Add theme support for customizer
add_theme_support( 'customizer' );


function wpdocs_custom_excerpt_length( $length ) {
	return 16;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );

add_filter( 'acf/the_field/escape_html_optin', '__return_true' );