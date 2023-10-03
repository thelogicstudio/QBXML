<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks StandardTerms object container
	 *
	 * @author Keith Palmer <keith@consolibyte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 * QuickBooks StandardTerms container
	 */
	class StandardTerms extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_StandardTerms object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the ListID of the termspwd
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setListID($ListID) {
			return $this->set('ListID', $ListID);
		}

		/**
		 * Get the ListID of the terms
		 *
		 * @return string
		 */
		public function getListID() {
			return $this->get('ListID');
		}

		/**
		 * Set the name of the terms
		 *
		 * @param string $name
		 * @return self
		 */
		public function setName($name) {
			return $this->set('Name', $name);
		}

		/**
		 * Get the name of these terms
		 *
		 * @return string
		 */
		public function getName() {
			return $this->get('Name');
		}

		/**
		 * Set this as active or not
		 *
		 * @param boolean $value
		 * @return self
		 */
		public function setIsActive($value) {
			return $this->set('IsActive', (boolean)$value);
		}

		/**
		 * Tell whether or not this class object is active
		 *
		 * @return boolean
		 */
		public function getIsActive() {
			return $this->get('IsActive');
		}

		/**
		 * Get the number of days until payment is due
		 *
		 * @return integer
		 */
		public function getStdDueDays() {
			return $this->get('StdDueDays');
		}

		/**
		 * Alias of QuickBooks_Object_StandardTerms::getStdDueDays()
		 */
		public function getStandardDueDays() {
			return $this->getStdDueDays();
		}

		/**
		 * Set the number of days until payment is due
		 *
		 * @param integer $days
		 * @return self
		 */
		public function setStdDueDays($days) {
			return $this->set('StdDueDays', (int)$days);
		}

		/**
		 * Alias of QuickBooks_Object_StandardTerms::setStdDueDays()
		 */
		public function setStandardDueDays($days) {
			return $this->setStdDueDays($days);
		}

		/**
		 *
		 */
		public function getStdDiscountDays() {
			return $this->get('StdDiscountDays');
		}

		public function getStandardDiscountDays() {
			return $this->getStdDiscountDays();
		}

		public function setStdDiscountDays($days) {
			return $this->set('StdDiscountDays', (int)$days);
		}

		public function setStandardDiscountDays($days) {
			return $this->setStdDiscountDays($days);
		}

		public function getDiscountPct() {
			return $this->get('DiscountPct');
		}

		public function getDiscountPercent() {
			return $this->getDiscountPct();
		}

		public function setDiscountPercent($percent) {
			return $this->setDiscountPct($percent);
		}

		public function setDiscountPct($percent) {
			return $this->set('DiscountPct', (float)$percent);
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
			return QUICKBOOKS_OBJECT_STANDARDTERMS;
		}
	}

?>
