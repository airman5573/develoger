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

function dev_load_admin_style() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/admin-style.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'dev_load_admin_style' );

function dev_set_codeblock_language_list() {
	return array(
		"python" => "Python",
		"javascript" => "JavaScript",
		"typescript" => "Typescript",
		"jsstacktrace" => "JS stack trace",
		"kotlin"	 => "Kotlin",
		"swift"	 => "Swift",
        "bash" => "Bash",
        "html" => "HTML",
        "json" => "JSON",
        "markdown" => "Markdown",
        "php" => "PHP",
        "jsx" => "React JSX",
		"tsx" => "React TSX",
		"regex" => "Regex",
        "sass" => "Sass",
		"cpp" => "C++",
        "sql" => "SQL",
        "svg" => "SVG",
		"csv" => "csv",
        "xml" => "XML",
		"log" => "Log file",
		"dart" => "Dart",
		"git" => "Git"
    );
}
add_filter( 'mkaz_code_syntax_language_list', 'dev_set_codeblock_language_list');

function dev_unlimit_image_height( $threshold ) {
    return 0; // new threshold
}
add_filter('big_image_size_threshold', 'dev_unlimit_image_height', 100, 1);

?>