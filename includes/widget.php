<?php
class Maureen_Widget extends WP_Widget {
    public $name = 'Social Media Stream';
    public $description = 'Social stream for your website/blog.';
    public $control_options = array();

	public function __construct() {
		$widget_options = array(
            'classname'    => __CLASS__,
            'description'    => $this->description,
        );
        
        parent::__construct(
            __CLASS__, $this->name, $widget_options, $this->control_options
        );
	}

	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

 	public function form( $instance ) {
		// outputs the options form on admin
	}

	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}
?>