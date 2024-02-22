<?php

	namespace TheLogicStudio\QBXML\Models\Invoice;

	use TheLogicStudio\QBXML\Models\GenericObject;

	class LinkedTxn extends GenericObject {
		/**
		 * Create a new QuickBooks SalesReceipt SalesReceiptLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function setAmount($amount) {
			$amount = (float)$amount;

			// Discount amounts are always negative in QuickBooks
			if($amount > 0) {
				$amount = $amount * -1.0;
			}

			return $this->setAmountType('Amount', $amount);
		}

		public function setAccountListID($ListID) {
			return $this->set('AccountRef ListID', $ListID);
		}

		public function setAccountName($name) {
			return $this->set('AccountRef FullName', $name);
		}

		public function setTxnID($TxnID) {
			return $this->set('TxnID', $TxnID);
		}

		public function getTxnID() {
			return $this->get('TxnID');
		}

		public function setTxnType($TxnType) {
			return $this->set('TxnType', $TxnType);
		}

		public function getTxnType() {
			return $this->get('TxnType');
		}

		public function setTxnDate($TxnDate) {
			return $this->set('TxnDate', $TxnDate);
		}

		public function getTxnDate() {
			return $this->get('TxnDate');
		}

		public function setRefNumber($RefNumber) {
			return $this->set('RefNumber', $RefNumber);
		}

		public function getRefNumber() {
			return $this->get('RefNumber');
		}

		public function setLinkType($LinkType) {
			return $this->set('LinkType', $LinkType);
		}

		public function getLinkType() {
			return $this->get('LinkType');
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

		public function asXML($root = null, $parent = null, $object = null) {
			switch($parent) {
				case QUICKBOOKS_ADD_INVOICE:
					$root = 'DiscountLineAdd';
					$parent = null;
					break;
				case QUICKBOOKS_MOD_INVOICE:
					$root = 'DiscountLineMod';
					$parent = null;
					break;
			}

			return parent::asXML($root, $parent, $object);
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

		/**
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return 'LinkedTxn';
		}
	}
