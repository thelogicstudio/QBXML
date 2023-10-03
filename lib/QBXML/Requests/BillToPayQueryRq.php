<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: BillToPayQueryRq
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
	class BillToPayQueryRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'PayeeEntityRef ListID'   => 'IDTYPE',
				'PayeeEntityRef FullName' => 'STRTYPE',
				'APAccountRef ListID'     => 'IDTYPE',
				'APAccountRef FullName'   => 'STRTYPE',
				'DueDate'                 => 'DATETYPE',
				'IncludeRetElement'       => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'PayeeEntityRef ListID'   => 0,
				'PayeeEntityRef FullName' => 209,
				'APAccountRef ListID'     => 0,
				'APAccountRef FullName'   => 209,
				'DueDate'                 => 0,
				'IncludeRetElement'       => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'PayeeEntityRef ListID'   => true,
				'PayeeEntityRef FullName' => true,
				'APAccountRef ListID'     => true,
				'APAccountRef FullName'   => true,
				'DueDate'                 => true,
				'IncludeRetElement'       => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'PayeeEntityRef ListID'   => 999.99,
				'PayeeEntityRef FullName' => 999.99,
				'APAccountRef ListID'     => 999.99,
				'APAccountRef FullName'   => 999.99,
				'DueDate'                 => 999.99,
				'IncludeRetElement'       => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'PayeeEntityRef ListID'   => false,
				'PayeeEntityRef FullName' => false,
				'APAccountRef ListID'     => false,
				'APAccountRef FullName'   => false,
				'DueDate'                 => false,
				'IncludeRetElement'       => true,
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
				0 => 'PayeeEntityRef ListID',
				1 => 'PayeeEntityRef FullName',
				2 => 'APAccountRef ListID',
				3 => 'APAccountRef FullName',
				4 => 'DueDate',
				5 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>