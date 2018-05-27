<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

	<ul class="masonry grid-margin uk-grid uk-grid-width-medium-1-2">
		<@ foreach in pagelist @>
			<li class="masonry-item">
				<a 
				href="@{ url }" 
				class="uk-panel uk-panel-box uk-panel-box-hover
				">
					<@ with @{ imageTeaser | def('*.jpg, *.jpeg, *.png, *.gif') } {
						width: 780
					} @>
						<div class="uk-panel-teaser">
							<img 
							src="@{ :fileResized }" 
							alt="@{ :basename }"
							width="@{ :widthResized }" 
							height="@{ :heightResized }" 
							/>
						</div>		
					<@ end @>
					<div class="uk-panel-title">
						@{ title }
					</div>
					<@ ../../snippets/date.php @>
				</a>
			</li>
		<@ end @>
	</ul>	