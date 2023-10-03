<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks ServiceItem object container
	 *
	 * NOTE: By default, ServiceItems are created as SalesOrPurchase items, and are
	 * thus *NOT* created as SalesAndPurchase items. If you want to create an item
	 * that is sold *and* purchased, you'll need to set the type with the method:
	 *    -> {@link QuickBooks_Object_ServiceItem::isSalesAndPurchase()}
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
	class SalesTaxItem extends GenericObject {
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the ListID for this item
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setListID($ListID) {
			return $this->set('ListID', $ListID);
		}

		/**
		 * Get the ListID for this item
		 *
		 * @return string
		 */
		public function getListID() {
			return $this->get('ListID');
		}

		/**
		 * Set the name for this item
		 *
		 * @param string $name
		 * @return self
		 */
		public function setName($name) {
			return $this->set('Name', $name);
		}

		public function getIsActive() {
			return $this->getBooleanType('IsActive', true);
		}

		public function setIsActive($IsActive) {
			return $this->setBooleanType('IsActive', $IsActive);
		}

		/**
		 * Get the name for this item
		 *
		 * @return string
		 */
		public function getName() {
			return $this->get('Name');
		}

		public function setTaxRate($rate) {
			return $this->set('TaxRate', (float)$rate);
		}

		public function getTaxRate() {
			return $this->get('TaxRate');
		}

		public function setDescription($desc) {
			return $this->set('ItemDesc', $desc);
		}

		public function getDescription() {
			return $this->get('ItemDesc');
		}

		public function setTaxVendorListID($ListID) {
			return $this->set('TaxVendorRef ListID', $ListID);
		}

		public function setTaxVendorName($name) {
			return $this->set('TaxVendorRef FullName', $name);
		}

		// @todo Make sure these are ->setFullNameType instead of just ->set
		public function setTaxVendorFullName($FullName) {
			return $this->set('TaxVendorRef FullName', $FullName);
		}

		public function getTaxVendorApplicationID() {
			return $this->get('TaxVendorRef ');
		}

		public function getTaxVendorListID() {
			return $this->get('TaxVendorRef ListID');
		}

		public function getTaxVendorName() {
			return $this->get('TaxVendorRef FullName');
		}

		public function getTaxVendorFullName() {
			return $this->get('TaxVendorRef FullName');
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
			return QUICKBOOKS_OBJECT_SALESTAXITEM;
		}
	}
