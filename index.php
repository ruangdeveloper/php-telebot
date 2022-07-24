<?php

require_once("./Telebot.php");

// initialize bot
$bot = new Telebot("5463467053:AAGVy87O-PKc9wh-gIpA-1E6j0zv3Ox-kTY");

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
