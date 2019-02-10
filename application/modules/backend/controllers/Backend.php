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
        // Display page with render_page function from BackendController
        $this->render_page('widgets/widgets', $this->data);
    }

    public function chartjs()
    {
        // Display page with render_page function from BackendController
        $this->render_page('charts/chartjs', $this->data);
    }

    public function morris()
    {
        // Display page with render_page function from BackendController
        $this->render_page('charts/morris', $this->data);
    }

    public function flot()
    {
        // Display page with render_page function from BackendController
        $this->render_page('charts/flot', $this->data);
    }

    public function inline()
    {
        // Display page with render_page function from BackendController
        $this->render_page('charts/inline', $this->data);
    }

    public function general()
    {
        // Display page with render_page function from BackendController
        $this->render_page('ui/general', $this->data);
    }

    public function icons()
    {
        // Display page with render_page function from BackendController
        $this->render_page('ui/icons', $this->data);
    }

    public function buttons()
    {
        // Display page with render_page function from BackendController
        $this->render_page('ui/buttons', $this->data);
    }

    public function sliders()
    {
        // Display page with internal ci function
        $this->load->view('ui/sliders', $this->data);
    }

    public function timeline()
    {
        // Display page with render_page function from BackendController
        $this->render_page('ui/timeline', $this->data);
    }

    public function modals()
    {
        // Display page with render_page function from BackendController
        $this->render_page('ui/modals', $this->data);
    }

    public function forms_general()
    {
        // Display page with render_page function from BackendController
        $this->render_page('forms/general', $this->data);
    }

    public function forms_advanced()
    {
        // Display page with internal ci function
        $this->load->view('forms/advanced', $this->data);
    }

    public function editors()
    {
        // Display page with internal ci function
        $this->load->view('forms/editors', $this->data);
    }

    public function simple()
    {
        // Display page with internal ci function
        $this->load->view('tables/simple', $this->data);
    }

    public function data()
    {
        // Display page with internal ci function
        $this->load->view('tables/data', $this->data);
    }

    public function calendar()
    {
        // Display page with internal ci function
        $this->load->view('calendar/calendar', $this->data);
    }

    public function mailbox()
    {
        // Display page with internal ci function
        $this->load->view('mailbox/mailbox', $this->data);
    }

    public function read_mail()
    {
        // Display page with internal ci function
        $this->load->view('mailbox/read-mail', $this->data);
    }

    public function compose()
    {
        // Display page with internal ci function
        $this->load->view('mailbox/compose', $this->data);
    }

    public function error_404()
    {
        // Display page with internal ci function
        $this->load->view('examples/error_404', $this->data);
    }

    public function error_500()
    {
        // Display page with internal ci function
        $this->load->view('examples/error_500', $this->data);
    }

    public function register()
    {
        // Display page with internal ci function
        $this->load->view('examples/register', $this->data);
    }

    public function profile()
    {
        // Display page with internal ci function
        $this->load->view('examples/profile', $this->data);
    }

    public function pace()
    {
        // Display page with internal ci function
        $this->load->view('examples/pace', $this->data);
    }

    public function login()
    {
        // Display page with internal ci function
        $this->load->view('examples/login', $this->data);
    }

    public function lockscreen()
    {
        // Display page with internal ci function
        $this->load->view('examples/lockscreen', $this->data);
    }

    public function invoice()
    {
        // Display page with internal ci function
        $this->load->view('examples/invoice', $this->data);
    }

    public function blank()
    {
        // Display page with internal ci function
        $this->load->view('examples/blank', $this->data);
    }
}
