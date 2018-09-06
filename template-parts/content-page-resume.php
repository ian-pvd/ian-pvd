<?php
/**
 * Template part for displaying resume page content
 *
 * @package ianpvd
 */

$post_header_class = '';
if ( pvd_get_the_post_header() ) {
	$post_header_class = 'post-header--has-intro';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header post-header--page <?php echo esc_attr( $post_header_class ) ?>">

		<div class="post-header__content post-header__content--resume post-header__content--page">
			<?php the_title( '<h1 class="post-title post-title--page">', '</h1>' ); ?>
			<?php if ( pvd_get_the_post_header() ) : ?>
			<div class="post-header__intro wp-content">
				<?php pvd_the_post_header(); ?>
			</div>
			<?php endif; ?>
		</div>

		<?php
		if ( has_nav_menu( 'resume-submenu' ) ) {
			wp_nav_menu( array(
				'theme_location' => 'resume-submenu',
				'menu_id'        => 'resume-submenu',
			) );
		}
		?>

	</header><!-- .post-header -->

	<div class="post-content post-content--resume wp-content">

		<section class="resume__section resume__section--experience resume__section--col-two-thirds">
			<h2>Experience</h2>
			<h3>Alley Interactive</h3>
			<h4>UX Developer, Dec 2014 – June 2018</h4>
			<p>Collaborated with a fully-distributed scrum team to build and maintain responsive, accessible, and performant WordPress themes, single-page applications, and interactive website components for enterprise-scale digital publishers, non-profits, entertainment, and museum clients, using modern technologies like SCSS, PostCSS, ES6 JavaScript, webpack, ReactJS, and in-browser prototyping.</p>
			<p>Helped author and implement front-end best practices, internal development tools, and documentation, including code linters, standards and style guides, and participated in peer reviews of all production code.</p>
			<h3>Oomph, Inc., Boston, MA</h3>
			<h4>Front-End Developer, July 2012 – Feb 2014</h4>
			<p>Worked solo or coordinated with a small team of developers at a WordPress VIP partner. Created themes, interactive modules, and other front-end styles and components for WordPress and Drupal client sites.</p>
			<h3>eMagine Communications, Taunton, MA</h3>
			<h4>Website Maintenance, March 2010 – March 2012</h4>
			<p>Responsible for servicing client requests for website updates and custom enhancements, as well as providing support for Joomla, WordPress and our proprietary .NET CMS platforms. Client projects included custom template and layout designs and development, as well as analytics &amp; CRM integration, content implementation, designing &amp; deploying email campaigns, interactive site components, and mobile site development.</p>
			<h3>Rhode Island College Graphics, Providence, RI</h3>
			<h4>Graphics Supervisor, May 2009 – Jan 2010</h4>
			<h4> Student Graphics Designer, March 2008 – May 2009</h4>
			<p>Provided design, advertising and marketing services for students and organizations on campus, specializing in large format print services, logo, flyer, pamphlet, and apparel design, as well as social media and online marketing design and consulting.</p>
			<p>As supervisor, helped streamline organization, established a formal project workflow, expanded digital services, and enhanced production quality.</p>
		</section>

		<section class="resume__section resume__section--skills resume__section--col-one-third">
			<h2>Skills</h2>
			<h3>UX Developer</h3>
			<ul>
				<li>Semantic, accessible and valid <strong>HTML5</strong></li>
				<li><strong>CSS</strong>, with <strong>SCSS</strong> and <strong>PostCSS</strong> preprocessors</li>
				<li>Native <strong>ES6 JavaScript</strong>, also <strong>jQuery</strong></li>
				<li>Asset bundlers <strong>webpack</strong> and <strong>Grunt</strong></li>
				<li>Authoring templates with <strong>PHP</strong> and <strong>JSX</strong></li>
				<li><strong>ReactJS</strong> site themes and components</li>
				<li>Performance audits with <strong>Lighthouse</strong></li>
				<li>Code standards with <strong>ESLint</strong> and <strong>stylelint</strong></li>
				<li>Rapid prototyping with <strong>HMR</strong> or <strong>Gatsby </strong></li>
			</ul>
			<h3>Web Developer</h3>
			<ul>
				<li><strong>PHP</strong> and <strong>MySQL</strong></li>
				<li>Extending <strong>WordPress</strong> core</li>
				<li><strong>Drupal</strong> theme development</li>
				<li>Version control with <strong>Git</strong> and <strong>subversion</strong></li>
				<li>Proficient with <strong>Unix shell</strong> commands</li>
				<li>Hosting with <strong>Pantheon</strong> and <strong>WordPress  VIP</strong></li>
				<li><strong>WordPress VIP</strong> code standards</li>
				<li>Adding and customizing <strong>AMP</strong> support</li>
				<li><strong>WooCommerce</strong>, <strong>bbPress</strong> &amp; <strong>BuddyPress </strong></li>
			</ul>
			<h3>UX &amp; Graphic Designer</h3>
			<ul>
				<li>Wireframes, mockups &amp; style tiles with <strong>Sketch</strong></li>
				<li>Graphics and photo editing with <strong>Adobe Photoshop</strong></li>
				<li>Collaboration with <strong>Zeplin</strong> and <strong>InVision</strong></li>
				<li>Logo, icon &amp; SVG design with <strong>Adobe Illustrator</strong></li>
				<li>Desktop publishing layouts with <strong>Adobe InDesign</strong></li>
			</ul>
		</section>

		<section class="resume__section resume__section--involvement resume__section--col-one-third">
			<h2>Involvement</h2>
			<h3>WordCamp Boston</h3>
			<h4>Volunteer: 2014-2016</h4>
			<h4>Panel Speaker: 2016</h4>
			<h3>GiveCamp Boston</h3>
			<h4>Contributor: 2014-2015</h4>
		</section>

		<section class="resume__section resume__section--education resume__section--col-two-thirds">
			<h2>Education</h2>
			<h3>Rhode Island College, Providence, RI</h3>
			<h4>Graphic Communications, Jan 2008 – Jan 2010</h4>
			<p>Pursued a BA in Graphic Communications. Coursework included graphic design work, preparing prepress layouts &amp; graphics, web development, current trends, and communications theory.</p>
		</section>

	</div><!-- .post-content -->

</article><!-- #post-<?php the_ID(); ?> -->
