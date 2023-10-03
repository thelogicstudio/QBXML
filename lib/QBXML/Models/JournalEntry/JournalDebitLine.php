<?php

	namespace TheLogicStudio\QBXML\Models\JournalEntry;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 * JournalEntry class for QuickBooks
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
	class JournalDebitLine extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_JournalEntry_JournalDebitLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		// Path: TxnLineID, datatype:

		/**
		 * Set the TxnLineID for the JournalEntry
		 *
		 * @param string $value
		 * @return self
		 */
		public function setTxnLineID($value) {
			return $this->set('TxnLineID', $value);
		}

		/**
		 * Get the TxnLineID for the JournalEntry
		 *
		 * @return string
		 */
		public function getTxnLineID() {
			return $this->get('TxnLineID');
		}

		// Path: AccountRef ListID, datatype:

		/**
		 * Set the AccountRef ListID for the JournalEntry
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setAccountListID($ListID) {
			return $this->set('AccountRef ListID', $ListID);
		}

		/**
		 * Get the AccountRef ListID for the JournalEntry
		 *
		 * @return string
		 */
		public function getAccountListID() {
			return $this->get('AccountRef ListID');
		}

		// Path: AccountRef FullName, datatype:

		/**
		 * Set the AccountRef FullName for the JournalEntry
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setAccountName($FullName) {
			return $this->set('AccountRef FullName', $FullName);
		}

		/**
		 * Get the AccountRef FullName for the JournalEntry
		 *
		 * @return string
		 */
		public function getAccountName() {
			return $this->get('AccountRef FullName');
		}

		// Path: Amount, datatype:

		/**
		 * Set the Amount for the JournalEntry
		 *
		 * @param float $value
		 * @return self
		 */
		public function setAmount($value) {
			return $this->setAmountType('Amount', $value);
		}

		/**
		 * Get the Amount for the JournalEntry
		 *
		 * @return float
		 */
		public function getAmount() {
			return $this->getAmountType('Amount');
		}

		// Path: Memo, datatype: STRTYPE

		/**
		 * Set the Memo for the JournalEntry
		 *
		 * @param string $value
		 * @return self
		 */
		public function setMemo($value) {
			return $this->set('Memo', $value);
		}

		/**
		 * Get the Memo for the JournalEntry
		 *
		 * @return string
		 */
		public function getMemo() {
			return $this->get('Memo');
		}

		// Path: EntityRef ListID, datatype: STRTYPE

		/**
		 * Set the EntityRef ListID for the JournalEntry
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setEntityListID($ListID) {
			return $this->set('EntityRef ListID', $ListID);
		}

		/**
		 * Get the EntityRef ListID for the JournalEntry
		 *
		 * @return string
		 */
		public function getEntityListID() {
			return $this->get('EntityRef ListID');
		}

		// Path: EntityRef FullName, datatype: STRTYPE

		/**
		 * Set the EntityRef FullName for the JournalEntry
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setEntityName($FullName) {
			return $this->set('EntityRef FullName', $FullName);
		}

		/**
		 * Get the EntityRef FullName for the JournalEntry
		 *
		 * @return string
		 */
		public function getEntityName() {
			return $this->get('EntityRef FullName');
		}

		// Path: ClassRef ListID, datatype: STRTYPE

		/**
		 * Set the ClassRef ListID for the JournalEntry
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setClassListID($ListID) {
			return $this->set('ClassRef ListID', $ListID);
		}

		/**
		 * Get the ClassRef ListID for the JournalEntry
		 *
		 * @return string
		 */
		public function getClassListID() {
			return $this->get('ClassRef ListID');
		}

		// Path: ClassRef FullName, datatype: STRTYPE

		/**
		 * Set the ClassRef FullName for the JournalEntry
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setClassName($FullName) {
			return $this->set('ClassRef FullName', $FullName);
		}

		/**
		 * Get the ClassRef FullName for the JournalEntry
		 *
		 * @return string
		 */
		public function getClassName() {
			return $this->get('ClassRef FullName');
		}

		// Path: ItemSalesTaxRef ListID, datatype: STRTYPE

		/**
		 * Set the ItemSalesTaxRef ListID for the JournalEntry
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setItemSalesTaxListID($ListID) {
			return $this->set('ItemSalesTaxRef ListID', $ListID);
		}

		/**
		 * Get the ItemSalesTaxRef ListID for the JournalEntry
		 *
		 * @return string
		 */
		public function getItemSalesTaxListID() {
			return $this->get('ItemSalesTaxRef ListID');
		}

		// Path: ItemSalesTaxRef FullName, datatype: STRTYPE

		/**
		 * Set the ItemSalesTaxRef FullName for the JournalEntry
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setItemSalesTaxName($FullName) {
			return $this->set('ItemSalesTaxRef FullName', $FullName);
		}

		/**
		 * Get the ItemSalesTaxRef FullName for the JournalEntry
		 *
		 * @return string
		 */
		public function getItemSalesTaxName() {
			return $this->get('ItemSalesTaxRef FullName');
		}

		// Path: BillableStatus, datatype:

		/**
		 * Set the BillableStatus for the JournalEntry
		 *
		 * @param string $value
		 * @return self
		 */
		public function setBillableStatus($value) {
			return $this->set('BillableStatus', $value);
		}

		/**
		 * Get the BillableStatus for the JournalEntry
		 *
		 * @return string
		 */
		public function getBillableStatus() {
			return $this->get('BillableStatus');
		}

		/**
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return 'JournalDebitLine';
		}

	}

