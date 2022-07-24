<?php

require_once("./Telebot.php");

// initialize bot
$bot = new Telebot("");

// handle start command
$bot->command("start", function ($ctx) {
    $ctx->replyWithText("Kamu mengirimkan command /start");
});

// handle hello command
$bot->command("hello", function ($ctx) {
    $ctx->replyWithText("Halo kak " . $ctx->from->first_name);
});

// run bot
$bot->run();
