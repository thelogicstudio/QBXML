<?php

	namespace TheLogicStudio\QBXML\Models\CreditMemo;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 * QuickBooks CreditMemoLine object class
	 *
	 * @author Jayson Lindsley <jay.lindsley@gmail.com>
	 * @author Keith Palmer <keith@consolibyte.com>
	 *
	 * TODO: Add support for items as per the QBXML spec
	 *
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */
	class CreditMemoLine extends GenericObject {
		/**
		 * Create a new QuickBooks CreditMemo CreditMemoLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		/**
		 * Set the item name for this credit memo line
		 *
		 * @param string $name
		 * @return self
		 */
		public function setItemName($name) {
			return $this->set('ItemRef FullName', $name);
		}

		//Use this one!
		public function setItemFullName($FullName) {
			return $this->setFullNameType('ItemRef FullName', null, null, $FullName);
		}

		/**
		 * Get the name of the item for this invoice line item
		 *
		 * @return string
		 */
		public function getItemName() {
			return $this->get('ItemRef FullName');
		}

		public function getItemFullName() {
			return $this->get('ItemRef FullName');
		}

		public function setDescription($descrip) {
			return $this->setDesc($descrip);
		}

		public function getDescription() {
			return $this->getDesc();
		}

		public function getDesc() {
			return $this->get('Desc');
		}

		public function setDesc($value) {
			return $this->set('Desc', $value);
		}

		public function setQuantity($quan) {
			return $this->set('Quantity', (float)$quan);
		}

		public function getQuantity() {
			return $this->get('Quantity');
		}

		public function setRate($value) {
			return $this->set('Rate', (float)$value);
		}

		public function getRate() {
			return $this->get('Rate');
		}

		public function setClassFullName($value) {
			return $this->set('ClassRef FullName', $value);
		}

		public function setAmount($amount) {
			return $this->setAmountType('Amount', $amount);
		}

		public function getAmount() {
			if($amount = $this->get('Amount')) {
				return $this->get('Amount');
			}
			return $this->get('Rate') * $this->get('Quantity');
		}

		public function asXML($root = null, $parent = null, $object = null) {
			$this->_cleanup();

			switch($parent) {
				case QUICKBOOKS_ADD_CREDITMEMO:
					$root = 'CreditMemoLineAdd';
					$parent = null;
					break;
				case QUICKBOOKS_MOD_CREDITMEMO:
					$root = 'CreditMemoLineMod';
					$parent = null;
					break;
			}

			return parent::asXML($root, $parent, $object);
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
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return 'CreditMemoLine';
		}
	}