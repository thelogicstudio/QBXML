<?php

	namespace TheLogicStudio\QBXML\Models\Invoice;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 *
	 *
	 * @license LICENSE.txt
	 * @author Keith Palmer <keith@ConsoliBYTE.com>
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 *
	 */
	class DiscountLine extends GenericObject {
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
			return 'DiscountLine';
		}
	}
