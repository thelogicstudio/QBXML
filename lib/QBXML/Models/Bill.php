<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * Bill class for QuickBooks
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
	class Bill extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_JournalEntry object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the customer ListID
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setVendorListID($ListID) {
			return $this->set('VendorRef ListID', $ListID);
		}

		/**
		 * Set the customer name
		 *
		 * @param string $name
		 * @return self
		 */
		public function setVendorFullname($name) {
			return $this->set('VendorRef FullName', $name);
		}

		/**
		 * Get the customer ListID
		 *
		 * @return string
		 */
		public function getVendorListID() {
			return $this->get('VendorRef ListID');
		}

		/**
		 * Set the TxnDate for the JournalEntry
		 *
		 * @param string $date
		 * @return self
		 */
		public function setTxnDate($date) {
			return $this->setDateType('TxnDate', $date);
		}

		/**
		 * Get the TxnDate for the JournalEntry
		 *
		 * @param ? $format = null
		 * @return string
		 */
		public function getTxnDate($format = null) {
			return $this->getDateType('TxnDate', $format);
		}

		/**
		 * @see QuickBooks_Object_JournalEntry::setTxnDate()
		 */
		public function setTransactionDate($date) {
			return $this->setTxnDate($date);
		}

		/**
		 * @see QuickBooks_Object_JournalEntry::getTxnDate()
		 */
		public function getTransactionDate($format = null) {
			$this->getTxnDate($format = null);
		}

		// Path: RefNumber, datatype: STRTYPE

		public function setDueDate($date) {
			return $this->setDateType('DueDate', $date);
		}

		public function getDueDate($format = 'Y-m-d') {
			return $this->getDateType('DueDate', $format);
		}

		/**
		 * Set the RefNumber for the JournalEntry
		 *
		 * @param string $value
		 * @return self
		 */
		public function setRefNumber($value) {
			return $this->set('RefNumber', $value);
		}

		/**
		 * Get the RefNumber for the JournalEntry
		 *
		 * @return string
		 */
		public function getRefNumber() {
			return $this->get('RefNumber');
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

		public function addExpenseLine($obj) {
			return $this->addListItem('ExpenseLine', $obj);
		}

		public function addItemLine($obj) {
			return $this->addListItem('ItemLine', $obj);
		}


		public function asList($request) {
			switch($request) {
				case 'BillAddRq':

					if(isset($this->_object['ItemLine'])) {
						$this->_object['ItemLineAdd'] = $this->_object['ItemLine'];
					}

					if(isset($this->_object['ExpenseLine'])) {
						$this->_object['ExpenseLineAdd'] = $this->_object['ExpenseLine'];
					}

					break;
				case 'BillModRq':


					break;
			}

			return parent::asList($request);
		}

		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($root) {
				case QUICKBOOKS_ADD_BILL:

					if(!empty($object['ItemLineAdd'])) {
						foreach($object['ItemLineAdd'] as $key => $obj) {
							$obj->setOverride('ItemLineAdd');
						}
					}

					if(!empty($object['ExpenseLineAdd'])) {
						foreach($object['ExpenseLineAdd'] as $key => $obj) {
							$obj->setOverride('ExpenseLineAdd');
						}
					}

					break;
				case QUICKBOOKS_MOD_BILL:

					if(!empty($object['ItemLineMod'])) {
						foreach($object['ItemLineMod'] as $key => $obj) {
							$obj->setOverride('ItemLineMod');
						}
					}

					if(!empty($object['ExpenseLineMod'])) {
						foreach($object['ExpenseLineMod'] as $key => $obj) {
							$obj->setOverride('ExpenseLineMod');
						}
					}

					break;
			}

			return parent::asXML($root, $parent, $object);
		}

		/**
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return QUICKBOOKS_OBJECT_BILL;
		}
	}

