<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: SpecialItemAddRq
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
	class SpecialItemAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = 'SpecialItemAdd';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'SpecialItemType'   => 'ENUMTYPE',
				'IncludeRetElement' => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'SpecialItemType'   => 0,
				'IncludeRetElement' => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'SpecialItemType'   => false,
				'IncludeRetElement' => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'SpecialItemType'   => 999.99,
				'IncludeRetElement' => 999.99,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'SpecialItemType'   => false,
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
				0 => 'SpecialItemType',
				1 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>