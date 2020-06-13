<?php

foreach($infoMessages as $message)
{
    echo $messageClass::widget(['type' => 'info', 'message' => $message]);
}

foreach($errorMessages as $message)
{
    echo $messageClass::widget(['type' => 'error', 'message' => $message]);
}

foreach($successMessages as $message)
{
    echo $messageClass::widget(['type' => 'success', 'message' => $message]);
}