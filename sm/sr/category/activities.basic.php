<?php
	class sm_sr_category_activities__basic extends sm_renderable  {
		
		public $default_parameters = array(
			"cols" => 2,
			"interview_link" => "<a href=\"/sm/interview/?id_activity=[id]\">[label]</a>\n"
		);
		
		function render(){
			$interview_list = $this->data->get_data();
			$cols = $this->data->get_parameter("cols");
			$item_count = count($interview_list);
			
			$split_int = round($item_count / $cols);
			
			$s = "<div class=\"sm_cols\">\n";
			$s .= "<div class=\"sm_splitcol_$cols\">\n";
			foreach($interview_list as $cntr => $link){	
				$s .= "<div class=\"sm_item\">\n";
				$s .= $this->use_template('interview_link', $link);
				$s .= "</div>\n";
				if (($cntr+1) % $split_int == 0){
					$s .= "</div>\n<div class=\"sm_splitcol_$cols\">\n";
				}
			}
			$s .= "</div>\n";
			$s .= "<br class=\"sm_clear\">";
			$s .= "</div>\n\n";
			return $s;
		}
	}