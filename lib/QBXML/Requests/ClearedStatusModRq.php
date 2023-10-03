<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: ClearedStatusModRq
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
	class ClearedStatusModRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'ClearedStatusMod TxnID'         => 'IDTYPE',
				'ClearedStatusMod TxnLineID'     => 'IDTYPE',
				'ClearedStatusMod ClearedStatus' => 'ENUMTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'ClearedStatusMod TxnID'         => 0,
				'ClearedStatusMod TxnLineID'     => 0,
				'ClearedStatusMod ClearedStatus' => 0,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'ClearedStatusMod TxnID'         => false,
				'ClearedStatusMod TxnLineID'     => true,
				'ClearedStatusMod ClearedStatus' => false,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'ClearedStatusMod TxnID'         => 0,
				'ClearedStatusMod TxnLineID'     => 0,
				'ClearedStatusMod ClearedStatus' => 999.99,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'ClearedStatusMod TxnID'         => false,
				'ClearedStatusMod TxnLineID'     => false,
				'ClearedStatusMod ClearedStatus' => false,
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
				0 => 'ClearedStatusMod TxnID',
				1 => 'ClearedStatusMod TxnLineID',
				2 => 'ClearedStatusMod ClearedStatus',
			];

			return $paths;
		}
	}

	?>