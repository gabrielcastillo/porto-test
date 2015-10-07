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
						<a href="<?php echo base_url('dashboard'); ?>">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="nav-parent">
						<a>
							<i class="fa fa-copy" aria-hidden="true"></i>
							<span>Calendars</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a href="<?php echo base_url('dashboard/calendar/meals'); ?>">
									Meals
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('dashboard/calendar/charters'); ?>">
									Charters
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('dashboard/calendar/rooms'); ?>">
									Rooms
								</a>
							</li>
						</ul>
					</li><!-- end calendars -->
					<li class="nav-parent">
						<a>
							<i class="fa fa-list-alt" aria-hidden="true"></i>
							<span>Reservations</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a href="forms-basic.html">
									Meals
								</a>
							</li>
							<li>
								<a href="forms-advanced.html">
									Charters
								</a>
							</li>
							<li>
								<a href="forms-validation.html">
									Rooms
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-parent">
						<a>
							<i class="fa fa-table" aria-hidden="true"></i>
							<span>Guests</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a href="<?php echo base_url('guests/view'); ?>">
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

				</ul>
			</nav>

		</div>

	</div>

</aside>
<!-- end: sidebar -->