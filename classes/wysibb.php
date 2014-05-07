<?php

/**
	Использование WYSIWYG-редактора BB-кода WysiBB
	http://www.wysibb.com/
*/

class wysibb
{
	static function init($element, $attrs = array())
	{
		jquery_plugin::load('wysibb');
		$attrs = blib_json::encode_jsfunc($attrs);
		jquery::on_ready("\$('$element').wysibb($attrs);");
		$theme = config('bower.path')."/jqjquery-wysibb/theme/default/wbbtheme.css";
//		$theme = http://cdn.wysibb.com/css/default/wbbtheme.css;
		bors_page::add_template_data_array('head_append', "<link rel=\"stylesheet\" href=\"{$theme}\" />");
	}

	static function __dev()
	{
		require '../../../autoload.php';
		jquery_plugin::load('wysibb', NULL, 'balancer/bors-3rd-wysibb');
		var_dump();
	}
}
