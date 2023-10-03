<?php

	namespace TheLogicStudio\QBXML\Models;

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
	class Check extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Check object
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

		public function getAccountApplicationID() {
			return $this->get('AccountRef ');
		}

		// Path: AccountRef FullName, datatype:

		/**
		 * Set the AccountRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setAccountName($FullName) {
			return $this->set('AccountRef FullName', $FullName);
		}

		/**
		 * Get the AccountRef FullName for the Check
		 *
		 * @return string
		 */
		public function getAccountName() {
			return $this->get('AccountRef FullName');
		}

		// Path: PayeeEntityRef ListID, datatype:

		/**
		 * Set the PayeeEntityRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setPayeeEntityListID($ListID) {
			return $this->set('PayeeEntityRef ListID', $ListID);
		}

		/**
		 * Get the PayeeEntityRef ListID for the Check
		 *
		 * @return string
		 */
		public function getPayeeEntityListID() {
			return $this->get('PayeeEntityRef ListID');
		}

		public function getPayeeEntityApplicationID() {
			return $this->get('PayeeEntityRef ');
		}

		// Path: PayeeEntityRef FullName, datatype:

		/**
		 * Set the PayeeEntityRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setPayeeEntityFullName($FullName) {
			return $this->set('PayeeEntityRef FullName', $FullName);
		}

		/**
		 * Get the PayeeEntityRef FullName for the Check
		 *
		 * @return string
		 */
		public function getPayeeEntityFullName() {
			return $this->get('PayeeEntityRef FullName');
		}

		// Path: RefNumber, datatype: STRTYPE

		/**
		 * Set the RefNumber for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setRefNumber($value) {
			return $this->set('RefNumber', $value);
		}

		/**
		 * Get the RefNumber for the Check
		 *
		 * @return string
		 */
		public function getRefNumber() {
			return $this->get('RefNumber');
		}

		// Path: TxnDate, datatype: DATETYPE

		/**
		 * Set the TxnDate for the Check
		 *
		 * @param string $date
		 * @return self
		 */
		public function setTxnDate($date) {
			return $this->setDateType('TxnDate', $date);
		}

		/**
		 * Get the TxnDate for the Check
		 *
		 * @param ? $format = null
		 * @return string
		 */
		public function getTxnDate($format = null) {
			return $this->getDateType('TxnDate', $format);
		}

		/**
		 * @see QuickBooks_Object_Check::setTxnDate()
		 */
		public function setTransactionDate($date) {
			return $this->setTxnDate($date);
		}

		/**
		 * @see QuickBooks_Object_Check::getTxnDate()
		 */
		public function getTransactionDate($format = null) {
			return $this->getTxnDate($format = null);
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

		// Path: IsToBePrinted, datatype: BOOLTYPE

		/**
		 * Set the IsToBePrinted for the Check
		 *
		 * @param boolean $bool
		 * @return self
		 */
		public function setIsToBePrinted($bool) {
			return $this->setBooleanType('IsToBePrinted', $bool);
		}

		/**
		 * Get the IsToBePrinted for the Check
		 *
		 * @return boolean
		 */
		public function getIsToBePrinted() {
			return $this->getBooleanType('IsToBePrinted');
		}

		// Path: IsTaxIncluded, datatype: BOOLTYPE

		/**
		 * Set the IsTaxIncluded for the Check
		 *
		 * @param boolean $bool
		 * @return self
		 */
		public function setIsTaxIncluded($bool) {
			return $this->setBooleanType('IsTaxIncluded', $bool);
		}

		/**
		 * Get the IsTaxIncluded for the Check
		 *
		 * @return boolean
		 */
		public function getIsTaxIncluded() {
			return $this->getBooleanType('IsTaxIncluded');
		}

		// Path: SalesTaxCodeRef ListID, datatype:

		/**
		 * Set the SalesTaxCodeRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setSalesTaxCodeListID($ListID) {
			return $this->set('SalesTaxCodeRef ListID', $ListID);
		}

		/**
		 * Get the SalesTaxCodeRef ListID for the Check
		 *
		 * @return string
		 */
		public function getSalesTaxCodeListID() {
			return $this->get('SalesTaxCodeRef ListID');
		}

		public function getSalesTaxCodeApplicationID() {
			return $this->get('SalesTaxCodeRef ');
		}

		// Path: SalesTaxCodeRef FullName, datatype:

		/**
		 * Set the SalesTaxCodeRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setSalesTaxCodeName($FullName) {
			return $this->set('SalesTaxCodeRef FullName', $FullName);
		}

		/**
		 * Get the SalesTaxCodeRef FullName for the Check
		 *
		 * @return string
		 */
		public function getSalesTaxCodeName() {
			return $this->get('SalesTaxCodeRef FullName');
		}

		public function addItemLine($obj) {
			return $this->addListItem('ItemLine', $obj);
		}

		public function addItemGroupLine($obj) {
			return $this->addListItem('ItemGroupLine', $obj);
		}

		public function addExpenseLine($obj) {
			return $this->addListItem('ExpenseLine', $obj);
		}

		public function addAddCheckToTxn($obj) {
			return $this->addListItem('AddCheckToTxn', $obj);
		}

		public function setAddress($addr1, $addr2 = '', $addr3 = '', $addr4 = '', $addr5 = '', $city = '', $state = '', $postalcode = '', $country = '', $note = '') {
			return $this->_setAddress('', $addr1, $addr2, $addr3, $addr4, $addr5, $city, $state, $postalcode, $country, $note);
		}

		protected function _setAddress($post, $addr1, $addr2, $addr3, $addr4, $addr5, $city, $state, $postalcode, $country, $note) {
			for($i = 1; $i <= 5; $i++) {
				$this->set('Address' . $post . ' Addr' . $i, ${'addr' . $i});
			}

			$this->set('Address' . $post . ' City', $city);
			$this->set('Address' . $post . ' State', $state);
			$this->set('Address' . $post . ' PostalCode', $postalcode);
			$this->set('Address' . $post . ' Country', $country);
			$this->set('Address' . $post . ' Note', $note);
		}

		public function asList($request) {
			switch($request) {
				case 'CheckAddRq':

					if(isset($this->_object['ItemLine'])) {
						$this->_object['ItemLineAdd'] = $this->_object['ItemLine'];
					}

					if(isset($this->_object['ItemGroupLine'])) {
						$this->_object['ItemGroupLineAdd'] = $this->_object['ItemGroupLine'];
					}

					if(isset($this->_object['ExpenseLine'])) {
						$this->_object['ExpenseLineAdd'] = $this->_object['ExpenseLine'];
					}

					if(isset($this->_object['AddCheckToTxn'])) {
						$this->_object['AddCheckToTxnAdd'] = $this->_object['AddCheckToTxn'];
					}

					break;
				case 'CheckModRq':


					break;
			}

			return parent::asList($request);
		}

		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($root) {
				case QUICKBOOKS_ADD_CHECK:

					if(!empty($object['ItemLineAdd'])) {
						foreach($object['ItemLineAdd'] as $key => $obj) {
							$obj->setOverride('ItemLineAdd');
						}
					}

					if(!empty($object['ItemGroupLineAdd'])) {
						foreach($object['ItemGroupLineAdd'] as $key => $obj) {
							$obj->setOverride('ItemGroupLineAdd');
						}
					}

					if(!empty($object['ExpenseLineAdd'])) {
						foreach($object['ExpenseLineAdd'] as $key => $obj) {
							$obj->setOverride('ExpenseLineAdd');
						}
					}

					if(!empty($object['ApplyCheckToTxnAdd'])) {
						foreach($object['ApplyCheckToTxnAdd'] as $key => $obj) {
							$obj->setOverride('ApplyCheckToTxnAdd');
						}
					}

					break;
				case QUICKBOOKS_MOD_CHECK:
					if(isset($object['ItemLine'])) {
						$object['ItemLineMod'] = $object['ItemLine'];
					}
					break;
			}

			return parent::asXML($root, $parent, $object);
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

		/**
		 *
		 */
		protected function _cleanup() {

		}

		/**
		 * Tell what type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return QUICKBOOKS_OBJECT_CHECK;
		}
	}

