<?php
/**
 * Joomla! Framework Sample Application
 *
 * @copyright  Copyright (C) 2014 Michael Babker. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

/** @type  \BabDev\View\DefaultHtmlView  $this */
?>
<h1>Send me <?php echo $this->model->getState()->get('beer.number'); ?> beers!</h1>
