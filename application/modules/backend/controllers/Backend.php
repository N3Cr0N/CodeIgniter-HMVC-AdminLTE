<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter-HMVC-AdminLTE
 *
 * @package    CodeIgniter-HMVC-AdminLTE
 * @author     N3Cr0N (N3Cr0N@list.ru)
 * @copyright  2019 N3Cr0N
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       <URI> (description)
 * @version    GIT: $Id$
 * @since      Version 0.0.1
 * @todo       (description)
 *
 */

class Backend extends BackendController
{

    //
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layout,....
     */
    protected $data = array();



    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        //
        parent::__construct();
        // This function returns the main CodeIgniter object.
        // Normally, to call any of the available CodeIgniter object or pre defined library classes then you need to declare.
        $CI =& get_instance();
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
    public function index()
    {
        // Display page with render_page function from BackendController
        $this->render_page('dashboard/index', $this->data);
    }

    /**
     * [index2 description]
     *
     * @method dashboard2
     *
     * @return [type]     [description]
     */
    public function index2()
    {
        // Display page with render_page function from BackendController
        $this->render_page('dashboard/index2', $this->data);
    }



////////////////////////////////////////////////
    public function top_nav()
    {
        // Display page with internal ci function
        $this->load->view('layout/top-nav', $this->data);
    }

    public function boxed()
    {
        // Display page with internal ci function
        $this->load->view('layout/boxed', $this->data);
    }

    public function fixed()
    {
        // Display page with internal ci function
        $this->load->view('layout/fixed', $this->data);
    }

    public function collapsed_sidebar()
    {
        // Display page with internal ci function
        $this->load->view('layout/collapsed-sidebar', $this->data);
    }

    public function widgets()
    {
        // Display page with internal ci function
        $this->load->view('widgets/widgets', $this->data);
    }
/*
    public function index2()
    {
        // Display page with render_page function from BackendController
        $this->render_page('dashboard/index2', $this->data);
    }

    public function index2()
    {
        // Display page with render_page function from BackendController
        $this->render_page('dashboard/index2', $this->data);
    }*/
}
