		<?php include 'template/header.php';?>
		<!-- Header End-->

			<article id="home">
			</article>

			<div class="contentArea">
				<article id="about">
					<div class="intro">
						<img src="images/headShot.png" alt="Picture of Christopher Judge">
						<h3>Hey there, I'm Chris.</h3>
						<p>I'm a professional front-end web developer looking to create awesome things with awesome people. With a bachelors degree in Digital Media: Web Design from the University of Central Florida, <span><a href="http://www.youtube.com/watch?v=B1lU_63ckck&t=3m4s" target="_blank">Go Knights</a></span>, and a passion for all things web related, I strive to build amazing things that will impact the online world.</p>
						<p>While I'm not building the web, I enjoy reading about fun, new things impacting the industry, changing my Terminal color scheme and spending time with my friends and family.</p>
						<p>Stay connected with me on <a href="https://twitter.com/Chris_egduJ" target="_blank">Twitter</a>, take a look at my code on <a href="https://github.com/chris-judge" target="_blank">GitHub</a> and check out my <a href="resume.php">Résumé</a>.</p>
					</div>
				</article>

				<article id="portfolio">
					<div class="portfolioWrap">
						<h3>Recent Works</h3>
						<div class="works">
							<a href="http://osi.ucf.edu/rosenlife/" alt="Link to UCF RosenLife" target="_blank">
								<div id="rosenlife">
									<div class="preview">
										<h4>UCF RosenLife</h4>
										<p>Online resource created to help students at the UCF Rosen Campus keep up to date with important events and information.</p>
									</div>
								</div>
							</a>
							<a href="/citrusCoders/index.php" alt="Link to Citrus Coders Site" target="_blank">
								<div id="artPadLive">
									<div class="preview">
										<h4>Citrus Coders</h4>
										<p>Informational website developed to be the online identity for a fictional creative agency known as Citrus Coders.</p>
									</div>
								</div>
							</a>
							<a href="http://osi.ucf.edu/cab/zk5k/" alt="Link to ZK5K Site." target="_blank">
								<div id="zk5k">
									<div class="preview">
										<h4>Zombie Knights 5k</h4>
										<p>Promotional website designed for the Zombie Knights 5k. Runners, Zombies and Volunteers used our site to sign up and get information about the event.</p>
									</div>
								</div>
							</a>
							<a href="http://osi.ucf.edu/homecoming/" alt="Link to UCF Homecoming." target="_blank">
								<div id="homecoming">
									<div class="preview">
										<h4>UCF Homecoming</h4>
										<p>Informational website built on Wordpress for the UCF Homecoming agency. Used to promote homecoming events and traditions.</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</article>

				<article id="contact">
					<div class="contactWrap">
						<h3>Contact Me</h3>
						<p>Need something built? Looking for another member for your team?</p>
						<p>Have a really funny joke? Feel free to drop me a line!</p>


						<form action="" method="POST" id="contactForm">
							<input type="text" name="contactFormName" id="contactFormName" placeholder="Name:">
							<input type="email" name="contactFormEmail" id="contactFormEmail" placeholder="Email:">
							<textarea name="contactFormMessage" id="contactFormMessage" cols="30" rows="10" placeholder="Message:"></textarea>
							<input type="submit" value="Send" name="submit" class="button">
						</form>



						<div class="contactInfo">
							<ul>
								<li><a href="tel:9415865537"><i class="fa fa-phone-square fa-lg"></i><span> (941) 586 - 5537</span></a></li>
								<li><a href="mailto:me@christopherjudge.us"><i class="fa fa-envelope fa-lg"></i><span> Chris_Judge941@yahoo.com</span></a></li>
								<li><a href="https://twitter.com/Chris_egduJ" target="_blank"><i class="fa fa-twitter-square fa-lg"></i><span> Twitter</span></a></li>
								<li><a href="http://instagram.com/chris_egduj" target="_blank"><i class="fa fa-instagram fa-lg"></i><span> Instagram</span></a></li>
								<li><a href="https://github.com/chris-judge" target="_blank"><i class="fa fa-github-square fa-lg"></i><span> GitHub</span></a></li>
							</ul>
						</div>
					</div>
				</article>
			</div>

		<!-- Footer Start-->
		<?php include 'template/footer.php';?>