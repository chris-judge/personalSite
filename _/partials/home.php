<div class="home slide" ng-repeat="post in posts">
	<div class="inside">
		<section class="intro" ng-repeat="hero in post.acf.hero_section">
			<div class="content-wrap">
				<h1 ng-if="hero.headline">{{hero.headline}}</h1>
				<h2 ng-if="hero.tagline">{{hero.tagline}}</h2>
			</div>
			<div class="about" ng-repeat="about in post.acf.about">
				<div class="content-wrap">
					<h3 class="lg lc" ng-if="about.headline">{{about.headline}}</h3>
					<div class="ce-wrap" ng-bind-html="about.description"></div>
					<h3 class="lg lc" ng-if="about.music_headline">{{about.music_headline}}</h3>
					<div class="ce-wrap music-list" ng-bind-html="about.music_description"></div>
				</div>
			</div>
		</section>	
	</div>
	<section class="samples container-fluid txt-white" ng-repeat="work in post.acf.work">
		<div class="row">
			<div class="col-md-12 sample" ng-repeat="sample in work.sample">
				<a class="tile-link" href="{{sample.page}}">
				<div class="image-bg top" style="background-image:url({{sample.image}});"></div>
				<div class="content-wrap tac">
					<div class="inner-wrap">
						<h3 class="lg">{{sample.headline}}</h3>
						<p class="alt">{{sample.description}}</p>
						<p class="btn-txt txt-blue">View <span>Project</span> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></p>
					</div>
				</div>
				</a>
			</div>
		</div>
	</section>
</div>