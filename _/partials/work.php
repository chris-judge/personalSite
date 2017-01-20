<div class="work-inside inside slide">
	<section class="intro" ng-repeat="introduction in post.acf.introduction">
		<div class="content-wrap">
			<h1 ng-if="post.title.rendered" ng-bind-html="post.title.rendered">{{post.title.rendered}}</h1>
			<h2 ng-if="introduction.built_with">{{introduction.built_with}}</h2>
			<p ng-if="introduction.description">{{introduction.description}}</p>
		</div>
	</section>
	<section class="snapshots" ng-repeat="snapshot in post.acf.pages">
		<div class="content-wrap">
			<h3 class="lg" ng-if="snapshot.title">{{snapshot.title}}</h3>
			<div class="img-wrap">
				<a target="blank" href="{{snapshot.url}}">
					<img class="boxs all-trans" src="{{snapshot.image.url}}" alt="{{post.title.rendered}} {{snapshot.title}} Snapshot">
				</a>
			</div>
		</div>
	</section>
	<section class="credits" ng-repeat="conclusion in post.acf.conclusion">
		<div class="content-wrap" ng-if="conclusion.credits">
			<h3>Credits</h3>
			<ul>
				<li ng-repeat="credit in conclusion.credits"><span>{{credit.name}}</span> {{credit.position}}</li>
			</ul>
		</div>
	</section>
	<div class="conclusion tar">
		<a href="/personal/work" class="btn-txt txt-blue alt">Other <span>Projects</span> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
	</div>
</div>