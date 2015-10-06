<section class="body">

	<!-- start: header -->
	<header class="header">
		<div class="logo-container">
			<a href="../" class="logo">
				<img src="/public/images/logo.png" height="35" alt="Porto Admin" />
			</a>
			<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>

		<!-- start: search & user box -->
		<div class="header-right">

			<form action="pages-search-results.html" class="search nav-form">
				<div class="input-group input-search">
					<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
				</div>
			</form>

			<span class="separator"></span>

			<div id="userbox" class="userbox">
				<a href="#" data-toggle="dropdown">
					<figure class="profile-picture">
						<img src="/public/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="/public/images/!logged-user.jpg" />
					</figure>
					<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
						<span class="name"><?php echo ucwords($_SESSION['staff_name']); ?></span>
						<span class="role">administrator</span>
					</div>

					<i class="fa custom-caret"></i>
				</a>

				<div class="dropdown-menu">
					<ul class="list-unstyled">
						<li class="divider"></li>
						<li>
							<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
						</li>
						<li>
							<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end: search & user box -->
	</header>
	<!-- end: header -->

	<div class="inner-wrapper">
		<!-- start: sidebar -->
		<aside id="sidebar-left" class="sidebar-left">

			<div class="sidebar-header">
				<div class="sidebar-title">
					Navigation
				</div>
				<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<div class="nano">
				<div class="nano-content">
					<nav id="menu" class="nav-main" role="navigation">
						<ul class="nav nav-main">
							<li class="nav-active">
								<a href="index.html">
									<i class="fa fa-home" aria-hidden="true"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li>
								<a href="mailbox-folder.html">
									<span class="pull-right label label-primary">182</span>
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<span>Mailbox</span>
								</a>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-copy" aria-hidden="true"></i>
									<span>Pages</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="pages-signup.html">
											Sign Up
										</a>
									</li>
									<li>
										<a href="pages-signin.html">
											Sign In
										</a>
									</li>
									<li>
										<a href="pages-recover-password.html">
											Recover Password
										</a>
									</li>
									<li>
										<a href="pages-lock-screen.html">
											Locked Screen
										</a>
									</li>
									<li>
										<a href="pages-user-profile.html">
											User Profile
										</a>
									</li>
									<li>
										<a href="pages-session-timeout.html">
											Session Timeout
										</a>
									</li>
									<li>
										<a href="pages-calendar.html">
											Calendar
										</a>
									</li>
									<li>
										<a href="pages-timeline.html">
											Timeline
										</a>
									</li>
									<li>
										<a href="pages-media-gallery.html">
											Media Gallery
										</a>
									</li>
									<li>
										<a href="pages-invoice.html">
											Invoice
										</a>
									</li>
									<li>
										<a href="pages-blank.html">
											Blank Page
										</a>
									</li>
									<li>
										<a href="pages-404.html">
											404
										</a>
									</li>
									<li>
										<a href="pages-500.html">
											500
										</a>
									</li>
									<li>
										<a href="pages-log-viewer.html">
											Log Viewer
										</a>
									</li>
									<li>
										<a href="pages-search-results.html">
											Search Results
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-tasks" aria-hidden="true"></i>
									<span>UI Elements</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="ui-elements-typography.html">
											Typography
										</a>
									</li>
									<li class="nav-parent">
										<a>
											Icons
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-icons-elusive.html">
													Elusive
												</a>
											</li>
											<li>
												<a href="ui-elements-icons-font-awesome.html">
													Font Awesome
												</a>
											</li>
											<li>
												<a href="ui-elements-icons-glyphicons.html">
													Glyphicons
												</a>
											</li>
											<li>
												<a href="ui-elements-icons-line-icons.html">
													Line Icons
												</a>
											</li>
											<li>
												<a href="ui-elements-icons-meteocons.html">
													Meteocons
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="ui-elements-tabs.html">
											Tabs
										</a>
									</li>
									<li>
										<a href="ui-elements-panels.html">
											Panels
										</a>
									</li>
									<li>
										<a href="ui-elements-widgets.html">
											Widgets
										</a>
									</li>
									<li>
										<a href="ui-elements-portlets.html">
											Portlets
										</a>
									</li>
									<li>
										<a href="ui-elements-buttons.html">
											Buttons
										</a>
									</li>
									<li>
										<a href="ui-elements-alerts.html">
											Alerts
										</a>
									</li>
									<li>
										<a href="ui-elements-notifications.html">
											Notifications
										</a>
									</li>
									<li>
										<a href="ui-elements-modals.html">
											Modals
										</a>
									</li>
									<li>
										<a href="ui-elements-lightbox.html">
											Lightbox
										</a>
									</li>
									<li>
										<a href="ui-elements-progressbars.html">
											Progress Bars
										</a>
									</li>
									<li>
										<a href="ui-elements-sliders.html">
											Sliders
										</a>
									</li>
									<li>
										<a href="ui-elements-carousels.html">
											Carousels
										</a>
									</li>
									<li>
										<a href="ui-elements-accordions.html">
											Accordions
										</a>
									</li>
									<li>
										<a href="ui-elements-nestable.html">
											Nestable
										</a>
									</li>
									<li>
										<a href="ui-elements-tree-view.html">
											Tree View
										</a>
									</li>
									<li>
										<a href="ui-elements-scrollable.html">
											Scrollable
										</a>
									</li>
									<li>
										<a href="ui-elements-grid-system.html">
											Grid System
										</a>
									</li>
									<li>
										<a href="ui-elements-charts.html">
											Charts
										</a>
									</li>
									<li class="nav-parent">
										<a>
											Animations
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-animations-appear.html">
													Appear
												</a>
											</li>
											<li>
												<a href="ui-elements-animations-hover.html">
													Hover
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											Loading
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-loading-overlay.html">
													Overlay
												</a>
											</li>
											<li>
												<a href="ui-elements-loading-progress.html">
													Progress
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="ui-elements-extra.html">
											Extra
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-list-alt" aria-hidden="true"></i>
									<span>Forms</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="forms-basic.html">
											Basic
										</a>
									</li>
									<li>
										<a href="forms-advanced.html">
											Advanced
										</a>
									</li>
									<li>
										<a href="forms-validation.html">
											Validation
										</a>
									</li>
									<li>
										<a href="forms-layouts.html">
											Layouts
										</a>
									</li>
									<li>
										<a href="forms-wizard.html">
											Wizard
										</a>
									</li>
									<li>
										<a href="forms-code-editor.html">
											Code Editor
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-table" aria-hidden="true"></i>
									<span>Tables</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="tables-basic.html">
											Basic
										</a>
									</li>
									<li>
										<a href="tables-advanced.html">
											Advanced
										</a>
									</li>
									<li>
										<a href="tables-responsive.html">
											Responsive
										</a>
									</li>
									<li>
										<a href="tables-editable.html">
											Editable
										</a>
									</li>
									<li>
										<a href="tables-ajax.html">
											Ajax
										</a>
									</li>
									<li>
										<a href="tables-pricing.html">
											Pricing
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<span>Maps</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="maps-google-maps.html">
											Basic
										</a>
									</li>
									<li>
										<a href="maps-google-maps-builder.html">
											Map Builder
										</a>
									</li>
									<li>
										<a href="maps-vector.html">
											Vector
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-columns" aria-hidden="true"></i>
									<span>Layouts</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="layouts-default.html">
											Default
										</a>
									</li>
									<li>
										<a href="layouts-boxed.html">
											Boxed
										</a>
									</li>
									<li>
										<a href="layouts-menu-collapsed.html">
											Menu Collapsed
										</a>
									</li>
									<li>
										<a href="layouts-scroll.html">
											Scroll
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-asterisk" aria-hidden="true"></i>
									<span>Extra</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="extra-changelog.html">
											Changelog
										</a>
									</li>
									<li>
										<a href="extra-ajax-made-easy.html">
											Ajax Made Easy
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler" target="_blank">
									<i class="fa fa-external-link" aria-hidden="true"></i>
									<span>Front-End <em class="not-included">(Not Included)</em></span>
								</a>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-align-left" aria-hidden="true"></i>
									<span>Menu Levels</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a>First Level</a>
									</li>
									<li class="nav-parent">
										<a>Second Level</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Third Level</a>
												<ul class="nav nav-children">
													<li>
														<a>Third Level Link #1</a>
													</li>
													<li>
														<a>Third Level Link #2</a>
													</li>
												</ul>
											</li>
											<li>
												<a>Second Level Link #1</a>
											</li>
											<li>
												<a>Second Level Link #2</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</nav>

					<hr class="separator" />

					<div class="sidebar-widget widget-tasks">
						<div class="widget-header">
							<h6>Projects</h6>
							<div class="widget-toggle">+</div>
						</div>
						<div class="widget-content">
							<ul class="list-unstyled m-none">
								<li><a href="#">Porto HTML5 Template</a></li>
								<li><a href="#">Tucson Template</a></li>
								<li><a href="#">Porto Admin</a></li>
							</ul>
						</div>
					</div>

					<hr class="separator" />

					<div class="sidebar-widget widget-stats">
						<div class="widget-header">
							<h6>Company Stats</h6>
							<div class="widget-toggle">+</div>
						</div>
						<div class="widget-content">
							<ul>
								<li>
									<span class="stats-title">Stat 1</span>
									<span class="stats-complete">85%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
											<span class="sr-only">85% Complete</span>
										</div>
									</div>
								</li>
								<li>
									<span class="stats-title">Stat 2</span>
									<span class="stats-complete">70%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
											<span class="sr-only">70% Complete</span>
										</div>
									</div>
								</li>
								<li>
									<span class="stats-title">Stat 3</span>
									<span class="stats-complete">2%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
											<span class="sr-only">2% Complete</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>

		</aside>
		<!-- end: sidebar -->

		<section role="main" class="content-body">
			<header class="page-header">
				<h2><?php echo ucwords($this->uri->segment(1)); ?></h2>
			</header>

			<!-- start: page -->
			<div class="row">
				<div class="col-md-6 col-lg-12 col-xl-6">
					<section class="panel">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-8">
									<div class="chart-data-selector" id="salesSelectorWrapper">
										<h2>
											Sales:
											<strong>
												<select class="form-control" id="salesSelector">
													<option value="Porto Admin" selected>Porto Admin</option>
													<option value="Porto Drupal" >Porto Drupal</option>
													<option value="Porto Wordpress" >Porto Wordpress</option>
												</select>
											</strong>
										</h2>

										<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
											<!-- Flot: Sales Porto Admin -->
											<div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active"></div>
											<script>

												var flotDashSales1Data = [{
													data: [
														["Jan", 140],
														["Feb", 240],
														["Mar", 190],
														["Apr", 140],
														["May", 180],
														["Jun", 320],
														["Jul", 270],
														["Aug", 180]
													],
													color: "#0088cc"
												}];

												// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

											</script>

											<!-- Flot: Sales Porto Drupal -->
											<div class="chart chart-sm" data-sales-rel="Porto Drupal" id="flotDashSales2" class="chart-hidden"></div>
											<script>

												var flotDashSales2Data = [{
													data: [
														["Jan", 240],
														["Feb", 240],
														["Mar", 290],
														["Apr", 540],
														["May", 480],
														["Jun", 220],
														["Jul", 170],
														["Aug", 190]
													],
													color: "#2baab1"
												}];

												// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

											</script>

											<!-- Flot: Sales Porto Wordpress -->
											<div class="chart chart-sm" data-sales-rel="Porto Wordpress" id="flotDashSales3" class="chart-hidden"></div>
											<script>

												var flotDashSales3Data = [{
													data: [
														["Jan", 840],
														["Feb", 740],
														["Mar", 690],
														["Apr", 940],
														["May", 1180],
														["Jun", 820],
														["Jul", 570],
														["Aug", 780]
													],
													color: "#734ba9"
												}];

												// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

											</script>
										</div>

									</div>
								</div>
								<div class="col-lg-4 text-center">
									<h2 class="panel-title mt-md">Sales Goal</h2>
									<div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
										<div class="liquid-meter">
											<meter min="0" max="100" value="35" id="meterSales"></meter>
										</div>
										<div class="liquid-meter-selector" id="meterSalesSel">
											<a href="#" data-val="35" class="active">Monthly Goal</a>
											<a href="#" data-val="28">Annual Goal</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-6 col-lg-12 col-xl-6">
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-primary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-primary">
												<i class="fa fa-life-ring"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Support Questions</h4>
												<div class="info">
													<strong class="amount">1281</strong>
													<span class="text-primary">(14 unread)</span>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(view all)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-secondary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-secondary">
												<i class="fa fa-usd"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Total Profit</h4>
												<div class="info">
													<strong class="amount">$ 14,890.30</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(withdraw)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-tertiary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-tertiary">
												<i class="fa fa-shopping-cart"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Today's Orders</h4>
												<div class="info">
													<strong class="amount">38</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(statement)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-quartenary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-quartenary">
												<i class="fa fa-user"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Today's Visitors</h4>
												<div class="info">
													<strong class="amount">3765</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(report)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>

							<h2 class="panel-title">Best Seller</h2>
							<p class="panel-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using Porto Admin Template.</p>
						</header>
						<div class="panel-body">

							<!-- Flot: Basic -->
							<div class="chart chart-md" id="flotDashBasic"></div>
							<script>

								var flotDashBasicData = [{
									data: [
										[0, 170],
										[1, 169],
										[2, 173],
										[3, 188],
										[4, 147],
										[5, 113],
										[6, 128],
										[7, 169],
										[8, 173],
										[9, 128],
										[10, 128]
									],
									label: "Series 1",
									color: "#0088cc"
								}, {
									data: [
										[0, 115],
										[1, 124],
										[2, 114],
										[3, 121],
										[4, 115],
										[5, 83],
										[6, 102],
										[7, 148],
										[8, 147],
										[9, 103],
										[10, 113]
									],
									label: "Series 2",
									color: "#2baab1"
								}, {
									data: [
										[0, 70],
										[1, 69],
										[2, 73],
										[3, 88],
										[4, 47],
										[5, 13],
										[6, 28],
										[7, 69],
										[8, 73],
										[9, 28],
										[10, 28]
									],
									label: "Series 3",
									color: "#734ba9"
								}];

								// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

							</script>

						</div>
					</section>
				</div>
				<div class="col-md-6">
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
							<h2 class="panel-title">Server Usage</h2>
							<p class="panel-subtitle">It's easy to create custom graphs on Porto Admin Template, there are several graph types that you can use, such as lines, bars, pie charts, etc...</p>
						</header>
						<div class="panel-body">

							<!-- Flot: Curves -->
							<div class="chart chart-md" id="flotDashRealTime"></div>

						</div>
					</section>
				</div>
			</div>
			<!-- end: page -->
		</section>
	</div>
</section>