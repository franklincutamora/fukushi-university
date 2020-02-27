<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FUKUSHI UNIVERSITY
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php
		bloginfo('name');
		echo ' | ';
        if (wp_title('', false)) {
			echo "";
        } else {
            echo bloginfo('description');
        } wp_title('');
		?>
	</title>
    <link rel="icon" href="/favicon.ico">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500&display=swap&subset=japanese" rel="stylesheet">
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    
	<?php wp_head(); ?>

	<?php 
		$custom_css = get_option( 'theme_css' );
		if(!empty($custom_css)) {
			?>
				<?php echo '<style type="text/css">'. $custom_css. '</style> '; ?>
			<?php
		}
	?>
	
	<?php
		$post_data = get_post($post->post_parent);
		$parent_slug = $post_data->post_name;
		if( $parent_slug == "hoiku" || is_page('campus') || is_page('obog') || is_page('gakusei') || is_page('shikaku') || is_page('shushoku') ){
			?>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
				<?php get_template_part('template-parts/shushoku-meta'); ?> 
			<?php
		}else{
			?>
				<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<?php
		}
	?>
	
    <script type="text/javascript" src="https://yoshida-g.gr.jp/api/js/ylib.js"></script>
    <script type="text/javascript" src="https://yoshida-g.gr.jp/api/js/yapi.js"></script>
