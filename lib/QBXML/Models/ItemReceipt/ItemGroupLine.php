<?php

	namespace TheLogicStudio\QBXML\Models\ItemReceipt;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 * QuickBooks ItemGroupLine object container
	 *
	 * @todo Documentation
	 *
	 * @author Harley Laue <harley.laue@gmail.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 * Quickbooks ItemGroupLine definition
	 */
	class ItemGroupLine extends GenericObject {
		/**
		 * Create a new QuickBooks ReceiptItem ItemGroupLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function getItemGroupListID() {
			return $this->get('ItemGroupRef ListID');
		}

		public function setItemGroupListID($ListID) {
			return $this->set('ItemGroupRef ListID', $ListID);
		}

		public function getItemGroupName() {
			return $this->get('ItemGroupRef FullName');
		}

		public function setItemGroupName($Name) {
			return $this->set('ItemGroupRef FullName', $Name);
		}

		public function getQuantity() {
			return $this->get('Quantity');
		}

		public function setQuantity($Quantity) {
			return $this->set('Quantity', (float)$Quantity);
		}

		public function getUnitOfMeasure() {
			return $this->get('UnitOfMeasure');
		}

		public function setUnitOfMeasure($UnitOfMeasure) {
			return $this->set('UnitOfMeasure', $UnitOfMeasure);
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

		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($object)) {
				$object = $this->_object;
			}

			switch($parent) {
				case QUICKBOOKS_ADD_ITEMRECEIPT:
					$root = 'ItemGroupLineAdd';
					$parent = null;
					break;
				// Currently unimplemented
				/*
							case QUICKBOOKS_QUERY_INVENTORYADJUSTMENT:
								$root = 'ExpenseLineQuery';
								break;
				*/
			}

			return parent::asXML($root, $parent, $object);
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
			return "ItemGroupLine";
		}
	}

