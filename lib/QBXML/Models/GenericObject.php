<?php

	namespace TheLogicStudio\QBXML\Models;

	use TheLogicStudio\QBXML\Cast;
	use TheLogicStudio\QBXML\Requests\GenericRq;
	use TheLogicStudio\QBXML\Utilities;
	use TheLogicStudio\QBXML\XML;

	/**
	 * Base class for QuickBooks objects
	 */
	abstract class GenericObject {
		/**
		 * QuickBooks XML parser option - preserve empty XML elements
		 */
		const XML_PRESERVE = 0;

		/**
		 * QuickBooks XML parser option - drop empty XML elements
		 */
		const XML_DROP = -1;

		/**
		 * QuickBooks XML parser option - compress /> empty XML elements
		 */
		const XML_COMPRESS = 1;

		/**
		 * Keys/values stored within the object
		 *
		 * @var array
		 */
		protected $_object = [];

		/**
		 * Create a new instance of this QuickBooks class
		 *
		 * @param array $arr
		 */
		public function __construct($arr) {
			$this->_object = $arr;
		}

		/**
		 * Return a constant indicating the type of object
		 *
		 * @return string
		 */
		abstract public function object();

		/**
		 * Get the date/time this object was created in QuickBooks
		 *
		 * @param string $format If you want the date/time in a particular format, specify the format here (use the notation from {@link http://www.php.net/date})
		 * @return string
		 */
		public function getTimeCreated($format = null) {
			if(!is_null($format)) {
				return date($format, strtotime($this->get('TimeCreated')));
			}

			return $this->get('TimeCreated');
		}

		/**
		 * Get the date/time when this object was last modified in QuickBooks
		 *
		 * @param string $format If you want the date/time in a particular format, specify the format here (use the notation from {@link http://www.php.net/date})
		 * @return string
		 */
		public function getTimeModified($format = null) {
			if(!is_null($format)) {
				return date($format, strtotime($this->get('TimeModified')));
			}

			return $this->get('TimeModified');
		}

		public function setEditSequence($value) {
			return $this->set('EditSequence', $value);
		}

		/**
		 * Get the QuickBooks EditSequence for this object
		 *
		 * @return integer
		 */
		public function getEditSequence() {
			return $this->get('EditSequence');
		}

		/**
		 * Set a value within the object
		 *
		 * @param string $key
		 * @param string $value
		 * @return self
		 */
		public function set($key, $value, $cast = true) {
			if(is_array($value)) {
				$this->_object[$key] = $value;
			} else {
				//print('set(' . $key . ', ' . $value . ', ' . $cast . ')' . "\n");

				if($cast and $value != '__EMPTY__') {
					$value = Cast::cast($this->object(), $key, $value, true, false);
				}

				//print('	setting [' . $key . '] to value {' . $value . '}' . "\n");

				$this->_object[$key] = $value;
			}

			return $this;
		}

		/**
		 * Get a value from the object
		 *
		 * @param string $key The key to fetch the value for
		 * @param mixed $default If there is no value set for the given key, this will be returned
		 * @return mixed            The value fetched
		 */
		public function get($key, $default = null) {
			if(isset($this->_object[$key])) {
				return $this->_object[$key];
			}

			return $default;
		}

		/**
		 * Get a FullName value (where : separates parent and child items)
		 *
		 * @param string $fullname_key The key to set, i.e. FullName
		 * @param string $name_key The 'Name' key, i.e. Name
		 * @param string $parent_key The parent key, i.e. ParentRef_FullName
		 * @param mixed $default
		 * @return string
		 */
		public function getFullNameType($fullname_key, $name_key, $parent_key, $default = null) {
			$fullname = $this->get($fullname_key);
			if(!$fullname) {
				$name = $this->get($name_key);
				$parent = $this->get($parent_key);

				if($name and $parent) {
					$fullname = $parent . ':' . $name;
				} else {
					$fullname = $name;
				}
			}

			return $fullname;
		}

		/**
		 * Set a Name field
		 *
		 * @param string $name_key
		 * @param string $value
		 * @return self
		 */
		public function setNameType($name_key, $value) {
			return $this->set($name_key, str_replace(':', '-', $value));
		}

		/**
		 * Set a FullName field
		 *
		 * @param string $fullname_key
		 * @param string $name_key
		 * @param string $parent_key
		 * @param string $value
		 * @return self
		 */
		public function setFullNameType($fullname_key, $name_key, $parent_key, $value) {
			if(false !== strpos($value, ':')) {
				if($name_key and $parent_key) {
					// This covers the case where we are setting FullName, which
					//	needs to be broken up into:
					//		Name
					//		ParentRef FullName

					$explode = explode(':', $value);
					$name = end($explode);
					$parent = implode(':', array_slice($explode, 0, -1));

					$this->set($name_key, $name);
					$this->set($parent_key, $parent);

					// Build the parent name from the newly set Name and ParentRef (need to fetch because they might have been casted/truncate)
					$value = $this->get($parent_key) . ':' . $this->get($name_key);
				}
			} else {
				$this->set($name_key, $value);

				// Fetch the Name (need to fetch because they might have been casted/truncate)
				$value = $this->get($name_key);
			}

			return $this->set($fullname_key, $value);
		}

		/**
		 * Set a boolean value
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return self
		 */
		public function setBooleanType($key, $value) {
			//print('setting BooleanType [' . $key . '] to ' . $value . "\n");

			if($value == 'true' or $value === 1 or $value === true) {
				//print("\t" . ' set to TRUE' . "\n");
				return $this->set($key, 'true');
			}

			//print("\t" . ' set to FALSE' . "\n");
			return $this->set($key, 'false');
		}

		/**
		 *
		 *
		 * @param string $key
		 * @param boolean $default
		 * @return boolean
		 */
		public function getBooleanType($key, $default = null) {
			if($this->exists($key)) {
				$boolean = $this->get($key);
				if(is_bool($boolean)) {
					return $boolean;
				} elseif($boolean == 'false') {
					return false;
				} elseif($boolean == 'true') {
					return true;
				}
			}

			return $default == 'true' or $default === 1 or $default === true;
		}

		/**
		 * Set a date
		 *
		 * @param string $key The key for where to store the date
		 * @param mixed $date The date value (accepts anything www.php.net/strtotime can convert or unix timestamps)
		 * @return self
		 */
		public function setDateType($key, $date, $dont_allow_19691231 = true) {
			if($date == '1969-12-31' and $dont_allow_19691231) {
				return $this;
			}

			if(!strlen($date) or
				$date == '0') {
				return $this;
			}

			// 1228241458		vs.		19830102
			//if (ereg('^[[:digit:]]+$', $date) and strlen($date) > 8)
			if(is_numeric($date) and strlen($date) > 8) {
				// It's a unix timestamp (seconds since unix epoch, conver to string)
				$date = date('Y-m-d', $date);
			}

			return $this->set($key, date('Y-m-d', strtotime($date)));
		}

		/**
		 * Get a date value
		 *
		 * @param string $key Get a date value
		 * @param string $format The format (any format from www.php.net/date)
		 * @return string
		 */
		public function getDateType($key, $format = 'Y-m-d') {
			if(!strlen($format)) {
				$format = 'Y-m-d';
			}

			if($this->exists($key) and $this->get($key)) {
				return date($format, strtotime($this->get($key)));
			}

			return null;
		}

		public function setAmountType($key, $amount) {
			return $this->set($key, sprintf('%01.2f', (float)$amount));
		}

		public function getAmountType($key) {
			return sprintf('%01.2f', (float)$this->get($key));
		}

		/**
		 * Tell if a data field exists within the object
		 *
		 * @param string $key
		 * @return boolean
		 */
		public function exists($key) {
			return isset($this->_object[$key]);
		}

		/**
		 * Removes a key from this object
		 *
		 * @param string $key
		 * @return boolean
		 */
		public function remove($key) {
			if(isset($this->_object[$key])) {
				unset($this->_object[$key]);
				return true;
			}

			return false;
		}

		public function getListItem($key, $index) {
			$list = $this->getList($key);

			if(isset($list[$index])) {
				return $list[$index];
			}

			return null;
		}

		/**
		 *
		 *
		 */
		public function addListItem($key, $obj) {
			$list = $this->getList($key);

			$list[] = $obj;

			return $this->set($key, $list);
		}

		/**
		 *
		 */
		public function getList($key) {
			$list = $this->get($key, []);

			if(!is_array($list)) {
				$list = [];
			}

			return $list;
		}

		/**
		 *
		 */
		public function getArray($pattern, $defaults = [], $defaults_if_empty = true) {
			$list = [];
			foreach($this->_object as $key => $value) {
				if($this->_fnmatch($pattern, $key)) {
					$list[$key] = $value;

					if($defaults_if_empty and
						empty($value) and
						isset($defaults[$key])) {
						$list[$key] = $defaults[$key];
					}
				}
			}

			return array_merge($defaults, $list);
		}

		/**
		 * Do some fancy string matching
		 *
		 * @param string $pattern
		 * @param string $str
		 * @return boolean
		 */
		protected function _fnmatch($pattern, $str) {
			return Utilities::fnmatch($pattern, $str);
		}

		/**
		 * Get a qbXML schema object for a particular type of request
		 *
		 * Schema objects are used to build and validate qbXML requests and the
		 * fields and data types of qbXML elements.
		 *
		 * @param string $request A valid QuickBooks API request (for example: CustomerAddRq, InvoiceQueryRq, CustomerModRq, etc.)
		 * @return GenericRq
		 */
		protected function _schema($request) {
			if(strtolower(substr($request, -2, 2)) != 'rq') {
				$request = $request . 'Rq';
			}

			$class = str_replace('\\Models', '\\Requests', __NAMESPACE__) . '\\' . $request;

			if(class_exists($class)) {
				return new $class();
			}

			return null;
		}

		/**
		 * Convert this QuickBooks object to an XML node object representation
		 *
		 * @param string $root The node to use as the root node of the XML node structure
		 * @param string $parent
		 * @return XML\Node
		 */
		public function asXML($root = null, $parent = null, $object = null) {
			if(is_null($root)) {
				$root = $this->object();
			}

			if(is_null($object)) {
				$object = $this->_object;
			}

			$Node = new XML\Node($root);

			foreach($object as $key => $value) {
				if(is_array($value)) {
					$Node->setChildDataAt($root . ' ' . $key, '', true);

					foreach($value as $sub) {
						//print('printing sub' . "\n");
						//print_r($sub);
						//print($sub->asXML());
						$Node->addChildAt($root, $sub->asXML(null, $root));
					}
				} else {
					$Node->setChildDataAt($root . ' ' . $key, $value, true);
				}
			}

			//print_r($Node);

			return $Node;
		}

		private function setArrayValue(&$array, $keys, $value) {
			$key = array_shift($keys);
			if(!empty($keys)) {
				if(!isset($array[$key])) $array[$key] = [];
				$this->setArrayValue($array[$key], $keys, $value);
			} else {
				$array[$key] = $value;
			}
		}

		public function asArray($request, $nest = false) {
			$out = [];
			foreach($this->_object as $key=>$value) {
				$keys = explode(' ', $key);
				$this->setArrayValue($out, $keys, $value);
			}
			return $out;
		}

		protected function _cleanup() {

		}


		/**
		 * @param int $version
		 * @param string $locale
		 * @param string $root
		 * @return string
		 */
		public function asQBXML($request, $version = null, $locale = null, $root = null) {
			$todo_for_empty_elements = XML::XML_DROP;
			$indent = "\t";

			// Call any cleanup routines
			$this->_cleanup();

			//
			if(strtolower(substr($request, -2, 2)) != 'rq') {
				$request .= 'Rq';
			}

			$Request = new XML\Node($request);

			if($schema = $this->_schema($request)) {
				$tmp = [];

				// Restrict it to a specific qbXML locale?
				if($locale) {
					// List of fields which are not supported for some versions of qbXML

					if(strlen($locale) == 2) {
						// The OSR lists locales as 'QBOE', 'QBUK', 'QBCA', etc. vs. our QUICKBOOKS_LOCALE_* constants of just 'OE', 'UK', 'CA', etc.
						$locale = 'QB' . $locale;
					}

					$locales = $schema->localePaths();
				}

				$thelist = $this->asList($request);
				$reordered = $schema->reorderPaths(array_keys($thelist));

				foreach($reordered as $key => $path) {
					$value = $this->_object[$path];

					if(is_array($value)) {
						$tmp[$path] = [];

						foreach($value as $arr) {
							$tmp2 = [];

							foreach($arr->asList('') as $inkey => $invalue) {
								$arr->set($path . ' ' . $inkey, $invalue);
							}

							foreach($schema->reorderPaths(array_keys($arr->asList(''))) as $subkey => $subpath) {
								// We need this later, so store it
								$fullpath = $subpath;

								if($locale and
									isset($locales[$subpath])) {
									if(!in_array($locale, $locales[$subpath])) {
										$subpath = substr($subpath, strlen($path) + 1);
										$tmp2[$subpath] = $arr->get($subpath);
									}
								} else {
									$subpath = substr($subpath, strlen($path) + 1);
									$tmp2[$subpath] = $arr->get($subpath);
								}

								if($schema->dataType($fullpath) == QUICKBOOKS_QBXML_SCHEMA_TYPE_AMTTYPE and
									isset($tmp2[$subpath])) {
									$tmp2[$subpath] = sprintf('%01.2f', $tmp2[$subpath]);
								}
							}

							$tmp2 = new Generic($tmp2, $arr->object());

							$tmp[$path][] = $tmp2;
						}
					} else {
						// Do some simple data type casting...
						if($schema->dataType($path) == QUICKBOOKS_QBXML_SCHEMA_TYPE_AMTTYPE) {
							$this->_object[$path] = sprintf('%01.2f', $this->_object[$path]);
						}

						if($locale and // If a locale is specified...
							isset($locales[$path]))        // ... and this path is set in the locales restriction array
						{
							// Check to see if it's supported by the given locale

							if(!in_array($locale, $locales[$path])) {
								$tmp[$path] = $this->_object[$path];
							}
						} else {
							// If we don't know whether or not it's supported, return it!

							$tmp[$path] = $this->_object[$path];
						}
					}
				}

				// *DO NOT* change the source values of the original object!
				//$this->_object = $tmp;

				if($wrapper = $schema->qbxmlWrapper()) {

					$Node = $this->asXML($wrapper, null, $tmp);
					$Request->addChild($Node);

					return $Request->asXML($todo_for_empty_elements, $indent);
				} elseif(count($this->_object) == 0) {
					// This catches the cases where we just want to get *all* objects
					//	back (no filters) and thus the root level qbXML element is *empty*
					//	and we need to *preserve* this empty element rather than just
					//	drop it (which results in an empty string, and thus invalid query)

					$Node = $this->asXML($request, null, $tmp);

					return $Node->asXML(XML::XML_PRESERVE, $indent);
				} else {
					$Node = $this->asXML($request, null, $tmp);

					return $Node->asXML($todo_for_empty_elements, $indent);
				}
			}

			return '';
		}

		/**
		 *
		 *
		 *
		 */
		public function asList($request) {
			$arr = $this->_object;
			$object = $this->object();

			/*
			foreach ($arr as $key => $value)
			{
				$arr[$key] = Cast::cast($object, $key, $value);
			}
			*/

			return $arr;
		}

		/**
		 *
		 *
		 */
		static protected function _fromXMLHelper($class, $XML) {
			if(is_object($XML)) {
				$paths = $XML->asArray(XML::ARRAY_PATHS);
				foreach($paths as $path => $value) {
					$newpath = implode(' ', array_slice(explode(' ', $path), 1));
					$paths[$newpath] = $value;
					unset($paths[$path]);
				}

				return new $class($paths);
			}

			return null;
		}

		/**
		 * Convert a XML\Node object to a QuickBooks_Object_* object instance
		 *
		 * @param XML\Node $XML
		 * @param string $action_or_object
		 * @return self|null
		 */
		static public function fromXML($XML, $action_or_object = null): ?static {
			if(!$action_or_object or $action_or_object == QUICKBOOKS_QUERY_ITEM) {
				$action_or_object = $XML->name();
			}

			$type = Utilities::actionToObject($action_or_object);

			$exceptions = [
				QUICKBOOKS_OBJECT_SERVICEITEM           => 'ServiceItem',
				QUICKBOOKS_OBJECT_INVENTORYITEM         => 'InventoryItem',
				QUICKBOOKS_OBJECT_NONINVENTORYITEM      => 'NonInventoryItem',
				QUICKBOOKS_OBJECT_DISCOUNTITEM          => 'DiscountItem',
				QUICKBOOKS_OBJECT_FIXEDASSETITEM        => 'FixedAssetItem',
				QUICKBOOKS_OBJECT_GROUPITEM             => 'GroupItem',
				QUICKBOOKS_OBJECT_OTHERCHARGEITEM       => 'OtherChargeItem',
				QUICKBOOKS_OBJECT_SALESTAXITEM          => 'SalesTaxItem',
				QUICKBOOKS_OBJECT_SALESTAXGROUPITEM     => 'SalesTaxGroupItem',
				QUICKBOOKS_OBJECT_SUBTOTALITEM          => 'SubtotalItem',
				QUICKBOOKS_OBJECT_INVENTORYASSEMBLYITEM => 'InventoryAssemblyItem',
			];

			if(isset($exceptions[$type])) {
				$type = $exceptions[$type];
			}

			//print('trying to create type: {' . $type . '}' . "\n");

			$class = __NAMESPACE__ . '\\' . ucfirst(strtolower($type));

			if(true)        //class_exists($class, false))
			{
				$Object = self::_fromXMLHelper($class, $XML);

				if(!is_object($Object)) {
					return null;
				}

				$children = [];
				switch($Object->object()) {
					case QUICKBOOKS_OBJECT_RECEIVEPAYMENT:

						$children = [
							'AppliedToTxnRet' => [ReceivePayment\AppliedToTxn::class, 'addAppliedToTxn'],
						];

						break;
					case QUICKBOOKS_OBJECT_BILL:

						$children = [
							'ItemLineRet'    => [Bill\ItemLine::class, 'addItemLine'],
							'ExpenseLineRet' => [Bill\ExpenseLine::class, 'addExpenseLine'],
						];

						break;
					// case QUICKBOOKS_OBJECT_PURCHASEORDER:
					//
					// 	$children = [
					// 		'PurchaseOrderLineRet' => [PurchaseOrder\PurchaseOrderLine::class, 'addPurchaseOrderLine'],
					// 	];
					//
					// 	break;
					case QUICKBOOKS_OBJECT_INVOICE:

						$children = [
							'InvoiceLineRet' => [Invoice\InvoiceLine::class, 'addInvoiceLine'],
							'LinkedTxn'      => [Invoice\LinkedTxn::class, 'addLinkedTxn'],
						];

						break;
					case QUICKBOOKS_OBJECT_CREDITMEMO:

						$children = [
							'CreditMemoLineRet' => [CreditMemo\CreditMemoLine::class, 'addCreditMemoLine'],
							'LinkedTxn'         => [CreditMemo\LinkedTxn::class, 'addLinkedTxn'],
						];

						break;
					case QUICKBOOKS_OBJECT_ESTIMATE:

						$children = [
							'EstimateLineRet' => [Estimate\EstimateLine::class, 'addEstimateLine'],
						];

						break;
					case QUICKBOOKS_OBJECT_SALESRECEIPT:

						$children = [
							'SalesReceiptLineRet' => [SalesReceipt\SalesReceiptLine::class, 'addSalesReceiptLine'],
						];

						break;
					case QUICKBOOKS_OBJECT_JOURNALENTRY:

						$children = [
							'JournalCreditLineRet' => [JournalEntry\JournalCreditLine::class, 'addCreditLine'],
							'JournalDebitLineRet'  => [JournalEntry\JournalDebitLine::class, 'addDebitLine'],
						];

						break;
					case QUICKBOOKS_OBJECT_SALESTAXGROUPITEM:

						$children = [
							'ItemSalesTaxRef' => [SalesTaxGroupItem\ItemSalesTaxRef::class, 'addItemSalesTaxRef'],
						];

						break;
					case QUICKBOOKS_OBJECT_UNITOFMEASURESET:

						$children = [
							'RelatedUnit' => [UnitOfMeasureSet\RelatedUnit::class, 'addRelatedUnit'],
							'DefaultUnit' => [UnitOfMeasureSet\DefaultUnit::class, 'addDefaultUnit'],
						];

						break;
				}

				foreach($children as $node => $tmp) {
					$childclass = $tmp[0];
					$childmethod = $tmp[1];

					if(class_exists($childclass)) {
						foreach($XML->children() as $ChildXML) {
							if($ChildXML->name() == $node) {
								$ChildObject = self::_fromXMLHelper($childclass, $ChildXML);
								$Object->$childmethod($ChildObject);
							}
						}
					} else {
						print('Missing class: ' . $childclass . "\n");
					}
				}

				return $Object;
			}
		}

		/**
		 * Convert a qbXML string to a QuickBooks_Object_* object instance
		 *
		 * @param string $qbxml
		 * @param string $action_or_object
		 * @return self|bool
		 */
		static public function fromQBXML($qbxml, $action_or_object = null) {
			$errnum = null;
			$errmsg = null;

			$Parser = new XML\Parser($qbxml);
			if($Doc = $Parser->parse($errnum, $errmsg)) {
				$XML = $Doc->getRoot();

				return self::fromXML($XML, $action_or_object);
			}

			return false;
		}
	}
