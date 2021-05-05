<?php

use chillerlan\QRCode\{QRCode, QROptions};
require_once __DIR__.'/vendor/autoload.php';

function pro_sol_qr_generate_qr_code($cid) {
    $url = CRM_Utils_System::url('civicrm/contact/view', "reset=1&cid=$cid", TRUE);
    $options = new QROptions([
      'outputType' => QRCode::OUTPUT_IMAGE_PNG,
      'eccLevel' => QRCode::ECC_L
    ]);

    return (new QRCode($options))->render(html_entity_decode($url));
}
