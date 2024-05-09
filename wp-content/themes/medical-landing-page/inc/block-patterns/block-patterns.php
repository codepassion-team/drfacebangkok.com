<?php
/**
 *  Medical Landing Page: Block Patterns
 *
 * @package  Medical Landing Page
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'medical-landing-page',
		array( 'label' => __( 'Medical Landing Page', 'medical-landing-page' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'medical-landing-page/banner-section',
		array(
			'title'      => __( 'Banner Section', 'medical-landing-page' ),
			'categories' => array( 'medical-landing-page' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . get_theme_file_uri() . "/inc/block-patterns/images/banner.png\",\"id\":305,\"dimRatio\":50,\"customOverlayColor\":\"#00000000\",\"focalPoint\":{\"x\":0.5,\"y\":0.5},\"minHeight\":600,\"align\":\"full\",\"className\":\"slider-section\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-cover alignfull slider-section\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\" style=\"background-color:#00000000\"></span><img class=\"wp-block-cover__image-background wp-image-305\" alt=\"\" src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/banner.png\" style=\"object-position:50% 50%\" data-object-fit=\"cover\" data-object-position=\"50% 50%\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"className\":\"banner\"} -->\n<div class=\"wp-block-columns banner\"><!-- wp:column {\"width\":\"50%\",\"className\":\"slider-content\"} -->\n<div class=\"wp-block-column slider-content\" style=\"flex-basis:50%\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"content\"} -->\n<div class=\"wp-block-column content\"><!-- wp:heading {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"45px\"}},\"textColor\":\"black\",\"className\":\"my-3\"} -->\n<h2 class=\"wp-block-heading my-3 has-black-color has-text-color has-link-color\" style=\"font-size:45px\">Get Ready For Your Best Ever Dental Experience</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color has-link-color\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {\"className\":\"slider-btn\"} -->\n<div class=\"wp-block-columns slider-btn\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"read-more \"} -->\n<div class=\"wp-block-buttons read-more\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"6px\"},\"color\":{\"background\":\"#3fbad9\"},\"typography\":{\"fontSize\":\"15px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:6px;background-color:#3fbad9\">Book Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"vedio-btn my-4\"} -->\n<div class=\"wp-block-column vedio-btn my-4\"><!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"black\",\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"color\":{\"background\":\"#00000000\"},\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"vedio\"} -->\n<div class=\"wp-block-button has-custom-font-size vedio\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-black-color has-text-color has-background has-link-color wp-element-button\" style=\"background-color:#00000000\">See How We Work</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"slider-content2\"} -->\n<div class=\"wp-block-columns slider-content2\"><!-- wp:column {\"className\":\"per-col1\"} -->\n<div class=\"wp-block-column per-col1\"><!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"20px\"}},\"textColor\":\"black\",\"className\":\"rating-count\"} -->\n<p class=\"rating-count has-black-color has-text-color has-link-color\" style=\"font-size:20px\"><strong>93%</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"14px\"}},\"textColor\":\"black\",\"className\":\"rating-text\"} -->\n<p class=\"rating-text has-black-color has-text-color has-link-color\" style=\"font-size:14px\">Satisfaction Rate</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"per-col2\"} -->\n<div class=\"wp-block-column per-col2\"><!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"20px\"}},\"textColor\":\"black\",\"className\":\"expert-doctor-count\"} -->\n<p class=\"expert-doctor-count has-black-color has-text-color has-link-color\" style=\"font-size:20px\"><strong>21+</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"14px\"}},\"textColor\":\"black\",\"className\":\"expert-doctor-text\"} -->\n<p class=\"expert-doctor-text has-black-color has-text-color has-link-color\" style=\"font-size:14px\">Experts Doctors</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"50%\",\"className\":\"slider-img\"} -->\n<div class=\"wp-block-column slider-img\" style=\"flex-basis:50%\"><!-- wp:image {\"id\":320,\"width\":\"420px\",\"height\":\"480px\",\"scale\":\"cover\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"nurse-img\"} -->\n<figure class=\"wp-block-image size-full is-resized nurse-img\"><img src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/nurse.png\" alt=\"\" class=\"wp-image-320\" style=\"object-fit:cover;width:420px;height:480px\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:columns {\"className\":\"img-section\"} -->\n<div class=\"wp-block-columns img-section\"><!-- wp:column {\"className\":\"Emergency-col\"} -->\n<div class=\"wp-block-column Emergency-col\"><!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"12px\"}},\"textColor\":\"black\",\"className\":\"phone-text\"} -->\n<p class=\"phone-text has-black-color has-text-color has-link-color\" style=\"font-size:12px\">24 Hrs Emergency</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"15px\"}},\"textColor\":\"black\",\"className\":\"phone-no\"} -->\n<p class=\"phone-no has-black-color has-text-color has-link-color\" style=\"font-size:15px\">123456789</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"patient-col\"} -->\n<div class=\"wp-block-column patient-col\"><!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"15px\"}},\"textColor\":\"black\",\"className\":\"review-text\"} -->\n<p class=\"review-text has-black-color has-text-color has-link-color\" style=\"font-size:15px\">1.5k Patients Love It.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":328,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/patients.png\" alt=\"\" class=\"wp-image-328\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"dr-col\"} -->\n<div class=\"wp-block-column dr-col\"><!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"about-title\"} -->\n<p class=\"about-title has-black-color has-text-color has-link-color\">24 Hrs Doctors</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}},\"typography\":{\"fontSize\":\"12px\"}},\"textColor\":\"black\",\"className\":\"about-text\"} -->\n<p class=\"about-text has-black-color has-text-color has-link-color\" style=\"font-size:12px\">We Provide The Best Medical Service</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'medical-landing-page/health-section',
		array(
			'title'      => __( 'Health Section', 'medical-landing-page' ),
			'categories' => array( 'medical-landing-page' ),
			'content'    => "<!-- wp:columns {\"className\":\"solution-section my-5\"} -->\n<div class=\"wp-block-columns solution-section my-5\"><!-- wp:column {\"width\":\"60%\",\"className\":\"solution-section1 col-lg-6\"} -->\n<div class=\"wp-block-column solution-section1 col-lg-6\" style=\"flex-basis:60%\"><!-- wp:columns {\"className\":\"position-relative\"} -->\n<div class=\"wp-block-columns position-relative\"><!-- wp:column {\"className\":\"img1\"} -->\n<div class=\"wp-block-column img1\"><!-- wp:image {\"id\":381,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/solution1.png\" alt=\"\" class=\"wp-image-381\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"img2\"} -->\n<div class=\"wp-block-column img2\"><!-- wp:image {\"id\":383,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/solution2.png\" alt=\"\" class=\"wp-image-383\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"40%\",\"className\":\"solution-section2 col-lg-6\"} -->\n<div class=\"wp-block-column solution-section2 col-lg-6\" style=\"flex-basis:40%\"><!-- wp:columns {\"className\":\"solution-content-sec\"} -->\n<div class=\"wp-block-columns solution-content-sec\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"34px\"}}} -->\n<h3 class=\"wp-block-heading\" style=\"font-size:34px\">All In One Treatment And Health Solution</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"my-3\"} -->\n<p class=\"my-3 has-black-color has-text-color has-link-color\" style=\"font-size:15px\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"13px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"health-para1 mt-4\"} -->\n<p class=\"health-para1 mt-4 has-black-color has-text-color has-link-color\" style=\"font-size:13px\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"team-section\"} -->\n<div class=\"wp-block-columns team-section\"><!-- wp:column {\"className\":\"team-section1\"} -->\n<div class=\"wp-block-column team-section1\"><!-- wp:html -->\n<i class=\"fas fa-users\"></i>\n<!-- /wp:html -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"14px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"mt-3 mb-2 team-title\"} -->\n<p class=\"mt-3 mb-2 team-title has-black-color has-text-color has-link-color\" style=\"font-size:14px\">Dedicated Team</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"para\"} -->\n<p class=\"para has-black-color has-text-color has-link-color\" style=\"font-size:12px\">Lorem Ipsum is simply dummy text of the printing and</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"team-section2\"} -->\n<div class=\"wp-block-column team-section2\"><!-- wp:html -->\n<i class=\"fas fa-hospital\"></i>\n<!-- /wp:html -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"14px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"mt-3 mb-2 hospital-title \"} -->\n<p class=\"mt-3 mb-2 hospital-title has-black-color has-text-color has-link-color\" style=\"font-size:14px\">Medical &amp; Health</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"para\"} -->\n<p class=\"para has-black-color has-text-color has-link-color\" style=\"font-size:12px\">Lorem Ipsum is simply dummy text of the printing and</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"team-section3\"} -->\n<div class=\"wp-block-column team-section3\"><!-- wp:html -->\n<i class=\"fas fa-handshake\"></i>\n<!-- /wp:html -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"14px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"mt-3 mb-2 environment-title\"} -->\n<p class=\"mt-3 mb-2 environment-title has-black-color has-text-color has-link-color\" style=\"font-size:14px\">Friendly Environment</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"para\"} -->\n<p class=\"para has-black-color has-text-color has-link-color\" style=\"font-size:12px\">Lorem Ipsum is simply dummy text of the printing and</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);
}