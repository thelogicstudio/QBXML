<?php

	namespace TheLogicStudio\QBXML\Models\Estimate;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
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
	class EstimateLine extends GenericObject {
		/**
		 * Create a new QuickBooks Invoice InvoiceLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function setItemListID($ListID) {
			return $this->set('ItemRef ListID', $ListID);
		}

		public function setItemName($name) {
			return $this->set('ItemRef FullName', $name);
		}

		public function getItemListID() {
			return $this->get('ItemRef ListID');
		}

		public function getItemName() {
			return $this->get('ItemRef FullName');
		}

		public function setDescription($descrip) {
			return $this->set('Desc', $descrip);
		}

		public function getDescription() {
			return $this->get('Desc');
		}

		public function setQuantity($quan) {
			return $this->set('Quantity', (float)$quan);
		}

		public function getQuantity() {
			return $this->get('Quantity');
		}

		public function setUnitOfMeasure($unit) {
			return $this->set('UnitOfMeasure', $unit);
		}

		public function getUnitOfMeasure() {
			return $this->get('UnitOfMeasure');
		}

		public function setRate($rate) {
			return $this->set('Rate', (float)$rate);
		}

		public function getRate() {
			return $this->get('Rate');
		}

		public function setRatePercent($percent) {
			return $this->set('RatePercent', (float)$percent);
		}

		public function getRatePercent() {
			return $this->get('RatePercent');
		}

		public function setClassListID($ListID) {
			return $this->set('ClassRef ListID', $ListID);
		}

		public function setClassApplicationID($value) {

		}

		public function setClassName($name) {
			return $this->set('ClassRef Name', $name);
		}

		public function getClassListID() {
			return $this->get('ClassRef ListID');
		}

		public function getClassName() {
			return $this->get('ClassRef FullName');
		}

		public function setAmount($amount) {
			return $this->setAmountType('Amount', $amount);
		}

		public function getAmount() {
			return $this->getAmountType('Amount');
		}

		public function setSalesTaxCodeName($name) {
			return $this->set('SalesTaxCodeRef FullName', $name);
		}

		public function setSalesTaxCodeListID($ListID) {
			return $this->set('SalesTaxCodeRef ListID', $ListID);
		}

		public function getSalesTaxCodeName() {
			return $this->get('SalesTaxCodeRef FullName');
		}

		public function getSalesTaxCodeListID() {
			return $this->get('SalesTaxCodeRef ListID');
		}

		public function setTaxable() {
			return $this->set('SalesTaxCodeRef FullName', QUICKBOOKS_TAXABLE);
		}

		public function setNonTaxable() {
			return $this->set('SalesTaxCodeRef FullName', QUICKBOOKS_NONTAXABLE);
		}

		public function getTaxable() {
			return $this->get('SalesTaxCodeRef FullName') == QUICKBOOKS_TAXABLE;
		}

		public function getMarkupRate() {
			return $this->get('MarkupRate');
		}

		public function setMarkupRate($rate) {
			return $this->set('MarkupRate', (float)$rate);
		}

		public function setMarkupRatePercent($percent) {
			return $this->set('MarkupRatePercent', (float)$percent);
		}

		public function getMarkupRatePercent() {
			return $this->get('MarkupRatePercent');
		}

		public function setPriceLevelListID($ListID) {
			return $this->set('PriceLevelRef ListID', $ListID);
		}

		public function setPriceLevelName($name) {
			return $this->set('PriceLevelRef FullName', $name);
		}

		public function setPriceLevelApplicationID() {

		}

		public function getPriceLevelName() {
			return $this->get('PriceLevelRef FullName');
		}

		public function getPriceLevelListID() {
			return $this->get('PriceLevelRef ListID');
		}

		public function setOverrideItemAccountName($name) {
			return $this->set('OverrideItemAccountRef FullName', $name);
		}

		public function setOverrideItemAccountListID($ListID) {
			return $this->set('OverrideItemAccountRef ListID', $ListID);
		}

		public function setOverrideItemAccountApplicationID($value) {

		}

		public function getOverrideItemAccountListID() {
			return $this->get('OverrideItemAccountRef ListID');
		}

		public function getOverrideItemAccountName() {
			return $this->get('OverrideItemAccountRef FullName');
		}

		public function setOther1($value) {
			return $this->set('Other1', $value);
		}

		public function getOther1() {
			return $this->get('Other1');
		}

		public function setOther2($value) {
			return $this->set('Other2', $value);
		}

		public function getOther2() {
			return $this->get('Other2');
		}

		/**
		 *
		 *
		 * @return boolean
		 */
		protected function _cleanup() {
			if($this->exists('Amount')) {
				$this->set('Amount', sprintf('%01.2f', $this->get('Amount')));
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

		public function asXML($root = null, $parent = null, $object = null) {
			$this->_cleanup();

			switch($parent) {
				case QUICKBOOKS_ADD_ESTIMATE:
					$root = 'EstimateLineAdd';
					$parent = null;
					break;
				case QUICKBOOKS_MOD_ESTIMATE:
					$root = 'EstimateLineMod';
					$parent = null;
					break;
			}

			return parent::asXML($root, $parent, $object);
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
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return 'EstimateLine';
		}
	}

