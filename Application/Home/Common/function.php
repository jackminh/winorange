<?php
/*数据采集*/
function curlDate($url,$filename){
	 $curl = curl_init();
	 curl_setopt($curl, CURLOPT_URL, $url);
	 curl_setopt($curl,CURLOPT_HEADER,1);
	 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	 $data = curl_exec($curl);
	 //写入文件
	 file_put_contents($filename, $data);
	 curl_close($curl);
}