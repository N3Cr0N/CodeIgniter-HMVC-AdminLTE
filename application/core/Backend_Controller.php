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
 * @filesource
 * @todo       (description)
 *
 */

class BackendController extends MY_Controller
{
    //
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layout, ....
     */
    protected $data = array();

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();

        // CI profiler
        $this->output->enable_profiler(false);

        // This function returns the main CodeIgniter object.
        // Normally, to call any of the available CodeIgniter object or pre defined library classes then you need to declare.
        $CI =& get_instance();

        //Example data
        // Site name
        $this->data['sitename'] = 'CodeIgniter-HMVC-Ion-Auth-AdminLTE';

        //Example data
        // Browser tab
        $this->data['site_title'] = ucfirst('Admin Dashboard');
    }

    /**
     * Template loading function for AdminLTE
     *
     * @method template
     *
     * @param  string   $template_name The template name
     * @param  array    $data          All extra datas you want to display
     * @param  boolean  $return        Load the complete template structure
     *                                 with the menues, sidebar, ... or only the page template
     *
     * @return [type]                  Display the template
     */
    protected function template($template_name, $data, $return)
    {
        if ($return === true) {
            $content  = $this->load->view('templates/header', $this->data);
            $content .= $this->load->view('templates/main_header', $this->data);
            $content .= $this->load->view('templates/main_sidebar', $this->data);
            $content .= $this->load->view($template_name, $this->data);
            $content .= $this->load->view('templates/footer', $this->data);
            $content .= $this->load->view('templates/control_sidebar', $this->data);

            return $content;
        } else {
            $this->load->view($template_name, $this->data);
        }
    }
}
