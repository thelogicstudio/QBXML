<?php

	namespace TheLogicStudio\QBXML\Models;

	/**
	 * QuickBooks Customer object container
	 *
	 * Not used, might be used in future versions
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
	class Generic extends GenericObject {
		protected $_override;

		public function __construct($arr = [], $override = '') {
			$this->_override = $override;

			parent::__construct($arr);
		}

		public function getOverride() {
			return $this->_override;
		}

		public function setOverride($override) {
			$this->_override = $override;

			return true;
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
			return $this->getOverride();
		}
	}

?>
