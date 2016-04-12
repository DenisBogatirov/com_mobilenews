<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorld Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.9
 */
class MobileNewsControllerMobileNews extends JControllerForm
{
  function save(){
   parent::save();
   $this->setredirect('index.php?option=com_mobilenews');
  }
  function cancel(){
   parent::cancel();
   $this->setredirect('index.php?option=com_mobilenews');
  }
}
