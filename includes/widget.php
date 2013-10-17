<?php
class Maureen_Widget extends WP_Widget {
    public $name = 'Social Media Stream';
    public $description = 'Social stream for your website/blog.';
    public $control_options = array();
	
	private $_twitterInstance = null;
	private $_token = null;
	private $_tokenSecret = null;

	public function __construct() {
		$widget_options = array(
            'classname'    => __CLASS__,
            'description'    => $this->description,
        );
		
		$this->_setupTwitterLink();
        
        parent::__construct(
            __CLASS__, $this->name, $widget_options, $this->control_options
        );
	}
	
	private function _setupTwitterLink(){
		Codebird\Codebird::setConsumerKey(
			'1wdAUxyXe023NvCfEnuw', '8LQ45I73uUKr6DpkMwgUtTpheSQJrMCowYDR0XnPMz4'
		);
		$this->_twitterInstance = \Codebird\Codebird::getInstance();
		$this->_token = '24153122-lSDPGRsBE7dDYpelxFtiOl8SlyhpdmaHtyZaav1tT';
		$this->_tokenSecret = '6ZUsCX2VvwCR6HGVumPNr8zXC8oKECRmy1CSzZFTPk';
	}

	public function widget( $args, $instance ) {
		echo "<h1>HELLO</h1>";
		
		$this->_twitterInstance->setToken($this->_token, $this->_tokenSecret);
		$reply = (array) $this->_twitterInstance->statuses_homeTimeline();
		
		print_r($reply);
	}

 	public function form( $instance ) {
		// outputs the options form on admin
	}

	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
    
    public static function register() {
        register_widget(__CLASS__);
    }
}
?>