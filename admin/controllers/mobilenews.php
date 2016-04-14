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

   $jinput = JFactory::getApplication()->input;

          $original = $jinput->post->get('jform', array(), 'array');
   $body= json_encode(array(
     "to" =>"/topics/global",
     "data" => array(
       "message" => $original['title']
      )
    )
  );

   $requestHeaders = array(
       'Content-Type: application/json',
       'Authorization: key=AIzaSyD0Ipf42UV_5Q8ar-9N_sBkODKsJorB6Pc',
       sprintf('Content-Length: %d', strlen($body))
   );

   $opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => $requestHeaders,
        'content' => $body,
        'timeout' => 60
      )
    );

  $context  = stream_context_create($opts);
  $url = 'http://gcm-http.googleapis.com/gcm/send';
  $result = file_get_contents($url, false, $context);
   $this->setredirect('index.php?option=com_mobilenews');
  }
  function cancel(){
   parent::cancel();
   $this->setredirect('index.php?option=com_mobilenews');
  }
}
