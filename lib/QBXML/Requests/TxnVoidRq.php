<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: TxnVoidRq
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
	class TxnVoidRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'TxnVoidType' => 'ENUMTYPE',
				'TxnID'       => 'IDTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'TxnVoidType' => 0,
				'TxnID'       => 0,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'TxnVoidType' => false,
				'TxnID'       => false,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'TxnVoidType' => 999.99,
				'TxnID'       => 999.99,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'TxnVoidType' => false,
				'TxnID'       => false,
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
				0 => 'TxnVoidType',
				1 => 'TxnID',
			];

			return $paths;
		}
	}

	?>