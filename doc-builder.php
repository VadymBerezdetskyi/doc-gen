<?php
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

/*
 *
 *
 * */

try {
    /* sort json */
    $json_content = getJsonContent($PATH_TO_JSON);
    $tables = array_column($json_content, 'code');
    array_multisort($tables, SORT_ASC, $json_content);

    /* create directory for provider overview files */
    @mkdir('/providers');
    if (false === is_dir('/providers')) {
        throw new Exception('/providers is not a directory');
    }

    /* write to list */
    $output_list_file = fopen(__DIR__.$OUTPUT_DIR_PATH.$LIST_MD_FILE_NAME, 'w');
    fwrite($output_list_file, "#Payment Providers\n\n");
    $header = "";

    foreach ($json_content as $el) {
        if (strtoupper($el['code'][0]) !== $header) {
            /*
             *  write head letter and table header
             * */
            $header = strtoupper($el['code'][0]);
            fwrite($output_list_file, "\n##$header\n");
            fwrite($output_list_file, "|Logo|Name|Code|\n|----|----|----|\n");
        }

        /*
         * write table row
         * */
        fwrite($output_list_file, "|![](https://static.openfintech.io/payment_providers/$el[code]/logo.svg??w=600&c=v0.59.26#w100)|**$el[code]**|`$el[code]`|\n");

        /*
         * create file "$provider_code"
         * write content
         *
         *
         * */


    }

    fclose($output_list_file);
} catch (Exception $err) {
    echo $err->getMessage();
    exit;
}
