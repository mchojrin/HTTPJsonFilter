<?php

spl_autoload_register(function (string $className) {
    require_once $className . '.php';
});

$httpReader = new HTTPReader();

$offerCollection = $httpReader->read(file_get_contents(getenv('OFFERS_ENDPOINT')));
$productIterator = $offerCollection->getIterator();

$subcommand2FilterMapping = [
    'count_by_price_range' => function (Iterator $productIterator, array $argv) {
        return new PriceFilterIterator($productIterator, $argv[2], $argv[3]);
    },
    'count_by_vendor_id' => function(Iterator $productIterator, array $argv) {
        return new VendorIdFilterIterator($productIterator, intval($argv[2]));
    },
];

echo iterator_count($subcommand2FilterMapping[$argv[1]]($productIterator, $argv));
