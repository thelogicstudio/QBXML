<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks Employee object container
	 *
	 * @author Keith Palmer <keith@consolibyte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 * QuickBooks object class
	 */
	class Employee extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Customer object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the ListID of this customer record
		 *
		 * @param string $ListID
		 * @return self
		 */
		public function setListID($ListID) {
			return $this->set('ListID', $ListID);
		}

		/**
		 * Get the ListID of this customer record
		 *
		 * @return string
		 */
		public function getListID() {
			return $this->get('ListID');
		}

		/**
		 * Get the name of this customer
		 *
		 * @return string
		 */
		public function getName() {
			if(!$this->exists('Name')) {
				if(!is_null($this->getFirstName()) || !is_null($this->getLastName())) {
					$this->setNameAsFirstLast();
				}
			}

			return $this->get('Name');
		}

		public function setName($name) {
			return $this->set('Name', $name);
		}

		/**
		 * Set the full name of this customer (full name)
		 *
		 * NOTE: This will be auto-set to ->getName() if you don't set it
		 * explicitly.
		 *
		 * @param string $name
		 * @return self
		 */
		public function setFullName($name) {
			if(is_null($name)) {
				$name = $this->getName();
			}

			return $this->set('FullName', $name);
		}

		/**
		 * Get the name of this customer (full name)
		 *
		 * @return string
		 */
		public function getFullName() {
			if(!$this->exists('FullName')) {
				$this->setFullName($this->get('Name'));
			}

			return $this->get('FullName');
		}


		/**
		 * Sets the name as first and last.
		 *
		 * @return self
		 */
		public function setNameAsFirstLast() {
			$first = $this->getFirstName();
			$last = $this->getLastName();
			if(is_null($first)) {
				$first = '';
			}
			if(is_null($last)) {
				$last = '';
			}

			return $this->set('Name', $first . ' ' . $last);
		}

		/**
		 * Set the first name of this customer
		 *
		 * @param string $name
		 * @return self
		 */
		public function setFirstName($fname) {
			return $this->set('FirstName', $fname);
		}

		/**
		 * Get the first name of this customer
		 *
		 * @return string
		 */
		public function getFirstName() {
			return $this->get('FirstName');
		}

		/**
		 * Set the last name of this customer
		 *
		 * @param string $lname
		 * @return self
		 */
		public function setLastName($lname) {
			return $this->set('LastName', $lname);
		}

		/**
		 * Get the last name of this customer
		 *
		 * @return string
		 */
		public function getLastName() {
			return $this->get('LastName');
		}

		public function setMiddleName($mname) {
			return $this->set('MiddleName', $mname);
		}

		public function getMiddleName() {
			return $this->get('MiddleName');
		}

		public function getEmployeeAddress($part = null, $defaults = []) {
			return $this->_getXYZAddress('Employee', '', $part, $defaults);
		}

		public function setEmployeeAddress($addr1, $addr2 = '', $addr3 = '', $addr4 = '', $addr5 = '', $city = '', $state = '', $province = '', $postalcode = '', $country = '', $note = '') {
			return $this->_setXYZAddress('Employee', '', $addr1, $addr2, $addr3, $addr4, $addr5, $city, $state, $province, $postalcode, $country, $note);
		}

		protected function _setXYZAddress($pre, $post, $addr1, $addr2, $addr3, $addr4, $addr5, $city, $state, $province, $postalcode, $country, $note) {
			for($i = 1; $i <= 5; $i++) {
				$this->set($pre . 'Address' . $post . ' Addr' . $i, ${'addr' . $i});
			}

			$this->set($pre . 'Address' . $post . ' City', $city);
			$this->set($pre . 'Address' . $post . ' State', $state);
			$this->set($pre . 'Address' . $post . ' Province', $province);
			$this->set($pre . 'Address' . $post . ' PostalCode', $postalcode);
			$this->set($pre . 'Address' . $post . ' Country', $country);
			$this->set($pre . 'Address' . $post . ' Note', $note);
		}

		protected function _getXYZAddress($pre, $post, $part = null, $defaults = []) {
			if(!is_null($part)) {
				return $this->get($pre . 'Address' . $post . ' ' . $part);
			}

			return $this->getArray($pre . 'Address' . $post . ' *', $defaults);
		}

		/**
		 *
		 *
		 * @param string $phone
		 * @return self
		 */
		public function setPhone($phone) {
			return $this->set('Phone', $phone);
		}

		public function getPhone() {
			return $this->get('Phone');
		}

		/**
		 * Set the alternate phone number for this customer
		 *
		 * @param string $phone
		 * @return self
		 */
		public function setAltPhone($phone) {
			return $this->set('AltPhone', $phone);
		}

		public function getAltPhone() {
			return $this->get('AltPhone');
		}

		/**
		 * Set the fax number for this customer
		 *
		 * @param string $fax
		 * @return self
		 */
		public function setFax($fax) {
			return $this->set('Fax', $fax);
		}

		public function getFax() {
			return $this->get('Fax');
		}

		/**
		 * Set the e-mail address for this customer
		 *
		 * @param string $email
		 * @return self
		 */
		public function setEmail($email) {
			return $this->set('Email', $email);
		}

		public function getEmail() {
			return $this->get('Email');
		}

		/**
		 * Set the salutation for this customer
		 *
		 * @param string $salut
		 * @return self
		 */
		public function setSalutation($salut) {
			return $this->set('Salutation', $salut);
		}

		/**
		 *
		 *
		 * @return string
		 */
		public function getSalutation() {
			return $this->get('Salutation');
		}

		public function setNotes($notes) {
			return $this->set('Notes', $notes);
		}

		public function getNotes() {
			return $this->get('Notes');
		}

		public function setMobile($mobile) {
			return $this->set('Mobile', $mobile);
		}

		public function getMobile() {
			return $this->get('Mobile');
		}

		public function setPager($pager) {
			return $this->set('Pager', $pager);
		}

		public function getPager() {
			return $this->get('Pager');
		}

		public function setGender($gender) {
			return $this->set('Gender', $gender);
		}

		public function getGender() {
			return $this->get('Gender');
		}

		public function setBirthDate($date) {
			return $this->setDateType('BirthDate', $date);
		}

		public function getBirthDate($format = 'Y-m-d') {
			return $this->getDateType('BirthDate', $format);
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
			return QUICKBOOKS_OBJECT_EMPLOYEE;
		}
	}

