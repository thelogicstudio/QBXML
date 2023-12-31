<?php

	namespace TheLogicStudio\QBXML\Models\ItemReceipt;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 * QuickBooks ExpenseLine object container
	 *
	 * @todo Documentation
	 *
	 * @author Harley Laue <harley.laue@gmail.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 * Quickbooks ExpenseLine definition
	 */
	class ExpenseLine extends GenericObject {
		/**
		 * Create a new QuickBooks ReceiptItem ExpenseLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function getAccountListID() {
			return $this->get('AccountRef ListID');
		}

		public function setAccountListID($ListID) {
			return $this->set('AccountRef ListID', $ListID);
		}

		public function getAccountName() {
			return $this->get('AccountRef FullName');
		}

		public function setAccountName($name) {
			return $this->set('AccountRef FullName', $name);
		}

		public function getAmount() {
			return $this->get('Amount');
		}

		public function setAmount($amount) {
			return $this->set('Amount', $amount);
		}

		public function getMemo() {
			return $this->get('Memo');
		}

		public function setMemo($memo) {
			return $this->set('Memo', $memo);
		}

		public function getCustomerListID() {
			return $this->get('CustomerRef ListID');
		}

		public function setCustomerListID($ListID) {
			return $this->set('CustomerRef ListID', $ListID);
		}

		public function getCustomerName() {
			return $this->get('CustomerRef FullName');
		}

		public function setCustomerName($name) {
			return $this->set('CustomerRef FullName', $name);
		}

		public function getClassListID() {
			return $this->get('ClassRef ListID');
		}

		public function setClassListID($ListID) {
			return $this->set('ClassRef ListID', $ListID);
		}

		public function getClassName() {
			return $this->get('ClassRef FullName');
		}

		public function setClassName($name) {
			return $this->set('ClassRef FullName', $name);
		}

		public function getBillableStatus() {
			return $this->get('BillableStatus');
		}

		/*
		 * @param billable must be one of: Billable, NotBillable, HasBeenBilled
		 */
		public function setBillableStatus($billable) {
			return $this->set('BillableStatus', $billable);
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
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($parent) {
				case QUICKBOOKS_ADD_ITEMRECEIPT:
					$root = 'ExpenseLineAdd';
					$parent = null;
					break;
				// Currently unimplemented
				/*
							case QUICKBOOKS_QUERY_INVENTORYADJUSTMENT:
								$root = 'ExpenseLineQuery';
								break;
				*/
			}

			return parent::asXML($root, $parent, $object);
		}

		/**
		 * Convert this object to a valid qbXML request
		 *
		 * @param string $request The type of request to convert this to (examples: CustomerAddRq, CustomerModRq, CustomerQueryRq)
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
		 * Tell what type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return "ExpenseLine";
		}
	}

