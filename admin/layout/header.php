<!-- Main Header-->
<div class="main-header side-header sticky">
				<div class="container-fluid">
					<div class="main-header-left">
						<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="index.html"><img src="../../assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
							<a href="index.html"><img src="../../assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="logo"></a>
						</div>
						<form action="<?php echo Helper::get_url('admin/?c=findprd');  ?>" method="POST">
						<div class="input-group">
						<input type="hidden" name="action" value="search">
							<input type="search" class="form-control rounded-0" name="search"placeholder="Tìm kiếm">
							<button type="submit" class="btn search-btn"><i class="fe fe-search"></i></button>
						</div>
						</form>
					</div>
					<div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search header-icons"></i>
							</a>
							
						</div>
					
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link" href="">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						
						
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="">
								<span class="main-img-user" ><img alt="avatar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuWPkoD_BlrMnQbA3rx3OFD-xHD86fc3S3XA&usqp=CAU"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Xin chào</p>
								</div>
								
								<a class="dropdown-item" href="signin.html">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- End Main Header-->