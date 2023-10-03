<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks ServiceItem object container
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
	class SalesTaxGroupItem extends GenericObject {
		public function __construct($arr = []) {
			parent::__construct($arr);

			// These two things occur because it's a repeatable element who name doesn't do the *Add, *Mod, *Ret thing, trash these
			if(isset($this->_object['ItemSalesTaxRef FullName'])) {
				unset($this->_object['ItemSalesTaxRef FullName']);
			}

			if(isset($this->_object['ItemSalesTaxRef ListID'])) {
				unset($this->_object['ItemSalesTaxRef ListID']);
			}
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

		public function setItemDesc($desc) {
			return $this->set('ItemDesc', $desc);
		}

		public function getItemDesc($desc) {
			return $this->get('ItemDesc', $desc);
		}

		public function setDescription($desc) {
			return $this->set('ItemDesc', $desc);
		}

		public function getDescription() {
			return $this->get('ItemDesc');
		}

		public function addItemSalesTaxRef($obj) {
			return $this->addListItem('ItemSalesTaxRef', $obj);
		}

		public function getItemSalesTaxRef($i) {
			return $this->getListItem('ItemSalesTaxRef', $i);
		}

		public function listItemSalesTaxRefs() {
			return $this->getList('ItemSalesTaxRef');
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
			return parent::asQBXML($request, $version, $locale, $root);
		}

		/**
		 * Tell what type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return QUICKBOOKS_OBJECT_SALESTAXGROUPITEM;
		}
	}

