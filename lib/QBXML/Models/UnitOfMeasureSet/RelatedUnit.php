<?php

	namespace TheLogicStudio\QBXML\Models\UnitOfMeasureSet;

	use TheLogicStudio\QBXML\Models\GenericObject;

	/**
	 *
	 *
	 * @package QuickBooks
	 * @subpackage Object
	 */


	/**
	 *
	 *
	 */
	class RelatedUnit extends GenericObject {
		public function setName($name) {
			return $this->set('Name', $name);
		}

		public function getName() {
			return $this->get('Name');
		}

		public function setAbbreviation($abbrev) {
			return $this->set('Abbreviation', $abbrev);
		}

		public function getAbbreviation() {
			return $this->get('Abbreviation');
		}

		public function getConversionRatio() {
			return $this->get('ConversionRatio');
		}

		public function setConversionRatio($ratio) {
			return $this->set('ConversionRatio', $ratio);
		}

		/**
		 * Tell the type of object this is
		 *
		 * @return string
		 */
		public function object() {
			return 'RelatedUnit';
		}
	}
