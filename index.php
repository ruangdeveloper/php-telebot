<?php

require_once("./Telebot.php");

// initialize bot
$bot = new Telebot("");

// handle start command
$bot->command("m", function ($ctx) {
    $ctx->replyWithText("ini pesan m");
});

// run bot
$bot->run();
