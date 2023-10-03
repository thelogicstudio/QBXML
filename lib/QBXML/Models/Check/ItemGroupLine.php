<?php

	namespace TheLogicStudio\QBXML\Models\Check;

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
	class ItemGroupLine extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Check_ItemGroupLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		// Path: ItemGroupRef ListID, datatype:

		/**
		 * Set the ItemGroupRef ListID for the Check
		 *
		 * @param string $ListID The ListID of the record to reference
		 * @return self
		 */
		public function setItemGroupListID($ListID) {
			return $this->set('ItemGroupRef ListID', $ListID);
		}

		/**
		 * Get the ItemGroupRef ListID for the Check
		 *
		 * @return string
		 */
		public function getItemGroupListID() {
			return $this->get('ItemGroupRef ListID');
		}

		// Path: ItemGroupRef FullName, datatype:

		/**
		 * Set the ItemGroupRef FullName for the Check
		 *
		 * @param string $FullName The FullName of the record to reference
		 * @return self
		 */
		public function setItemGroupName($FullName) {
			return $this->set('ItemGroupRef FullName', $FullName);
		}

		/**
		 * Get the ItemGroupRef FullName for the Check
		 *
		 * @return string
		 */
		public function getItemGroupName() {
			return $this->get('ItemGroupRef FullName');
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
		 * @see QuickBooks_Object_Check_ItemGroupLineAdd::setDesc()
		 */
		public function setDescription($value) {
			$this->setDesc($value);
		}

		/**
		 * @see QuickBooks_Object_Check_ItemGroupLineAdd::getDesc()
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

		public function object() {
			return 'ItemGroupLine';
		}
	}

