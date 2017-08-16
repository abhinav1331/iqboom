<?php
include_once('simple_html_dom.php');
// create HTML DOM
$html = file_get_html('https://in.pinterest.com/search/pins/?q=independence%20logo%20vintage&rs=guide&term_meta[]=logo%7Cguide%7Cword%7C6&term_meta[]=moschino%7Cguide%7Cword%7C7&add_refine=vintage%7Cguide%7Cword%7C9');


    $items = $html->getElementsByTagName('script');
    $data = array();


    foreach ($items as $item) {
/*    	    echo "<pre>";
				print_r($item);
			echo "</pre>";*/
        $data[] = [
            'src' => $item->getAttribute('src'),
            'outerHTML' => $domd->saveHTML($item),
            'innerHTML' => $domd->saveHTML($item->firstChild),
        ];
    }
        foreach ($data as $key => $value) {

        $response = json_decode($value['innerHTML']);
        if (!$response) {
            continue;
        }
                         
        if (isset($response->tree->data->results)) {
            $i=1;
            foreach ($response->tree->data->results as $obj) {
                if ($i == 2) {
                    echo "<pre>";
                        print_r($obj);
                    echo "</pre>";
                }
        $i++;
            }
        }
    }
die();
?>