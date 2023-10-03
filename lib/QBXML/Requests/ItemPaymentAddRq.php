<?php

	namespace TheLogicStudio\QBXML\Requests;

	/**
	 * Schema object for: ItemPaymentAddRq
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
	class ItemPaymentAddRq extends GenericRq {
		protected function &_qbxmlWrapper() {
			static $wrapper = 'ItemPaymentAdd';

			return $wrapper;
		}

		protected function &_dataTypePaths() {
			static $paths = [
				'Name'                         => 'STRTYPE',
				'IsActive'                     => 'BOOLTYPE',
				'ItemDesc'                     => 'STRTYPE',
				'DepositToAccountRef ListID'   => 'IDTYPE',
				'DepositToAccountRef FullName' => 'STRTYPE',
				'PaymentMethodRef ListID'      => 'IDTYPE',
				'PaymentMethodRef FullName'    => 'STRTYPE',
				'IncludeRetElement'            => 'STRTYPE',
			];

			return $paths;
		}

		protected function &_maxLengthPaths() {
			static $paths = [
				'Name'                         => 31,
				'IsActive'                     => 0,
				'ItemDesc'                     => 4095,
				'DepositToAccountRef ListID'   => 0,
				'DepositToAccountRef FullName' => 159,
				'PaymentMethodRef ListID'      => 0,
				'PaymentMethodRef FullName'    => 159,
				'IncludeRetElement'            => 50,
			];

			return $paths;
		}

		protected function &_isOptionalPaths() {
			static $paths = [
				'Name'                         => false,
				'IsActive'                     => true,
				'ItemDesc'                     => true,
				'DepositToAccountRef ListID'   => true,
				'DepositToAccountRef FullName' => true,
				'PaymentMethodRef ListID'      => true,
				'PaymentMethodRef FullName'    => true,
				'IncludeRetElement'            => true,
			];
		}

		protected function &_sinceVersionPaths() {
			static $paths = [
				'Name'                         => 999.99,
				'IsActive'                     => 999.99,
				'ItemDesc'                     => 999.99,
				'DepositToAccountRef ListID'   => 999.99,
				'DepositToAccountRef FullName' => 999.99,
				'PaymentMethodRef ListID'      => 999.99,
				'PaymentMethodRef FullName'    => 999.99,
				'IncludeRetElement'            => 4,
			];

			return $paths;
		}

		protected function &_isRepeatablePaths() {
			static $paths = [
				'Name'                         => false,
				'IsActive'                     => false,
				'ItemDesc'                     => false,
				'DepositToAccountRef ListID'   => false,
				'DepositToAccountRef FullName' => false,
				'PaymentMethodRef ListID'      => false,
				'PaymentMethodRef FullName'    => false,
				'IncludeRetElement'            => true,
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
				2 => 'ItemDesc',
				3 => 'DepositToAccountRef ListID',
				4 => 'DepositToAccountRef FullName',
				5 => 'PaymentMethodRef ListID',
				6 => 'PaymentMethodRef FullName',
				7 => 'IncludeRetElement',
			];

			return $paths;
		}
	}

	?>