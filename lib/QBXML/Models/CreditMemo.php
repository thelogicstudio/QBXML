<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks CreditCardMemo object container
	 *
	 * @author Jayson Lindsley <jay.lindsley@gmail.com>
	 * @author Keith Palmer <keith@consolibyte.com>
	 *
	 * TODO: Add support for items as per the QBXML spec
	 *
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 * QuickBooks object class
	 */
	class CreditMemo extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Customer object
		 *
		 * @param array $arr
		 */

		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function setCustomerListID($ListID) {
			return $this->set('CustomerRef ListID', $ListID);
		}

		public function setCustomerFullName($name) {
			return $this->set('CustomerRef FullName', $name);
		}

		public function getCustomerListID() {
			return $this->get('CustomerRef ListID');
		}

		public function getCustomerFullName() {
			return $this->get('CustomerRef FullName');
		}

		/**
		 * Set the class ListID for this creditmemo line item
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setClassListID($ListID) {
			return $this->set('ClassRef ListID', $ListID);
		}

		/**
		 * Set the class name for this invoice line item
		 *
		 * @param string $name
		 * @return self
		 */
		public function setClassName($name) {
			return $this->set('ClassRef FullName', $name);
		}

		public function setClassFullName($name) {
			return $this->set('ClassRef FullName', $name);
		}

		public function getClassListID() {
			return $this->get('ClassRef ListID');
		}

		public function getClassName() {
			return $this->get('ClassRef FullName');
		}

		/**
		 * Set the reference number
		 *
		 * @param string $str
		 * @return self
		 */
		public function setRefNumber($str) {
			return $this->set('RefNumber', $str);
		}

		/**
		 * Alias of {@link QuickBooks_Object_Invoice::setRefNumber()}
		 */
		public function setReferenceNumber($str) {
			return $this->setRefNumber($str);
		}

		/**
		 * Get the reference number
		 *
		 * @return string
		 */
		public function getRefNumber() {
			return $this->get('RefNumber');
		}

		/**
		 * Alias of {@link QuickBooks_Object_Invoice::getRefNumber()}
		 */
		public function getReferenceNumber() {
			return $this->getRefNumber();
		}

		public function setSalesRepName($name) {
			return $this->set('SalesRepRef FullName', $name);
		}

		public function getSalesRepName() {
			return $this->get('SalesRepRef FullName');
		}

		public function setSalesRepListID($ListID) {
			return $this->set('SalesRepRef ListID', $ListID);
		}

		public function getSalesRepListID() {
			return $this->get('SalesRepRef ListID');
		}

		/**
		 * Set the transaction date
		 *
		 * @param string $date
		 * @return self
		 */
		public function setTxnDate($date) {
			return $this->setDateType('TxnDate', $date);
		}

		/**
		 * Get the transaction date
		 *
		 * @param string $format The format you want the date in (as for {@link http://www.php.net/date})
		 * @return string
		 */
		public function getTxnDate($format = 'Y-m-d') {
			//return date($format, strtotime($this->get('TxnDate')));
			return $this->getDateType('TxnDate', $format);
		}

		public function addCreditMemoLine($obj) {
			return $this->addListItem('CreditMemoLine', $obj);
		}

		public function getCreditMemoLine($i) {
			return $this->getListItem('CreditMemoLine', $i);
		}

		public function listCreditMemoLines() {
			return $this->getList('CreditMemoLine');
		}

		public function addLinkedTxn($obj) {
			return $this->addListItem('LinkedTxn', $obj);
		}

		public function getLinkedTxn($i) {
			return $this->getListItem('LinkedTxn', $i);
		}

		public function listLinkedTxns() {
			return $this->getList('LinkedTxn');
		}

		public function setShipMethodName($name) {
			return $this->set('ShipMethodRef FullName', $name);
		}

		public function setShipMethodListID($ListID) {
			return $this->set('ShipMethodRef ListID', $ListID);
		}

		public function getShipMethodName() {
			return $this->get('ShipMethodRef FullName');
		}

		public function getShipMethodListID() {
			return $this->get('ShipMethodRef ListID');
		}

		public function setSalesTaxItemFullName($name) {
			return $this->set('ItemSalesTaxRef FullName', $name);
		}

		public function getSalesTaxItemName() {
			return $this->get('ItemSalesTaxRef FullName');
		}

		public function asList($request) {
			switch($request) {
				case 'CreditMemoAddRq':

					if(isset($this->_object['CreditMemoLine'])) {
						$this->_object['CreditMemoLineAdd'] = $this->_object['CreditMemoLine'];
					}
					break;

				case 'CreditMemoModRq':

					if(isset($this->_object['CreditMemoLine'])) {
						$this->_object['CreditMemoLineMod'] = $this->_object['CreditMemoLine'];
					}
					break;
			}
			return parent::asList($request);
		}

		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($root) {
				case QUICKBOOKS_ADD_CREDITMEMO:

					foreach($object['CreditMemoLineAdd'] as $key => $obj) {
						$obj->setOverride('CreditMemoLineAdd');
					}
					break;
				case QUICKBOOKS_MOD_CREDITMEMO:
					foreach($object['CreditMemoLineAdd'] as $key => $obj) {
						$obj->setOverride('CreditMemoLineMod');
					}
					break;
			}
			return parent::asXML($root, $parent, $object);
		}

		protected function _cleanup() {
			return true;
		}

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

		public function object() {
			return QUICKBOOKS_OBJECT_CREDITMEMO;
		}
	}