<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: ClassAddRq
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
	class ClassAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = 'ClassAdd';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'Name'               => 'STRTYPE',
				'IsActive'           => 'BOOLTYPE',
				'ParentRef ListID'   => 'IDTYPE',
				'ParentRef FullName' => 'STRTYPE',
				'IncludeRetElement'  => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'Name'               => 31,
				'IsActive'           => 0,
				'ParentRef ListID'   => 0,
				'ParentRef FullName' => 0,
				'IncludeRetElement'  => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'Name'               => false,
				'IsActive'           => true,
				'ParentRef ListID'   => true,
				'ParentRef FullName' => true,
				'IncludeRetElement'  => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'Name'               => 999.99,
				'IsActive'           => 999.99,
				'ParentRef ListID'   => 999.99,
				'ParentRef FullName' => 999.99,
				'IncludeRetElement'  => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'Name'               => false,
				'IsActive'           => false,
				'ParentRef ListID'   => false,
				'ParentRef FullName' => false,
				'IncludeRetElement'  => true,
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
				0 => 'Name',
				1 => 'IsActive',
				2 => 'ParentRef ListID',
				3 => 'ParentRef FullName',
				4 => 'IncludeRetElement',
			];

			return $paths;
		}
	}
