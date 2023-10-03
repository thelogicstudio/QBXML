<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks SalesOrder object container
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
	class SalesOrder extends GenericObject {
		/**
		 * Create a new QuickBooks SalesOrder object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Alias of {@link QuickBooks_Object_SalesOrder::setTxnID()}
		 */
		public function setTransactionID($TxnID) {
			return $this->setTxnID($TxnID);
		}

		public function getTransactionID() {
			return $this->getTxnID();
		}

		/**
		 * Set the transaction ID of the Invoice object
		 *
		 * @param string $TxnID
		 * @return self
		 */
		public function setTxnID($TxnID) {
			return $this->set('TxnID', $TxnID);
		}

		public function getTxnId() {
			return $this->get('TxnID');
		}

		/**
		 * Set the customer ListID
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setCustomerListID($ListID) {
			return $this->set('CustomerRef ListID', $ListID);
		}

		public function getCustomerApplicationID() {
			return $this->get('CustomerRef ');
		}

		/**
		 * Set the customer name
		 *
		 * @param string $name
		 * @return self
		 */
		public function setCustomerName($name) {
			return $this->set('CustomerRef FullName', $name);
		}

		/**
		 * Get the customer ListID
		 *
		 * @return string
		 */
		public function getCustomerListID() {
			return $this->get('CustomerRef ListID');
		}

		/**
		 * Get the customer name
		 *
		 * @return string
		 */
		public function getCustomerName() {
			return $this->get('CustomerRef FullName');
		}

		public function setClassListID($ListID) {
			return $this->set('ClassRef ListID', $ListID);
		}

		public function getClassApplicationID() {
			return $this->get('ClassRef ');
		}

		public function setClassName($name) {
			return $this->set('ClassRef FullName', $name);
		}

		public function getClassName() {
			return $this->get('ClassRef FullName');
		}

		public function getClassListID() {
			return $this->get('ClassRef ListID');
		}

		public function getARAccountApplicationID() {
			return $this->get('ARAccountRef ');
		}

		public function setARAccountListID($ListID) {
			return $this->set('ARAccountRef ListID', $ListID);
		}

		public function setARAccountName($name) {
			return $this->set('ARAccountRef FullName', $name);
		}

		public function getARAccountListID() {
			return $this->get('ARAccountRef ListID');
		}

		public function getARAccountName() {
			return $this->get('ARAccountRef FullName');
		}

		public function getTemplateApplicationID() {
			return $this->get('TemplateRef ');
		}

		public function setTemplateName($name) {
			return $this->set('TemplateRef FullName', $name);
		}

		public function setTemplateListID($ListID) {
			return $this->set('TemplateRef ListID', $ListID);
		}

		public function getTemplateName() {
			return $this->get('TemplateRef FullName');
		}

		public function getTemplateListID() {
			return $this->get('TemplateRef ListID');
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
		 * Alias of {@link QuickBooks_Object_Invoice::setTxnDate()}
		 */
		public function setTransactionDate($date) {
			return $this->setTxnDate($date);
		}

		/**
		 * Get the transaction date
		 *
		 * @return string
		 */
		public function getTxnDate($format = 'Y-m-d') {
			return $this->getDateType('TxnDate', $format);
		}

		/**
		 * Alias of {@link QuickBooks_Object_Invoice::getTxnDate()}
		 */
		public function getTransactionDate() {
			return $this->getTxnDate();
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
		 * Get the reference number
		 *
		 * @return string
		 */
		public function getRefNumber() {
			return $this->get('RefNumber');
		}

		/**
		 *
		 *
		 * @param string $part
		 * @param array $defaults
		 * @return array
		 */
		public function getShipAddress($part = null, $defaults = []) {
			if(!is_null($part)) {
				return $this->get('ShipAddress ' . $part);
			}

			return $this->getArray('ShipAddress *', $defaults);
		}

		/**
		 * Set the shipping address for the invoice
		 *
		 * @param string $addr1
		 * @param string $addr2
		 * @param string $addr3
		 * @param string $addr4
		 * @param string $addr5
		 * @param string $city
		 * @param string $state
		 * @param string $postalcode
		 * @param string $country
		 * @param string $note
		 * @return self
		 */
		public function setShipAddress($addr1, $addr2 = '', $addr3 = '', $addr4 = '', $addr5 = '', $city = '', $state = '', $postalcode = '', $country = '', $note = '') {
			$b = false;
			for($i = 1; $i <= 5; $i++) {
				$this->set('ShipAddress Addr' . $i, ${'addr' . $i});
			}

			$this->set('ShipAddress City', $city);
			$this->set('ShipAddress State', $state);
			$this->set('ShipAddress PostalCode', $postalcode);
			$this->set('ShipAddress Country', $country);
			$this->set('ShipAddress Note', $note);

			return $this;
		}

		/**
		 *
		 *
		 * @param string $part
		 * @param array $defaults
		 * @return array
		 */
		public function getBillAddress($part = null, $defaults = []) {
			if(!is_null($part)) {
				return $this->get('BillAddress ' . $part);
			}

			return $this->getArray('BillAddress *', $defaults);
		}

		/**
		 * Set the billing address for the invoice
		 *
		 * @param string $addr1
		 * @param string $addr2
		 * @param string $addr3
		 * @param string $addr4
		 * @param string $addr5
		 * @param string $city
		 * @param string $state
		 * @param string $postalcode
		 * @param string $country
		 * @param string $note
		 * @return void
		 */
		public function setBillAddress($addr1, $addr2 = '', $addr3 = '', $addr4 = '', $addr5 = '', $city = '', $state = '', $postalcode = '', $country = '', $note = '') {
			for($i = 1; $i <= 5; $i++) {
				$this->set('BillAddress Addr' . $i, ${'addr' . $i});
			}

			$this->set('BillAddress City', $city);
			$this->set('BillAddress State', $state);
			$this->set('BillAddress PostalCode', $postalcode);
			$this->set('BillAddress Country', $country);
			$this->set('BillAddress Note', $note);
		}

		public function setIsPending($pending) {
			return $this->set('IsPending', (boolean)$pending);
		}

		public function getIsPending() {
			if($this->exists('IsPending')) {
				$pending = $this->get('IsPending');
				if(is_bool($pending)) {
					return $pending;
				} elseif($pending == 'false') {
					return false;
				} elseif($pending == 'true') {
					return true;
				}
			}

			return null;
		}

		public function setPONumber($num) {
			return $this->set('PONumber', $num);
		}

		public function getPONumber() {
			return $this->get('PONumber');
		}

		public function setTermsListID($ListID) {
			return $this->set('TermsRef ListID', $ListID);
		}

		public function getTermsApplicationID() {
			return $this->get('TermsRef ');
		}

		public function setTermsName($name) {
			return $this->set('TermsRef FullName', $name);
		}

		public function getTermsName() {
			return $this->get('TermsRef FullName');
		}

		public function getTermsListID() {
			return $this->get('TermsRef ListID');
		}

		public function setDueDate($date) {
			return $this->setDateType('DueDate', $date);
		}

		public function getDueDate($format = 'Y-m-d') {
			return $this->getDateType('DueDate', $format);
		}

		public function setSalesRepName($name) {

		}

		public function setSalesRepListID($ListID) {

		}

		public function setSalesRepApplicationID($value) {

		}

		public function getSalesRepApplicationID() {

		}

		public function getSalesRepName() {

		}

		public function getSalesRepListID() {

		}

		public function getFOB() {
			return $this->get('FOB');
		}

		public function setFOB($fob) {
			return $this->set('FOB', $fob);
		}

		public function setShipDate($date) {
			return $this->setDateType('ShipDate', $date);
		}

		public function getShipDate($format = 'Y-m-d') {
			return $this->getDateType('ShipDate', $format);
		}

		public function setShipMethodApplicationID() {

		}

		public function getShipMethodApplicationID() {

		}

		public function setShipMethodName() {

		}

		public function setShipMethodListID() {

		}

		public function getShipMethodName() {

		}

		public function getShipMethodListID() {

		}

		public function setSalesTaxItemListID() {

		}

		public function setSalesTaxItemApplicationID() {

		}

		public function getSalesTaxItemApplicationID() {

		}

		public function setSalesTaxItemName() {

		}

		public function getSalesTaxItemName() {

		}

		public function getSalesTaxItemListID() {

		}

		public function setMemo($memo) {
			return $this->set('Memo', $memo);
		}

		public function getMemo() {
			return $this->get('Memo');
		}

		public function setIsToBePrinted() {

		}

		public function getIsToBePrinted() {

		}

		public function setIsToBeEmailed() {

		}

		public function getIsToBeEmailed() {

		}

		public function setCustomerSalesTaxCodeListID() {

		}

		public function setCustomerSalesTaxCodeName() {

		}

		public function getCustomerSalesTaxCodeListID() {

		}

		public function getCustomerSalesTaxCodeName() {

		}

		public function setLinkToTxnID($TxnID) {
			return $this->set('LinkToTxnID', $TxnID);
		}

		public function getLinkToTxnID() {
			return $this->get('LinkToTxnID');
		}

		/*
		public function getInvoiceLines()
		{
			return $this->getList('InvoiceLine');
		}

		public function getInvoiceLine($which)
		{
			$list = $this->getInvoiceLines();

			if (isset($list[$which]))
			{
				return $list[$which];
			}

			return null;
		}
		*/

		/*
		public function setInvoiceLine($i,
		{

		}
		*/

		/**
		 *
		 *
		 * @param
		 */
		public function addInvoiceLine($obj) {
			$lines = $this->get('InvoiceLine');
			/*$lines[] = array(
				'Quantity' => mt_rand(4, 8),
				'Amount' => mt_rand(255, 300),
				'ItemRef ListID' => 'test',
				);
			*/

			/*
			$tmp = new QuickBooks_Object_Generic();
			$tmp->set('Quantity', mt_rand(4, 8));
			$tmp->set('Amount', mt_rand(255, 300));
			$tmp->set('ItemRef ListID', 'test');
			$lines[] = $tmp;
			*/

			//
			$lines[] = $obj;

			return $this->set('InvoiceLine', $lines);
		}

		/**
		 * Add a Sales Order Line
		 *
		 * @param $obj
		 *
		 * @return self
		 */
		public function addSalesOrderLine($obj) {
			return $this->addListItem('SalesOrderLine', $obj);
		}

		public function getSalesOrderLine($i) {
			return $this->getListItem('SalesOrderLine', $i);
		}

		public function setOther($other) {
			return $this->set('Other', $other);
		}

		public function getOther() {
			return $this->get('Other');
		}

		/**
		 *
		 *
		 * @return boolean
		 */
		protected function _cleanup() {

			return true;
		}

		public function asList($request) {
			switch($request) {
				case 'SalesOrderAddRq':

					if(isset($this->_object['SalesOrderLine'])) {
						$this->_object['SalesOrderLineAdd'] = $this->_object['SalesOrderLine'];
					}

					break;
				case 'SalesOrderModRq':

					if(isset($this->_object['SalesOrderLine'])) {
						$this->_object['SalesOrderLineMod'] = $this->_object['SalesOrderLine'];
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
				case QUICKBOOKS_ADD_SALESORDER:

					foreach($object['SalesOrderLineAdd'] as $key => $obj) {
						$obj->setOverride('SalesOrderLineAdd');
					}

					break;

				case QUICKBOOKS_MOD_SALESORDER:
					if(isset($object['SalesOrderLine'])) {
						$object['SalesOrderLineMod'] = $object['SalesOrderLine'];
					}
					break;
			}

			//print_r($this->_object);

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
		 * @param        $request
		 * @param null $version
		 * @param null $locale
		 * @param string $root
		 *
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
			return QUICKBOOKS_OBJECT_SALESORDER;
		}
	}
