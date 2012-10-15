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
} 

?>