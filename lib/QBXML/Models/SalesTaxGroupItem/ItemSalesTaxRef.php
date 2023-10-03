<?php

	namespace TheLogicStudio\QBXML\Models\SalesTaxGroupItem;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 *
	 */
	class ItemSalesTaxRef extends GenericObject {
		/**
		 * Create a new QuickBooks SalesReceipt SalesReceiptLine object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		public function setFullName($FullName) {
			return $this->setFullNameType('FullName', null, null, $FullName);
		}

		public function setListID($ListID) {
			return $this->set('ListID', $ListID);
		}

		public function getListID() {
			return $this->get('ListID');
		}

		public function getFullName() {
			return $this->get('FullName');
		}

		/*public function asXML($root = null, $parent = null, $object = null)
		{
			$parent = null;
			return parent::asXML($root, $parent, $object);
		}*/

		/**
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return 'ItemSalesTaxRef';
		}
	}
