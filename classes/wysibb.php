<?php

/**
	Использование WYSIWYG-редактора BB-кода WysiBB
	http://www.wysibb.com/
*/

class wysibb
{
	static function init($element, $attrs = array())
	{
		jquery::load();

//		jquery_plugin::assetic_load('wysibb');

//		bors_use($path.css);
//		jquery::plugin($path);
//		http://cdn.wysibb.com/

		bors_use('http://cdn.wysibb.com/js/jquery.wysibb.min.js');
		bors_use('http://cdn.wysibb.com/css/default/wbbtheme.css');
		bors_use('http://cdn.wysibb.com/lang/ru.ru');

		$attrs = blib_json::encode_jsfunc($attrs);
		jquery::on_ready("\$('$element').wysibb($attrs);");
//		$theme = config('bower.path')."/jqjquery-wysibb/theme/default/wbbtheme.css";
//		$theme = http://cdn.wysibb.com/css/default/wbbtheme.css;
//		bors_page::add_template_data_array('head_append', "<link rel=\"stylesheet\" href=\"{$theme}\" />");
	}

	static function __dev()
	{
		require '../../../autoload.php';
	}
}
