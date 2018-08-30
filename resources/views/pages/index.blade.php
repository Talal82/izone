@extends('main')

@section('title', '| Index Page')

@section('content')

<!--banner section -->
<div class="banners_main">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@for($i = 0; $i < count($banners); $i++)
			@if( $i == 0)
			<li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="active"></li>
			@else
			<li data-target="#carousel-example-generic" data-slide-to="{{ $i }}"></li>
			@endif
			@endfor

		</ol>
		<div class="carousel-inner" role="listbox">
			@foreach( $banners as $banner)
			@if($loop -> first)
			<div class="item active">
				<img src="images/{{ $banner -> image }}" height="500" alt="..." class="img-responsive center-block">
				<div class="banner-text">
					<h2>{{ $banner -> name }}</h2>
					<p>{{ $banner -> detail }}</p>
					<a href="{{ route('about') }}">read more</a>
					<a href="{{ route('services') }}">services</a>
				</div>
			</div>
			@else
			<div class="item">
				<img src="images/{{ $banner -> image }}" alt="..." class="img-responsive center-block">
				<div class="banner-text">
					<h2>{{ $banner -> name }}</h2>
					<p>{{ $banner -> detail }}</p>
					<a href="{{ route('about') }}">read more</a>
					<a href="{{ route('services') }}">services</a>
				</div>
			</div>
			@endif

			@endforeach

		</div>
	</div>   
</div>  
<!--banner section --> 

<!--center section -->
<section class="main-page-services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2>Our Services</h2>
					<p>My Sincere Thanks and Appreciationto all our valued Clients and Business Partners for their continued support and contributions to the Success of operationthrough the years
					</p>
				</div>
			</div>

			@foreach($services as $service)
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="service-main-box">
					<img src="images/{{ $service -> visible_icon }}" alt="image"/>
					<div class="service-main-boxcont">
						<div class="service-text">
							<h2>{{ $service -> name }}</h2>
							<p>{{ $service -> detail }}</p>
							<a href="{{ route('view_service', [$service -> id]) }}">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>

			@endforeach


		</div>
	</div>
</section>

<section class="main-page-about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				


				<div class="row">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<div class="tabs">
							<ul>
								@foreach($introductions as $intro)
								@if( $loop -> first)
									<li class="active"><a>{{ $intro -> tab_name }}</a></li>
								@else
									<li><a>{{ $intro -> tab_name }}</a></li>
								@endif
								@endforeach
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-5 hidden-xs hidden-sm"></div>
				</div>


				<div class="main-tab-text">

					@foreach($introductions as $intro)
					<div class="tab-text">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="text-f">
									<p>{{ $intro -> tab_detail }}</p>
								</div>
							</div>
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="tab-img">
									<iframe src="{{ $intro -> iframe_link }}" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div> {{-- end main-tab-text --}}
			</div> {{-- end col-md-12 --}}
		</div> {{-- end container --}}
	</div>
</section>

<section class="main-page-projects">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2>Our Projects</h2>
				</div>
			</div>
			<div class="owl-demo1 owl-carousel owl-theme">
				@foreach($featuredProjects as $project)
				<div class="item">
					<div class="project-box">
						<div class="proj-img">
							<img src="images/{{ $project -> main_image }}" alt="image" class="img-responsive center-block">
						</div>
						<a href="{{ route('view_project', [$project -> id]) }}">
							<div class="proj-detail">
								<h2>{{ $project -> title }}</h2>
								<p>{{ (strlen($project -> detail) > 100)? substr($project -> detail,0, 100).'...': $project -> detail }}</p>
								<i class="fa fa-clock-o" aria-hidden="true"></i> <span>05/03/2017</span>
								<i class="fa fa-share" aria-hidden="true"></i> <span>{{ $project -> status }}</span>
								<i class="fa fa-long-arrow-right rite" aria-hidden="true"></i>
							</div>
						</a>
					</div>
				</div>
				@endforeach
			</div>

		</div>
	</div>
</section>

<section class="smart-b">
	<div class="container">
		<div class="row">


			<div class="col-md-4 col-sm-5 col-xs-12">
				<div class="heading">
					<h2>izone Benefits</h2>
				</div>
				<div class="left-b">
					<ul>
						@foreach($benefits as $benefit)
						<li>
							<div class="sb-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
							<div class="sb-text">
								<h2>{{ $benefit -> name }}</h2>
								<p>{{ $benefit -> detail }}</p>
							</div>
						</li>
						@endforeach
					</ul>
				</div>


			</div>
			<div class="col-md-8 col-sm-7 col-xs-12">
				<div class="brdr">
					<div class="heading">
						<h2>License & ISO Certificates</h2>
					</div>
					<div class="clients">
						<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">

								@for($i = 0; $i < $certLength; $i++)
								@if( $i == 0)
								<li data-target="#carousel-example-generic1" data-slide-to="{{ $i }}" class="active"></li>
								@else
								<li data-target="#carousel-example-generic1" data-slide-to="{{ $i }}"></li>
								@endif
								@endfor
							</ol>
							<div class="carousel-inner" role="listbox">
								@for($i = 0; $i < count($certificates); $i++)
								@if($i == 0)
									<div class="item active">
										<div class="cert-img">
											<img src="images/{{ $certificates[$i] -> image }}" alt="image" />
											<a href="certificates.html"><div class="hvr-cert"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a>
										</div>
									</div>
									<?php 
										$i++;
									 ?>
									<div class="item active">
										<div class="cert-img">
											<img src="images/{{ $certificates[$i] -> image }}" alt="image" />
											<a href="certificates.html"><div class="hvr-cert"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a>
										</div>
									</div>
									<?php 
										$i++; 
									?>
									<div class="item active">
										<div class="cert-img">
											<img src="images/{{ $certificates[$i] -> image }}" alt="image" />
											<a href="certificates.html"><div class="hvr-cert"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a>
										</div>
									</div>
								@else
									<div class="item">
										<div class="cert-img">
											<img src="images/{{ $certificates[$i] -> image }}" alt="image" />

											<a href="certificates.html"><div class="hvr-cert"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a>
										</div>
									</div>
									<?php 
										$i++;
									 ?>
									 <div class="item">
										<div class="cert-img">
											<img src="images/{{ $certificates[$i] -> image }}" alt="image" />

											<a href="certificates.html"><div class="hvr-cert"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a>
										</div>
									</div>
									<?php 
										$i++;
									 ?>
									 <div class="item">
										<div class="cert-img">
											<img src="images/{{ $certificates[$i] -> image }}" alt="image" />

											<a href="certificates.html"><div class="hvr-cert"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a>
										</div>
									</div>
								@endif
								@endfor
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
