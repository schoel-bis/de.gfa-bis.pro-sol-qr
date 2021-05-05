<?php
use CRM_ProSolQr_ExtensionUtil as E;

require_once __DIR__.'/../../../pro_sol_qr_generate_qr_code.php';

class CRM_ProSolQr_Page_ProSolQrPage extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('Contact QR Code'));

    $contactId = $_GET['cid'];
    $this->assign('qrcode', pro_sol_qr_generate_qr_code($contactId));

    parent::run();
  }

}
