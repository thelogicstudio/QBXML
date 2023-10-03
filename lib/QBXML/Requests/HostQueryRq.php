<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: HostQueryRq
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
	//require_once 'QuickBooks.php';

	/**
	 *
	 */
	//require_once 'QuickBooks/QBXML/Schema/Object.php';

	/**
	 *
	 */
	class HostQueryRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'IncludeListMetaData IncludeMaxCapacity' => 'BOOLTYPE',
				'IncludeRetElement'                      => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'IncludeListMetaData IncludeMaxCapacity' => 0,
				'IncludeRetElement'                      => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'IncludeListMetaData IncludeMaxCapacity' => false,
				'IncludeRetElement'                      => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'IncludeListMetaData IncludeMaxCapacity' => 999.99,
				'IncludeRetElement'                      => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'IncludeListMetaData IncludeMaxCapacity' => false,
				'IncludeRetElement'                      => true,
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
				0 => 'IncludeListMetaData IncludeMaxCapacity',
				1 => 'IncludeRetElement',
			];

			return $paths;
		}
	}
