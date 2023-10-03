<?php

	/**
	 * QuickBooks PHP DevKit
	 *
	 * Copyright (c) 2010 Keith Palmer / ConsoliBYTE, LLC.
	 * All rights reserved. This program and the accompanying materials
	 * are made available under the terms of the Eclipse Public License v1.0
	 * which accompanies this distribution, and is available at
	 * http://www.opensource.org/licenses/eclipse-1.0.php
	 *
	 * See also:
	 *    http://wiki.consolibyte.com/
	 *
	 * Some notes:
	 *    - Go download the QuickBooks SDK (it has lots of helpful stuff in it)
	 *    - Onscreen Reference (shows all of the XML commands)
	 *    - Tools > qbXML Validator (the QuickBooks Web Connector error log shows almost no debugging information, run your XML through the Validator and it will tell you *exactly* what the error in your XML stream is)
	 *    - Your version of QuickBooks might not support the latest version of the qbXML SDK, so you might have to set the qbXML message version with: <?qbxml version="x.y"?> (try 2.0 or another low number if you get error messages about versions)
	 *    - Check our the QuickBooks_Utilities class, it contains a few helpful static methods
	 *
	 * @author Keith Palmer <keith@consolibyte.com>
	 * @license LICENSE.txt
	 *
	 * @package QuickBooks
	 */


	const QUICKBOOKS_DATATYPE_STRING = 'STRTYPE';
	const QUICKBOOKS_DATATYPE_ID = 'IDTYPE';
	const QUICKBOOKS_DATATYPE_FLOAT = 'AMTTYPE';
	const QUICKBOOKS_DATATYPE_BOOLEAN = 'BOOLTYPE';
	const QUICKBOOKS_DATATYPE_INTEGER = 'INTTYPE';
	const QUICKBOOKS_DATATYPE_DATE = 'DATETYPE';
	const QUICKBOOKS_DATATYPE_ENUM = 'ENUMTYPE';
	const QUICKBOOKS_DATATYPE_DATETIME = 'DATETIMETYPE';


	const QUICKBOOKS_SUPPORTED_DEFAULT = '';
	const QUICKBOOKS_SUPPORTED_ALL = '0x0';
	const QUICKBOOKS_SUPPORTED_SIMPLESTART = '0x1';
	const QUICKBOOKS_SUPPORTED_PRO = '0x2';
	const QUICKBOOKS_SUPPORTED_PREMIER = '0x4';
	const QUICKBOOKS_SUPPORTED_ENTERPRISE = '0x8';

	const QUICKBOOKS_PERSONALDATA_DEFAULT = '';
	const QUICKBOOKS_PERSONALDATA_NOTNEEDED = 'pdpNotNeeded';
	const QUICKBOOKS_PERSONALDATA_OPTIONAL = 'pdpOptional';
	const QUICKBOOKS_PERSONALDATA_REQUIRED = 'pdpRequired';

	const QUICKBOOKS_UNATTENDEDMODE_DEFAULT = '';
	const QUICKBOOKS_UNATTENDEDMODE_REQUIRED = 'umpRequired';
	const QUICKBOOKS_UNATTENDEDMODE_OPTIONAL = 'umpOptional';


	const QUICKBOOKS_LOCALE_UNITED_STATES = 'US';
	const QUICKBOOKS_LOCALE_US = QUICKBOOKS_LOCALE_UNITED_STATES;

	const QUICKBOOKS_LOCALE_CANADA = 'CA';
	const QUICKBOOKS_LOCALE_CA = QUICKBOOKS_LOCALE_CANADA;

	const QUICKBOOKS_LOCALE_UNITED_KINGDOM = 'UK';
	const QUICKBOOKS_LOCALE_UK = QUICKBOOKS_LOCALE_UNITED_KINGDOM;

	const QUICKBOOKS_LOCALE_AUSTRALIA = 'AU';
	const QUICKBOOKS_LOCALE_AU = QUICKBOOKS_LOCALE_AUSTRALIA;

	const QUICKBOOKS_LOCALE_ONLINE_EDITION = 'OE';
	const QUICKBOOKS_LOCALE_OE = QUICKBOOKS_LOCALE_ONLINE_EDITION;

	const QUICKBOOKS_NOOP = 'NoOp';

	// This is temporary, eventually we should implement an actual in-handler skip method
	const QUICKBOOKS_SKIP = 'NoOp';

	const QUICKBOOKS_ADD = 'Add';
	const QUICKBOOKS_MOD = 'Mod';
	const QUICKBOOKS_QUERY = 'Query';
	const QUICKBOOKS_DELETE = 'Delete';
	const QUICKBOOKS_IMPORT = 'Import';
	const QUICKBOOKS_AUDIT = 'Audit';

	const QUICKBOOKS_DERIVE_INVENTORYLEVELS = 'InventoryLevels';
	const QUICKBOOKS_DERIVE_INVENTORYASSEMBLYLEVELS = 'InventoryAssemblyLevels';

	const QUICKBOOKS_OBJECT_HOST = 'Host';
	const QUICKBOOKS_QUERY_HOST = 'HostQuery';
	const QUICKBOOKS_IMPORT_HOST = 'HostImport';

	const QUICKBOOKS_OBJECT_PREFERENCES = 'Preferences';
	const QUICKBOOKS_QUERY_PREFERENCES = 'PreferencesQuery';
	const QUICKBOOKS_IMPORT_PREFERENCES = 'PreferencesImport';

	const QUICKBOOKS_OBJECT_ACCOUNT = 'Account';
	const QUICKBOOKS_ADD_ACCOUNT = 'AccountAdd';
	const QUICKBOOKS_MOD_ACCOUNT = 'AccountMod';
	const QUICKBOOKS_QUERY_ACCOUNT = 'AccountQuery';
	const QUICKBOOKS_IMPORT_ACCOUNT = 'AccountImport';
	const QUICKBOOKS_DERIVE_ACCOUNT = 'AccountDerive';
	const QUICKBOOKS_AUDIT_ACCOUNT = 'AccountAudit';

	const QUICKBOOKS_OBJECT_BILL = 'Bill';
	const QUICKBOOKS_ADD_BILL = 'BillAdd';
	const QUICKBOOKS_MOD_BILL = 'BillMod';
	const QUICKBOOKS_QUERY_BILL = 'BillQuery';
	const QUICKBOOKS_IMPORT_BILL = 'BillImport';
	const QUICKBOOKS_DERIVE_BILL = 'BillDerive';
	const QUICKBOOKS_AUDIT_BILL = 'BillAudit';

	const QUICKBOOKS_OBJECT_BILLINGRATE = 'BillingRate';
	const QUICKBOOKS_ADD_BILLINGRATE = 'BillingRateAdd';
	const QUICKBOOKS_QUERY_BILLINGRATE = 'BillingRateQuery';
	const QUICKBOOKS_IMPORT_BILLINGRATE = 'BillingRateImport';

	const QUICKBOOKS_OBJECT_BILLTOPAY = 'BillToPay';
	const QUICKBOOKS_QUERY_BILLTOPAY = 'BillToPayQuery';
	const QUICKBOOKS_IMPORT_BILLTOPAY = 'BillToPayImport';

	const QUICKBOOKS_OBJECT_BILLPAYMENTCHECK = 'BillPaymentCheck';
	const QUICKBOOKS_ADD_BILLPAYMENTCHECK = 'BillPaymentCheckAdd';
	const QUICKBOOKS_MOD_BILLPAYMENTCHECK = 'BillPaymentCheckMod';
	const QUICKBOOKS_QUERY_BILLPAYMENTCHECK = 'BillPaymentCheckQuery';
	const QUICKBOOKS_IMPORT_BILLPAYMENTCHECK = 'BillPaymentCheckImport';

	const QUICKBOOKS_OBJECT_BILLPAYMENTCREDITCARD = 'BillPaymentCreditCard';
	const QUICKBOOKS_ADD_BILLPAYMENTCREDITCARD = 'BillPaymentCreditCardAdd';
	const QUICKBOOKS_MOD_BILLPAYMENTCREDITCARD = 'BillPaymentCreditCardMod';    // Not supported by current QuickBooks SDK
	const QUICKBOOKS_QUERY_BILLPAYMENTCREDITCARD = 'BillPaymentCreditCardQuery';
	const QUICKBOOKS_IMPORT_BILLPAYMENTCREDITCARD = 'BillPaymentCreditCardImport';

	const QUICKBOOKS_OBJECT_CHARGE = 'Charge';
	const QUICKBOOKS_ADD_CHARGE = 'ChargeAdd';
	const QUICKBOOKS_MOD_CHARGE = 'ChargeMod';
	const QUICKBOOKS_QUERY_CHARGE = 'ChargeQuery';
	const QUICKBOOKS_IMPORT_CHARGE = 'ChargeImport';
	const QUICKBOOKS_DERIVE_CHARGE = 'ChargeDerive';

	const QUICKBOOKS_OBJECT_CHECK = 'Check';
	const QUICKBOOKS_ADD_CHECK = 'CheckAdd';
	const QUICKBOOKS_MOD_CHECK = 'CheckMod';
	const QUICKBOOKS_QUERY_CHECK = 'CheckQuery';
	const QUICKBOOKS_IMPORT_CHECK = 'CheckImport';

	const QUICKBOOKS_OBJECT_CLASS = 'Class';
	const QUICKBOOKS_ADD_CLASS = 'ClassAdd';
	const QUICKBOOKS_QUERY_CLASS = 'ClassQuery';
	const QUICKBOOKS_IMPORT_CLASS = 'ClassImport';

	const QUICKBOOKS_OBJECT_COMPANY = 'Company';

	/**
	 * QuickBooks request to query a company for meta-data
	 * @var string
	 */
	const QUICKBOOKS_QUERY_COMPANY = 'CompanyQuery';
	const QUICKBOOKS_IMPORT_COMPANY = 'CompanyImport';

	const QUICKBOOKS_OBJECT_CREDITCARDCREDIT = 'CreditCardCredit';
	const QUICKBOOKS_ADD_CREDITCARDCREDIT = 'CreditCardCreditAdd';
	const QUICKBOOKS_MOD_CREDITCARDCREDIT = 'CreditCardCreditMod';
	const QUICKBOOKS_QUERY_CREDITCARDCREDIT = 'CreditCardCreditQuery';
	const QUICKBOOKS_IMPORT_CREDITCARDCREDIT = 'CreditCardCreditImport';

	const QUICKBOOKS_OBJECT_CREDITCARDREFUND = 'ARRefundCreditCard';
	const QUICKBOOKS_ADD_CREDITCARDREFUND = 'ARRefundCreditCardAdd';
	const QUICKBOOKS_QUERY_CREDITCARDREFUND = 'ARRefundCreditCardQuery';

	const QUICKBOOKS_OBJECT_CREDITCARDCHARGE = 'CreditCardCharge';
	const QUICKBOOKS_ADD_CREDITCARDCHARGE = 'CreditCardChargeAdd';
	const QUICKBOOKS_MOD_CREDITCARDCHARGE = 'CreditCardChargeMod';
	const QUICKBOOKS_QUERY_CREDITCARDCHARGE = 'CreditCardChargeQuery';
	const QUICKBOOKS_IMPORT_CREDITCARDCHARGE = 'CreditCardChargeImport';

	const QUICKBOOKS_OBJECT_CREDITCARDMEMO = 'CreditCardMemo';
	const QUICKBOOKS_ADD_CREDITCARDMEMO = 'CreditCardMemoAdd';
	const QUICKBOOKS_MOD_CREDITCARDMEMO = 'CreditCardMemoMod';
	const QUICKBOOKS_QUERY_CREDITCARDMEMO = 'CreditCardMemoQuery';

	const QUICKBOOKS_OBJECT_CREDITMEMO = 'CreditMemo';
	const QUICKBOOKS_ADD_CREDITMEMO = 'CreditMemoAdd';
	const QUICKBOOKS_MOD_CREDITMEMO = 'CreditMemoMod';
	const QUICKBOOKS_QUERY_CREDITMEMO = 'CreditMemoQuery';
	const QUICKBOOKS_IMPORT_CREDITMEMO = 'CreditMemoImport';
	const QUICKBOOKS_DERIVE_CREDITMEMO = 'CreditMemoDerive';

	const QUICKBOOKS_OBJECT_CURRENCY = 'Currency';
	const QUICKBOOKS_ADD_CURRENCY = 'CurrencyAdd';
	const QUICKBOOKS_MOD_CURRENCY = 'CurrencyMod';
	const QUICKBOOKS_QUERY_CURRENCY = 'CurrencyQuery';
	const QUICKBOOKS_IMPORT_CURRENCY = 'CurrencyImport';

	/**
	 * QuickBooks company object (company file meta-data)
	 * @var string
	 */
	const QUICKBOOKS_OBJECT_CUSTOMER = 'Customer';

	/**
	 * QuickBooks request to add a customer record
	 * @var string
	 */
	const QUICKBOOKS_ADD_CUSTOMER = 'CustomerAdd';

	/**
	 * QuickBooks request to modify a customer record
	 * @var string
	 */
	const QUICKBOOKS_MOD_CUSTOMER = 'CustomerMod';

	/**
	 * QuickBooks request to search for/query for customer records
	 * @var string
	 */
	const QUICKBOOKS_QUERY_CUSTOMER = 'CustomerQuery';
	const QUICKBOOKS_IMPORT_CUSTOMER = 'CustomerImport';
	const QUICKBOOKS_DERIVE_CUSTOMER = 'CustomerDerive';

	const QUICKBOOKS_OBJECT_CUSTOMERMSG = 'CustomerMsg';
	const QUICKBOOKS_ADD_CUSTOMERMSG = 'CustomerMsgAdd';
	const QUICKBOOKS_QUERY_CUSTOMERMSG = 'CustomerMsgQuery';
	const QUICKBOOKS_IMPORT_CUSTOMERMSG = 'CustomerMsgImport';

	const QUICKBOOKS_OBJECT_CUSTOMERTYPE = 'CustomerType';
	const QUICKBOOKS_ADD_CUSTOMERTYPE = 'CustomerTypeAdd';
	const QUICKBOOKS_QUERY_CUSTOMERTYPE = 'CustomerTypeQuery';
	const QUICKBOOKS_IMPORT_CUSTOMERTYPE = 'CustomerTypeImport';

	const QUICKBOOKS_OBJECT_DATAEXT = 'DataExt';
	const QUICKBOOKS_ADD_DATAEXT = 'DataExtAdd';
	const QUICKBOOKS_MOD_DATAEXT = 'DataExtMod';
	const QUICKBOOKS_DEL_DATAEXT = 'DataExtDel';
	const QUICKBOOKS_DELETE_DATAEXT = QUICKBOOKS_DEL_DATAEXT;

	const QUICKBOOKS_OBJECT_DATAEXTDEF = 'DataExtDef';
	const QUICKBOOKS_ADD_DATAEXTDEF = 'DataExtDefAdd';
	const QUICKBOOKS_MOD_DATAEXTDEF = 'DataExtDefMod';
	const QUICKBOOKS_DEL_DATAEXTDEF = 'DataExtDefDel';
	const QUICKBOOKS_DELETE_DATAEXTDEF = QUICKBOOKS_DEL_DATAEXTDEF;
	const QUICKBOOKS_QUERY_DATAEXTDEF = 'DataExtDefQuery';
	const QUICKBOOKS_IMPORT_DATAEXTDEF = 'DataExtDefImport';

	const QUICKBOOKS_OBJECT_DATEDRIVENTERMS = 'DateDrivenTerms';
	const QUICKBOOKS_ADD_DATEDRIVENTERMS = 'DateDrivenTermsAdd';
	const QUICKBOOKS_QUERY_DATEDRIVENTERMS = 'DateDrivenTermsQuery';
	const QUICKBOOKS_IMPORT_DATEDRIVENTERMS = 'DateDrivenTermsImport';

	/**
	 * Query QuickBooks for lists of deleted list items (customers, items, etc.)
	 */
	const QUICKBOOKS_QUERY_DELETEDLISTS = 'ListDeletedQuery';
	const QUICKBOOKS_IMPORT_DELETEDLISTS = 'ListDeletedImport';

	/**
	 * Query QuickBooks for lists of deleted transactions (payments, invoices, estimates, etc.)
	 */
	const QUICKBOOKS_QUERY_DELETEDTXNS = 'TxnDeletedQuery';
	const QUICKBOOKS_IMPORT_DELETEDTXNS = 'TxnDeletedImport';

	/**
	 * Alias of QUICKBOOKS_QUERY_DELETEDTXNS
	 */
	const QUICKBOOKS_QUERY_DELETEDTRANSACTIONS = QUICKBOOKS_QUERY_DELETEDTXNS;

	const QUICKBOOKS_OBJECT_DEPOSIT = 'Deposit';
	const QUICKBOOKS_ADD_DEPOSIT = 'DepositAdd';
	const QUICKBOOKS_MOD_DEPOSIT = 'DepositMod';
	const QUICKBOOKS_QUERY_DEPOSIT = 'DepositQuery';
	const QUICKBOOKS_IMPORT_DEPOSIT = 'DepositImport';

	const QUICKBOOKS_OBJECT_DEPARTMENT = 'Department';
	const QUICKBOOKS_ADD_DEPARTMENT = 'DepartmentAdd';
	const QUICKBOOKS_MOD_DEPARTMENT = 'DepartmentMod';
	const QUICKBOOKS_QUERY_DEPARTMENT = 'DepartmentQuery';
	const QUICKBOOKS_IMPORT_DEPARTMENT = 'DepartmentImport';

	const QUICKBOOKS_OBJECT_EMPLOYEE = 'Employee';
	const QUICKBOOKS_ADD_EMPLOYEE = 'EmployeeAdd';
	const QUICKBOOKS_MOD_EMPLOYEE = 'EmployeeMod';
	const QUICKBOOKS_QUERY_EMPLOYEE = 'EmployeeQuery';
	const QUICKBOOKS_IMPORT_EMPLOYEE = 'EmployeeImport';

	const QUICKBOOKS_QUERY_ENTITY = 'EntityQuery';

	const QUICKBOOKS_OBJECT_ESTIMATE = 'Estimate';
	const QUICKBOOKS_ADD_ESTIMATE = 'EstimateAdd';
	const QUICKBOOKS_MOD_ESTIMATE = 'EstimateMod';
	const QUICKBOOKS_QUERY_ESTIMATE = 'EstimateQuery';
	const QUICKBOOKS_IMPORT_ESTIMATE = 'EstimateImport';
	const QUICKBOOKS_AUDIT_ESTIMATE = 'EstimateAudit';

	const QUICKBOOKS_OBJECT_INVENTORYADJUSTMENT = 'InventoryAdjustment';
	const QUICKBOOKS_ADD_INVENTORYADJUSTMENT = 'InventoryAdjustmentAdd';
	const QUICKBOOKS_QUERY_INVENTORYADJUSTMENT = 'InventoryAdjustmentQuery';
	const QUICKBOOKS_IMPORT_INVENTORYADJUSTMENT = 'InventoryAdjustmentImport';

	/**
	 * Job constant in QuickBooks
	 *
	 * In actuality, there are no such thing as "Jobs" in QuickBooks. Jobs in
	 * QuickBooks are handled as customers with parent customers.
	 *
	 * @var string
	 */
	const QUICKBOOKS_OBJECT_JOB = 'Job';
	const QUICKBOOKS_ADD_JOB = 'JobAdd';
	const QUICKBOOKS_MOD_JOB = 'JobMod';
	const QUICKBOOKS_QUERY_JOB = 'JobQuery';
	const QUICKBOOKS_IMPORT_JOB = 'JobImport';

	const QUICKBOOKS_OBJECT_ITEM = 'Item';
	const QUICKBOOKS_QUERY_ITEM = 'ItemQuery';
	const QUICKBOOKS_IMPORT_ITEM = 'ItemImport';
	const QUICKBOOKS_DERIVE_ITEM = 'ItemDerive';

	const QUICKBOOKS_OBJECT_INVENTORYITEM = 'ItemInventory';
	const QUICKBOOKS_ADD_INVENTORYITEM = 'ItemInventoryAdd';
	const QUICKBOOKS_MOD_INVENTORYITEM = 'ItemInventoryMod';
	const QUICKBOOKS_QUERY_INVENTORYITEM = 'ItemInventoryQuery';
	const QUICKBOOKS_IMPORT_INVENTORYITEM = 'ItemInventoryImport';
	const QUICKBOOKS_DERIVE_INVENTORYITEM = 'ItemInventoryDerive';

	const QUICKBOOKS_OBJECT_INVENTORYASSEMBLYITEM = 'ItemInventoryAssembly';
	const QUICKBOOKS_ADD_INVENTORYASSEMBLYITEM = 'ItemInventoryAssemblyAdd';
	const QUICKBOOKS_MOD_INVENTORYASSEMBLYITEM = 'ItemInventoryAssemblyMod';
	const QUICKBOOKS_QUERY_INVENTORYASSEMBLYITEM = 'ItemInventoryAssemblyQuery';
	const QUICKBOOKS_IMPORT_INVENTORYASSEMBLYITEM = 'ItemInventoryAssemblyImport';

	const QUICKBOOKS_OBJECT_GROUPITEM = 'ItemGroup';
	const QUICKBOOKS_ADD_GROUPITEM = 'ItemGroupAdd';
	const QUICKBOOKS_MOD_GROUPITEM = 'ItemGroupMod';
	const QUICKBOOKS_QUERY_GROUPITEM = 'ItemGroupQuery';
	const QUICKBOOKS_IMPORT_GROUPITEM = 'ItemGroupImport';

	const QUICKBOOKS_OBJECT_NONINVENTORYITEM = 'ItemNonInventory';
	const QUICKBOOKS_ADD_NONINVENTORYITEM = 'ItemNonInventoryAdd';
	const QUICKBOOKS_MOD_NONINVENTORYITEM = 'ItemNonInventoryMod';
	const QUICKBOOKS_QUERY_NONINVENTORYITEM = 'ItemNonInventoryQuery';
	const QUICKBOOKS_IMPORT_NONINVENTORYITEM = 'ItemNonInventoryImport';

	const QUICKBOOKS_OBJECT_DISCOUNTITEM = 'ItemDiscount';
	const QUICKBOOKS_ADD_DISCOUNTITEM = 'ItemDiscountAdd';
	const QUICKBOOKS_MOD_DISCOUNTITEM = 'ItemDiscountMod';
	const QUICKBOOKS_QUERY_DISCOUNTITEM = 'ItemDiscountQuery';
	const QUICKBOOKS_IMPORT_DISCOUNTITEM = 'ItemDiscountImport';

	const QUICKBOOKS_OBJECT_FIXEDASSETITEM = 'ItemFixedAsset';
	const QUICKBOOKS_ADD_FIXEDASSETITEM = 'ItemFixedAssetAdd';
	const QUICKBOOKS_MOD_FIXEDASSETITEM = 'ItemFixedAssetMod';
	const QUICKBOOKS_QUERY_FIXEDASSETITEM = 'ItemFixedAssetQuery';
	const QUICKBOOKS_IMPORT_FIXEDASSETITEM = 'ItemFixedAssetImport';

	const QUICKBOOKS_OBJECT_PAYMENTITEM = 'ItemPayment';
	const QUICKBOOKS_ADD_PAYMENTITEM = 'ItemPaymentAdd';
	const QUICKBOOKS_MOD_PAYMENTITEM = 'ItemPaymentMod';
	const QUICKBOOKS_QUERY_PAYMENTITEM = 'ItemPaymentQuery';
	const QUICKBOOKS_IMPORT_PAYMENTITEM = 'ItemPaymentImport';

	const QUICKBOOKS_OBJECT_SERVICEITEM = 'ItemService';
	const QUICKBOOKS_ADD_SERVICEITEM = 'ItemServiceAdd';
	const QUICKBOOKS_MOD_SERVICEITEM = 'ItemServiceMod';
	const QUICKBOOKS_QUERY_SERVICEITEM = 'ItemServiceQuery';
	const QUICKBOOKS_IMPORT_SERVICEITEM = 'ItemServiceImport';

	const QUICKBOOKS_OBJECT_SALESTAXITEM = 'ItemSalesTax';
	const QUICKBOOKS_ADD_SALESTAXITEM = 'ItemSalesTaxAdd';
	const QUICKBOOKS_MOD_SALESTAXITEM = 'ItemSalesTaxMod';
	const QUICKBOOKS_QUERY_SALESTAXITEM = 'ItemSalesTaxQuery';
	const QUICKBOOKS_IMPORT_SALESTAXITEM = 'ItemSalesTaxImport';

	const QUICKBOOKS_OBJECT_SALESTAXGROUPITEM = 'ItemSalesTaxGroup';
	const QUICKBOOKS_ADD_SALESTAXGROUPITEM = 'ItemSalesTaxGroupAdd';
	const QUICKBOOKS_MOD_SALESTAXGROUPITEM = 'ItemSalesTaxGroupMod';
	const QUICKBOOKS_QUERY_SALESTAXGROUPITEM = 'ItemSalesTaxGroupQuery';
	const QUICKBOOKS_IMPORT_SALESTAXGROUPITEM = 'ItemSalesTaxGroupImport';

	const QUICKBOOKS_OBJECT_OTHERCHARGEITEM = 'ItemOtherCharge';
	const QUICKBOOKS_ADD_OTHERCHARGEITEM = 'ItemOtherChargeAdd';
	const QUICKBOOKS_MOD_OTHERCHARGEITEM = 'ItemOtherChargeMod';
	const QUICKBOOKS_QUERY_OTHERCHARGEITEM = 'ItemOtherChargeQuery';
	const QUICKBOOKS_IMPORT_OTHERCHARGEITEM = 'ItemOtherChargeImport';

	const QUICKBOOKS_OBJECT_PAYROLLITEMWAGE = 'PayrollItemWage';
	const QUICKBOOKS_ADD_PAYROLLITEMWAGE = 'PayrollItemWageAdd';
	const QUICKBOOKS_MOD_PAYROLLITEMWAGE = 'PayrollItemWageMod';
	const QUICKBOOKS_QUERY_PAYROLLITEMWAGE = 'PayrollItemWageQuery';
	const QUICKBOOKS_IMPORT_PAYROLLITEMWAGE = 'PayrollItemWageImport';

	const QUICKBOOKS_OBJECT_PAYROLLITEMNONWAGE = 'PayrollItemNonWage';
	const QUICKBOOKS_ADD_PAYROLLITEMNONWAGE = 'PayrollItemNonWageAdd';
	const QUICKBOOKS_MOD_PAYROLLITEMNONWAGE = 'PayrollItemNonWageMod';
	const QUICKBOOKS_QUERY_PAYROLLITEMNONWAGE = 'PayrollItemNonWageQuery';
	const QUICKBOOKS_IMPORT_PAYROLLITEMNONWAGE = 'PayrollItemNonWageImport';

	const QUICKBOOKS_OBJECT_ITEMRECEIPT = 'ItemReceipt';
	const QUICKBOOKS_ADD_ITEMRECEIPT = 'ItemReceiptAdd';
	const QUICKBOOKS_MOD_ITEMRECEIPT = 'ItemReceiptMod';
	const QUICKBOOKS_QUERY_ITEMRECEIPT = 'ItemReceiptQuery';
	const QUICKBOOKS_IMPORT_ITEMRECEIPT = 'ItemReceiptImport';

	const QUICKBOOKS_OBJECT_SUBTOTALITEM = 'ItemSubtotal';
	const QUICKBOOKS_ADD_SUBTOTALITEM = 'ItemSubtotalAdd';
	const QUICKBOOKS_MOD_SUBTOTALITEM = 'ItemSubtotalMod';
	const QUICKBOOKS_QUERY_SUBTOTALITEM = 'ItemSubtotalQuery';
	const QUICKBOOKS_IMPORT_SUBTOTALITEM = 'ItemSubtotalImport';

	const QUICKBOOKS_QUERY_ITEMSITES = 'ItemSitesQuery';

	const QUICKBOOKS_OBJECT_INVENTORYSITE = 'InventorySite';
	const QUICKBOOKS_ADD_INVENTORYSITE = 'InventorySiteAdd';
	const QUICKBOOKS_MOD_INVENTORYSITE = 'InventorySiteMod';
	const QUICKBOOKS_QUERY_INVENTORYSITE = 'InventorySiteQuery';
	const QUICKBOOKS_IMPORT_INVENTORYSITE = 'InventorySiteImport';

	const QUICKBOOKS_OBJECT_JOBTYPE = 'JobType';
	const QUICKBOOKS_ADD_JOBTYPE = 'JobTypeAdd';
	const QUICKBOOKS_QUERY_JOBTYPE = 'JobTypeQuery';
	const QUICKBOOKS_IMPORT_JOBTYPE = 'JobTypeImport';

	const QUICKBOOKS_OBJECT_JOURNALENTRY = 'JournalEntry';
	const QUICKBOOKS_ADD_JOURNALENTRY = 'JournalEntryAdd';
	const QUICKBOOKS_MOD_JOURNALENTRY = 'JournalEntryMod';
	const QUICKBOOKS_QUERY_JOURNALENTRY = 'JournalEntryQuery';
	const QUICKBOOKS_IMPORT_JOURNALENTRY = 'JournalEntryImport';

	const QUICKBOOKS_OBJECT_INVOICE = 'Invoice';

	/**
	 * QuickBooks request to create an invoice
	 * @var string
	 */
	const QUICKBOOKS_ADD_INVOICE = 'InvoiceAdd';

	/**
	 * QuickBooks request to modify an invoice
	 * @var string
	 */
	const QUICKBOOKS_MOD_INVOICE = 'InvoiceMod';

	/**
	 * QuickBooks request to run a query for invoices
	 * @var string
	 */
	const QUICKBOOKS_QUERY_INVOICE = 'InvoiceQuery';
	const QUICKBOOKS_IMPORT_INVOICE = 'InvoiceImport';
	const QUICKBOOKS_DERIVE_INVOICE = 'InvoiceDerive';
	const QUICKBOOKS_AUDIT_INVOICE = 'InvoiceAudit';

	const QUICKBOOKS_OBJECT_RECEIVEPAYMENT = 'ReceivePayment';

	/**
	 * QuickBooks request to register a payment as received
	 * @var string
	 */
	const QUICKBOOKS_ADD_RECEIVEPAYMENT = 'ReceivePaymentAdd';
	const QUICKBOOKS_MOD_RECEIVEPAYMENT = 'ReceivePaymentMod';
	const QUICKBOOKS_QUERY_RECEIVEPAYMENT = 'ReceivePaymentQuery';
	const QUICKBOOKS_IMPORT_RECEIVEPAYMENT = 'ReceivePaymentImport';
	const QUICKBOOKS_AUDIT_RECEIVEPAYMENT = 'ReceivePaymentAudit';
	const QUICKBOOKS_DERIVE_RECEIVEPAYMENT = 'ReceivePaymentDerive';

	const QUICKBOOKS_ADD_RECEIVE_PAYMENT = QUICKBOOKS_ADD_RECEIVEPAYMENT;
	const QUICKBOOKS_MOD_RECEIVE_PAYMENT = QUICKBOOKS_MOD_RECEIVEPAYMENT;
	const QUICKBOOKS_QUERY_RECEIVE_PAYMENT = QUICKBOOKS_QUERY_RECEIVEPAYMENT;
	const QUICKBOOKS_IMPORT_RECEIVE_PAYMENT = QUICKBOOKS_IMPORT_RECEIVEPAYMENT;
	const QUICKBOOKS_DERIVE_RECEIVE_PAYMENT = QUICKBOOKS_DERIVE_RECEIVEPAYMENT;

	const QUICKBOOKS_OBJECT_OTHERNAME = 'OtherName';
	const QUICKBOOKS_ADD_OTHERNAME = 'OtherNameAdd';
	const QUICKBOOKS_MOD_OTHERNAME = 'OtherNameMod';
	const QUICKBOOKS_QUERY_OTHERNAME = 'OtherNameQuery';
	const QUICKBOOKS_IMPORT_OTHERNAME = 'OtherNameImport';

	const QUICKBOOKS_OBJECT_PAYMENTMETHOD = 'PaymentMethod';
	const QUICKBOOKS_ADD_PAYMENTMETHOD = 'PaymentMethodAdd';
	const QUICKBOOKS_QUERY_PAYMENTMETHOD = 'PaymentMethodQuery';
	const QUICKBOOKS_IMPORT_PAYMENTMETHOD = 'PaymentMethodImport';

	const QUICKBOOKS_OBJECT_PRICELEVEL = 'PriceLevel';
	const QUICKBOOKS_ADD_PRICELEVEL = 'PriceLevelAdd';
	const QUICKBOOKS_MOD_PRICELEVEL = 'PriceLevelMod';
	const QUICKBOOKS_QUERY_PRICELEVEL = 'PriceLevelQuery';
	const QUICKBOOKS_IMPORT_PRICELEVEL = 'PriceLevelImport';

	const QUICKBOOKS_OBJECT_PURCHASEORDER = 'PurchaseOrder';
	const QUICKBOOKS_ADD_PURCHASEORDER = 'PurchaseOrderAdd';
	const QUICKBOOKS_MOD_PURCHASEORDER = 'PurchaseOrderMod';
	const QUICKBOOKS_QUERY_PURCHASEORDER = 'PurchaseOrderQuery';
	const QUICKBOOKS_IMPORT_PURCHASEORDER = 'PurchaseOrderImport';
	const QUICKBOOKS_DERIVE_PURCHASEORDER = 'PurchaseOrderDerive';
	const QUICKBOOKS_AUDIT_PURCHASEORDER = 'PurchaseOrderAudit';

	const QUICKBOOKS_ADD_PURCHASE_ORDER = QUICKBOOKS_ADD_PURCHASEORDER;
	const QUICKBOOKS_MOD_PURCHASE_ORDER = QUICKBOOKS_MOD_PURCHASEORDER;
	const QUICKBOOKS_QUERY_PURCHASE_ORDER = QUICKBOOKS_QUERY_PURCHASEORDER;
	const QUICKBOOKS_IMPORT_PURCHASE_ORDER = QUICKBOOKS_IMPORT_PURCHASEORDER;

	const QUICKBOOKS_OBJECT_SALESORDER = 'SalesOrder';
	const QUICKBOOKS_ADD_SALESORDER = 'SalesOrderAdd';
	const QUICKBOOKS_MOD_SALESORDER = 'SalesOrderMod';
	const QUICKBOOKS_QUERY_SALESORDER = 'SalesOrderQuery';
	const QUICKBOOKS_IMPORT_SALESORDER = 'SalesOrderImport';
	const QUICKBOOKS_DERIVE_SALESORDER = 'SalesOrderDerive';

	const QUICKBOOKS_OBJECT_SALESRECEIPT = 'SalesReceipt';
	const QUICKBOOKS_ADD_SALESRECEIPT = 'SalesReceiptAdd';
	const QUICKBOOKS_MOD_SALESRECEIPT = 'SalesReceiptMod';
	const QUICKBOOKS_QUERY_SALESRECEIPT = 'SalesReceiptQuery';
	const QUICKBOOKS_IMPORT_SALESRECEIPT = 'SalesReceiptImport';
	const QUICKBOOKS_AUDIT_SALESRECEIPT = 'SalesReceiptAudit';

	const QUICKBOOKS_OBJECT_SALESREP = 'SalesRep';
	const QUICKBOOKS_ADD_SALESREP = 'SalesRepAdd';
	const QUICKBOOKS_MOD_SALESREP = 'SalesRepMod';
	const QUICKBOOKS_QUERY_SALESREP = 'SalesRepQuery';
	const QUICKBOOKS_IMPORT_SALESREP = 'SalesRepImport';

	const QUICKBOOKS_OBJECT_SALESTAXCODE = 'SalesTaxCode';
	const QUICKBOOKS_ADD_SALESTAXCODE = 'SalesTaxCodeAdd';
	const QUICKBOOKS_QUERY_SALESTAXCODE = 'SalesTaxCodeQuery';
	const QUICKBOOKS_IMPORT_SALESTAXCODE = 'SalesTaxCodeImport';

	const QUICKBOOKS_OBJECT_SHIPMETHOD = 'ShipMethod';
	const QUICKBOOKS_ADD_SHIPMETHOD = 'ShipMethodAdd';
	const QUICKBOOKS_QUERY_SHIPMETHOD = 'ShipMethodQuery';
	const QUICKBOOKS_IMPORT_SHIPMETHOD = 'ShipMethodImport';

	const QUICKBOOKS_OBJECT_SPECIALACCOUNT = 'SpecialAccount';
	const QUICKBOOKS_ADD_SPECIALACCOUNT = 'SpecialAccountAdd';

	const QUICKBOOKS_OBJECT_SPECIALITEM = 'SpecialItem';
	const QUICKBOOKS_ADD_SPECIALITEM = 'SpecialItemAdd';

	const QUICKBOOKS_OBJECT_STANDARDTERMS = 'StandardTerms';
	const QUICKBOOKS_ADD_STANDARDTERMS = 'StandardTermsAdd';
	const QUICKBOOKS_QUERY_STANDARDTERMS = 'StandardTermsQuery';
	const QUICKBOOKS_IMPORT_STANDARDTERMS = 'StandardTermsImport';

	const QUICKBOOKS_OBJECT_TEMPLATE = 'Template';
	const QUICKBOOKS_QUERY_TEMPLATE = 'TemplateQuery';
	const QUICKBOOKS_IMPORT_TEMPLATE = 'TemplateImport';

	const QUICKBOOKS_OBJECT_TERMS = 'Terms';
	const QUICKBOOKS_QUERY_TERMS = 'TermsQuery';
	const QUICKBOOKS_IMPORT_TERMS = 'TermsImport';

	const QUICKBOOKS_DEL_LIST = 'ListDel';
	const QUICKBOOKS_DELETE_LIST = QUICKBOOKS_DEL_LIST;

	/**
	 *
	 */
	const QUICKBOOKS_OBJECT_TIMETRACKING = 'TimeTracking';
	const QUICKBOOKS_ADD_TIMETRACKING = 'TimeTrackingAdd';
	const QUICKBOOKS_MOD_TIMETRACKING = 'TimeTrackingMod';
	const QUICKBOOKS_QUERY_TIMETRACKING = 'TimeTrackingQuery';
	const QUICKBOOKS_IMPORT_TIMETRACKING = 'TimeTrackingImport';

	const QUICKBOOKS_OBJECT_TRANSACTION = 'Transaction';

	/**
	 * QuickBooks request to delete a transaction
	 * @var string
	 */
	const QUICKBOOKS_DELETE_TRANSACTION = 'TxnDel';
	const QUICKBOOKS_DEL_TRANSACTION = QUICKBOOKS_DELETE_TRANSACTION;
	const QUICKBOOKS_DEL_TXN = QUICKBOOKS_DELETE_TRANSACTION;
	const QUICKBOOKS_DELETE_TXN = QUICKBOOKS_DELETE_TRANSACTION;

	const QUICKBOOKS_QUERY_TRANSACTION = 'TransactionQuery';
	const QUICKBOOKS_VOID_TRANSACTION = 'TxnVoid';

	const QUICKBOOKS_IMPORT_TRANSACTION = 'TransactionImport';

	const QUICKBOOKS_OBJECT_VEHICLE = 'Vehicle';
	const QUICKBOOKS_ADD_VEHICLE = 'VehicleAdd';
	const QUICKBOOKS_MOD_VEHICLE = 'VehicleMod';
	const QUICKBOOKS_QUERY_VEHICLE = 'VehicleQuery';
	const QUICKBOOKS_IMPORT_VEHICLE = 'VehicleImport';

	const QUICKBOOKS_OBJECT_VEHICLEMILEAGE = 'VehicleMileage';
	const QUICKBOOKS_ADD_VEHICLEMILEAGE = 'VehicleMileageAdd';
	const QUICKBOOKS_MOD_VEHICLEMILEAGE = 'VehicleMileageMod';
	const QUICKBOOKS_QUERY_VEHICLEMILEAGE = 'VehicleMileageQuery';
	const QUICKBOOKS_IMPORT_VEHICLEMILEAGE = 'VehicleMileageImport';

	const QUICKBOOKS_OBJECT_VENDOR = 'Vendor';
	const QUICKBOOKS_ADD_VENDOR = 'VendorAdd';
	const QUICKBOOKS_MOD_VENDOR = 'VendorMod';
	const QUICKBOOKS_QUERY_VENDOR = 'VendorQuery';
	const QUICKBOOKS_IMPORT_VENDOR = 'VendorImport';
	const QUICKBOOKS_DERIVE_VENDOR = 'VendorDerive';

	const QUICKBOOKS_OBJECT_VENDORCREDIT = 'VendorCredit';
	const QUICKBOOKS_ADD_VENDORCREDIT = 'VendorCreditAdd';
	const QUICKBOOKS_MOD_VENDORCREDIT = 'VendorCreditMod';
	const QUICKBOOKS_QUERY_VENDORCREDIT = 'VendorCreditQuery';
	const QUICKBOOKS_IMPORT_VENDORCREDIT = 'VendorCreditImport';
	const QUICKBOOKS_DERIVE_VENDORCREDIT = 'VendorCreditDerive';

	const QUICKBOOKS_OBJECT_VENDORTYPE = 'VendorType';
	const QUICKBOOKS_ADD_VENDORTYPE = 'VendorTypeAdd';
	const QUICKBOOKS_QUERY_VENDORTYPE = 'VendorTypeQuery';
	const QUICKBOOKS_IMPORT_VENDORTYPE = 'VendorTypeImport';

	const QUICKBOOKS_OBJECT_WORKERSCOMPCODE = 'WorkersCompCode';
	const QUICKBOOKS_ADD_WORKERSCOMPCODE = 'WorkersCompCodeAdd';
	const QUICKBOOKS_MOD_WORKERSCOMPCODE = 'WorkersCompCodeMod';
	const QUICKBOOKS_QUERY_WORKERSCOMPCODE = 'WorkersCompCodeQuery';
	const QUICKBOOKS_IMPORT_WORKERSCOMPCODE = 'WorkersCompCodeImport';

	const QUICKBOOKS_OBJECT_UNITOFMEASURESET = 'UnitOfMeasureSet';
	const QUICKBOOKS_ADD_UNITOFMEASURESET = 'UnitOfMeasureSetAdd';
	//const QUICKBOOKS_MOD_UNITOFMEASURESET = 'UnitOfMeasureSetMod';
	const QUICKBOOKS_QUERY_UNITOFMEASURESET = 'UnitOfMeasureSetQuery';
	const QUICKBOOKS_IMPORT_UNITOFMEASURESET = 'UnitOfMeasureSetImport';

	/**
	 * An always-present QuickBooks constant for "TAXABLE" items to embed in "SalesTaxCodeRef FullName" qbXML values
	 *
	 * @var string
	 */
	const QUICKBOOKS_TAXABLE = 'TAX';

	/**
	 * An always-present QuickBooks constant for "NON-TAXABLE" items to embed in "SalesTaxCodeRef FullName" qbXML values
	 *
	 * @var string
	 */
	const QUICKBOOKS_NONTAXABLE = 'NON';

	const QUICKBOOKS_LISTID = 'ListID';
	const QUICKBOOKS_TXNID = 'TxnID';
	const QUICKBOOKS_TXNLINEID = 'TxnLineID';