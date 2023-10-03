<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: ItemSalesTaxGroupAddRq
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
	class ItemSalesTaxGroupAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = 'ItemSalesTaxGroup';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'Name'                     => 'STRTYPE',
				'IsActive'                 => 'BOOLTYPE',
				'ItemDesc'                 => 'STRTYPE',
				'ItemSalesTaxRef ListID'   => 'IDTYPE',
				'ItemSalesTaxRef FullName' => 'STRTYPE',
				'IncludeRetElement'        => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'Name'                     => 31,
				'IsActive'                 => 0,
				'ItemDesc'                 => 4095,
				'ItemSalesTaxRef ListID'   => 0,
				'ItemSalesTaxRef FullName' => 31,
				'IncludeRetElement'        => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'Name'                     => false,
				'IsActive'                 => true,
				'ItemDesc'                 => true,
				'ItemSalesTaxRef ListID'   => true,
				'ItemSalesTaxRef FullName' => true,
				'IncludeRetElement'        => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'Name'                     => 999.99,
				'IsActive'                 => 999.99,
				'ItemDesc'                 => 999.99,
				'ItemSalesTaxRef ListID'   => 999.99,
				'ItemSalesTaxRef FullName' => 999.99,
				'IncludeRetElement'        => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'Name'                     => false,
				'IsActive'                 => false,
				'ItemDesc'                 => false,
				'ItemSalesTaxRef ListID'   => false,
				'ItemSalesTaxRef FullName' => false,
				'IncludeRetElement'        => true,
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
				3 => 'ItemSalesTaxRef',
				4 => 'ItemSalesTaxRef ListID',
				5 => 'ItemSalesTaxRef FullName',
				6 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>