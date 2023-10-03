<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: DataExtDefModRq
	 *
	 * @author "Keith Palmer Jr." <Keith@ConsoliByte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage QBXML
	 */


	/**
	 *
	 */
	class DataExtDefModRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'DataExtDefMod OwnerID'          => 'GUIDTYPE',
				'DataExtDefMod DataExtName'      => 'STRTYPE',
				'DataExtDefMod DataExtNewName'   => 'STRTYPE',
				'DataExtDefMod AssignToObject'   => 'ENUMTYPE',
				'DataExtDefMod RemoveFromObject' => 'ENUMTYPE',
				'IncludeRetElement'              => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'DataExtDefMod OwnerID'          => 0,
				'DataExtDefMod DataExtName'      => 31,
				'DataExtDefMod DataExtNewName'   => 31,
				'DataExtDefMod AssignToObject'   => 0,
				'DataExtDefMod RemoveFromObject' => 0,
				'IncludeRetElement'              => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'DataExtDefMod OwnerID'          => false,
				'DataExtDefMod DataExtName'      => false,
				'DataExtDefMod DataExtNewName'   => true,
				'DataExtDefMod AssignToObject'   => true,
				'DataExtDefMod RemoveFromObject' => true,
				'IncludeRetElement'              => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'DataExtDefMod OwnerID'          => 999.99,
				'DataExtDefMod DataExtName'      => 999.99,
				'DataExtDefMod DataExtNewName'   => 999.99,
				'DataExtDefMod AssignToObject'   => 999.99,
				'DataExtDefMod RemoveFromObject' => 999.99,
				'IncludeRetElement'              => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'DataExtDefMod OwnerID'          => false,
				'DataExtDefMod DataExtName'      => false,
				'DataExtDefMod DataExtNewName'   => false,
				'DataExtDefMod AssignToObject'   => true,
				'DataExtDefMod RemoveFromObject' => true,
				'IncludeRetElement'              => true,
			];

			return $paths;
		}

		/*
		abstract protected function &_inLocalePaths()
		{
			static $paths = array(
				'FirstName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ),
				'LastName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ),
				);

			return $paths;
		}
		*/

		protected function &_reorderPathsPaths() {
			static $paths = [
				0 => 'DataExtDefMod OwnerID',
				1 => 'DataExtDefMod DataExtName',
				2 => 'DataExtDefMod DataExtNewName',
				3 => 'DataExtDefMod AssignToObject',
				4 => 'DataExtDefMod RemoveFromObject',
				5 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>