<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

  <?php
    echo json_encode($this->msg);
    jexit();
  ?>

<?php

// $obj = array(
//   (object) array(
//
//     "userId" => 1,
//     "id" => 1,
//     "title" => "delectus aut autem",
//     "completed" => false
//
//   )
// );
//
//
// echo json_encode($obj, JSON_PRETTY_PRINT, JSON_NUMERIC_CHECK);
// jexit();
?>
