<?php 
/*
 *	                  ....
 *	                .:   '':.
 *	                ::::     ':..
 *	                ::.         ''..
 *	     .:'.. ..':.:::'    . :.   '':.
 *	    :.   ''     ''     '. ::::.. ..:
 *	    ::::.        ..':.. .''':::::  .
 *	    :::::::..    '..::::  :. ::::  :
 *	    ::'':::::::.    ':::.'':.::::  :
 *	    :..   ''::::::....':     ''::  :
 *	    :::::.    ':::::   :     .. '' .
 *	 .''::::::::... ':::.''   ..''  :.''''.
 *	 :..:::'':::::  :::::...:''        :..:
 *	 ::::::. '::::  ::::::::  ..::        .
 *	 ::::::::.::::  ::::::::  :'':.::   .''
 *	 ::: '::::::::.' '':::::  :.' '':  :
 *	 :::   :::::::::..' ::::  ::...'   .
 *	 :::  .::::::::::   ::::  ::::  .:'
 *	  '::'  '':::::::   ::::  : ::  :
 *	            '::::   ::::  :''  .:
 *	             ::::   ::::    ..''
 *	             :::: ..:::: .:''
 *	               ''''  '''''
 *	
 *
 *	AUTOMAD
 *
 *	Copyright (c) 2014-2017 by Marc Anton Dahmen
 *	http://marcdahmen.de
 *
 *	Licensed under the MIT license.
 *	http://automad.org/license
 */


namespace Automad\GUI;


defined('AUTOMAD') or die('Direct access not permitted!');


/*
 *	The GUI Log Out Page. As part of the GUI, this file is only to be included via the GUI class.
 */


$loggedOut = User::logout();


$this->guiTitle = $this->guiTitle . ' / ' . Text::get('log_out_title');
$this->element('header');


?>

		<div class="uk-width-medium-1-2 uk-container-center">
			<h2 class="uk-margin-large-top"><?php echo $this->sitename ?></h2>
			<?php if ($loggedOut) { ?>
			<div class="uk-alert uk-alert-success">
				<?php Text::e('success_log_out'); ?>
			</div>
			<div class="uk-text-right">
				<a href="<?php echo AM_BASE_INDEX; ?>" class="uk-button">
					<i class="uk-icon-home"></i>&nbsp;
					<?php Text::e('btn_home'); ?>
				</a>
				<a href="<?php echo AM_BASE_INDEX . AM_PAGE_GUI; ?>" class="uk-button">
					<?php Text::e('btn_login'); ?>&nbsp;
					<i class="uk-icon-sign-in"></i>
				</a>
			</div>
			<?php } else { ?>
			<div class="uk-alert uk-alert-danger">
				<?php Text::e('error_log_out'); ?>
			</div>
			<?php } ?>
		</div>
		
<?php


$this->element('footer');


?>