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
     * view, layouts, ....
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
        // Display page with the template function from MY_Controller
        $this->template('dashboard/index', $this->data, true);
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
        // Display page with the template function from MY_Controller
        $this->template('dashboard/index2', $this->data, true);
    }

    /**
     * [top_nav description]
     *
     * @method top_nav
     *
     * @return [type]  [description]
     */
    public function top_nav()
    {
        // Display page with the template function from MY_Controller
        $this->template('layout/top-nav', $this->data, false);
    }

    /**
     * [boxed description]
     *
     * @method boxed
     *
     * @return [type] [description]
     */
    public function boxed()
    {
        // Display page with the template function from MY_Controller
        $this->template('layout/boxed', $this->data, false);
    }

    /**
     * [fixed description]
     *
     * @method fixed
     *
     * @return [type] [description]
     */
    public function fixed()
    {
        // Display page with the template function from MY_Controller
        $this->template('layout/fixed', $this->data, false);
    }

    /**
     * [collapsed_sidebar description]
     *
     * @method collapsed_sidebar
     *
     * @return [type]            [description]
     */
    public function collapsed_sidebar()
    {
        // Display page with the template function from MY_Controller
        $this->template('layout/collapsed-sidebar', $this->data, false);
    }

    /**
     * [widgets description]
     *
     * @method widgets
     *
     * @return [type]  [description]
     */
    public function widgets()
    {
        // Display page with the template function from MY_Controller
        $this->template('widgets/widgets', $this->data, true);
    }

    /**
     * [chartjs description]
     *
     * @method chartjs
     *
     * @return [type]  [description]
     */
    public function chartjs()
    {
        // Display page with the template function from MY_Controller
        $this->template('charts/chartjs', $this->data, true);
    }

    /**
     * [morris description]
     *
     * @method morris
     *
     * @return [type] [description]
     */
    public function morris()
    {
        // Display page with the template function from MY_Controller
        $this->template('charts/morris', $this->data, true);
    }

    /**
     * [flot description]
     *
     * @method flot
     *
     * @return [type] [description]
     */
    public function flot()
    {
        // Display page with the template function from MY_Controller
        $this->template('charts/flot', $this->data, true);
    }

    /**
     * [inline description]
     *
     * @method inline
     *
     * @return [type] [description]
     */
    public function inline()
    {
        // Display page with the template function from MY_Controller
        $this->template('charts/inline', $this->data, true);
    }

    /**
     * [general description]
     *
     * @method general
     *
     * @return [type]  [description]
     */
    public function general()
    {
        // Display page with the template function from MY_Controller
        $this->template('ui/general', $this->data, true);
    }
    /**
     * [icons description]
     *
     * @method icons
     *
     * @return [type] [description]
     */
    public function icons()
    {
        // Display page with the template function from MY_Controller
        $this->template('ui/icons', $this->data, true);
    }

    /**
     * [buttons description]
     *
     * @method buttons
     *
     * @return [type]  [description]
     */
    public function buttons()
    {
        // Display page with the template function from MY_Controller
        $this->template('ui/buttons', $this->data, true);
    }

    /**
     * [sliders description]
     *
     * @method sliders
     *
     * @return [type]  [description]
     */
    public function sliders()
    {
        // Display page with the template function from MY_Controller
        $this->template('ui/sliders', $this->data, true);
    }

    /**
     * [timeline description]
     *
     * @method timeline
     *
     * @return [type]   [description]
     */
    public function timeline()
    {
        // Display page with the template function from MY_Controller
        $this->template('ui/timeline', $this->data, true);
    }

    /**
     * [modals description]
     *
     * @method modals
     *
     * @return [type] [description]
     */
    public function modals()
    {
        // Display page with the template function from MY_Controller
        $this->template('ui/modals', $this->data, true);
    }

    /**
     * [forms_general description]
     *
     * @method forms_general
     *
     * @return [type]        [description]
     */
    public function forms_general()
    {
        // Display page with the template function from MY_Controller
        $this->template('forms/general', $this->data, true);
    }

    /**
     * [forms_advanced description]
     *
     * @method forms_advanced
     *
     * @return [type]         [description]
     */
    public function forms_advanced()
    {
        // Display page with the template function from MY_Controller
        $this->template('forms/advanced', $this->data, true);
    }

    /**
     * [editors description]
     *
     * @method editors
     *
     * @return [type]  [description]
     */
    public function editors()
    {
        // Display page with the template function from MY_Controller
        $this->template('forms/editors', $this->data, true);
    }

    /**
     * [simple description]
     *
     * @method simple
     *
     * @return [type] [description]
     */
    public function simple()
    {
        // Display page with the template function from MY_Controller
        $this->template('tables/simple', $this->data, true);
    }

    /**
     * [data description]
     *
     * @method data
     *
     * @return [type] [description]
     */
    public function data()
    {
        // Display page with the template function from MY_Controller
        $this->template('tables/data', $this->data, true);
    }

    /**
     * [calendar description]
     *
     * @method calendar
     *
     * @return [type]   [description]
     */
    public function calendar()
    {
        // Display page with the template function from MY_Controller
        $this->template('calendar/calendar', $this->data, true);
    }

    /**
     * [mailbox description]
     *
     * @method mailbox
     *
     * @return [type]  [description]
     */
    public function mailbox()
    {
        // Display page with the template function from MY_Controller
        $this->template('mailbox/mailbox', $this->data, true);
    }

    /**
     * [read_mail description]
     *
     * @method read_mail
     *
     * @return [type]    [description]
     */
    public function read_mail()
    {
        // Display page with the template function from MY_Controller
        $this->template('mailbox/read-mail', $this->data, true);
    }

    /**
     * [compose description]
     *
     * @method compose
     *
     * @return [type]  [description]
     */
    public function compose()
    {
        // Display page with the template function from MY_Controller
        $this->template('mailbox/compose', $this->data, true);
    }

    /**
     * [error_404 description]
     *
     * @method error_404
     *
     * @return [type]    [description]
     */
    public function error_404()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/error_404', $this->data, true);
    }

    /**
     * [error_500 description]
     *
     * @method error_500
     *
     * @return [type]    [description]
     */
    public function error_500()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/error_500', $this->data, true);
    }

    /**
     * [register description]
     *
     * @method register
     *
     * @return [type]   [description]
     */
    public function register()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/register', $this->data, false);
    }

    /**
     * [profile description]
     *
     * @method profile
     *
     * @return [type]  [description]
     */
    public function profile()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/profile', $this->data, true);
    }

    /**
     * [pace description]
     *
     * @method pace
     *
     * @return [type] [description]
     */
    public function pace()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/pace', $this->data, true);
    }

    /**
     * [login description]
     *
     * @method login
     *
     * @return [type] [description]
     */
    public function login()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/login', $this->data, false);
    }

    /**
     * [lockscreen description]
     *
     * @method lockscreen
     *
     * @return [type]     [description]
     */
    public function lockscreen()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/lockscreen', $this->data, false);
    }

    /**
     * [invoice description]
     *
     * @method invoice
     *
     * @return [type]  [description]
     */
    public function invoice()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/invoice', $this->data, true);
    }

    /**
     * [invoice_print description]
     *
     * @method invoice_print
     *
     * @return [type]        [description]
     */
    public function invoice_print()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/invoice_print', $this->data, true);
    }

    /**
     * [blank description]
     *
     * @method blank
     *
     * @return [type] [description]
     */
    public function blank()
    {
        // Display page with the template function from MY_Controller
        $this->template('examples/blank', $this->data, true);
    }
}
