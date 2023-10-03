<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks Account object container
	 *
	 * @author Keith Palmer <keith@consolibyte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 */
	class Account extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Account object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the ListID of the Class
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setListID($ListID) {
			return $this->set('ListID', $ListID);
		}

		/**
		 * Get the ListID of the Class
		 *
		 * @return string
		 */
		public function getListID() {
			return $this->get('ListID');
		}

		/**
		 *
		 */
		public function setParentListID($ListID) {
			return $this->set('ParentRef ListID', $ListID);
		}

		public function getParentListID() {
			return $this->get('ParentRef ListID');
		}

		public function setParentName($name) {
			return $this->set('ParentRef FullName', $name);
		}

		public function getParentName() {
			return $this->get('ParentRef FullName');
		}

		public function getParentFullName() {
			return $this->get('ParentRef FullName');
		}

		public function getParentApplicationID() {
			return $this->get('ParentRef ');
		}

		/**
		 * Set the name of the class
		 *
		 * @param string $name
		 * @return self
		 */
		public function setName($name) {
			return $this->set('Name', $name);
		}

		/**
		 * Get the name of the class
		 *
		 * @return string
		 */
		public function getName() {
			return $this->get('Name');
		}

		/**
		 *
		 */
		public function getFullName() {
			return $this->get('FullName');
		}

		public function setFullName($name) {
			return $this->set('FullName', $name);
		}

		/**
		 * Set this Class active or not
		 *
		 * @param boolean $value
		 * @return self
		 */
		public function setIsActive($value) {
			return $this->set('IsActive', (boolean)$value);
		}

		/**
		 * Tell whether or not this class object is active
		 *
		 * @return boolean
		 */
		public function getIsActive() {
			return $this->getBooleanType('IsActive');
		}

		public function setAccountType($type) {
			return $this->setBooleanType('AccountType', $type);
		}

		public function getAccountType() {
			return $this->get('AccountType');
		}

		public function setAccountNumber($number) {
			return $this->set('AccountNumber', $number);
		}

		public function getAccountNumber() {
			return $this->get('AccountNumber');
		}

		public function setBankNumber($number) {
			return $this->set('BankNumber', $number);
		}

		public function getBankNumber() {
			return $this->get('BankNumber');
		}

		public function setDescription($descrip) {
			return $this->set('Desc', $descrip);
		}

		public function getDescription() {
			return $this->get('Desc');
		}

		public function setOpenBalance($balance) {
			return $this->set('OpenBalance', (float)$balance);
		}

		public function getOpenBalance() {
			return $this->get('OpenBalance');
		}

		public function setOpenBalanceDate($date) {
			return $this->setDateType('OpenBalanceDate', $date);
		}

		public function getOpenBalanceDate() {
			return $this->getDateType('OpenBalanceDate');
		}

		public function setTaxLineID($value) {
			return $this->set('TxLineID', $value);
		}

		public function getTaxLineID() {
			return $this->get('TxLineID');
		}

		public function getBalance() {
			return $this->get('Balance');
		}

		public function setBalance($value) {
			return $this->set('Balance', $value);
		}

		public function getTotalBalance() {
			return $this->get('TotalBalance');
		}

		public function setTotalBalance($value) {
			return $this->set('TotalBalance', $value);
		}

		public function getSpecialAccountType() {
			return $this->get('SpecialAccountType');
		}

		public function setSpecialAccountType($type) {
			return $this->set('SpecialAccountType', $type);
		}

		public function getCashFlowClassification() {
			return $this->get('CashFlowClassification');
		}

		public function setCashFlowClassification($type) {
			return $this->set('CashFlowClassification', $type);
		}


		/**
		 * Perform any needed clean-up of the object data members
		 *
		 * @return boolean
		 */
		protected function _cleanup() {
			return true;
		}

		/**
		 * Get an array representation of this Class object
		 *
		 * @param string $request
		 * @param boolean $nest
		 * @return array
		 */
		public function asArray($request, $nest = true) {
			$this->_cleanup();

			return parent::asArray($request, $nest);
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
			return QUICKBOOKS_OBJECT_ACCOUNT;
		}
	}
