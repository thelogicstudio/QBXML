<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: CompanyQueryRq
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
	class CompanyQueryRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'IncludeRetElement' => 'STRTYPE',
				'OwnerID'           => 'GUIDTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'IncludeRetElement' => 50,
				'OwnerID'           => 0,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'IncludeRetElement' => true,
				'OwnerID'           => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'IncludeRetElement' => 4,
				'OwnerID'           => 2,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'IncludeRetElement' => true,
				'OwnerID'           => true,
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
				0 => 'IncludeRetElement',
				1 => 'OwnerID',
			];

			return $paths;
		}
	}

	?>