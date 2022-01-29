<?php

/**
*
* @package phpbbseo MobbernTCP
* @copyright (c) 2022 phpbbseo
* @license GPL-2.0-only
*
*/

namespace phpbbseo\mobbernTCP\controller;

/**
 * Class settings
 *
 * @package phpbbseo\mobbernTCP\controller
 */
class settings
{
  /* @var \phpbb\auth\auth */
  protected $auth;

  /* @var \phpbb\config\config */
  protected $config;

  /* @var \phpbb\request\request */
  protected $request;

  /* @var \phpbb\user */
  protected $user;

  /* @var \phpbb\controller\helper */
  protected $helper;

  /**
   * Constructor
   *
   * @param \phpbb\auth\auth          $auth     Auth object
   * @param \phpbb\config\config      $config   Config object
   * @param \phpbb\request\request    $request  Request object
   * @param \phpbb\user               $user     User object
   * @param \phpbb\controller\helper  $helper   Controller helper object
   */
  public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\request\request $request, \phpbb\user $user, \phpbb\controller\helper $helper)
  {
    $this->auth = $auth;
    $this->config = $config;
    $this->request = $request;
    $this->user = $user;
    $this->helper = $helper;
  }

  /**
   * Settings Controller
   * @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
   */
  public function manage()
  {
    // Redirect non admins back to the index page
    if (!$this->auth->acl_get('a_board'))
    {
      return $this->finish('MBRN_INVALID_LOGIN', 403);
    }

    // Form key validation
    if ( !check_form_key('m_tcp_settings') )
    {
      return $this->finish('MBRN_INVALID_FORM', 400);
    }

    // General Settings
    if( $this->request->is_set_post('submit_general') )
    {
      $this->config->set('mbrn_scrollCustom',     $this->request->variable('mbrn_scrollCustom',    '0'));
      $this->config->set('mbrn_scrollSmooth',     $this->request->variable('mbrn_scrollSmooth',    '0'));
      $this->config->set('mbrn_scrollAuto',       $this->request->variable('mbrn_scrollAuto',      '0'));
      $this->config->set('mbrn_logoText',         $this->request->variable('mbrn_logoText',        '0'));
      $this->config->set('mbrn_logoFont',         $this->request->variable('mbrn_logoFont',        '0'));
      $this->config->set('mbrn_logoIcon',         $this->request->variable('mbrn_logoIcon',        '0'));
      $this->config->set('mbrn_logoImg',          $this->request->variable('mbrn_logoImg',         '0'));
      $this->config->set('mbrn_favicon',          $this->request->variable('mbrn_favicon',         '0'));
      $this->config->set('mbrn_footerCopyright',  $this->request->variable('mbrn_footerCopyright', '0'));
      $this->config->set('mbrn_footerFb',         $this->request->variable('mbrn_footerFb',        '0'));
      $this->config->set('mbrn_footerGp',         $this->request->variable('mbrn_footerGp',        '0'));
      $this->config->set('mbrn_footerTw',         $this->request->variable('mbrn_footerTw',        '0'));
      $this->config->set('mbrn_footerLn',         $this->request->variable('mbrn_footerLn',        '0'));
      $this->config->set('mbrn_footerPi',         $this->request->variable('mbrn_footerPi',        '0'));
      $this->config->set('mbrn_footerWp',         $this->request->variable('mbrn_footerWp',        '0'));
      $this->config->set('mbrn_footerYt',         $this->request->variable('mbrn_footerYt',        '0'));
    }

    // Design Settings
    if( $this->request->is_set_post('submit_design') )
    {
      $this->config->set('mbrn_colorPreset',    $this->request->variable('mbrn_colorPreset',   '0'));
      $this->config->set('mbrn_colorCustom',    $this->request->variable('mbrn_colorCustom',   '0'));
      $this->config->set('mbrn_bgImg',          $this->request->variable('mbrn_bgImg',         '0'));
      $this->config->set('mbrn_bgColor',        $this->request->variable('mbrn_bgColor',       '0'));
      $this->config->set('mbrn_fontUrl',        $this->request->variable('mbrn_fontUrl',       '0'));
      $this->config->set('mbrn_fontFamily',     $this->request->variable('mbrn_fontFamily',    '0'));
      $this->config->set('mbrn_fontHeaders',    $this->request->variable('mbrn_fontHeaders',   '0'));
      $this->config->set('mbrn_fontSize',       $this->request->variable('mbrn_fontSize',      '0'));
      $this->config->set('mbrn_layoutFull',     $this->request->variable('mbrn_layoutFull',    '0'));
      $this->config->set('mbrn_layoutSidebar',  $this->request->variable('mbrn_layoutSidebar', '0'));
      $this->config->set('mbrn_layoutWidth',    $this->request->variable('mbrn_layoutWidth',   '0'));
      $this->config->set('mbrn_layoutHeader',   $this->request->variable('mbrn_layoutHeader',  '0'));
      $this->config->set('mbrn_layoutFooter',   $this->request->variable('mbrn_layoutFooter',  '0'));
      $this->config->set('mbrn_borders',        $this->request->variable('mbrn_borders',       '0'));
    }

    // Menu Settings
    if( $this->request->is_set_post('submit_menu') )
    {
      $this->config->set('mbrn_menuLink1',      $this->request->variable('mbrn_menuLink1',     '0'));
      $this->config->set('mbrn_menuLink2',      $this->request->variable('mbrn_menuLink2',     '0'));
      $this->config->set('mbrn_menuLink3',      $this->request->variable('mbrn_menuLink3',     '0'));
      $this->config->set('mbrn_menuLinkUrl1',   $this->request->variable('mbrn_menuLinkUrl1',  '0'));
      $this->config->set('mbrn_menuLinkUrl2',   $this->request->variable('mbrn_menuLinkUrl2',  '0'));
      $this->config->set('mbrn_menuLinkUrl3',   $this->request->variable('mbrn_menuLinkUrl3',  '0'));
      $this->config->set('mbrn_menuLinkIcon1',  $this->request->variable('mbrn_menuLinkIcon1', '0'));
      $this->config->set('mbrn_menuLinkIcon2',  $this->request->variable('mbrn_menuLinkIcon2', '0'));
      $this->config->set('mbrn_menuLinkIcon3',  $this->request->variable('mbrn_menuLinkIcon3', '0'));
      $this->config->set('mbrn_menuIcons',      $this->request->variable('mbrn_menuIcons',     '0'));
      $this->config->set('mbrn_menuCircles',    $this->request->variable('mbrn_menuCircles',   '0'));
      $this->config->set('mbrn_menuMega',       $this->request->variable('mbrn_menuMega',      '0'));

    }

    // Sidebar Widgets Settings
    if( $this->request->is_set_post('submit_sidebar_widgets') )
    {
      $this->config->set('mbrn_wAd',        $this->request->variable('mbrn_wAd',        '0'));
      $this->config->set('mbrn_wAdTitle',   $this->request->variable('mbrn_wAdTitle',   '0'));
      $this->config->set('mbrn_wAdImg',     $this->request->variable('mbrn_wAdImg',     '0'));
      $this->config->set('mbrn_wAdUrl',     $this->request->variable('mbrn_wAdUrl',     '0'));
      $this->config->set('mbrn_wNote',      $this->request->variable('mbrn_wNote',      '0'));
      $this->config->set('mbrn_wNoteMsg',   $this->request->variable('mbrn_wNoteMsg',   '0'));
      $this->config->set('mbrn_wNoteUrl',   $this->request->variable('mbrn_wNoteUrl',   '0'));
      $this->config->set('mbrn_wCol',       $this->request->variable('mbrn_wCol',       '0'));
      $this->config->set('mbrn_wColTitle',  $this->request->variable('mbrn_wColTitle',  '0'));
      $this->config->set('mbrn_wColTxt',    $this->request->variable('mbrn_wColTxt',    '0'));
      $this->config->set('mbrn_wTabs',      $this->request->variable('mbrn_wTabs',      '0'));
      $this->config->set('mbrn_wTxt',       $this->request->variable('mbrn_wTxt',       '0'));
      $this->config->set('mbrn_wTxtTitle',  $this->request->variable('mbrn_wTxtTitle',  '0'));
      $this->config->set('mbrn_wTxtTXT',    $this->request->variable('mbrn_wTxtTXT',    '0'));
    }

    // Ads Settings
    if( $this->request->is_set_post('submit_ads') )
    {
      $this->config->set('mbrn_adsHeader',   $this->request->variable('mbrn_adsHeader',  '0'));
      $this->config->set('mbrn_adsFooter',   $this->request->variable('mbrn_adsFooter',  '0'));
      $this->config->set('mbrn_adsSidebar',  $this->request->variable('mbrn_adsSidebar', '0'));
      $this->config->set('mbrn_adsInpage',   $this->request->variable('mbrn_adsInpage',  '0'));
    }



    return $this->finish('MBRN_SETTINGS_SAVED', 200, 3);
  }

  /**
   * @param string $message
   * @param int $status_code
   * @param int $redirect_time
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function finish($message, $status_code, $redirect_time = 10, $route = 'm_mTCP_base')
  {
    $this->meta_refresh($redirect_time, $route);
    return $this->helper->error($this->user->lang($message), $status_code);
  }

  /**
   * @param int $redirect_time
   * @return null
   */
  public function meta_refresh($redirect_time, $route)
  {
    meta_refresh($redirect_time, $this->helper->route($route));
  }
}
