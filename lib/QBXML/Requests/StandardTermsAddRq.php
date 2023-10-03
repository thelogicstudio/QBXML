<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: StandardTermsAddRq
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
	class StandardTermsAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = 'StandardTermsAdd';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'Name'              => 'STRTYPE',
				'IsActive'          => 'BOOLTYPE',
				'StdDueDays'        => 'INTTYPE',
				'StdDiscountDays'   => 'INTTYPE',
				'DiscountPct'       => 'PERCENTTYPE',
				'IncludeRetElement' => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'Name'              => 31,
				'IsActive'          => 0,
				'StdDueDays'        => 0,
				'StdDiscountDays'   => 0,
				'DiscountPct'       => 0,
				'IncludeRetElement' => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => true,
				'StdDueDays'        => true,
				'StdDiscountDays'   => true,
				'DiscountPct'       => true,
				'IncludeRetElement' => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'Name'              => 999.99,
				'IsActive'          => 999.99,
				'StdDueDays'        => 999.99,
				'StdDiscountDays'   => 999.99,
				'DiscountPct'       => 999.99,
				'IncludeRetElement' => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => false,
				'StdDueDays'        => false,
				'StdDiscountDays'   => false,
				'DiscountPct'       => false,
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
				2 => 'StdDueDays',
				3 => 'StdDiscountDays',
				4 => 'DiscountPct',
				5 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>