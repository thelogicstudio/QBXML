<?php

	namespace TheLogicStudio\QBXML\Models;
	/**
	 * QuickBooks SalesRep object container
	 *
	 * @author Adam Heinz <amh@metricwise.net>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 * QuickBooks Customer object class
	 */
	class SalesRep extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_SalesRep object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the initials of this sales rep
		 *
		 * @param string $value
		 * @return self
		 */
		public function setInitial($value) {
			return $this->set('Initial', $value);
		}

		/**
		 * Get the initials of this sales rep
		 *
		 * @return string
		 */
		public function getInitial() {
			return $this->get('Initial');
		}

		/**
		 * Set this sales rep active or not
		 *
		 * @param boolean $value
		 * @return self
		 */
		public function setIsActive($value) {
			return $this->set('IsActive', (boolean)$value);
		}

		/**
		 * Get whether or not this sales rep is active
		 *
		 * @return boolean
		 */
		public function getIsActive() {
			return $this->getBooleanType('IsActive');
		}

		/**
		 * @param string $lid
		 * @return self
		 */
		public function setSalesRepEntityListID($lid) {
			return $this->set('SalesRepEntityRef ListID', $lid);
		}

		/**
		 * @param string $name
		 * @return self
		 */
		public function setSalesRepEntityName($name) {
			return $this->set('SalesRepEntityRef FullName', $name);
		}

		/**
		 * Returns the sales rep object as an array
		 *
		 * @return array
		 */
		public function asArray($request, $nest = true) {
			$this->_cleanup();

			return parent::asArray($request, $nest);
		}

		/**
		 * @param int $version
		 * @param string $locale
		 * @param string $root
		 * @return string
		 */
		public function asQBXML($request, $version = null, $locale = null, $root = null) {
			$this->_cleanup();

			return parent::asQBXML($request, $version = null, $locale = null, $root);
		}

		/**
		 * Tell what type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return QUICKBOOKS_OBJECT_SALESREP;
		}
	}
