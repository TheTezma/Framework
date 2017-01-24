<?php

class Format {

	// CONVERT Time() TO A READABLE TIME
	public function getTime($t_time) {
		$pt = time() - $t_time;
		if ($pt>=86400)
	    	$p = date("F j, Y",$t_time);
		elseif ($pt>=3600)
		    $p = (floor($pt/3600))." Hours Ago";
		elseif ($pt>=60)
		    $p = (floor($pt/60))." Minutes Ago";
		else
		    $p = $pt." Seconds Ago";
		return $p;
	}

	// CUSTOM ECHO SCRIPT TO LIMIT TEXT TO A CERTAIN LENGTH
	public function CustomEcho($x, $length) {
		if(strlen($x)<=$length) {
			echo $x;
		} else {
			$y=substr($x,0,$length) . '...';
			echo $y;
		}
	}

}

?>