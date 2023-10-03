<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: JobTypeAddRq
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
	class JobTypeAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'JobTypeAdd Name'               => 'STRTYPE',
				'JobTypeAdd IsActive'           => 'BOOLTYPE',
				'JobTypeAdd ParentRef ListID'   => 'IDTYPE',
				'JobTypeAdd ParentRef FullName' => 'STRTYPE',
				'IncludeRetElement'             => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'JobTypeAdd Name'               => 31,
				'JobTypeAdd IsActive'           => 0,
				'JobTypeAdd ParentRef ListID'   => 0,
				'JobTypeAdd ParentRef FullName' => 0,
				'IncludeRetElement'             => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'JobTypeAdd Name'               => false,
				'JobTypeAdd IsActive'           => true,
				'JobTypeAdd ParentRef ListID'   => true,
				'JobTypeAdd ParentRef FullName' => true,
				'IncludeRetElement'             => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'JobTypeAdd Name'               => 999.99,
				'JobTypeAdd IsActive'           => 999.99,
				'JobTypeAdd ParentRef ListID'   => 999.99,
				'JobTypeAdd ParentRef FullName' => 999.99,
				'IncludeRetElement'             => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'JobTypeAdd Name'               => false,
				'JobTypeAdd IsActive'           => false,
				'JobTypeAdd ParentRef ListID'   => false,
				'JobTypeAdd ParentRef FullName' => false,
				'IncludeRetElement'             => true,
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
				0 => 'JobTypeAdd Name',
				1 => 'JobTypeAdd IsActive',
				2 => 'JobTypeAdd ParentRef ListID',
				3 => 'JobTypeAdd ParentRef FullName',
				4 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>