<?php

function cleanData(array $postData) :array
{
    foreach ($postData as $key => $value) {
        $data[$key] = htmlentities(trim($value));
    }

    return $data;
}