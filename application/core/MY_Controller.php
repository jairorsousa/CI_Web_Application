<?php
/**
 * Created by PhpStorm.
 * User: jairo
 * Date: 05/07/15
 * Time: 22:08
 */

if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->helper('language');

// Load language file
        $this->lang->load('en_admin', 'english');
    }
}