<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: PaymentMethodAddRq
	 *
	 * @author "Keith Palmer Jr." <Keith@ConsoliByte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 * @subpackage QBXML
	 */


	/**
	 *
	 */
	class PaymentMethodAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = '';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'Name'              => 'STRTYPE',
				'IsActive'          => 'BOOLTYPE',
				'PaymentMethodType' => 'ENUMTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'Name'              => 31,
				'IsActive'          => 0,
				'PaymentMethodType' => 0,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => true,
				'PaymentMethodType' => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'PaymentMethodAdd Name'              => 999.99,
				'PaymentMethodAdd IsActive'          => 999.99,
				'PaymentMethodAdd PaymentMethodType' => 7,
				'IncludeRetElement'                  => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'Name'              => false,
				'IsActive'          => false,
				'PaymentMethodType' => false,
			];

			return $paths;
		}

		/*
		abstract protected function &_inLocalePaths()
		{
			static $paths = array(
				'FirstName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ),
				'LastName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ),
				);

			return $paths;
		}
		*/

		protected function &_reorderPathsPaths() {
			static $paths = [
				0 => 'Name',
				1 => 'IsActive',
				2 => 'PaymentMethodType',
			];

			return $paths;
		}
	}

	?>