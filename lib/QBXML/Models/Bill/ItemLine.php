<?php

	namespace TheLogicStudio\QBXML\Models\Bill;

	use TheLogicStudio\QBXML\Models\GenericObject;

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
	class ItemLine extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Check_ItemLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		// Path: ItemRef ListID, datatype:

		/**
		 * Set the ItemRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setItemListID($ListID) {
			return $this->set('ItemRef ListID', $ListID);
		}

		/**
		 * Get the ItemRef ListID for the Check
		 *
		 * @return string
		 */
		public function getItemListID() {
			return $this->get('ItemRef ListID');
		}

		// Path: ItemRef FullName, datatype:

		/**
		 * Set the ItemRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setItemFullName($FullName) {
			return $this->set('ItemRef FullName', $FullName);
		}

		/**
		 * Get the ItemRef FullName for the Check
		 *
		 * @return string
		 */
		public function getItemFullName() {
			return $this->get('ItemRef FullName');
		}

		// Path: Desc, datatype:

		/**
		 * Set the Desc for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setDesc($value) {
			return $this->set('Desc', $value);
		}

		/**
		 * Get the Desc for the Check
		 *
		 * @return string
		 */
		public function getDesc() {
			return $this->get('Desc');
		}

		/**
		 * @see QuickBooks_Object_Check_ItemLineAdd::setDesc()
		 */
		public function setDescription($value) {
			$this->setDesc($value);
		}

		/**
		 * @see QuickBooks_Object_Check_ItemLineAdd::getDesc()
		 */
		public function getDescription() {
			$this->getDesc();
		}
		// Path: Quantity, datatype:

		/**
		 * Set the Quantity for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setQuantity($value) {
			return $this->set('Quantity', (float)$value);
		}

		/**
		 * Get the Quantity for the Check
		 *
		 * @return string
		 */
		public function getQuantity() {
			return $this->get('Quantity');
		}

		// Path: UnitOfMeasure, datatype:

		/**
		 * Set the UnitOfMeasure for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setUnitOfMeasure($value) {
			return $this->set('UnitOfMeasure', $value);
		}

		/**
		 * Get the UnitOfMeasure for the Check
		 *
		 * @return string
		 */
		public function getUnitOfMeasure() {
			return $this->get('UnitOfMeasure');
		}

		// Path: Cost, datatype:

		/**
		 * Set the Cost for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setCost($value) {
			return $this->set('Cost', $value);
		}

		/**
		 * Get the Cost for the Check
		 *
		 * @return string
		 */
		public function getCost() {
			return $this->get('Cost');
		}

		// Path: Amount, datatype:

		/**
		 * Set the Amount for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setAmount($value) {
			return $this->set('Amount', $value);
		}

		/**
		 * Get the Amount for the Check
		 *
		 * @return string
		 */
		public function getAmount() {
			return $this->get('Amount');
		}

		// Path: CustomerRef ListID, datatype:

		/**
		 * Set the CustomerRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setCustomerListID($ListID) {
			return $this->set('CustomerRef ListID', $ListID);
		}

		/**
		 * Get the CustomerRef ListID for the Check
		 *
		 * @return string
		 */
		public function getCustomerListID() {
			return $this->get('CustomerRef ListID');
		}

		// Path: CustomerRef FullName, datatype:

		/**
		 * Set the CustomerRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setCustomerName($FullName) {
			return $this->set('CustomerRef FullName', $FullName);
		}

		/**
		 * Get the CustomerRef FullName for the Check
		 *
		 * @return string
		 */
		public function getCustomerName() {
			return $this->get('CustomerRef FullName');
		}

		// Path: ClassRef ListID, datatype:

		/**
		 * Set the ClassRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setClassListID($ListID) {
			return $this->set('ClassRef ListID', $ListID);
		}

		/**
		 * Get the ClassRef ListID for the Check
		 *
		 * @return string
		 */
		public function getClassListID() {
			return $this->get('ClassRef ListID');
		}

		// Path: ClassRef FullName, datatype:

		/**
		 * Set the ClassRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setClassName($FullName) {
			return $this->set('ClassRef FullName', $FullName);
		}

		/**
		 * Get the ClassRef FullName for the Check
		 *
		 * @return string
		 */
		public function getClassName() {
			return $this->get('ClassRef FullName');
		}

		// Path: BillableStatus, datatype:

		/**
		 * Set the BillableStatus for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setBillableStatus($value) {
			return $this->set('BillableStatus', $value);
		}

		/**
		 * Get the BillableStatus for the Check
		 *
		 * @return string
		 */
		public function getBillableStatus() {
			return $this->get('BillableStatus');
		}

		// Path: OverrideItemAccountRef ListID, datatype:

		/**
		 * Set the OverrideItemAccountRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setOverrideItemAccountListID($ListID) {
			return $this->set('OverrideItemAccountRef ListID', $ListID);
		}

		/**
		 * Get the OverrideItemAccountRef ListID for the Check
		 *
		 * @return string
		 */
		public function getOverrideItemAccountListID() {
			return $this->get('OverrideItemAccountRef ListID');
		}

		// Path: OverrideItemAccountRef FullName, datatype:

		/**
		 * Set the OverrideItemAccountRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setOverrideItemAccountName($FullName) {
			return $this->set('OverrideItemAccountRef FullName', $FullName);
		}

		/**
		 * Get the OverrideItemAccountRef FullName for the Check
		 *
		 * @return string
		 */
		public function getOverrideItemAccountName() {
			return $this->get('OverrideItemAccountRef FullName');
		}

		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($parent) {
				case QUICKBOOKS_ADD_CHECK:
					$root = 'ItemLineAdd';
					$parent = null;
					break;
				case QUICKBOOKS_MOD_CHECK:
					$root = 'ItemLineMod';
					$parent = null;
					break;
			}

			return parent::asXML($root, $parent, $object);
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
			return 'ItemLine';
		}
	}

