<!-- NAVBAR -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and Toggle -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand rook" href="/">
				<?php include('images/logos/rook-icon.php'); ?>
			</a>
		</div>
		<!-- End Brand and Toggle -->

		<!-- Menu -->
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="nav-home" data-toggle="collapse" data-target="#navbar-collapse-1">
					<a href="/#top">Home</a>
				</li>
				<li class="nav-work" data-toggle="collapse" data-target="#navbar-collapse-1">
					<a href="/#projects">Work</a>
				</li>
				<li class="dropdown submenu nav-resume active" data-toggle="collapse" data-target="#navbar-collapse-1">
					<a href="/#resume" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resume <span class="caret"></span></a>
					<ul class="dropdown-menu first-level" role="tablist">
						<li role="presentation">
							<a href="#Employment" aria-controls="Employment" role="tab" data-toggle="tab">Employment</a></li>
						<li role="presentation">
							<a href="#Freelance" aria-controls="Freelance" role="tab" data-toggle="tab">Freelance</a></li><!--
						<li role="presentation">
							<a href="#Experience" aria-controls="Experience" role="tab" data-toggle="tab">Experience</a></li>-->
						<li><a href="/#resume">Download Resume</a></li>
					</ul>
				</li>

				<li data-toggle="collapse" data-target="#navbar-collapse-1">
					<a href="/#contact">Contact</a>
				</li>
				<li class="uptop" data-toggle="collapse" data-target="#navbar-collapse-1">
					<a href="#top"><span class="fa fa-chevron-up"></span></a>
				</li>
				<li class="dropdown li-more">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">+</a>
					<ul class="dropdown-menu" id="overflow"></ul>
				</li>
			</ul>
		</div>
		<!-- End Menu -->

	</div>
</nav>
<!-- END NAVBAR -->