<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Investment Company</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>

	<header>
		<article class="user-account create" style="display: none;">
			<div class="create-an-account">
				<div class="user-account-header">
					<h3>Create an account</h3>
					<img src="<?php bloginfo('template_url') ?>/img/close.png" class="clouse-modal-create" width="22px" height="22px" alt="close">					
				</div>
				<form action="#">
					<h4>Hello and Welcome! Tell us a bit about you</h4>
					<div class="input text">
						<input type="text" placeholder="Name" autocomplete="name" required>
					</div>
					<div class="input email">
						<input type="email" placeholder="E-mail" autocomplete="email" required>
					</div>
					<div class="input password">
						<input type="password" placeholder="Password" autocomplete="current-password" required>
					</div>
					<input class="btn" type="submit" value="Create an account">
				</form>
				<div class="already-have">
					<p>Already have an account?</p>
					<p><a href="#" class="btn to-sing-in">Sing In</a></p>
				</div>
			</div>			
		</article>

		<article class="user-account sing" style="display: none;">
			<div class="sing-in">
				<div class="user-account-header">
					<h3>Sing in</h3>
					<img src="<?php bloginfo('template_url') ?>/img/close.png" class="clouse-modal-sing" width="22px" height="22px" alt="close">					
				</div>
				<form action="#">
					<h4>Welcome back! Nice to see you</h4>
					<div class="input email">
						<input type="email" placeholder="E-mail" autocomplete="email" required>
					</div>
					<div class="input password">
						<input type="password" placeholder="Password" autocomplete="current-password" required>
					</div>
					<input class="btn" type="submit" value="Sing In">
				</form>
				<div class="already-have">
					<p><a href="#">Fofgot your password?</a></p>
					<p><a href="#" class="need-to-sing-up">Need to sing up?</a></p>
				</div>
			</div>			
		</article>
		<section class="top">
			<div class="container">
				<div class="logo">
					<a href="<?php echo home_url(); ?>"><i>Investment</i>
						<br><b>Company</b></a>
				</div>
				<ul class="forum">
					<li><a href="#"><span class="meny">Live Chat</span>
						<br><span class="click">Click here</span></a></li>
					<li><a href="#"><span class="meny">Our Forum</span>
						<br><span class="click">Click here</span></a></li>
				</ul>
				<section class="lang-social-user">
					<section class="lang-social">
						<div class="lang  lang-en">
							<ul class="lang-open" style="display: none;">
								<li class="en"><a href="index.html">en</a></li>
								<li class="ru"><a href="#">ru</a></li>
								<li class="es"><a href="#">es</a></li>
							</ul>
						</div>
						<ul class="social">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google</a></li>
						</ul>
					</section>
					<ul class="user">
						<li class="to-sing-up"><a href="#">Create an account</a></li>
						<li id="sing-in"><a href="#">Sing In</a></li>
					</ul>
					
				</section>
			</div>
		</section>

		<nav class="container">
			<ul>
				<li class="active"><a href="index.html" class="btn">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Investment Plans</a></li>
				<li><a href="#">Affiliate Program</a></li>
				<li><a href="#">News</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>

		<h1>Investment Company 
			<br>the way to your new life</h1>

		<ul class="sing-up">
			<li><a href="#" class="btn to-sing-up">Sing Up Free</a></li>
			<li>or</li>
			<li><a href="#" class="btn">Learn More</a></li>
		</ul>

	</header>

	
	<section class="icons">
		<div class="container">
			<div class="icon">
				<h3>Competitive Advantage </h3>
				<p>We are able to close deals at lightning speed thanks to established due diligence practices and a flat corporate structure.</p>
			</div>

			<div class="icon">
				<h3>Exceptional Resources </h3>
				<p>We have established and continue to maintain outstanding relationships with the largest financial institutions in the world to get projects funded.</p>
			</div>

			<div class="icon">
				<h3>Highly Qualified Team </h3>
				<p>Our Company has assembled a team of multi-disciplined real-estate professionals with vast market knowledge and years of real estate experience.</p>
			</div>

			<div class="icon">
				<h3>Stabilized Portfolio </h3>
				<p>A portfolio of expertly managed and stabilized properties underpinning our commitment to long term ownership.</p>
			</div>
		</div>
	</section>


	<section class="work">
		<h2>How it work</h2>
		<div class="container">
			<div>
				<p>Fusce iaculis condimentum nulla id convallis.</p>
				<video>
					<source src="#" type="video/mp4">
 					<source src="#" type="video/ogg">
					<source src="#" type="video/webm">
				</video>
				<img src="<?php bloginfo('template_url') ?>/img/play.png" width="100px" height="100px" alt="play">
			</div>

			<div class="fusce">
				<p>Fusce ornare, quam et vestibulum lobortis, diam sem adipiscing lorem, id fringilla dolor metus nec quam. Sed ac egestas mauris.</p>
				<a href="#" class="btn to-sing-up">Sing Up Now</a>
			</div>
		</div>
	</section>


	<section class="about">
		<h2>About Us</h2>

		<div class="container">
			<div class="read">
				<p>Fusce iaculis condimentum nulla id convallis. Cras imperdiet sollicitudin dolor nec aliquet. Fusce euismod tincidunt dapibus. Aenean semper est vel dictum scelerisque.</p>
				<p>Curabitur ullamcorper dapibus velit. Proin malesuada vestibulum libero, ut tincidunt nulla rhoncus id. Suspendisse ac porttitor justo. Curabitur a varius ipsum. Etiam a volutpat enim.</p>
				<img src="<?php bloginfo('template_url') ?>/img/about us.png" width="379px" height="244px" alt="About Us">
			</div>
			<div>
				<a href="#" class="btn">Read more</a>
			</div>
		</div>

	</section>


	<section class="plane">
		<p>invest with us now and in six months you expect stupendous rise</p>

		<div class="down-arrow" id="arrow">
			<img src="<?php bloginfo('template_url') ?>/img/plane-buttom.png" width="140px" height="140px" alt="Play">
		</div>
	</section>

