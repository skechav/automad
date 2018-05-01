<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
		<section id="source" class="section">
			<hr />
			<div class="tags has-addons">
				<span class="tag is-dark">Source</span>
				<span class="tag is-light">/packages/@{ theme }/@{ :template }.php</span>
			</div>
			<div class="content">
				<@ tutorials/source { 
					file: '/packages/@{ theme }/@{ :template }.php' 
				} @>
			</div>
		</section>
		<section class="section">	
			<nav class="breadcrumb" aria-label="breadcrumbs">
				<ul>
					<@ newPagelist { type: 'breadcrumbs' } @>
					<@ foreach in pagelist @>
						<li><a href="@{ url }">@{ title }</a></li>
					<@ end @>
				</ul>
			</nav>
		</section>
	</div>
</body>
</html>