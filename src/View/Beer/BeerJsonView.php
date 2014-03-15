<?php
/**
 * Joomla! Framework Sample Application
 *
 * @copyright  Copyright (C) 2014 Michael Babker. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

namespace BabDev\View\Beer;

use BabDev\View\AbstractJsonView;

/**
 * Beer JSON view class for the application
 *
 * @since  1.0
 */
class BeerJsonView extends AbstractJsonView
{
	/**
	 * Method to render the view.
	 *
	 * @return  string  The rendered view.
	 *
	 * @since   1.0
	 * @throws  \RuntimeException
	 */
	public function render()
	{
		return json_encode(['message' => 'Send me ' . $this->model->getState()->get('beer.number') . ' beers!']);
	}
}
