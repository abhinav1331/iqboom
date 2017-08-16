<?php 
include("../wp-config.php");
for ($i=1; $i < 2; $i++) { 
    $q = array("Home feed" ,"Popular","Everything","Gifts","Videos","Animals and pets","Architecture","Art","Cars and motorcycles","Celebrations and events","Celebrities","DIY and crafts","Design","Education","Entertainment","Food and drink","Gardening","Geek","Hair and beauty","Health and fitness","History","Home décor",'Humour',"Illustrations and posters","Kids and parenting","Mens fashion","Outdoors","Photography","Products","Quotes","Science and nature","Sports","Tattoos","Technology","Travel",'Weddings',"Womens fashion","Time Management","Life Hacks","College","Motivation","Stay Focused","Morning Person","Organisation","Office","Business","Work","Things To Do","Organizations",'Student',"Ideas","Bullet Journal","Lifestyle","Gadgets",'Inspiration',"Study","Writing","Free Printables","House","Quotes","High Schools","Mom","Entrepreneur","Saving Money","Buzzfeed","DIY Projects","Infographic","Simple","Articles","People","Essential Oils","To Get","Social Media","Food Photography","Website","Posts","Awesome","Makeup Artists","Baking Soda","Money","Skincare");
    $random_keys=array_rand($q,$i);
    if($i == 1) {
        $test = $q[$random_keys];
    } else {
        $test = "";
        foreach ($random_keys as $key => $value) {
            $test.= $q[$value]." ";
        }
    }
    echo $test;
    $testing = addtoMywork(urlencode($test));
    if($testing != "") {
        echo "<pre>";
            print_r($testing);
        echo "</pre>";

        break;
    }
}



function addtoMywork($searchQuery) {
    $url = "https://in.pinterest.com/search/pins/?q=".$searchQuery;

      $html = file_get_contents($url);
    // die();


    $domd = new \DOMDocument();
    libxml_use_internal_errors(true);
    $domd->loadHTML($html);
    libxml_use_internal_errors(false);

    $items = $domd->getElementsByTagName('script');
    $data = array();


    foreach ($items as $item) {

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
                $testt = "";
                if($obj->repin_count >100) {
                    return $obj;
                    break;
                }
        $i++;
            }
        }
    }
}

 ?>