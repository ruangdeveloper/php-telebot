<?php

require_once("./Telebot.php");

// initialize bot
$bot = new Telebot("1829263826:AAGmqjaCBuBTuYkhZK14r23B3opj9ISluAg");

// handle start command
$bot->command("m", function ($ctx) {
    $ctx->replyWithText("ini pesan m");
});

// run bot
$bot->run();
