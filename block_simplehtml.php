<?php
class block_simplehtml extends block_base {
    public function init() {
        $this->title = get_string('simplehtml', 'block_simplehtml');
    }
	public function get_content() {
	    if ($this->content !== null) {
	      return $this->content;
	    }
	 
	    $this->content         =  new stdClass;
	    if (! empty($this->config->text)) {
	    	$this->content->text = $this->config->text;
		}
		else {
			$this->content->text   = 'The content of our SimpleHTML block!';
		}
	    
	    $this->content->footer = 'Footer here...';
	 
	    return $this->content;
  }
	
	public function specialization() {
	  if (!empty($this->config->title)) {
	    $this->title = $this->config->title;
	  } else {
	    $this->config->title = 'Default title ...';
	  }
	 
	  if (empty($this->config->text)) {
	    $this->config->text = 'Default text ...';
	  }    
	}
	
	public function instance_allow_multiple() {
  		return true;
	}
	
/*Tweak options
	public function instance_config_save($data) {
	   if(get_config('simplehtml', 'Allow_HTML') == '1') {
	     $data->text = strip_tags($data->text);
	   }

	  // And now forward to the default implementation defined in the parent class
	   return parent::instance_config_save($data);
	}

// OR This one
 	public function instance_config_save($data) {
	   $data = stripslashes_recursive($data);
	   $this->config = $data;
	   return set_field('block_instance', 
	                    'configdata',
	                     base64_encode(serialize($data)),
	                    'id', 
	                    $this->instance->id);
	 }
*/
	public function hide_header() {
  		return true;
	}

} 

?>