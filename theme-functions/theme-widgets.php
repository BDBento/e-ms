<?php
function maisVistos_register_widget() {
    register_widget( 'maisVistos_widget' );
    }
    
    add_action( 'widgets_init', 'maisVistos_register_widget' );
    
    class maisVistos_widget extends WP_Widget {
    
    function __construct() {
    parent::__construct(
    // widget ID
    'maisVistos_widget',
    // widget name
    __('maisVistos_widget', ' maisVistos_widget_domain'),
    // widget description
    array( 'description' => __( 'mais vistos Widget Tutorial', 'maisVistos_widget_domain' ), )
    );
    }
    
    public function widget( $args, $instance ) {
        echo get_template_part( 'template-parts/home/mais-vistos' );
    }
    
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) )
    $title = 'maisVistos'; //$instance[ 'title' ];
    else
    $title = __('', 'maisVistos_widget_domain' );
    ?>
    <p>
        mais vistos
    </p>
    <?php
    }
    
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
    
}
