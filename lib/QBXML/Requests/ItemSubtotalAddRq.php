<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: ItemSubtotalAddRq
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
	class ItemSubtotalAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = 'ItemSubtotalAdd';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'Name'              => 'STRTYPE',
				'IsActive'          => 'BOOLTYPE',
				'ItemDesc'          => 'STRTYPE',
				'IncludeRetElement' => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'Name'              => 31,
				'IsActive'          => 0,
				'ItemDesc'          => 4095,
				'IncludeRetElement' => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => true,
				'ItemDesc'          => true,
				'IncludeRetElement' => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'Name'              => 999.99,
				'IsActive'          => 999.99,
				'ItemDesc'          => 999.99,
				'IncludeRetElement' => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => false,
				'ItemDesc'          => false,
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
				0 => 'Name',
				1 => 'IsActive',
				2 => 'ItemDesc',
				3 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>