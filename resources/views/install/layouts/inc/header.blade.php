<div class="header">
	<nav class="navbar navbar-site navbar-default" role="navigation">
		<div class="container" style="padding-left: 0; padding-right: 0;">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="navbar-header">
					{{-- Toggle Nav --}}
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					{{-- Logo --}}
					<a href="{{ url('/') }}" class="navbar-brand logo logo-title">
						<?php
						$logoImgStyle = 'width:auto; height:40px; float:left; margin:0 5px 0 0;';
						$logoImg = '<img src="' . url('images/logo.png') . '" style="' . $logoImgStyle . '"/>';
						try {
							if (is_link(public_path('storage'))) {
								if (\Storage::exists('app/default/logo.png')) {
									$logoImg = '<img src="' . \Storage::url('app/default/logo.png') . '" style="' . $logoImgStyle . '"/>';
								}
							}
						} catch (\Exception $e) {}
						
						// Print Logo
						echo $logoImg;
						?>
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-left"></ul>
					<ul class="nav navbar-nav navbar-right"></ul>
				</div>
			</div>
		</div>
	</nav>
</div>