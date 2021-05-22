// const api="https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=68";

// function getSslPage($url) {
//     $ch = curl_init();
//     $headr = array();
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
//     curl_setopt($ch, CURLOPT_URL, $url ); // get the url contents
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch,CURLOPT_USERAGENT,'spider');
//     $data = curl_exec($ch); // execute curl request
//     curl_close($ch);
//     $xml = simplexml_load_string($data);
//     return json_encode($xml);
//     }
// getSslPage(api);