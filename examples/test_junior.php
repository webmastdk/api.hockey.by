<?
//Список всех соревнований
$array = [
            'params'   => [],
         ];		
$ch = curl_init('https://hockey.by/api/1.0/?method=competitions&type=get');

curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$json = curl_exec($ch);
curl_close($ch);	
echo 'Список соревнований по детско-юношескому хоккею';
echo '<pre>'.print_r(json_decode($json),1).'</pre>';

//Турнирная таблица выбранного соревнования
$array = [
   'params'   => ['ID'=>'21-22'],
];		
$ch = curl_init('https://hockey.by/api/1.0/?method=statistic&type=get');

curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$json = curl_exec($ch);
curl_close($ch);	
echo 'Турнирная таблица конкретного соревнования';
echo '<pre>'.print_r(json_decode($json),1).'</pre>';