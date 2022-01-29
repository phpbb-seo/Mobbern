<?php
/**
*
* @package phpbbseo MobbernTCP
* @copyright (c) 2022 phpbbseo
* @license GPL-2.0-only
*
*/

namespace phpbbseo\mobbernTCP\controller;

class main
{
  /* @var \phpbb\auth\auth */
    protected $auth;

  /* @var \phpbb\config\config */
  protected $config;

  /* @var \phpbb\template\template */
  protected $template;

  /* @var \phpbb\user */
  protected $user;

  /* @var \phpbb\controller\helper */
  protected $helper;

  /* @var string phpBB root path */
  protected $root_path;

  /* @var string phpEx */
  protected $php_ext;

  /* @var \phpbbseo\mobbernTCP\controller\settings */
  protected $settings;

  /**
  * Constructor
  * NOTE: The parameters of this method must match in order and type with
  * the dependencies defined in the services.yml file for this service.
  *
  * @param \phpbb\auth\auth                          $auth       Auth object
  * @param \phpbb\config                             $config     Config object
  * @param \phpbb\template                           $template   Template object
  * @param \phpbb\user                               $user       User object
  * @param \phpbb\controller\helper                  $helper     Controller helper object
  * @param string                                    $root_path  phpBB root path
  * @param string                                    $php_ext    phpEx
  * @param \phpbbseo\mobbernTCP\controller\settings  $settings   Settings object
  */
  public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, \phpbb\controller\helper $helper, $root_path, $php_ext, \phpbbseo\mobbernTCP\controller\settings $settings)
  {
    $this->auth = $auth;
    $this->config = $config;
    $this->template = $template;
    $this->user = $user;
    $this->helper = $helper;
    $this->root_path = $root_path;
    $this->php_ext = $php_ext;
    $this->settings = $settings;
  }

  /**
  * Base controller to be accessed with the URL /mobbern-tcp
  *
  * @return Symfony\Component\HttpFoundation\Response A Symfony Response object
  */
  public function base()
  {
    // Redirect non admins back to the index page
    if (!$this->auth->acl_get('a_'))
    {
      return $this->settings->finish('MBRN_INVALID_LOGIN', 400, 4, 'm_Mobbern_home');
    }

    // Form key validation
    $this->m_tcp_settings();


    /**
    * The render method takes up to three other arguments
    * @param   string      Name of the template file to display
    *                      Template files are searched for two places:
    *                      - phpBB/styles/<style_name>/template/
    *                      - phpBB/ext/<all_active_extensions>/styles/<style_name>/template/
    * @param   string      Page title
    * @param   int         Status code of the page (200 - OK [ default ], 403 - Unauthorized, 404 - Page not found, etc.)
    */
    return $this->helper->render('m_tcp.html', 'Theme Control Panel');
  }

  protected function m_tcp_settings()
  {
     add_form_key('m_tcp_settings');
  }
}