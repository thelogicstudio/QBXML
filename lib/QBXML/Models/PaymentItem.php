<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks OtherChargeItem object container
	 *
	 * @todo FIX THIS FIX THIS FIX THIS!
	 *
	 * @author Keith Palmer <keith@consolibyte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 * QuickBooks ServiceItem object
	 */
	class PaymentItem extends GenericObject {
		/**
		 * Flag indicating whether or not this for sales *AND* purchase, or just sales *OR* purchase
		 */
		protected $_is_sales_and_purchase;

		/**
		 * Create a new QuickBooks_Object_ServiceItem object (ServiceItem)
		 */
		public function __construct($arr = [], $is_sales_and_purchase = false) {
			parent::__construct($arr);

			if(count($this->getArray('SalesAndPurchase')) > 0) {
				$is_sales_and_purchase = true;
			}

			$this->_is_sales_and_purchase = $is_sales_and_purchase;
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

		/**
		 * Get the name for this item
		 *
		 * @return string
		 */
		public function getName() {
			return $this->get('Name');
		}

		public function setIsActive($active) {
			if(strtolower($active) == 'true' or
				(is_bool($active) and $active)) {
				return $this->set('IsActive', 'true');
			}

			return $this->set('IsActive', 'false');
		}

		public function getIsActive() {
			$active = $this->get('IsActive');

			return strtolower($active) == 'true' or
				(is_bool($active) and $active);
		}

		public function setParentListID($ListID) {
			return $this->set('ParentRef ListID', $ListID);
		}

		public function setParentName($name) {
			return $this->set('ParentRef FullName', $name);
		}

		public function getParentListID() {
			return $this->get('ParentRef ListID');
		}

		public function getParentName() {
			return $this->get('ParentRef FullName');
		}

		public function setSalesTaxCodeListID($ListID) {
			return $this->set('SalesTaxCodeRef ListID', $ListID);
		}

		public function setSalesTaxCodeName($name) {
			return $this->set('SalesTaxCodeRef FullName', $name);
		}

		public function getSalesTaxCodeListID() {
			return $this->get('SalesTaxCodeRef ListID');
		}

		public function getSalesTaxCodeName() {
			return $this->get('SalesTaxCodeRef FullName');
		}

		/**
		 * Tell (and optionally set) whether or not this item is currently for Sale *and* Purchase
		 *
		 * @param boolean $enable
		 * @return boolean
		 */
		public function isSalesAndPurchase($enable = null) {
			$current = $this->_is_sales_and_purchase;

			if(!is_null($enable)) {
				$this->_is_sales_and_purchase = (boolean)$enable;
			}

			return $current;
		}

		/**
		 * Tell (and optionall set) whether or not this item is currently for Sale *or* Purchase
		 *
		 * @param boolean $enable
		 * @return boolean
		 */
		public function isSalesOrPurchase($enable = null) {
			$current = !$this->_is_sales_and_purchase;

			if(!is_null($enable)) {
				$this->_is_sales_and_purchase = !(boolean)$enable;
			}

			return $current;
		}

		// Sales OR Purchase

		/**
		 * Set the description of this item (Sales OR Purchase)
		 *
		 * @param string $descrip
		 * @return self
		 */
		public function setDescription($descrip) {
			return $this->set('SalesOrPurchase Desc', $descrip);
		}

		public function getDescription() {
			return $this->get('SalesOrPurchase Desc');
		}

		/**
		 * Set the price for this item (Sales OR Purchase)
		 *
		 * @param string $price
		 * @return self
		 */
		public function setPrice($price) {
			$this->remove('SalesOrPurchase PricePercent');

			return $this->set('SalesOrPurchase Price', (float)$price);
		}

		/**
		 * Get the price for this item (Sales OR Purchase)
		 */
		public function getPrice() {
			return $this->get('SalesOrPurchase Price');
		}

		/**
		 * Set the price percent for this item (Sales OR Purchase)
		 */
		public function setPricePercent($percent) {
			$this->remove('SalesOrPurchase Price');

			return $this->set('SalesOrPurchase PricePercent', $percent);
		}

		/**
		 * Get the price percent for this item (Sales OR Purchase)
		 *
		 * @return float
		 */
		public function getPricePercent() {
			return $this->get('SalesOrPurchase PricePercent');
		}

		/**
		 * Set the account ListID for this item (Sales OR Purchase)
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setAccountListID($ListID) {
			return $this->set('SalesOrPurchase AccountRef ListID', $ListID);
		}

		/**
		 * Set the account name for this item (Sales OR Purchase)
		 *
		 * @param string $name
		 * @return self
		 */
		public function setAccountName($name) {
			return $this->set('SalesOrPurchase AccountRef FullName', $name);
		}

		public function getAccountApplicationID() {
			return $this->get('SalesOrPurchase AccountRef ');
		}

		/**
		 * Get the account ListID for this item (Sales OR Purchase)
		 *
		 * @return string
		 */
		public function getAccountListID() {
			return $this->get('SalesOrPurchase AccountRef ListID');
		}

		/**
		 * Get the account name for this item (Sales OR Purchase)
		 *
		 * @return string
		 */
		public function getAccountName() {
			return $this->get('SalesOrPurchase AccountRef FullName');
		}

		// Sales AND Purchase

		public function setSalesDescription($descrip) {
			return $this->set('SalesAndPurchase SalesDesc', $descrip);
		}

		public function getSalesDescription() {
			return $this->get('SalesAndPurchase SalesDesc');
		}

		public function setSalesPrice($price) {
			return $this->set('SalesAndPurchase SalesPrice', (float)$price);
		}

		public function getSalesPrice() {
			return $this->get('SalesAndPurchase SalesPrice');
		}

		public function setIncomeAccountListID($ListID) {
			return $this->set('SalesAndPurchase IncomeAccountRef ListID', $ListID);
		}

		public function getIncomeAccountListID() {
			return $this->get('SalesAndPurchase IncomeAccountRef ListID');
		}

		public function setIncomeAccountName($name) {
			return $this->set('SalesAndPurchase IncomeAccountRef FullName', $name);
		}

		public function getIncomeAccountName() {
			return $this->get('SalesAndPurchase IncomeAccountRef FullName');
		}

		public function getIncomeAccountApplicationID() {
			return $this->get('SalesAndPurchase IncomeAccountRef ');
		}

		public function setPurchaseDescription($descrip) {
			return $this->set('SalesAndPurchase PurchaseDesc', $descrip);
		}

		public function getPurchaseDescription() {
			return $this->get('SalesAndPurchase PurchaseDesc');
		}

		public function setPurchaseCost($cost) {
			return $this->set('SalesAndPurchase PurchaseCost', (int)$cost);
		}

		public function getPurchaseCost() {
			return $this->get('SalesAndPurchase PurchaseCost');
		}

		public function setExpenseAccountListID($ListID) {
			return $this->set('SalesAndPurchase ExpenseAccountRef ListID', $ListID);
		}

		public function setExpenseAccountName($name) {
			return $this->set('SalesAndPurchase ExpenseAccountRef FullName', $name);
		}

		public function getExpenseAccountApplicationID() {
			return $this->get('SalesAndPurchase ExpenseAccountRef ');
		}

		public function getExpenseAccountListID() {
			return $this->get('SalesAndPurchase ExpenseAccountRef ListID');
		}

		public function getExpenseAccountName() {
			return $this->get('SalesAndPurchase ExpenseAccountRef FullName');
		}

		public function setPreferredVendorListID($ListID) {
			return $this->set('SalesAndPurchase PrefVendorRef ListID', $ListID);
		}

		public function setPreferredVendorName($name) {
			return $this->set('SalesAndPurchase PrefVendorRef FullName', $name);
		}

		public function getPreferredVendorApplicationID() {
			return $this->get('SalesAndPurchase PrefVendorRef ');
		}

		public function getPreferredVendorListID() {
			return $this->get('SalesAndPurchase PrefVendorRef ListID');
		}

		public function getPreferredVendorName() {
			return $this->get('SalesAndPurchase PrefVendorRef FullName');
		}

		/**
		 *
		 *
		 * @return boolean
		 */
		protected function _cleanup() {
			if($this->isSalesAndPurchase()) {
				// Remove any SalesOrPurchase keys

				foreach($this->getArray('SalesOrPurchase*') as $key => $value) {
					$this->remove($key);
				}
			} else {
				foreach($this->getArray('SalesAndPurchase*') as $key => $value) {
					$this->remove($key);
				}
			}

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
			return QUICKBOOKS_OBJECT_PAYMENTITEM;
		}
	}

?>
