<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

		<@ foreach in pagelist @>
			<div class="uk-block">
				<ul class="masonry grid-margin uk-grid uk-grid-width-medium-1-2">
					<li class="masonry-item">
						<a href="@{ url }">
							<h3>@{ title }</h3>
						</a>
						<@ ../../snippets/date.php @>
						<br />
						<@ foreach in tags 
						@><@ if @{ :i } > 1 @>, <@ end @>@{ :tag }<@ 
						end @>
					</li>
					<li class="masonry-item">
						<div class="uk-panel uk-panel-box">
							<@ with @{ imageTeaser | def('*.jpg, *.jpeg, *.png, *.gif') } { 
								width: 750
							} @>
								<a 
								href="@{ url }" 
								class="uk-panel-teaser uk-display-block"
								>
									<img 
									src="@{ :fileResized }" 
									alt="@{ :basename }"
									width="@{ :widthResized }" 
									height="@{ :heightResized }" 
									>
								</a>
							<@ end @>
						</div>
					</li>
					<li class="masonry-item">
						<@ if @{ textTeaser } @>
							<div class="content uk-margin-small-bottom">
								@{ textTeaser | markdown }
							</div>
						<@ end @>	
						<a href="@{ url }" class="uk-button">
							<i class="uk-icon-share uk-icon-small"></i>
						</a>
					</li>
				</ul>
			</div>
		<@ end @>