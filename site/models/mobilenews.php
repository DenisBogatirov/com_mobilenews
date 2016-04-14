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
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class MobileNewsModelMobileNews extends JModelItem
{
	/**
	 * @var array messages
	 */
	protected $messages;

	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'MobileNews', $prefix = 'MobileNewsTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Get the message
	 *
	 * @param   integer  $id  Greeting Id
	 *
	 * @return  string        Fetched String from Table for relevant Id
	 */
	public function getMsg($offset = 0)
	{

		$jinput = JFactory::getApplication()->input;
		$offset     = $jinput->get('offset', 0, 'INT');

		$this->messages = array();
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('*');
		$query->from('#__mobilenews');
		$query->order('date DESC');


		$db->setQuery($query);

// fetch result as an object list
		$result = $db->loadObjectList();

		// Create the base select statement.


		foreach ($result as $row)
		{
			list($width, $height, $type, $attr) = getimagesize($row->img);
			$news = array(
					"newsID" => $row->id,
					"newsDate" => $row->date,
					"newsTitle" => $row->title,
					"newsLitteImg" => $row->img,
					"newsText" => $row->text,
					"newsImgWidth" => $width,
					"newsImgHeight" => $height
			);
			array_push($this->messages, $news);
		}
			// Assign the message


		return array_slice($this->messages, $offset, 5);
	}
}
