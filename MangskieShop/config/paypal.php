<?php

return array(
/** set your paypal credential **/
'client_id' =>'AWHgqQal1bB5Hexd-aO-fzsDl9Z_k4zLnPFOnBMSS7_-nhirgnvsCdDf8eRs3H5P2HYwC2I5_ym63XiO',
'secret' => 'EM-q5BH9ym1UlwPgK6O4xyunmaRsGUa0945VdC4-VXqoGNaHYcv60oI96IW1aeSQtjcjckeslZorcP6Q',
/**
* SDK configuration
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);
