<?php 

/* 
	This is Typology Child Theme functions file
	You can use it to modify specific features and styling of Gridlove Theme
*/	

add_action( 'after_setup_theme', 'typology_child_theme_setup', 99 );

function typology_child_theme_setup(){
	add_action('wp_enqueue_scripts', 'typology_child_load_scripts');
}

function typology_child_load_scripts() {	
	wp_register_style('typology_child_style', trailingslashit(get_stylesheet_directory_uri()).'style.css', false, TYPOLOGY_THEME_VERSION, 'screen');
	wp_enqueue_style('typology_child_style');
}

function dev_set_codeblock_language_list() {
	return array(
		"python" => "Python",
		"javascript" => "JavaScript",
		"typescript" => "Typescript",
		"kotlin"	 => "Kotlin",
		"swift"	 => "Swift",
        "bash" => "Bash",
        "html" => "HTML",
        "json" => "JSON",
        "markdown" => "Markdown",
        "php" => "PHP",
        "jsx" => "React JSX",
        "sass" => "Sass",
        "sql" => "SQL",
        "svg" => "SVG",
        "xml" => "XML",
    );
}
add_filter( 'mkaz_code_syntax_language_list', 'dev_set_codeblock_language_list');

function dev_unlimit_image_size() {
	return 0;
}

add_filter('big_image_size_threshold', 'dev_unlimit_image_size', 9999);

?>