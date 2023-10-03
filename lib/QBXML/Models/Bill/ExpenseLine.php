<?php

	namespace TheLogicStudio\QBXML\Models\Bill;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 * Check ExpenseLine class for QuickBooks
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
	class ExpenseLine extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Check_ExpenseLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		// Path: AccountRef ListID, datatype:

		/**
		 * Set the AccountRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setAccountListID($ListID) {
			return $this->set('AccountRef ListID', $ListID);
		}

		/**
		 * Get the AccountRef ListID for the Check
		 *
		 * @return string
		 */
		public function getAccountListID() {
			return $this->get('AccountRef ListID');
		}

		// Path: AccountRef FullName, datatype:

		/**
		 * Set the AccountRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setAccountFullName($FullName) {
			return $this->set('AccountRef FullName', $FullName);
		}

		/**
		 * Get the AccountRef FullName for the Check
		 *
		 * @return string
		 */
		public function getAccountFullName() {
			return $this->get('AccountRef FullName');
		}

		// Path: Amount, datatype:

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

		// Path: Memo, datatype: STRTYPE

		/**
		 * Set the Memo for the Check
		 *
		 * @param string $value
		 * @return self
		 */
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

		// Path: CustomerRef ListID, datatype:

		/**
		 * Set the CustomerRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setCustomerListID($ListID) {
			return $this->set('CustomerRef ListID', $ListID);
		}

		/**
		 * Get the CustomerRef ListID for the Check
		 *
		 * @return string
		 */
		public function getCustomerListID() {
			return $this->get('CustomerRef ListID');
		}

		// Path: CustomerRef FullName, datatype:

		/**
		 * Set the CustomerRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setCustomerFullName($FullName) {
			return $this->set('CustomerRef FullName', $FullName);
		}

		/**
		 * Get the CustomerRef FullName for the Check
		 *
		 * @return string
		 */
		public function getCustomerFullName() {
			return $this->get('CustomerRef FullName');
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
		public function setClassName($FullName) {
			return $this->set('ClassRef FullName', $FullName);
		}

		/**
		 * Get the ClassRef FullName for the Check
		 *
		 * @return string
		 */
		public function getClassName() {
			return $this->get('ClassRef FullName');
		}

		// Path: BillableStatus, datatype:

		/**
		 * Set the BillableStatus for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setBillableStatus($value) {
			return $this->set('BillableStatus', $value);
		}

		/**
		 * Get the BillableStatus for the Check
		 *
		 * @return string
		 */
		public function getBillableStatus() {
			return $this->get('BillableStatus');
		}

		public function object() {
			return 'ExpenseLine';
		}
	}

