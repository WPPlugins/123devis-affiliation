<?php
	class sm_sr_activity_interview_description extends sm_renderable  {
			
		protected $template_interview_description = "<div class=\"description\">\n[description]\n</div>\n";
		
		function render($data){
			return $this->use_template('interview_description', $data);
		}
		
	}