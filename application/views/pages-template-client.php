<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $this->load->view("pages-template-client/head");
    $this->load->view("body/$pages");
    $this->load->view("pages-template-client/sidebar");
    $this->load->view("pages-template-client/footer");
?>