<?php

require(__DIR__ . '/vendor/autoload.php');

use Oft\Generator\ProvidersListBuilder;

$PATH_TO_JSON = '/data/data.json';
$OUTPUT_DIR_PATH = '/docs/';
$DOC_CONFIG_FILE_PATH = '/mkdocs.yml';
$LIST_MD_FILE_NAME = 'providers-list.md';

set_error_handler(function ($errno, $errstr) {
    throw new Exception($errstr."\n");
});

function getJsonContent ($path) {
    try {
        return json_decode(file_get_contents(__DIR__ . $path), true);
    } catch (Exception $ex) {
        throw $ex;
    }
}

try {
    $json_content = getJsonContent($PATH_TO_JSON);
    $providersListBuilder = new ProvidersListBuilder($json_content);
    $providersListBuilder->build();

    $output_list_file = fopen(__DIR__.$OUTPUT_DIR_PATH.$LIST_MD_FILE_NAME, 'w');
    fwrite($output_list_file, $providersListBuilder->getContent());

    fclose($output_list_file);
} catch (Exception $err) {
    echo $err->getMessage();
    exit;
}
