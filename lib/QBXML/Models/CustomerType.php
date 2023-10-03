<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks CustomerType object container
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
	class CustomerType extends GenericObject {
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
		 *
		 */
		public function setParentListID($ListID) {
			return $this->set('ParentRef ListID', $ListID);
		}

		public function getParentListID() {
			return $this->get('ParentRef ListID');
		}

		/**
		 * @deprecated
		 */
		public function setParentName($name) {
			return $this->set('ParentRef FullName', $name);
		}

		/**
		 * @deprecated
		 */
		public function getParentName() {
			return $this->get('ParentRef FullName');
		}

		public function setParentFullName($name) {
			return $this->set('ParentRef FullName', $name);
		}

		public function getParentFullName() {
			return $this->get('ParentRef FullName');
		}

		public function getParentApplicationID() {
			return $this->get('ParentRef ');
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
		 *
		 */
		public function getFullName() {
			return $this->get('FullName');
		}

		public function setFullName($name) {
			return $this->set('FullName', $name);
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

		/**
		 * Perform any needed clean-up of the object data members
		 *
		 * @return boolean
		 */
		protected function _cleanup() {
			return true;
		}

		/**
		 * Get an array representation of this Class object
		 *
		 * @param string $request
		 * @param boolean $nest
		 * @return array
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
			return QUICKBOOKS_OBJECT_CUSTOMERTYPE;
		}
	}
