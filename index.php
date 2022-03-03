<?php 

// $data = [
//     "no_awb" => "3452440340005",
//     "shipper" => "OTTEN COFFEE INDONESIA PT INFINIA PARK BLK B 72 KOMP",
//     "services" => "REG",
//     "date_of_shipment" => "03-02-2021 20:26",
//     "origin" => "Jakarta",
//     "destination" => "PONDOKGEDE, BEKASI",
//     "consignee" => "Affandy Murad", 
//     "consigne_as" => "PAK MURADI",
//     "history" =>
//        [
//            [
//                 "description" =>"DELIVERED TO [PAK MURADI  | 04-02-2021 10:22 | BEKASI ]",
//                 "createdAt" => "2021-02-04T10:22:00+07:00",
//                 "formatted" => ["createdAt" => "04 Februari 2021, 10:22 WIB"]
//             ],
//             [
//                 "description" => "WITH DELIVERY COURIER [BEKASI]",
//                 "createdAt" => "2021-02-03T08:55:00+07:00",
//                 "formatted" => ["createdAt" => "04 Februari 2021, 08:55 WIB"]
//             ],
//             [
//                 "description" => "RECEIVED AT INBOUND STATION [BEKASI, HUB JATIASIH 4]",
//                 "createdAt" => "2021-02-03T08:00:00+07:00",
//                 "formatted" => ["createdAt" => "04 Februari 2021, 08:00 WIB"]
//             ],
//             [
//                 "description" => "SHIPMENT FORWARDED TO DESTINATION [BEKASI, HUB JATIASIH 4]",
//                 "createdAt" => "2021-02-03T06:40:00+07:00",
//                 "formatted" => ["createdAt" => "04 Februari 2021, 06:40 WIB"]
//             ],
//             [
//                 "description" => "RECEIVED AT WAREHOUSE [INBOUND BKI1]",
//                 "createdAt" => "2021-02-03T02:06:00+07:00",
//                 "formatted" => ["createdAt" => "04 Februari 2021, 02:06 WIB"]
//             ],
//             [
//                 "description" => "RECEIVED AT ORIGIN GATEWAY [JAKARTA]",
//                 "createdAt" => "2021-02-03T00:15:00+07:00",
//                 "formatted" => ["createdAt" => "04 Februari 2021, 00:15 WIB"]
//             ],
//             [
//                 "description" => "PROCESSED AT SORTING CENTER [JAKARTA, BANDARA MAS(OUTBOUND)]",
//                 "createdAt" => "2021-02-03T22:38:00+07:00",
//                 "formatted" => ["createdAt" => "03 Februari 2021, 22:38 WIB"]
//             ],
//             [
//                 "description" => "RECEIVED AT SORTING CENTER [JAKARTA]",
//                 "createdAt" => "2021-02-03T21:44:00+07:00",
//                 "formatted" => ["createdAt" => "03 Februari 2021, 21:44 WIB"]
//             ],
//             [
//                 "description" => "SHIPMENT RECEIVED BY JNE COUNTER OFFICER AT [JAKARTA]",
//                 "createdAt" => "2021-02-03T20:26:00+07:00",
//                 "formatted" => ["createdAt" => "03 Februari 2021, 20:26 WIB"]
//             ]
          
//        ]
// ];

// $result[] = [
//     "status" => [
//         "code" => "060101",
//         "message" => "Delivery tracking detail fetched successfully"
//     ],
//         "data" =>[
//             "nama" => $data['consigne_as'],
//             "history" => $data['history']
//         ]
//     ];

// echo json_encode($result);

// $html_string = '
//     <p class="Heading1-P">
//         <span class="Heading1-H">Chapter 1</span>
//     </p>
//     <p class="Normal-P">
//         <span class="Normal-H">This is chapter 1</span>
//     </p>
//     <p class="Heading1-P">
//         <span class="Heading1-H">Chapter 2</span>
//     </p>
//     <p class="Normal-P">
//         <span class="Normal-H">This is chapter 2</span>
//     </p>
//     <p class="Heading1-P">
//         <span class="Heading1-H">Chapter 3</span>
//     </p>
//     <p class="Normal-P">
//         <span class="Normal-H">This is chapter 3</span>
//     </p>';
// $html = str_get_html($html_string);
// foreach($html->find('span') as $element) {
//     if ($element->class === 'Heading1-H') {
//         $heading[] = $element->innertext;
//     }else if($element->class === 'Normal-H') {
//         $content[] = $element->innertext;
//     }
// }


// $dom = new DomDocument();
// $test='<p class="Heading1-P">
//     <span class="Heading1-H">Chapter 1</span>
// </p>
// <p class="Normal-P">
//     <span class="Normal-H">This is chapter 1</span>
// </p>
// <p class="Heading1-P">
//     <span class="Heading1-H">Chapter 2</span>
// </p>
// <p class="Normal-P">
//     <span class="Normal-H">This is chapter 2</span>
// </p>
// <p class="Heading1-P">
//     <span class="Heading1-H">Chapter 3</span>
// </p>
// <p class="Normal-P">
//     <span class="Normal-H">This is chapter 3</span>
// </p>';

// $dom->loadHTML($test);
// $xpath = new DOMXpath($dom);
// $heading=parseToArray($xpath,'Heading1-H');
// $content=parseToArray($xpath,'Normal-H');

// var_dump($heading);
// echo "<br/>";
// var_dump($content);
// echo "<br/>";

// function parseToArray($xpath,$class)
// {
// 	$xpathquery="//span[@class='".$class."']";
// 	$elements = $xpath->query($xpathquery);

// 	if (!is_null($elements)) {	
// 		$resultarray=array();
// 		foreach ($elements as $element) {
// 		    $nodes = $element->childNodes;
// 		    foreach ($nodes as $node) {
// 		      $resultarray[] = $node->nodeValue;
// 		    }
// 		}
// 		return $resultarray;
// 	}
// }


// $file = file_get_contents("https://gist.githubusercontent.com/nubors/eecf5b8dc838d4e6cc9de9f7b5db236f/raw/d34e1823906d3ab36ccc2e687fcafedf3eacfac9/jne-awb.html");

// echo $file;

// $dom = new domDocument;

// @$dom->loadHTML($file);

// $scrape = $dom->getElementsByTagName('td');
// // $scrape = $dom->document.getElementsByClassName('.table_style')[0];

// foreach ($scrape as $title) {
//     // $data[] =  $title->nodeValue;
//     echo json_encode($title->nodeValue);
// }

// echo json_encode($result);

// In case the File is in the API directory
include('simple_html_dom.php');

// Extracting DOM
$html = file_get_html(
'https://gist.githubusercontent.com/nubors/eecf5b8dc838d4e6cc9de9f7b5db236f/raw/d34e1823906d3ab36ccc2e687fcafedf3eacfac9/jne-awb.html');

// echo $html;

foreach($html->find('div.main-content') as $article) {
    $item = array();
    // // $caption = $article->find('td.seller-name div.seller-info span.seller-info-caption', 0);
    // // $mw = $article->find('td.offer-price span.variant-final-price span.m-w', 0);
    // if ($caption && $mw) {
    //     $item['name'] = $caption->plaintext;
    //     $item['price'] = $mw->plaintext;
    //     $articles[] = $item;
    // }
    $isi = $article->find('table.table_style ', 2);
    if($isi){
        $item['isi'] = $isi->plaintext;
        $articles[] = [
            "history"=>$item
        ];
    }
    print_r($articles);

}