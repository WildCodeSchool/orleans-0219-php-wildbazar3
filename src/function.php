<?php

function cleanData(array $postData) :array
{
    foreach ($postData as $name => $value) {
        $data($name) = trim($value);
    }

    return $data;
}