<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks Estimate object container
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
	class Estimate extends GenericObject {
		/**
		 * Create a new QuickBooks Invoice object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Alias of {@link QuickBooks_Object_Estimate::setTxnID()}
		 */
		public function setTransactionID($TxnID) {
			return $this->setTxnID($TxnID);
		}

		/**
		 * Set the transaction ID of the object
		 *
		 * @param string $TxnID
		 * @return self
		 */
		public function setTxnID($TxnID) {
			return $this->set('TxnID', $TxnID);
		}

		/**
		 * Alias of {@link QuickBooks_Object_Invoice::getTxnID()}
		 */
		public function getTransactionID() {
			return $this->getTxnID();
		}

		/**
		 * Get the transaction ID for this invoice
		 *
		 * @return string
		 */
		public function getTxnID() {
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
		 * Alias of {@link QuickBooks_Object_Estimate::setTxnDate()}
		 */
		public function setTransactionDate($date) {
			return $this->setTxnDate($date);
		}

		/**
		 * Get the transaction date
		 *
		 * @param string $format
		 * @return string
		 */
		public function getTxnDate($format = 'Y-m-d') {
			return $this->getDateType('TxnDate', $format);
		}

		/**
		 * Alias of {@link QuickBooks_Object_Estimate::getTxnDate()}
		 */
		public function getTransactionDate($format = 'Y-m-d') {
			return $this->getDateType('TxnDate', $format);
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
		/*public function getShipAddress($part = null, $defaults = array())
		{
			if (!is_null($part))
			{
				return $this->get('ShipAddress ' . $part);
			}

			return $this->getArray('ShipAddress *', $defaults);
		}*/

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
		 * @return void
		 */
		/*public function setShipAddress($addr1, $addr2 = '', $addr3 = '', $addr4 = '', $addr5 = '', $city = '', $state = '', $province = '', $postalcode = '', $country = '', $note = '')
		{
			for ($i = 1; $i <= 5; $i++)
			{
				$this->set('ShipAddress Addr' . $i, ${'addr' . $i});
			}

			$this->set('ShipAddress City', $city);
			$this->set('ShipAddress State', $state);
			$this->set('ShipAddress Province', $province);
			$this->set('ShipAddress PostalCode', $postalcode);
			$this->set('ShipAddress Country', $country);
			$this->set('ShipAddress Note', $note);
		}*/

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
		public function setBillAddress($addr1, $addr2 = '', $addr3 = '', $addr4 = '', $addr5 = '', $city = '', $state = '', $province = '', $postalcode = '', $country = '', $note = '') {
			for($i = 1; $i <= 5; $i++) {
				$this->set('BillAddress Addr' . $i, ${'addr' . $i});
			}

			$this->set('BillAddress City', $city);
			$this->set('BillAddress State', $state);
			$this->set('BillAddress Province', $province);
			$this->set('BillAddress PostalCode', $postalcode);
			$this->set('BillAddress Country', $country);
			$this->set('BillAddress Note', $note);
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
			return $this->set('SalesRepRef FullName', $name);
		}

		public function setSalesRepListID($ListID) {
			return $this->set('SalesRepRef ListID', $ListID);
		}

		public function getSalesRepApplicationID() {
			return $this->get('SalesRepRef ');
		}

		public function getSalesRepName() {
			return $this->get('SalesRepRef FullName');
		}

		public function getSalesRepListID() {
			return $this->get('SalesRepRef ListID');
		}

		public function getFOB() {
			return $this->get('FOB');
		}

		public function setFOB($fob) {
			return $this->set('FOB', $fob);
		}

		public function setSalesTaxItemListID($ListID) {
			return $this->set('ItemSalesTaxRef ListID', $ListID);
		}

		public function getSalesTaxItemApplicationID() {
			return $this->get('ItemSalesTaxRef ');
		}

		public function setSalesTaxItemName($name) {
			return $this->set('ItemSalesTaxRef FullName', $name);
		}

		public function getSalesTaxItemName() {
			return $this->get('ItemSalesTaxRef FullName');
		}

		public function getSalesTaxItemListID() {
			return $this->get('ItemSalesTaxRef ListID');
		}

		public function setMemo($memo) {
			return $this->set('Memo', $memo);
		}

		public function getMemo() {
			return $this->get('Memo');
		}

		public function setIsToBeEmailed($emailed) {
			return $this->setBooleanType('IsToBeEmailed', $emailed);
		}

		public function getIsToBeEmailed() {
			return $this->getBooleanType('IsToBeEmailed');
		}

		public function setCustomerSalesTaxCodeListID($ListID) {
			return $this->set('CustomerSalesTaxCodeRef ListID', $ListID);
		}

		public function setCustomerSalesTaxCodeName($name) {
			return $this->set('CustomerSalesTaxCodeRef FullName', $name);
		}

		public function getCustomerSalesTaxCodeListID() {
			return $this->get('CustomerSalesTaxCodeRef ListID');
		}

		public function getCustomerSalesTaxCodeName() {
			return $this->get('CustomerSalesTaxCodeRef FullName');
		}

		/**
		 *
		 *
		 * @param
		 */
		public function addEstimateLine($obj) {
			return $this->addListItem('EstimateLine', $obj);
		}

		public function setEstimateLine($i, $obj) {

		}

		public function setEstimateLineData($i, $key, $value) {
			$lines = $this->getEstimateLines();
			if(isset($lines[$i])) {

			}

			return $this->set('EstimateLine', $lines);
		}

		public function getEstimateLineData() {
			return $this->get('EstimateLine');
		}

		public function getEstimateLine($i) {
			return $this->getListItem('EstimateLine', $i);
		}

		public function getEstimateLines() {
			return $this->listEstimateLines();
		}

		public function listEstimateLines() {
			return $this->getList('EstimateLine');
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
				case 'EstimateAddRq':

					if(isset($this->_object['EstimateLine'])) {
						$this->_object['EstimateLineAdd'] = $this->_object['EstimateLine'];
					}

					break;
				case 'EstimateModRq':

					if(isset($this->_object['EstimateLine'])) {
						$this->_object['EstimateLineMod'] = $this->_object['EstimateLine'];
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
				case QUICKBOOKS_ADD_ESTIMATE:

					foreach($object['EstimateLineAdd'] as $key => $obj) {
						$obj->setOverride('EstimateLineAdd');
					}

					break;
				case QUICKBOOKS_MOD_ESTIMATE:
					if(isset($object['EstimateLine'])) {
						$object['EstimateLineMod'] = $object['EstimateLine'];
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
			return QUICKBOOKS_OBJECT_ESTIMATE;
		}
	}
