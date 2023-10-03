<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: DataExtDefQueryRq
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
	class DataExtDefQueryRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'OwnerID'           => 'GUIDTYPE',
				'AssignToObject'    => 'ENUMTYPE',
				'IncludeRetElement' => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'OwnerID'           => 0,
				'AssignToObject'    => 0,
				'IncludeRetElement' => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'OwnerID'           => true,
				'AssignToObject'    => true,
				'IncludeRetElement' => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'OwnerID'           => 999.99,
				'AssignToObject'    => 999.99,
				'IncludeRetElement' => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'OwnerID'           => true,
				'AssignToObject'    => true,
				'IncludeRetElement' => true,
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
				0 => 'OwnerID',
				1 => 'AssignToObject',
				2 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>