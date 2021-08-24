<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
		type="text/css">
	<link href="{{url('/')}}/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
	@yield('styles')
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{url('/')}}/global_assets/js/main/jquery.min.js"></script>
	<script src="{{url('/')}}/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{url('/')}}/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{url('/')}}/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="{{url('/')}}/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="{{url('/')}}/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="{{url('/')}}/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="{{url('/')}}/global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="{{url('/')}}/assets/js/app.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_pages/dashboard.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
	<script src="{{url('/')}}/global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
	<!-- /theme JS files -->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="{{url('/')}}/js/crud.js"></script>
	<script src="{{url('/')}}/sql/cities.sql"></script>
	<script src="{{url('/')}}/sql/countries.sql"></script>
	<script src="{{url('/')}}/sql/states.sql"></script>
	<script src="{{url('/')}}/sql/world.sql"></script>
	@yield('scripts')

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="{{url('/')}}/global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#"
											class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
												class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#"
											class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i
												class="icon-git-commit"></i></a>
									</div>

									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#"
											class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i
												class="icon-git-branch"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span
											class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#"
											class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i
												class="icon-git-merge"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span
											class="font-weight-semibold">Master</span> and <span
											class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#"
											class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
												class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i
										class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i
										class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face18.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span
											class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face24.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span
											class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face17.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span
											class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face19.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span
											class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face16.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span
											class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="{{url('/')}}/global_assets/images/demo/users/face10.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for
											me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="{{url('/')}}/global_assets/images/demo/users/face3.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do
											because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face24.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and
											suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face4.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've
											chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="{{url('/')}}/global_assets/images/demo/users/face25.jpg" width="36"
											height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>

										<span class="text-muted">Other travelling salesmen live a life of
											luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i
									class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
						data-toggle="dropdown">
						<img src="{{url('/')}}/global_assets/images/demo/users/face11.jpg" class="rounded-circle mr-2"
							height="34" alt="">
						{{-- <span>{{ Auth::user()->name }}</span> --}}
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						{{--app.blade اخدته من  --}}
						<a href="{{ route('logout') }}"
							onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
							class=" dropdown-item"><i class="icon-user-plus"></i>

							{{ __('Logout') }}</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>

					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-right8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="{{url('/')}}/global_assets/images/demo/users/face11.jpg"
										width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								{{-- {{ Auth::user()->name }} --}}
								<div class="media-title font-weight-semibold"></div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
								title="Main"></i>
						</li>
						{{-- <li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li> --}}
						<li class="nav-item nav-item-submenu ">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Admin</span></a>

							<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
								<li class="nav-item">
									<a href="{{route('admin.index')}}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Main</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{route('admin.create')}}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Create</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu ">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>category</span></a>

							<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
								<li class="nav-item">
									<a href="{{route('categories.index')}}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>index</p>
									</a>
								</li>
								{{-- <li class="nav-item">
									<a href="{{route('categories.create')}}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Create</p>
								</a>
						</li> --}}
					</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>products</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('products.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
							{{-- <li class="nav-item">
									<a href="{{route('products.create')}}" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Create</p>
							</a>
					</li> --}}
					</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>prodact categories</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('prodactCategories.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>vendors</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('vendors.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>vendor store</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('store.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Attribute</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('attribute.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Attribute</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('attributeGroup.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Attribute Group</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>contact us</span></a>
						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('contactUs.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>country</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('country.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>city</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('city.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-item-submenu ">
						<a href="#" class="nav-link"><i class="icon-copy"></i> <span>languages</span></a>

						<ul class="nav nav-group-sub nav-treeview" data-submenu-title="Layouts">
							<li class="nav-item">
								<a href="{{route('language.index')}}" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>index</p>
								</a>
							</li>
						</ul>
					</li>
					</ul>
					</li>
					</ul>
					<!-- /page kits -->
				</div>
				<!-- /main navigation -->
			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->
		<!-- Main content -->
		@yield('content')
		<!-- /main content -->
	</div>
	<!-- /page content -->
	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		<div class="text-center d-lg-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
				data-target="#navbar-footer">
				<i class="icon-unfold mr-2"></i>
				Footer
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a
					href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
			</span>

			<ul class="navbar-nav ml-lg-auto">
				<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i
							class="icon-lifebuoy mr-2"></i> Support</a></li>
				<li class="nav-item"><a href="../../../../../../docs/index.html" class="navbar-nav-link"
						target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
				<li class="nav-item"><a
						href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
						class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i
								class="icon-cart2 mr-2"></i> Purchase</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /footer -->

</body>

</html>