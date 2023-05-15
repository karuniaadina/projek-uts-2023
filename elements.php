<?php
require 'navbar.php';
?>
                <div class="col-lg-5 pr-0">
                  <ul class="nav navbar-nav navbar-right right_nav pull-right">
                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-search" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-user" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-heart" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Elements</h2>
              <p>Toko ini menyediakan berbagai macam bagian/elemen tentang peralatan,perlengkapan dapur secara lengkap</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="elements.php">Elements</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container">
			<h3 class="text-heading title_color">Tentang Toko Kami</h3>
			<p class="sample-text">
				Sejarah Terbentuknya Toko Kami
				<b>Kkitchenset</b> yaitu dibangun sejak 2020  secara online pada awalnya dikarenakan dimasa pandemi semua orang tidak boleh saling bertemu serta berbelanja pun online yaitu masa pandemi
				<i>Covid-19</i> Saat akan membangun atau merenovasi dapur, istilah desain interior yang sering dilihat atau didengar adalah kitchen set, bukan “dapur”. Dalam hal ini, kitchen set adalah satu set furnitur dan perabotan yang dibutuhkan dalam membangun sebuah dapur. Sementara itu, dapur merujuk pada ruangan tempat penghuni rumah menyiapkan makanan dan memasak.
				<sup>Elements</sup> Terdiri dari beberapa bagian, kitchen set memang merupakan seperangkat furnitur yang berfungsi sebagai alat bantu saat menyiapkan makanan dan memasak, ruang penyimpanan barang-barang keperluan dapur, ataupun mempunyai fungsi estetika yang bisa dihadirkan atau tidak dalam sebuah dapur.
				<sub>Pilihan</sub>  Anda bisa menyesuaikan kebutuhan dari kitchen set dalam hunian dengan mempertimbangkan faktor seperti budget, luas area dapur, dan gaya interior yang ingin diaplikasikan pada kitchen set, untuk kemudian disesuaikan dengan bagian-bagian kitchen set yang akan dibedah berikut ini.
				<b> Kitchen Counter atau Meja Konter Dapur</b> Bagian ini bisa dikatakan sebagai bagian paling dasar dari sebuah kitchen set, karena banyak bagian lain yang menjadi satu kesatuan dengan bagian-bagian lain. Sejatinya, konter dapur adalah alas untuk menyiapkan makanan sebelum dimasak. Kemudian, menjadi tempat untuk menaruh barang-barang seperti toples, wadah alat masak, talenan, atau benda-benda lain yang diperlukan dalam jangkauan tangan yang mudah.
				<u>"Kitchen Island”</u> Bagian pada kitchen set ini biasanya hadir di dapur yang punya ukuran lebih besar. Maka dari itu, kitchen island lebih menjadi furnitur tambahan yang tidak terlalu esensial pada dapur. Namun, jika Anda punya budget dan ruang untuk menambahkannya, kitchen island bisa menjadi konter dan ruang penyimpanan tambahan di dapur.
			</p>
		</div>
	</section>
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30 title_color">Form Element</h3>
						<form action="#">
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
								 required class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
								 required class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
								 required class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon">
									<i class="fa fa-thumb-tack" aria-hidden="true"></i>
								</div>
								<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
								 required class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon">
									<i class="fa fa-plane" aria-hidden="true"></i>
								</div>
								<div class="form-select" id="default-select">
									<select>
										<option value="1">City</option>
										<option value="1">Jabodetabek</option>
										<option value="1">Jawa Tengah</option>
										<option value="1">Jawa Timur</option>
										<option value="1">Sumatera</option>
									</select>
								</div>
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon">
									<i class="fa fa-globe" aria-hidden="true"></i>
								</div>
								<div class="form-select" id="default-select2">
									<select>
										<option value="1">Country</option>
										<option value="1">Indonesia</option>
										<option value="1">Malaysia</option>
										<option value="1">Singapore</option>
										<option value="1">Thailand</option>
									</select>
								</div>
							</div>

							<div class="mt-10">
								<textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"
								 required></textarea>
							</div>
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="Kritik" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'"
								 required class="single-input-primary">
							</div>
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="Saran/Masukkan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'"
								 required class="single-input-accent">
							</div>
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="Ulasan Toko Kami" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'"
								 required class="single-input-secondary">
							</div>
						</form>
					</div>
					<div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
						<div class="single-element-widget">
							<h3 class="mb-30 title_color">Rate</h3>
							<div class="switch-wrap d-flex justify-content-between">
								<p>5 Star</p>
								<div class="primary-switch">
									<input type="checkbox" id="default-switch">
									<label for="default-switch"></label>
								</div>
							</div>
							<div class="switch-wrap d-flex justify-content-between">
								<p>4 Star</p>
								<div class="primary-switch">
									<input type="checkbox" id="primary-switch" checked>
									<label for="primary-switch"></label>
								</div>
							</div>
							<div class="switch-wrap d-flex justify-content-between">
								<p>3 Star</p>
								<div class="confirm-switch">
									<input type="checkbox" id="confirm-switch" checked>
									<label for="confirm-switch"></label>
								</div>
							</div>
						</div>
						<div class="single-element-widget">
							<h3 class="mb-30 title_color">Languages</h3>
							<div class="default-select" id="default-select">
								<select>
									<option value="1">English</option>
									<option value="1">Indonesia</option>
									<option value="1">Melayu</option>
									<option value="1">Portuguise</option>
									<option value="1">Arabic</option>
								</select>
							</div>
						</div>
						<div class="single-element-widget">
							<h3 class="mb-30 title_color">Elements</h3>
							<div class="switch-wrap d-flex justify-content-between">
								<p>01. Furniture</p>
								<div class="primary-checkbox">
									<input type="checkbox" id="default-checkbox">
									<label for="default-checkbox"></label>
								</div>
							</div>
							<div class="switch-wrap d-flex justify-content-between">
								<p>02. Electronic</p>
								<div class="primary-checkbox">
									<input type="checkbox" id="primary-checkbox" checked>
									<label for="primary-checkbox"></label>
								</div>
							</div>
							<div class="switch-wrap d-flex justify-content-between">
								<p>03. Equipment</p>
								<div class="confirm-checkbox">
									<input type="checkbox" id="confirm-checkbox">
									<label for="confirm-checkbox"></label>
								</div>
							</div>
							<div class="switch-wrap d-flex justify-content-between">
								<p>04. Kitchensets</p>
								<div class="disabled-checkbox">
									<input type="checkbox" id="disabled-checkbox" disabled>
									<label for="disabled-checkbox"></label>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Top Products</h4>
          <ul>
            <li><a href="#">Managed Website</a></li>
            <li><a href="#">Manage Reputation</a></li>
            <li><a href="#">Power Tools</a></li>
            <li><a href="#">Marketing Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Features</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Guides</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Experts</a></li>
            <li><a href="#">Agencies</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
          <p>You can trust us. we only send promo offers,</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
              method="get" class="form-inline">
              <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Your Email Address '" required="" type="email">
              <button class="click-btn btn btn-default">Subscribe</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kkitchenset@2023 <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">karunia
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <div class="col-lg-4 col-md-12 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    </div>
  </footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>