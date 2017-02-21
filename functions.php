<?php
/**
 * cult-man functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cult-man
 */

if ( ! function_exists( 'cult_man_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cult_man_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cult-man, use a find and replace
	 * to change 'cult-man' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'cult-man', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.

    add_theme_support( 'custom-logo' );

    add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'cult-man' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cult_man_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'cult_man_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cult_man_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cult_man_content_width', 640 );
}
add_action( 'after_setup_theme', 'cult_man_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cult_man_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cult-man' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cult-man' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );

        register_sidebar(
		array(
			'id' => 'footer-side1', // уникальный id для сайта, назначается правому сайдбару
			'name' => 'Нижний сайдбар 1', // название сайдбара, которое будет отображаться в админке
			'description' => 'Перетяните виджеты, чтобы добавить их в сайдбар.', // описание выводимое в админке для сайдбара
			'before_widget' => '<div class="f-sidebar ">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>', // в этой и предыдущей строке мы задали контейнер в котором будет размещен сайдбар
			'before_title' => '<h3 class="f-wtitle">', // если оставить пустым, будет выводиться в <h2>
			'after_title' => '</h3>'
		)
	);

    register_sidebar(
		array(
			'id' => 'footer-side2', // уникальный id для сайта, назначается правому сайдбару
			'name' => 'Нижний сайдбар 2', // название сайдбара, которое будет отображаться в админке
			'description' => 'Перетяните виджеты, чтобы добавить их в сайдбар.', // описание выводимое в админке для сайдбара
			'before_widget' => '<div class="f-sidebar ">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>', // в этой и предыдущей строке мы задали контейнер в котором будет размещен сайдбар
			'before_title' => '<h3 class="f-wtitle">', // если оставить пустым, будет выводиться в <h2>
			'after_title' => '</h3>'
		)
	);

    register_sidebar(
		array(
			'id' => 'footer-side3', // уникальный id для сайта, назначается правому сайдбару
			'name' => 'Нижний сайдбар 3', // название сайдбара, которое будет отображаться в админке
			'description' => 'Перетяните виджеты, чтобы добавить их в сайдбар.', // описание выводимое в админке для сайдбара
			'before_widget' => '<div class="f-sidebar ">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>', // в этой и предыдущей строке мы задали контейнер в котором будет размещен сайдбар
			'before_title' => '<h3 class="f-wtitle">', // если оставить пустым, будет выводиться в <h2>
			'after_title' => '</h3>'
		)
	);

    register_sidebar(
		array(
			'id' => 'footer-side4', // уникальный id для сайта, назначается правому сайдбару
			'name' => 'Нижний сайдбар 4', // название сайдбара, которое будет отображаться в админке
			'description' => 'Перетяните виджеты, чтобы добавить их в сайдбар.', // описание выводимое в админке для сайдбара
			'before_widget' => '<div class="f-sidebar ">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>', // в этой и предыдущей строке мы задали контейнер в котором будет размещен сайдбар
			'before_title' => '<h3 class="f-wtitle">', // если оставить пустым, будет выводиться в <h2>
			'after_title' => '</h3>'
		)
	);

    register_sidebar(
		array(
			'id' => 'events-page', // уникальный id для сайта, назначается правому сайдбару
			'name' => 'Страница анонсов', // название сайдбара, которое будет отображаться в админке
			'description' => 'Перетяните виджеты, чтобы добавить их в сайдбар.', // описание выводимое в админке для сайдбара
			'before_widget' => '<div class="widget-area  ">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>', // в этой и предыдущей строке мы задали контейнер в котором будет размещен сайдбар
			'before_title' => '<span class="widget-title">', // если оставить пустым, будет выводиться в <h2>
			'after_title' => '</span>'
		)
	);
}
add_action( 'widgets_init', 'cult_man_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cult_man_scripts() {

    wp_enqueue_style( 'cult-man-style', get_stylesheet_uri() .'?123');

    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/libs/owlcarousel/assets/owl.carousel.min.css');

    wp_enqueue_style( 'animate', get_template_directory_uri().'/libs/animate/animate.min.css');


    wp_enqueue_style( 'owl-look', get_template_directory_uri().'/libs/owlcarousel/assets/owl.theme.default.min.css');

    wp_register_style( 'fontawesome', get_template_directory_uri().'/libs/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style ('fontawesome');

    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/libs/owlcarousel/owl.carousel.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'my-carousel', get_template_directory_uri() . '/js/my-carousel.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'animated-scrollto', get_template_directory_uri() . '/js/animatedScrollTo.js', array('jquery'), '20151215', true );

    wp_enqueue_script('my_topbutton', get_template_directory_uri() .
 		'/js/my_topbutton.js');

    wp_enqueue_script( 'cult-man-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cult-man-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cult_man_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//taxonomi & custom types
require get_template_directory() . '/events.php';

class eventsWidget extends WP_Widget {

	/*
	 * создание виджета
	 */
	function __construct() {
		parent::__construct(
			'events_widget',
			'События', // заголовок виджета
			array( 'description' => 'Позволяет вывести  события.' ) // описание
		);
	}

	/*
	 * фронтэнд виджета
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] ); // к заголовку применяем фильтр (необязательно)
		//$posts_per_page = $instance['posts_per_page'];
		$posts_per_page = 15;

		echo $args['before_widget'];

		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
        echo('<span class="widget__event-title">'.'Анонсы'.'</span>');
		$q = new WP_Query('post_type=events',"posts_per_page=$posts_per_page");
		if( $q->have_posts() ):
			?><ul><?php
			while( $q->have_posts() ): $q->the_post();
				?>
<li>
    <div class="widget__event">
    <div class="widget__event-meta">
        <div class="widget__event-meta-time">
        <a href="<?php the_permalink(); ?>">
                       <?php
                        $date = get_post_meta(get_the_ID(), 'Время', true);
                        if (empty ($date)) {
                        echo (''); }
                        else {
                        echo ('&nbsp;'.(get_post_meta(get_the_ID(), 'Время', true)).'&nbsp;');}?>
                        </a>
        </div>
        <div class="widget__event-meta-date">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                        $date = get_post_meta(get_the_ID(), 'Дата', true);
                        if (empty ($date)) {
                        echo (''); }
                        else {
                        echo ('&nbsp;'.(get_post_meta(get_the_ID(), 'Дата', true)).'&nbsp;');}?>
                        </a>
    </div>
    </div> <!-- widget__event-meta -->
    <div class="widget__event-entry">
       <div class="widget__event-entry-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title() ?>
        </a>
    </div>
       <span class="widget__event-entry-place">
                        <?php
                        $place = get_post_meta(get_the_ID(), 'Место', true);
                        if (empty ($place)) {
                        echo (''); }
                        else {
                        echo ('<i class="fa fa-map-o" aria-hidden="true"></i>'.' '.(get_post_meta(get_the_ID(), 'Место', true)));}?>
    </span>
    </div>
    </div> <!-- widget__event -->
</li>


            <?php endwhile;?>
			</ul><?php
		endif;
		wp_reset_postdata();

		echo $args['after_widget'];
	}

	/*
	 * бэкэнд виджета
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		if ( isset( $instance[ 'posts_per_page' ] ) ) {
			$posts_per_page = $instance[ 'posts_per_page' ];
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>">Количество постов:</label>
			<input id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="text" value="<?php echo ($posts_per_page) ? esc_attr( $posts_per_page ) : '5'; ?>" size="3" />
		</p>
		<?php
	}

	/*
	 * сохранение настроек виджета
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['posts_per_page'] = ( is_numeric( $new_instance['posts_per_page'] ) ) ? $new_instance['posts_per_page'] : '5'; // по умолчанию выводятся 5 постов
		return $instance;
	}
}

/*
 * регистрация виджета
 */
function event_widget_load() {
	register_widget( 'eventsWidget' );
}
add_action( 'widgets_init', 'event_widget_load' );
