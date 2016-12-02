<?php
/**
 * ckdata Model for CK Forms Component
 * 
/**
 * ckforms entry point file for CK Forms Component
 * 
 * @package    CK.Joomla
 * @subpackage Components
 * @link http://www.cookex.eu
 * @license		GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.model' );

/**
 * Ckdata Model
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class CkformsModelCkdata extends JModel
{
	/**
	 * Ckdata data array
	 *
	 * @var array
	 */
	var $_data;
	
	/*
	 * Ckdata fields array
	 *
	 * @var array
	 */
	var $_datafields;
	
	/*
	 * Constructor
	 *
	 */
	function __construct()
	{
		parent::__construct();

		$this->setId((int)JRequest::getVar('fid',  0));		
	}
	
	/**
	 * Method to set the form identifier
	 *
	 * @access	public
	 * @param	int form identifier
	 * @return	void
	 */
	function setId($id)
	{
		// Set id and wipe data
		$this->_id = $id;
	}

	function getId()
	{
		return $this->_id;
	}

	/**
	 * Retrieves the forms data
	 * @return array Array of objects containing the data from the database
	 */
	function getDataForTable($tablename)
	{
	
		$query = ' SELECT * from '.$tablename.' c';						
		$data = $this->_getList( $query );
			
		return $data;
	}

	/**
	 * Retrieves the forms data
	 * @return array Array of objects containing the data from the database
	 */
	function getData()
	{
		// Lets load the data if it doesn't already exist
		if (empty( $this->_data ))
		{
			$tn = "#__ckforms_".$this->_id;
			
			$query = ' SELECT * from '.$tn.' c';						
			$this->_data = $this->_getList( $query );
			
		}

		return $this->_data;
	}

	/**
	 * Retrieves the fields list
	 * @return array Array of objects containing the data from the database
	 */
	function getDatafields()
	{
		// Lets load the data if it doesn't already exist
		if (empty( $this->_datafields ))
		{
			$tn = "#__ckforms_".$this->_id;
						
			$query = ' SELECT * from #__ckfields c where c.fid='.$this->_id.' ';	
								
			$this->_datafields = $this->_getList( $query );
			
		}

		return $this->_datafields;
	}
	
		/**
	 * Method to get a hello
	 * @return object with data
	 */
	function getDetail()
	{
		$array = JRequest::getVar('cid',  0, '', 'array');
		
		$query = ' SELECT * FROM #__ckforms_'.$this->_id.
				'  WHERE id = '.(int)$array[0];
		$this->_db->setQuery( $query );
		$this->_detail = $this->_db->loadObject();
		
		return $this->_detail;
	}

	/**
	 * Method to delete record(s)
	 *
	 * @access	public
	 * @return	boolean	True on success
	 */
	function delete()
	{
		
		$dba =& JFactory::getDBO(); 

		$fid = JRequest::getVar( 'fid', -1);
		$tn = "ckforms_" . $fid;
				
		$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
		foreach($cids as $cid) {
			$query = "delete from #__" . $tn . " where id=" . $cid;
			if (!$dba->Execute($query)) 
			{
				$this->setError( "Problem with (".$query.")" );
				return false;
			}		
		}
		
		return true;
		
	}
		
		
}
