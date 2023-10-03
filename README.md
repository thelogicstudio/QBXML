# Quickbooks QBXML Helper

This is a simple set of classes to assist in parsing and creating QBXML for communicating with Quickbooks Desktop (probably through the Quickbooks Web Connector). A lot of this is based on [Keith Palmer's prior work](https://github.com/consolibyte/quickbooks-php). My take on it lets you integrate your own application logic - this library just deals with the QBXML parsing. This also adds namespacing, method chaining, and fixes a number of bugs and inconsistencies in Keith's work.

## Usage

### Parsing

Reading a QBXML response might look something like this:

    $doc = (new \TheLogicStudio\QBXML\XML\Parser($response))->parse($errnum, $errmsg);
    $root = $doc->getRoot();
    $out = [];
    foreach($root->getChildAt('QBXML QBXMLMsgsRs')->children() as $child) {
        if(str_ends_with($child->name(), 'QueryRs')) {
            /** @var Models\GenericObject $class */
            $class = '\\TheLogicStudio\\QBXML\\Models\\'.substr($child->name(), 0, -7);
            foreach($child->children() as $node) {
                $out[] = $class::fromXML($node);
            }
        }
    }

### Creating

And creating a request to send to Quickbooks might look like this:

    $qbxml = (new \TheLogicStudio\QBXML\Models\Account())
        ->setName('My Account')
        ->setAccountNumber(99)
        ->asQBXML('AccountAddRq');

## Contributing

This code is far from perfect - if you'd like to help make it better, feel free to send a pull request on through. You can find me on 𝕏 as [@IanTLS](https://twitter.com/IanTLS) if you've got questions I guess.