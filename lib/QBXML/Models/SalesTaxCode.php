<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks SalesTaxCode object container
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
	class SalesTaxCode extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Class object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the ListID of the Class
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setListID($ListID) {
			return $this->set('ListID', $ListID);
		}

		/**
		 * Get the ListID of the Class
		 *
		 * @return string
		 */
		public function getListID() {
			return $this->get('ListID');
		}

		/**
		 * Set the name of the class
		 *
		 * @param string $name
		 * @return self
		 */
		public function setName($name) {
			return $this->set('Name', $name);
		}

		/**
		 * Get the name of the class
		 *
		 * @return string
		 */
		public function getName() {
			return $this->get('Name');
		}

		/**
		 * Set this Class active or not
		 *
		 * @param boolean $value
		 * @return self
		 */
		public function setIsActive($value) {
			return $this->setBooleanType('IsActive', $value);
		}

		/**
		 * Tell whether or not this class object is active
		 *
		 * @return boolean
		 */
		public function getIsActive() {
			return $this->getBooleanType('IsActive');
		}

		public function setIsTaxable($boolean) {
			return $this->setBooleanType('IsTaxable', $boolean);
		}

		public function getIsTaxable() {
			return $this->getBooleanType('IsTaxable', true);
		}

		public function setDescription($Desc) {
			return $this->set('Desc', $Desc);
		}

		public function getDescription() {
			return $this->get('Desc');
		}

		/**
		 * Tell what type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return QUICKBOOKS_OBJECT_SALESTAXCODE;
		}
	}
