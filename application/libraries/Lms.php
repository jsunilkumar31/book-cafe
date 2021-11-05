<?php defined('BASEPATH') or exit('No direct script access allowed');

/*
 *  ==============================================================================
 *  Author    : Sher Khan
 *  Email    : sakhan@otsglobal.org
 *  For        : Stock Manager Advance
 *  Web        : http://otsglobal.org
 *  ==============================================================================
 */

class Lms
{

	public function __construct()
    {
    }

    public function __get($var)
    {
        return get_instance()->$var;
    }
	public function send_json($data)
    {
        header('Content-Type: application/json');
        die(json_encode($data));
        exit;
    }

    
    public function barcode($text = null, $bcs = 'code128', $height = 74, $stext = 1, $get_be = false, $re = false)
    {
        $drawText = ($stext != 1) ? false : true;
        $this->load->library('wf_barcode', '', 'bc');
        return $this->bc->generate($text, $bcs, $height, $drawText, $get_be, $re);
    }

    
    
}