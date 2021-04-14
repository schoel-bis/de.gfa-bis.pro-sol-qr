<?php
use CRM_ProSolQr_ExtensionUtil as E;
use chillerlan\QRCode\{QRCode, QROptions};

require_once __DIR__.'/../../../vendor/autoload.php';

class CRM_ProSolQr_Page_ProSolQrPage extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('Contact QR Code'));

    $contactId = $_GET['cid'];
    $url = CRM_Utils_System::url('civicrm/contact/view', "reset=1&cid=$contactId", TRUE);
    $options = new QROptions([
      'outputType' => QRCode::OUTPUT_IMAGE_PNG,
      'eccLevel' => QRCode::ECC_L
    ]);
    $this->assign('qrcode', (new QRCode($options))->render(html_entity_decode($url)));

    parent::run();
  }

}
