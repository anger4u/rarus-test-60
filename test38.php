<?php
const FREE_EMAIL_DOMAINS = [
    'gmail.com',
    'yandex.ru',
    'hotmail.com',
];

function getFreeDomainsCount($emails)
{
    $domainsFromMails = [];
    $result = [];

    foreach ($emails as $email) {
        $eArr = explode("@", $email);
        $domainsFromMails[] = $eArr[1];
    }

    foreach (FREE_EMAIL_DOMAINS as $freeDomain) {
        $count = 0;
        foreach ($domainsFromMails as $domain) {
            if ($freeDomain === $domain) {
                $count++;
            }
        }
        if ($count > 0) {
            $result[$freeDomain] = $count;
        }
    }
    return $result;
}

$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@bitrix.com',
    'keys@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com',
];

print_r(getFreeDomainsCount($emails));