<section class="clouse" id="open">
	<section class="plan">
		<div class="container">
			<p class="topic">Fusce ornare, quam et vestibulum lobortis, diam sem adipiscing lorem, id fringilla dolor metus nec quam. Sed ac egestas mauris.</p>
		
			<div class="items">
				<div class="item">
					<h3>Standart</h3>
					<p><strong>112%</strong>
					 	<br>total return</p>
					<div class="item-plan">
						<p>Investment period: <strong>7 days</strong></p>
						<p>Minimum Investment: <strong>$10</strong></p>
						<p>Maximum Investment: <strong>$20,000</strong></p>
						<p>Principal return</p>
					</div>
					<a href="#" class="btn">Create Now</a>
				</div>

				<div class="item">
					<h3>Advanced</h3>
					<p><strong>139%</strong>
					 <br>total return</p>
					<div class="item-plan">
						<p>Investment period: <strong>14 days</strong></p>
						<p>Minimum Investment: <strong>$10</strong></p>
						<p>Maximum Investment: <strong>$30,000</strong></p>
						<p>Principal return</p>
					</div>
					<a href="#" class="btn">Create Now</a>
				</div>

				<div class="item">
					<h3>Premium</h3>
					<p><strong>163%</strong>
					 <br>total return</p>
					<div class="item-plan">
						<p>Investment period: <strong>21 days</strong></p>
						<p>Minimum Investment: <strong>$10</strong></p>
						<p>Maximum Investment: <strong>$50,000</strong></p>
						<p>Principal return</p>
					</div>
					<a href="#" class="btn">Create Now</a>
				</div>
			</div>
		</div>
	</section>


	<section class="news">
		<h2>Latest News</h2>
		<div class="container">
			<div class="button  block">
				<a href="#">&#x2190;</a>
			</div>
			<div class="button">
				<a href="#">&#x2192;</a>
			</div>
		
			<article>
				<time><strong>12</strong>
					<br>July, 2014</time>
				<p>Fusce iaculis condimentum nulla id convallis. Cras imperdiet sollicitudin dolor nec aliquet. Fusce euismod tincidunt dapibus. Aenean semper est vel dictum scelerisque.</p>
				<a href="#">Read more</a>
			</article>

			<article>
				<time><strong>9</strong>
					<br>July, 2014</time>
				<p>Curabitur ullamcorper dapibus velit. Proin malesuada vestibulum libero, ut tincidunt nulla rhoncus id. Suspendisse ac porttitor justo. Curabitur a varius ipsum. Etiam a volutpat enim.</p>
				<a href="#">Read more</a>
			</article>
		</div>
	</section>


	<section class="testimonials  container">
		
		<div>
			<h2>Testimonials</h2>			
			<div class="container">
				<div class="button  block">
					<a href="#">&#x2190;</a>
				</div>
				<div class="button">
					<a href="#">&#x2192;</a>
				</div>
				<blockquote>
					<cite><span>John Doe</span> 
						<br>United Kingdom, Preston</cite>
					<p>Suspendisse porta blandit leo, a lobortis purus feugiat vitae. Suspendisse potenti. Quisque fringilla tristique ligula at ultrices.</p>
				</blockquote>

				<blockquote>
					<cite><span>Jennifer Doe</span>
						<br>United Kingdom, Preston</cite>
					<p>Maecenas rutrum tortor sed ullamcorper luctus. Aliquam ut elit metus. Donec eleifend odio dolor, a rutrum mi interdum et. Aliquam ut elit metus.</p>
				</blockquote>
			</div>
		</div>

		<div>
			<h2>Today’s Poll</h2>

			<form class="container">	
				<h3>What is Investment Plane?</h3>
				<input type="radio" id="Standart" name="plane">
				<label for="Standart">Standart</label>
				<input type="radio" id="Advanced" name="plane" checked>
				<label for="Advanced">Advanced</label>
				<input type="radio" id="Premium" name="plane">
				<label for="Premium">Premium</label>
				<input type="radio" id="Everyone" name="plane">
				<label for="Everyone">Everyone</label>
				<input class="btn" type="submit" value="Vote Now">
			</form>
		</div>
		
	</section>
