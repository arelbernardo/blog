<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: arel
 * Date: 27/09/2016
 * Time: 4:18 PM
 */
class Welcome extends Base_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $pageContent = array(
            'head' => 'Welcome',
            'body' => 'body_content/welcome'
        );
        $this->load->view('master_view', $pageContent);
    }
}