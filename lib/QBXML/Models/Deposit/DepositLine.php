<?php

	namespace TheLogicStudio\QBXML\Models\Deposit;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 * Check class for QuickBooks
	 *
	 * @author Keith Palmer Jr. <keith@ConsoliBYTE.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 */
	class DepositLine extends GenericObject {
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function setPaymentTxnID($TxnID) {
			return $this->set('PaymentTxnID', $TxnID);
		}

		public function getPaymentTxnID() {
			return $this->get('PaymentTxnID');
		}

		public function setPaymentTxnLineID($TxnLineID) {
			return $this->set('PaymentTxnLineID', $TxnLineID);
		}

		public function getPaymentTxnLineID() {
			return $this->get('PaymentTxnLineID');
		}

		public function setOverrideMemo($value) {
			return $this->set('OverrideMemo', $value);
		}

		/**
		 * Get the Memo for the Check
		 *
		 * @return string
		 */
		public function getOverrideMemo() {
			return $this->get('OverrideMemo');
		}

		public function setOverrideCheckNumber($value) {
			return $this->set('OverrideCheckNumber', $value);
		}

		/**
		 * Get the Memo for the Check
		 *
		 * @return string
		 */
		public function getOverrideCheckNumber() {
			return $this->get('OverrideCheckNumber');
		}


		/**
		 * Set the Amount for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setAmount($value) {
			return $this->set('Amount', $value);
		}

		/**
		 * Get the Amount for the Check
		 *
		 * @return string
		 */
		public function getAmount() {
			return $this->get('Amount');
		}

		public function setMemo($value) {
			return $this->set('Memo', $value);
		}

		/**
		 * Get the Memo for the Check
		 *
		 * @return string
		 */
		public function getMemo() {
			return $this->get('Memo');
		}


		// Path: ClassRef ListID, datatype:

		/**
		 * Set the ClassRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setClassListID($ListID) {
			return $this->set('ClassRef ListID', $ListID);
		}

		/**
		 * Get the ClassRef ListID for the Check
		 *
		 * @return string
		 */
		public function getClassListID() {
			return $this->get('ClassRef ListID');
		}

		// Path: ClassRef FullName, datatype:

		/**
		 * Set the ClassRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setClassFullName($FullName) {
			return $this->set('ClassRef FullName', $FullName);
		}

		/**
		 * Get the ClassRef FullName for the Check
		 *
		 * @return string
		 */
		public function getClassFullName() {
			return $this->get('ClassRef FullName');
		}

		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($parent) {
				case QUICKBOOKS_ADD_DEPOSIT:
					$root = 'DepositLineAdd';
					$parent = null;
					break;
				case QUICKBOOKS_MOD_DEPOSIT:
					$root = 'DepositLineMod';
					$parent = null;
					break;
			}

			return parent::asXML($root, $parent, $object);
		}

		/**
		 *
		 *
		 * @return boolean
		 */
		protected function _cleanup() {
			return true;
		}

		/**
		 *
		 */
		public function asArray($request, $nest = true) {
			$this->_cleanup();

			return parent::asArray($request, $nest);
		}

		/**
		 *
		 *
		 * @param int $version
		 * @param string $locale
		 * @param string $root
		 * @return string
		 */
		public function asQBXML($request, $version = null, $locale = null, $root = null) {
			$this->_cleanup();
			return parent::asQBXML($request, $version, $locale, $root);
		}

		public function object() {
			return 'DepositLine';
		}
	}

