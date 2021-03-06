<?php

function getComposerFileData($json) {
    if(!empty($json)) {
        $result = json_decode($json, true);
    } else {
        $result = [];
    }
    return($result);
}


    $json1 = '{
    "name": "october/demo-theme",
    "type": "october-theme",
    "description": "Demo OctoberCMS theme",
    "keywords": ["october", "cms", "demo", "theme"],
    "license": "MIT",
    "authors": [
        {
            "name": "Alexey Bobkov",
            "email": "aleksey.bobkov@gmail.com",
            "role": "Co-founder"
        },
        {
            "name": "Samuel Georges",
            "email": "daftspunky@gmail.com",
            "role": "Co-founder"
        }
    ],
    "require": {
        "php": ">=5.4",
        "composer/installers": "~1.0"
    },
    "extra": {
        "branch-alias": {
            "dev-master": "1.0-dev"
        }
    }
}';

getComposerFileData($json1);
print_r(getComposerFileData($json1));