</section>

	<section class="encryption">
		<div class="container">
			<div class="secure">
				<h2>Secure Encryption</h2>
				<a href="#">thawte</a>
			</div>

			<div>
				<h2 class="payment">Payment Methods</h2>
				<ul>
					<li><a href="#">pm</a></li>
					<li><a href="#">ego</a></li>
					<li><a href="#">stp</a></li>
					<li><a href="#">bitcoin</a></li>
					<li><a href="#">payeer</a></li>
				</ul>
			</div>
		</div>
	</section>


	<footer>
		<div class="container">
			<nav>
				<ul class="nav-footer">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Investment Plans</a></li>
					<li><a href="#">Affiliate Program</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>

			<ul class="contact">
				<li>ASG building, Avenida 2  entre calles 38 y 40</li>
				<li>San Jose, Costa</li>
				<li>1-125-90-000-9</li>
			</ul>
			<div class="company">
				<div class="logo">
					<a><i>Investment</i>
						<br><b>Company</b></a>
				</div>
				<p>© Investment Company, 2014</p>
				<p>All rights reserved. Use of this
					site constitutes acceptance of our
					terms & conditions of service.</p>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-bottom-container">
				<p class="dicom">by <strong>DICOM</strong> TECHNOLOGY</p>
				<ul class="terms">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Anti-Spam Policy</a></li>
				</ul>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="<?php bloginfo('template_url') ?>/js/jquery-3.3.1.js"></script> -->
	<script src="<?php bloginfo('template_url') ?>/js/script.js"></script>
</body>
</html>