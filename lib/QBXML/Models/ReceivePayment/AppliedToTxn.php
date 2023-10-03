<?php

	namespace TheLogicStudio\QBXML\Models\ReceivePayment;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 *
	 * @author Keith Palmer <keith@consolibyte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 *
	 */
	class AppliedToTxn extends GenericObject {
		/**
		 * Create a new QuickBooks ReceivePayment AppliedToTxn object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function setTxnID($TxnID) {
			return $this->set('TxnID', $TxnID);
		}

		public function setTransactionID($TxnID) {
			return $this->setTxnID($TxnID);
		}

		public function getTxnID() {
			return $this->get('TxnID');
		}

		public function getTransactionID() {
			return $this->getTxnID();
		}

		public function getPaymentAmount($amount) {
			return $this->getAmountType('PaymentAmount');
		}

		public function setPaymentAmount($amount) {
			return $this->setAmountType('PaymentAmount', $amount);
		}

		public function setDiscountAmount($amount) {
			return $this->setAmountType('DiscountAmount', $amount);
		}

		public function getDiscountAmount() {
			return $this->getDiscountAmount('DiscountAmount');
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
			$this->_cleanup();

			switch($parent) {
				case QUICKBOOKS_ADD_RECEIVEPAYMENT:
					$root = 'AppliedToTxnAdd';
					$parent = null;
					break;
				case QUICKBOOKS_MOD_RECEIVEPAYMENT:
					$root = 'AppliedToTxnMod';
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
			return 'AppliedToTxn';
		}
	}