</head>
<body <?php body_class(); ?>>

	<!-- header -->
	<div class="wrp head-wrp">
		<div class="head-cntr">
			<header>
				<h3 class="txt-logo">
					<a href="<?php bloginfo('url'); ?>">
						<h1><!--?php bloginfo('name'); ?--><img src="<?php bloginfo('template_url'); ?>/assets/img/hdr_logo.png" alt="logo" class="is-wide"></h1>
					</a>
				</h3>
			</header>
			<!-- nav -->
			<nav class="top-nav">
				<ul id="top-nav-menu" class="gtopNav">
					<li>
						<a href="#" class="gmenu_link" data-target="nav1">
							学科紹介
							<i class="fa fa-angle-down"></i>
						</a>
					</li>
					<li>
						<a href="#" class="gmenu_link" data-target="nav2">
							学校について
							<i class="fa fa-angle-down"></i>
						</a>
					</li>
					<li>
						<a href="#" class="gmenu_link" data-target="nav3">
							資格・就職
							<i class="fa fa-angle-down"></i>
						</a>
					</li>
					<li>
						<a href="#" class="gmenu_link" data-target="nav4">
							先輩の声
							<i class="fa fa-angle-down"></i>
						</a>
					</li>
				</ul>
				<ul id="top-nav-toggle" class="gtopNav">
					<li>
						<a href="javascript:;" id="toggle-profile" data-target="nav5" class="gmenu_link">
							<span class="p-n">閲覧者別</span>
							<div class="close">
								<span class="cl"></span>
								<span class="cl"></span>
							</div>
							<i class="material-icons dp48 is-open">person</i>
							<i class="material-icons dp48 is-close">clear</i>
						</a>
					</li>
					<li>
						<a href="javascript:;" id="toggle-nav" data-target="nav6" class="gmenu_link">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</li>
				</ul>
			</nav>
			<!-- //nav -->
		</div>
	</div>
	<!-- nav-children -->
	<div class="child-nav">
		<div class="child-nav-item" id="nav1">
			<div class="child-nav-cntr">
				<div class="title-i">
					<span class="circle-bg">
						<i class="material-icons dp48">import_contacts</i>
					</span>
					<h2 class="title-txt">
						学科紹介
					</h2>
				</div>
				
				<div class="child-nav-item_contents">
					<?php
						wp_nav_menu(
						array (
							'theme_location' => 'nav1',
							'menu' => 'nav-menu1',
							'container' => 'ul',
							'menu_class' => 'card-nav rob-card-nav rob-nav-menu1 rob-nav-menu-first',
							'link_before'        => "<div class='rob-card-body'><div class='rob-card-cont'>",
							'link_after'        => "</div></div>"
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="child-nav-item" id="nav2">
			<div class="child-nav-cntr">
				<div class="title-i">
					<span class="circle-bg">
						<i class="material-icons dp48">location_city</i>
					</span>
					<h2 class="title-txt">
						学校について
					</h2>
				</div>
				
				<div class="child-nav-list_contents">
					<?php
						wp_nav_menu(
						array (
							'theme_location' => 'nav2',
							'menu' => 'nav-menu2',
							'container' => 'ul',
							'menu_class' => 'rob-nav-menu2',
							'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="child-nav-item" id="nav3">
			<div class="child-nav-cntr">
				<div class="title-i">
					<span class="circle-bg">
						<i class="material-icons dp48">book</i>
					</span>
					<h2 class="title-txt">
						資格・就職
					</h2>
				</div>
				
				<div class="child-nav-list_contents">
					<?php
						wp_nav_menu(
						array (
							'theme_location' => 'nav3',
							'menu' => 'nav-menu3',
							'container' => 'ul',
							'menu_class' => 'rob-nav-menu3',
							'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="child-nav-item" id="nav4">
			<div class="child-nav-cntr">
				<div class="title-i">
					<span class="circle-bg has-tail">
						<i class="material-icons dp48">account_box</i>
						<i class="material-icons dp48 arr arr2">arrow_drop_down</i>
					</span>
					<h2 class="title-txt">
						先輩の声
					</h2>
				</div>
				
				<div class="child-nav-list_contents">
					<?php
						wp_nav_menu(
						array (
							'theme_location' => 'nav4',
							'menu' => 'nav-menu4',
							'container' => 'ul',
							'menu_class' => 'rob-nav-menu4',
							'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="child-nav-item" id="nav5">
			<div class="child-nav-cntr">
				<div class="title-i">
					<span class="circle-bg">
						<i class="material-icons dp48">location_city</i>
					</span>
					<h2 class="title-txt">
					閲覧者別メニュー
					</h2>
				</div>
				
				<div class="child-nav-list_contents child-nav-list_contents-with-icons">
					<?php
						wp_nav_menu(
						array (
							'theme_location' => 'nav5',
							'menu' => 'nav-menu5',
							'container' => 'ul',
							'menu_class' => 'rob-nav-menu5',
							'link_before' => '<i class="material-icons dp48 rob-icon-first"></i>',
							'link_after' => '<span class="rob-arrow"><i class="material-icons dp48">arrow_forward</i></span>'
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="child-nav-item" id="nav6">
			<div class="child-nav-cntr">
				
				<!-- search bar -->
				<div class="s_bar">
					<form action="#">
						<input type="search" id="search" class="input-s" placeholder="サイトを検索">
						<button type="search" class="btn-search">
							<i class="material-icons">search</i>
						</button>
					</form>
				</div>
				<!-- //search bar -->

				<div class="title-i gtopNav-all bt-none-sp_800">
					<span class="circle-bg">
						<i class="material-icons dp48">import_contacts</i>
					</span>
					<h2 class="title-txt">
						学科紹介
					</h2>
				</div>
				
				<div class="child-nav-item_contents">
					<?php
						wp_nav_menu(
						array (
							'theme_location' => 'nav1',
							'menu' => 'nav-menu1',
							'container' => 'ul',
							'menu_class' => 'card-nav rob-card-nav rob-nav-menu1',
							'link_before'        => "<div class='rob-card-body'><div class='rob-card-cont'>",
							'link_after'        => "</div></div>"
							)
						);
					?>
				</div>

				<div class="gap gap-20 gap-0-xs gtopNav-all_sp">
					<div class="md-6 xs-12 parent_gnav">
						<div class="title-i gtopNav-all">
							<span class="circle-bg">
								<i class="material-icons dp48">location_city</i>
							</span>
							<h2 class="title-txt">
								学校について
							</h2>
							<i class="material-icons dp48 gtopNav-all_plus">add</i>
						</div>
						<div class="child-nav-list_contents">
							<div class="gap gap-10 gap-0-xs">
								<div class="md-6 xs-12 sm-full">
									<?php
										wp_nav_menu(
										array (
											'theme_location' => 'nav2',
											'menu' => 'nav-menu2',
											'container' => 'ul',
											'menu_class' => 'n_list n_list_rob n_list_rob_col1',
											'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
											)
										);
									?>
								</div>
								<div class="md-6 xs-12 sm-full">
									<?php
										wp_nav_menu(
										array (
											'theme_location' => 'nav2',
											'menu' => 'nav-menu2',
											'container' => 'ul',
											'menu_class' => 'n_list n_list_rob n_list_rob_col2',
											'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
											)
										);
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="md-6 xs-12">
						<div class="child-nav-list_contents">
							<div class="gap gap-10 gap-0-xs">
								<div class="md-6 xs-12 sm-full parent_gnav">
									<div class="title-i gtopNav-all">
										<span class="circle-bg">
											<i class="material-icons dp48">book</i>
										</span>
										<h2 class="title-txt">
											資格・就職
										</h2>
										<i class="material-icons dp48 gtopNav-all_plus">add</i>
									</div>
									<?php
										wp_nav_menu(
										array (
											'theme_location' => 'nav3',
											'menu' => 'nav-menu3',
											'container' => 'ul',
											'menu_class' => 'n_list n_list_rob',
											'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
											)
										);
									?>
								</div>
								<div class="md-6 xs-12 sm-full parent_gnav">
									<div class="title-i gtopNav-all bb-sp">
										<span class="circle-bg has-tail">
											<i class="material-icons dp48">account_box</i>
											<i class="material-icons dp48 arr">arrow_drop_down</i>
										</span>
										<h2 class="title-txt">
											先輩の声
										</h2>
										<i class="material-icons dp48 gtopNav-all_plus">add</i>
									</div>
									<?php
										wp_nav_menu(
										array (
											'theme_location' => 'nav4',
											'menu' => 'nav-menu4',
											'container' => 'ul',
											'menu_class' => 'n_list n_list_rob',
											'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
											)
										);
									?>
								</div>
							</div>
						</div>
					</div>

					<div class="md-12 xs-12">
						<div class="child-nav-list_contents">
							<div class="sm-full parent_gnav">
								<div class="title-i gtopNav-all">
									<span class="circle-bg">
										<i class="material-icons dp48">border_color</i>
									</span>
									<h2 class="title-txt">
									入試・学費・各種制度（募集要項）
									</h2>
									<i class="material-icons dp48 gtopNav-all_plus">add</i>
								</div>	
								<?php
									wp_nav_menu(
									array (
										'theme_location' => 'jukenseinav',
										'menu' => 'jukenseinav',
										'container' => 'ul',
										'menu_class' => 'n_list n_list_rob n_list_rob_col2 col4',
										'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
										)
									);
								?>				
							</div>
						</div>
					</div>
					
				</div>

				<ul class="cards_b rob_cards_b">
					<li>
						<a href="https://event.yoshida-g.ac.jp/join/" target="_blank" class="btn-card_nav btn-card_ico">
							<span>受験生向けイベントサイト
								<i class="material-icons dp48">launch</i>
							</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/hokkaidofukushi" target="_blank" class="btn-card_nav btn-card_ico ico_l">
							<span>
								<i class="fa fa-twitter"></i>
								Twitter
							</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/news" class="btn-card_nav btn-card_ico ico_l ico_l-green">
							<span>
								<i class="material-icons dp48">local_library</i>
								News
							</span>
						</a>
					</li>
				</ul>
				
				<?php
					wp_nav_menu(
					array (
						'theme_location' => 'othernav',
						'menu' => 'nav-othernav',
						'container' => 'ul',
						'menu_class' => 'ftr-mid_menu ftr-mid_menu-rob'
						)
					);
				?>

			</div>
		</div>
	</div>
	<!-- //nav-children -->
	<!-- //header -->

	<?php
		if( is_front_page() || is_page('kaigo') || is_page('shakai') || is_page('hoiku') ){
			?>
				<main style="margin-top:-80px">
			<?php
		}else{
			?>
				<main>
			<?php
		}
	?>

