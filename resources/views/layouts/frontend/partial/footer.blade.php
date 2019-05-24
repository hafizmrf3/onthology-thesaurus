	<footer>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">
						<div class="form-inline">
							<a class="logo" href="https://www.lipi.go.id/"><img src="{{ asset('assets/frontend/images/lipi.png') }}" alt="Logo Image"></a>
							
							<a class="logo" href="https://www.gunadarma.ac.id/"><img src="{{ asset('assets/frontend/images/ug.png') }}" alt="Logo Image"></a>
						</div>
						<p class="copyright">RIN LIPI-UG TEAM  @2018. All rights reserved.</p>
						<p class="copyright">Created by Hafiz Ma'ruf (Gunadarma University)</p>
						<ul class="icons">
							<li><a href="https://twitter.com"><i class="ion-social-pinterest-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
						<div class="footer-section">
						<h4 class="title"><b>RIN Projects</b></h4>
						<ul>
							<a href="#">COLLABORATION MATRIX</a>
						</ul>
						<ul>
							<a href="#">GRAPH OF RELATION</a>
						</ul>
						<ul>
							<a href="#">JOURNAL FINDER</a>
						</ul>
						<ul>	
							<a href="#">ONTOLOGY THESAURUS</a>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<h4 class="title"><b>SUBSCRIBE</b></h4>
						<div class="input-area">
							<form method="POST" action="{{ route('subscriber.store') }}">
								@csrf
								<input class="email-input" name="email" type="email" placeholder="Enter your email">
								<button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
							</form>
						</div>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>