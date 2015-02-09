<?php
/**
 * @component  J!Track Gallery (jtg) for Joomla! 2.5 and 3.x
 *
 *
 * @package     Comjtg
 * @subpackage  Backend
 * @author      Christophe Seguinot <christophe@jtrackgallery.net>
 * @author      Pfister Michael, JoomGPStracks <info@mp-development.de>
 * @author      Christian Knorr, InJooOSM  <christianknorr@users.sourceforge.net>
 * @copyright   2015 J!TrackGallery, InJooosm and joomGPStracks teams
 *
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3
 * @link        http://jtrackgallery.net/
 */


// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');
/**
 * Controller Class Configuration
 *
 * @package     Comjtg
 * @subpackage  Frontend
 * @since       0.8
 */
class JtgControllerInstall extends JtgController
{
	/**
	 * function_description
	 *
	 * @param   unknown_type  $cachable  param_description
	 * @param   unknown_type  $urlparams  param_description
	 *
	 * @return return_description
	 */
	public function display($cachable = false, $urlparams = false)
	{
		parent::display();
	}
}
