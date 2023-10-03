<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * Deposit class for QuickBooks
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
	class Deposit extends GenericObject {
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the AccountRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setDepositToAccountListID($ListID) {
			return $this->set('DepositToAccountRef ListID', $ListID);
		}

		/**
		 * Get the AccountRef ListID for the Check
		 *
		 * @return string
		 */
		public function getDepositToAccountListID() {
			return $this->get('DepositToAccountRef ListID');
		}

		public function getDepositToAccountApplicationID() {
			return $this->get('DepositToAccountRef ');
		}

		// Path: AccountRef FullName, datatype:

		/**
		 * Set the AccountRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setDepositToAccountFullName($FullName) {
			return $this->set('DepositToAccountRef FullName', $FullName);
		}

		/**
		 * Get the AccountRef FullName for the Check
		 *
		 * @return string
		 */
		public function getDepositToAccountFullName() {
			return $this->get('DepositToAccountRef FullName');
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

		public function setAmount($amount) {
			return $this->setAmountType('Amount', $amount);
		}

		public function getAmount() {
			return $this->getAmountType('Amount');
		}

		public function addDepositLine($obj) {
			return $this->addListItem('DepositLine', $obj);
		}

		public function asList($request) {
			switch($request) {
				case 'DepositAddRq':

					if(isset($this->_object['DepositLine'])) {
						$this->_object['DepositLineAdd'] = $this->_object['DepositLine'];
					}

					break;
				case 'DepositModRq':


					break;
			}

			return parent::asList($request);
		}

		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($root) {
				case QUICKBOOKS_ADD_DEPOSIT:

					foreach($object['DepositLineAdd'] as $key => $obj) {
						$obj->setOverride('DepositLineAdd');
					}

					break;
				case QUICKBOOKS_MOD_DEPOSIT:

					foreach($object['DepositLineMod'] as $key => $obj) {
						$obj->setOverride('DepositLineMod');
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
			return QUICKBOOKS_OBJECT_DEPOSIT;
		}
	}

