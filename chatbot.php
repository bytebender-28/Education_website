<?php
header("Content-Type: application/json");
require "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST["message"] ?? "";

    if (empty($message)) {
        echo json_encode(["reply" => "Please ask a question."]);
        exit;
    }

    // Prepare API request
    $postData = [
        "model" => "deepseek/deepseek-chat-v3-0324:free",
        "messages" => [
            ["role" => "system", "content" => "You are a helpful chatbot for students. Answer clearly. Answer using proper Markdown and LaTeX."],
            ["role" => "user", "content" => $message]
        ]
    ];

    $ch = curl_init(AI_API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . AI_API_KEY,
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);
    $reply = $result["choices"][0]["message"]["content"] ?? "Sorry, I couldn’t get an answer.";
    $reply = nl2br($reply);
    echo json_encode(["reply" => $reply]);
}
?>
