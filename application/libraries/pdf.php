<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Fpdf
{

    function __construct() {
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }
}
?>