<section class="header-main">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<div class="brand-wrap">
						<img class="logo" src="img/kedebook logo.png" alt="logo">
						<a class="logo-text h2" href="store.php">KedeBook</a>
					</div> <!-- brand-wrap.// -->
				</div>
				<div class="col-lg-6 col-sm-6">
					
				</div> <!-- -->
				<div class="col-lg-3 col-sm-6">
					<div class="widgets-wrap d-flex justify-content-end">
						<div class="widget-header dropdown">
							<a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
								<img src="img/cashier.png" class="avatar" alt="">
								<span> 
								<?php
              					  echo $_SESSION ['nama'];
								?>
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="history.php" target="_blank"><i class="fa fa-history"></i> History</a>
                                <a class="dropdown-item" href="help.php" target="_blank"><i class="fa fa-question-circle"></i> Help & Support</a>
                                <a class="dropdown-item" href="gantipass.php" target="_blank"><i class="fa fa-wrench"></i> Ganti Password</a>
								<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
							</div> <!--  dropdown-menu .// -->
						</div> <!-- widget  dropdown.// -->
					</div> <!-- widgets-wrap.// -->
				</div> <!-- col.// -->
			</div> <!-- row.// -->
		</div> <!-- container.// -->
	</section>
