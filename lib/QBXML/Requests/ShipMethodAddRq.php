<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: ShipMethodAddRq
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
	class ShipMethodAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = 'ShipMethodAdd';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'Name'              => 'STRTYPE',
				'IsActive'          => 'BOOLTYPE',
				'IncludeRetElement' => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'Name'              => 15,
				'IsActive'          => 0,
				'IncludeRetElement' => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => true,
				'IncludeRetElement' => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'Name'              => 999.99,
				'IsActive'          => 999.99,
				'IncludeRetElement' => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => false,
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
				2 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>