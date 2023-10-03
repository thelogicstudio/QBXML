<?php

	namespace TheLogicStudio\QBXML\Models\UnitOfMeasureSet;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 *
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 *
	 */
	class DefaultUnit extends GenericObject {
		/**
		 * Create a new QuickBooks SalesReceipt SalesReceiptLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function setUnitUsedFor($str) {
			return $this->setUnitUsedFor('UnitUsedFor', $str);
		}

		public function getUnitUsedFor() {
			return $this->get('UnitUsedFor');
		}

		public function setUnit($unit) {
			return $this->set('Unit', $unit);
		}

		public function getUnit() {
			return $this->get('Unit');
		}

		/**
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return 'DefaultUnit';
		}
	}
