<?php

function _($name, $args, $code)
{
	if(!function_exists($name))
	{
		$fcode = '$__ = \'\';if(!func_num_args())$__ = \'_void\';else foreach(func_get_args() as $arg) $__ .= \'_\'.gettype($arg);call_user_func_array( __FUNCTION__.$__ , func_get_args() );';
		eval("function $name()
		{
			$fcode
		}");
	}
	
	if( $args == '' )
	{
		$name .= '_void';
	}
	else
	{
		$params = explode(',', $args);
		foreach($params as $i => $p)
		{
			$p = explode(':', $p);
			$name .= '_' . $p[1];
			$params[$i] = $p[0];
		}
		$args = join(',', $params);
	}
	
	eval(
	"
	function $name($args)
	{
		$code
	}
	"
	);
}

?>
