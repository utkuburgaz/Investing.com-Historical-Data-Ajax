<?php

$ch = curl_init();

$postField = 'curr_id=19487&smlID=1167395&header=KRDMD+Historical+Data&st_date=01%2F24%2F2020&end_date=01%2F24%2F2021&interval_sec=Daily&sort_col=date&sort_ord=DESC&action=historical_data';

curl_setopt($ch, CURLOPT_URL, 'https://www.investing.com/instruments/HistoricalDataAjax');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $postField);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Accept: text/plain, */*; q=0.01';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://www.investing.com';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.investing.com/equities/kardemir-(d)-historical-data';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
$headers[] = 'Cookie: PHPSESSID=h5h5gbvet9vg5hdgh7h99d42sf; adFreePromoCookieorange=2; adBlockerNewUserDomains=1610807470; StickySession=id.14592119400.942.www.investing.com; udid=bc58b771b292fda79c9eea7c12fb1edf; logglytrackingsession=802e3488-63fc-40b9-8d0e-074b48b9dbf1; __gads=ID=38061037c77ced69:T=1610807472:S=ALNI_MaYdzdV9JXA9VhZtcnHwIE4n8hVUA; _ga=GA1.2.2047994969.1610807473; OB-USER-TOKEN=4205b3cb-ac13-4156-b6d3-1cf2a9f55f8d; G_ENABLED_IDPS=google; _fbp=fb.1.1610807494685.1122034785; _hjTLDTest=1; _hjid=380ae920-7f6f-49f3-9bfe-81edd1fc1fcf; r_p_s_n=1; ses_id=ZCplJGBvZGxjJz07NWQ0NjFhMmA2NWZjZmBlb2BvZXNnc2NtZTIzdT4xaCZubWN%2FMGZlMWM0YTE1NzUxMz9hPGQ3ZWRgPmQ%2BY2Y9ZTVmNDMxYDI8NjdmN2ZgZTdgYGU9Z2hjMWUxM2I%2BaGg8bmFjODAiZXljJ2FwNWc1ZTNyYSZka2UkYDBkOGM1PTM1MDQ%2FMWIyOzYyZmVmZmU1YGdlfWcs; G_AUTHUSER_H=0; _VT_content_200556242_1=1; _pbjs_userid_consent_data=3524755945110770; SKpbjs-id5id=%7B%22created_at%22%3A%222021-01-19T18%3A17%3A36.258Z%22%2C%22id5_consent%22%3Atrue%2C%22original_uid%22%3A%22ID5-ZHMO8QNaW6TQgkFOz4u-LqEKnuyXQkIz9Obz7hKvtA%22%2C%22universal_uid%22%3A%22ID5-ZHMOusyqaQkxhmxqEzGuKqJ2U1x3aoFAYPUjz2-IYQ%22%2C%22signature%22%3A%22ID5_ARD-SPLTZX4j6niCZ_PhY_dp2ZHJH9uIG2uIDxP5Ggpi3armtd35bkZeQLREQ525yGbkPsQ2kWbwGn8eiADKYMI%22%2C%22link_type%22%3A2%2C%22cascade_needed%22%3Atrue%7D; SKpbjs-id5id_last=Tue%2C%2019%20Jan%202021%2018%3A17%3A36%20GMT; SKpbjs-unifiedid=%7B%22TDID%22%3A%223f183b91-51b1-434f-85e0-43fccddd9546%22%2C%22TDID_LOOKUP%22%3A%22TRUE%22%2C%22TDID_CREATED_AT%22%3A%222020-12-19T18%3A17%3A36%22%7D; SKpbjs-unifiedid_last=Tue%2C%2019%20Jan%202021%2018%3A17%3A36%20GMT; id5id.1st_212_nb=1; SideBlockUser=a%3A2%3A%7Bs%3A10%3A%22stack_size%22%3Ba%3A1%3A%7Bs%3A11%3A%22last_quotes%22%3Bi%3A8%3B%7Ds%3A6%3A%22stacks%22%3Ba%3A1%3A%7Bs%3A11%3A%22last_quotes%22%3Ba%3A5%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A7%3A%22pair_ID%22%3Bs%3A5%3A%2219487%22%3Bs%3A10%3A%22pair_title%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22pair_link%22%3Bs%3A22%3A%22%2Fequities%2Fkardemir-%28d%29%22%3B%7Di%3A1%3Ba%3A3%3A%7Bs%3A7%3A%22pair_ID%22%3Bs%3A5%3A%2219155%22%3Bs%3A10%3A%22pair_title%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22pair_link%22%3Bs%3A16%3A%22%2Findices%2Fise-100%22%3B%7Di%3A2%3Ba%3A3%3A%7Bs%3A7%3A%22pair_ID%22%3Bs%3A5%3A%2219163%22%3Bs%3A10%3A%22pair_title%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22pair_link%22%3Bs%3A20%3A%22%2Findices%2Fise-all-100%22%3B%7Di%3A3%3Ba%3A3%3A%7Bs%3A7%3A%22pair_ID%22%3Bs%3A5%3A%2219193%22%3Bs%3A10%3A%22pair_title%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22pair_link%22%3Bs%3A21%3A%22%2Findices%2Fise-istanbul%22%3B%7Di%3A4%3Ba%3A3%3A%7Bs%3A7%3A%22pair_ID%22%3Bs%3A7%3A%221169050%22%3Bs%3A10%3A%22pair_title%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22pair_link%22%3Bs%3A35%3A%22%2Fequities%2Ftacirler-portfolio-equity%22%3B%7D%7D%7D%7D; _ym_uid=1611081242520330677; _ym_d=1611081242; comment_notification_201947798=1; geoC=TR; adsFreeSalePopUpf7510c2935e0cf7b0d65d39717a86156=1; gtmFired=OK; smd=bc58b771b292fda79c9eea7c12fb1edf-1611477301.467; UserReactions=true; _gid=GA1.2.1240460666.1611477303; outbrain_cid_fetch=true; _hjIncludedInSessionSample=1; _hjAbsoluteSessionInProgress=0; nyxDorf=YGIwa2MrPmNlNDozZis3MGM2N3IxNDU3YmM%3D; GED_PLAYLIST_ACTIVITY=W3sidSI6IjBYQUkiLCJ0c2wiOjE2MTE0NzczMTAsIm52IjoxLCJ1cHQiOjE2MTE0NzczMDgsImx0IjoxNjExNDc3MzA4fV0.; ses_id=NXtjIjY5ZGw%2Bejw6bz5iYDNjNWcxMmBlYGY0PmdoNyE4LDM9ZjEzdWJtPnBgYzQoNmU%2FOmEwZzZhYGU%2FNDFiMDVlYzA2ZmRuPj48MW85YjYzMzVtMTdgZ2AwNDVnZDduODYzMWZoMzdiYz40YD00ODYkPyNhJWd2YTNlNTR1YiU1OmMiNmZkOD5oPGRvP2JhM2U1bDExYGtgaTQyZzY3Lzhz';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

?>
