<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks DataExt object container
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
	class DataExt extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_DataExt object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the OwnerID
		 *
		 * @param string $OwnerID
		 * @return self
		 */
		public function setOwnerID($OwnerID) {
			return $this->set('OwnerID', $OwnerID);
		}

		/**
		 * Get the OwnerID
		 *
		 * @return string
		 */
		public function getOwnerID() {
			return $this->get('OwnerID');
		}

		public function setDataExtName($name) {
			return $this->set('DataExtName', $name);
		}

		public function getDataExtName() {
			return $this->get('DataExtName');
		}

		public function setListDataExtType($type) {
			return $this->set('ListDataExtType', $type);
		}

		public function getListDataExtType() {
			return $this->get('ListDataExtType');
		}

		public function setListObjListID($ListID) {
			return $this->set('ListObjRef ListID', $ListID);
		}

		public function getListObjListID() {
			return $this->get('ListObjRef ListID');
		}

		public function setListObjName($name) {
			return $this->set('ListObjRef FullName', $name);
		}

		public function getListObjName() {
			return $this->get('ListObjRef FullName');
		}

		public function getListObjApplicationID() {
			return $this->get('ListObjRef ');
		}

		public function setTxnDataExtType($type) {
			return $this->set('TxnDataExtType', $type);
		}

		public function getTxnDataExtType() {
			return $this->get('TxnDataExtType');
		}

		public function setTxnID($TxnID) {
			return $this->set('TxnID', $TxnID);
		}

		public function getTxnID() {
			return $this->get('TxnID');
		}

		public function setTxnLineID($value) {
			return $this->set('TxnLineID', $value);
		}

		public function getTxnLineID() {
			return $this->get('TxnLineID');
		}

		public function setOtherDataExtType($type) {
			return $this->set('OtherDataExtType', $type);
		}

		public function getOtherDataExtType() {
			return $this->get('OtherDataExtType');
		}

		public function setDataExtValue($value) {
			return $this->set('DataExtValue', $value);
		}

		public function getDataExtValue() {
			return $this->get('DataExtValue');
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
			return QUICKBOOKS_OBJECT_DATAEXT;
		}
	}
