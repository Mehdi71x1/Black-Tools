// Get the phone number from the URL parameter
$phone = $_GET['phone'];

// Set up the cURL request
$curl = curl_init();

$headers = [
    'User-Agent: Mozilla/5.0 (Linux; Android 10; SM-G975F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/78.0.3904.96 Mobile Safari/537.36',
    'Accept: application/json, text/plain, */*',
    'Accept-Language: en-US,en;q=0.5',
   
    'Content-Type: application/json',
    'X-Gateway-Version: 3',
    'Merchant: evobdtf2',
    'Device: web',
    'Language: EN',
    'Origin: https://www.jilievobdt.net',
    'Connection: keep-alive',
    'Referer: https://www.jilievobdt.net/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'Priority: u=0'
];

// Set the options for cURL
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://www.jilievobdt.net/wps/verification/sms/noLogin',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '', 
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(['mobileNum' => $phone]),
    CURLOPT_HTTPHEADER => $headers,
]);

// Execute the cURL request and get the response
$response = curl_exec($curl);
$err = curl_error($curl);

// Close the cURL session
curl_close($curl);

// Handle the response or error
if ($err) {
    echo 'cURL Error: ' . $err;
} else {
    echo 'Response: ' . $response;
}

// Output the API credit
echo "\nApi Credit: https://t.me/pikachutools";
?>
