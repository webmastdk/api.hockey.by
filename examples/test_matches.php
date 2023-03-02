<?
//Выбор конкретного матча
$array = [
   'params'   => ['ID'=>226377],
];		
$ch = curl_init('https://hockey.by/api/1.0/?method=match&type=get');

curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$json = curl_exec($ch);
curl_close($ch);	
//echo $json;
echo 'Данные о матче 226377';
echo '<pre>'.print_r(json_decode($json),1).'</pre>';

//Выборка матчей за сегодня
$array = [
   'params'   => [],
];		
$ch = curl_init('https://hockey.by/api/1.0/?method=matches&type=get');

curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$json = curl_exec($ch);
curl_close($ch);	
//echo $json;
echo 'Матчи сегодня';
echo '<pre>'.print_r(json_decode($json),1).'</pre>';


//Выборка матчей за 2023-02-10
$array = [
   'params'   => ['DATE'=>['2023-03-01']],
];		
$ch = curl_init('https://hockey.by/api/1.0/?method=matches&type=get');

curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$json = curl_exec($ch);
curl_close($ch);	
//echo $json;
echo 'Матчи за 2023-03-01';
echo '<pre>'.print_r(json_decode($json),1).'</pre>';

//Выборка матчей за период 2023-02-10 - 2023-02-28
$array = [
            'params'   => ['DATE'=>['2023-02-10','2023-02-28']],
         ];		
$ch = curl_init('https://hockey.by/api/1.0/?method=matches&type=get');

curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$json = curl_exec($ch);
curl_close($ch);	
//echo $json;
echo 'Матчи за период 2023-02-10 - 2023-02-28';
echo '<pre>'.print_r(json_decode($json),1).'</pre>';