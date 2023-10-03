<?php

	namespace TheLogicStudio\QBXML\Models\Check;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 * Check class for QuickBooks
	 *
	 * @author Keith Palmer Jr. <keith@ConsoliBYTE.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 */
	class ApplyCheckToTxn extends GenericObject {
		/**
		 * Create a new QuickBooks_Object_Check_ApplyCheckToTxnAdd object
		 *
		 * @param array $arr
		 */
		public function __construct($arr = []) {
			parent::__construct($arr);
		}

		// Path: TxnID, datatype:

		/**
		 * Set the TxnID for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setTxnID($value) {
			return $this->set('TxnID', $value);
		}

		/**
		 * Get the TxnID for the Check
		 *
		 * @return string
		 */
		public function getTxnID() {
			return $this->get('TxnID');
		}

		// Path: Amount, datatype:

		/**
		 * Set the Amount for the Check
		 *
		 * @param string $value
		 * @return self
		 */
		public function setAmount($value) {
			return $this->set('Amount', $value);
		}

		/**
		 * Get the Amount for the Check
		 *
		 * @return string
		 */
		public function getAmount() {
			return $this->get('Amount');
		}

		public function object() {
			return 'ApplyCheckToTxn';
		}
	}

