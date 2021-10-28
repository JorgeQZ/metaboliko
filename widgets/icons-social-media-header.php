<?php
function mtblko_load_widget_header() {
    register_widget( 'mtblko_widget_header' );
}
add_action( 'widgets_init', 'mtblko_load_widget_header' );

// Creating the widget
class mtblko_widget_header extends WP_Widget {
    function __construct() {
        parent::__construct('mtblko_widget_header',__('Metaboliko Social Icons Header', 'mtblko_widget_header_domain'),array( 'description' => __( 'Botones de redes sociales.', 'mtblko_widget_header_domain' ), ));
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $facebook = $instance['mtblko_facebook'];
        $pinterest = $instance['mtblko_pinterest'];
        $linkedin = $instance['mtblko_linkedin'];
        $youtube = $instance['mtblko_youtube'];
        $whatsapp = $instance['mtblko_whatsapp'];
        $twitter = $instance['mtblko_twitter'];
        $instagram = $instance['mtblko_instagram'];
        $whatsapp_text = $instance['mtblko_whatsapp_text'];

        echo $args['before_widget'];
        if ( ! empty( $title ) ){
        echo $args['before_title'] . $title . $args['after_title'];
        }

        if($whatsapp):
            $whatsapp__url = "https://wa.me/".$whatsapp;
            if($whatsapp_text):
                $whatsapp__url = "https://wa.me/".$whatsapp.'?text='.$whatsapp_text;
            endif;
        endif;

        echo "<div class='links'>";
        if( ! empty($facebook)){
            echo "<a href='".$facebook."' target='_blank'><img src='".get_template_directory_uri().'/img/icons/facebook-white.png'."' alt=''></a>";
        }

        if( ! empty($twitter)){
            echo "<a href='".$twitter."' target='_blank'>
              <img  src='".get_template_directory_uri().'/img/icons/twitter-white.png'."' alt=''>
            </a>";
            }

        if( ! empty($linkedin)){
        echo "<a href='".$linkedin."' target='_blank'><img src='".get_template_directory_uri().'/img/icons/linkedin-white.png'."' alt=''></a>";
        }

        if( ! empty($instagram)){
        echo "<a href='".$instagram."' target='_blank'>
            <img src='".get_template_directory_uri().'/img/icons/instagram-white.png'."' alt=''></a>";
        }


        if( ! empty($youtube)){
        echo "<a href='".$youtube."' target='_blank'><img src='".get_template_directory_uri().'/img/icons/youtube-white.png'."'></a>";
        }

        if( ! empty($pinterest)){
        echo "<a href='".$pinterest."' target='_blank'>
           <img src='".get_template_directory_uri().'/img/icons/pinterest-white.png'."' alt=''>
        </a>";
        }
        if( ! empty($whatsapp)){
        echo "<a href='".$whatsapp__url."' target='_blank'>
           <img class='hover' src='".get_template_directory_uri().'/img/icons/whatsapp-white.png'."' alt=''>
        </a>";
        }
        echo "</div>";

        echo $args['after_widget'];
    }


    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }else {
    $title = __( 'New title', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_facebook' ] ) ) {
    $facebook = $instance[ 'mtblko_facebook' ];
    }else{
    $facebook = __( '#', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_youtube' ] ) ) {
    $youtube = $instance[ 'mtblko_youtube' ];
    }else{
    $youtube = __( '#', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_linkedin' ] ) ) {
    $linkedin = $instance[ 'mtblko_linkedin' ];
    }else{
    $linkedin = __( '#', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_pinterest' ] ) ) {
    $pinterest = $instance[ 'mtblko_pinterest' ];
    }else{
    $pinterest = __( '#', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_whatsapp' ] ) ) {
    $whatsapp = $instance[ 'mtblko_whatsapp' ];
    }else{
    $whatsapp = __( '#', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_whatsapp_text' ] ) ) {
    $whatsapp_text = $instance[ 'mtblko_whatsapp_text' ];
    }else{
    $whatsapp_text = __( '#', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_instagram' ] ) ) {
    $instagram = $instance[ 'mtblko_instagram' ];
    }else{
    $instagram = __( '#', 'mtblko_widget_header_domain' );
    }

    if ( isset( $instance[ 'mtblko_twitter' ] ) ) {
    $twitter = $instance[ 'mtblko_twitter' ];
    }else{
    $twitter = __( '#', 'mtblko_widget_header_domain' );
    }
    // Widget admin form
    ?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title:' ); ?></strong></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<ul>
    <li>
        <label for="<?php echo $this->get_field_id('mtblko_facebook');?>"><strong><?php _e( 'Facebook:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_facebook');?>" name="<?php echo $this->get_field_name('mtblko_facebook');?>" value="<?php echo esc_attr( $facebook ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('mtblko_linkedin');?>"><strong><?php _e( 'LinkedIn:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_linkedin');?>" name="<?php echo $this->get_field_name('mtblko_linkedin');?>" value="<?php echo esc_attr( $linkedin ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('mtblko_instagram');?>"><strong><?php _e( 'Instagram:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_instagram');?>" name="<?php echo $this->get_field_name('mtblko_instagram');?>" value="<?php echo esc_attr( $instagram ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('mtblko_twitter');?>"><strong><?php _e( 'Twitter:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_twitter');?>" name="<?php echo $this->get_field_name('mtblko_twitter');?>" value="<?php echo esc_attr( $twitter ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('mtblko_youtube');?>"><strong><?php _e( 'YouTube:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_youtube');?>" name="<?php echo $this->get_field_name('mtblko_youtube');?>" value="<?php echo esc_attr( $youtube ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('mtblko_pinterest');?>"><strong><?php _e( 'Pinterest:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_pinterest');?>" name="<?php echo $this->get_field_name('mtblko_pinterest');?>" value="<?php echo esc_attr( $pinterest ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('mtblko_whatsapp');?>"><strong><?php _e( 'Whatsapp:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_whatsapp');?>" name="<?php echo $this->get_field_name('mtblko_whatsapp');?>" value="<?php echo esc_attr( $whatsapp ); ?>">
        <br>
        <small>Agrega tu número de whatsapp incluyendo tu código de país al principio ( 52 1 para México). No agregues
            signos ( +, ()) ni
            espacios. <strong>Ejemplo:</strong>5210000000000.</small>
        <br><br>
        <label for="<?php echo $this->get_field_id('mtblko_whatsapp_text');?>"><strong><?php _e( 'Mensaje predeterminado:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('mtblko_whatsapp_text');?>" name="<?php echo $this->get_field_name('mtblko_whatsapp_text');?>" value="<?php echo esc_attr( $whatsapp_text ); ?>">
        <hr>

    </li>

</ul>
<?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['mtblko_facebook'] = ( ! empty( $new_instance['mtblko_facebook'] ) ) ? strip_tags( $new_instance['mtblko_facebook'] ) : '';
        $instance['mtblko_whatsapp'] = ( ! empty( $new_instance['mtblko_whatsapp'] ) ) ? strip_tags( $new_instance['mtblko_whatsapp'] ) : '';
        $instance['mtblko_whatsapp_text'] = ( ! empty( $new_instance['mtblko_whatsapp_text'] ) ) ? strip_tags( $new_instance['mtblko_whatsapp_text'] ) : '';
        $instance['mtblko_instagram'] = ( ! empty( $new_instance['mtblko_instagram'] ) ) ? strip_tags( $new_instance['mtblko_instagram'] ) : '';
        $instance['mtblko_twitter'] = ( ! empty( $new_instance['mtblko_twitter'] ) ) ? strip_tags( $new_instance['mtblko_twitter'] ) : '';
        $instance['mtblko_linkedin'] = ( ! empty( $new_instance['mtblko_linkedin'] ) ) ? strip_tags( $new_instance['mtblko_linkedin'] ) : '';
        $instance['mtblko_pinterest'] = ( ! empty( $new_instance['mtblko_pinterest'] ) ) ? strip_tags( $new_instance['mtblko_pinterest'] ) : '';
        $instance['mtblko_youtube'] = ( ! empty( $new_instance['mtblko_youtube'] ) ) ? strip_tags( $new_instance['mtblko_youtube'] ) : '';
        return $instance;
    }
}
