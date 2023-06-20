<?php
$api_key = '<PASTE YOUR KEY>';
$api_endpoint = 'https://api.openai.com/v1/completions';

$prompt = 'Genereer een tekst waarin je enerzijds vraagt of de bezoeker interesse heeft in een pre-order van mijn boek Happy 2 Change over hoe AI organisaties kan veranderen. De pre-order kost slechts 29 euro. Geef op een inspirerende manier aan dat we ook nog op zoek zijn naar bedrijven die als sponsor met inspirerende case in het boek willen komen. Start de tekst met 2 zinnen met daarin een concreet voorbeeld hoe AI de organisatie kan veranderen. Het antwoord bevat maximaal 350 tokens. Tekst in markdown.';
$max_tokens = 350;
$temperature = 0.7;

$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $api_key
);

$data = array(
    'model' => 'text-davinci-003',
    'prompt' => $prompt,
    'max_tokens' => $max_tokens,
    'temperature' => $temperature
);

$ch = curl_init($api_endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if ($response === false) {
    $error_message = curl_error($ch);
    echo json_encode(array('error' => $error_message));
} else {
    $response_data = json_decode($response, true);
    $generated_text = $response_data['choices'][0]['text'];
    echo $generated_text;
}

curl_close($ch);
