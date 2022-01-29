<?php
/**
*
* @package phpbbseo MobbernTCP
* @copyright (c) 2022 phpbbseo
* @license GPL-2.0-only
*
*/

namespace phpbbseo\mobbernTCP\event;

/**
 * Event listener
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
  /* @var \phpbb\config\config */
  protected $config;

  /* @var \phpbb\template\template */
  protected $template;

  /* @var \phpbb\user */
  protected $user;

  /* @var \phpbb\controller\helper */
  protected $helper;


  static public function getSubscribedEvents()
  {
    return array(
       'core.user_setup'   => 'add_mTCP_language_vars',
       'core.page_header'  => 'add_mTCP_template_vars',
    );
  }

  /**
   * Constructor
   *
   * @param \phpbb\config\config      $this->config    Config object
   * @param \phpbb\controller\helper  $helper    Helper object
   * @param \phpbb\template\template  $template  Template object
   * @param \phpbb\user               $user      User object
   */
  public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, \phpbb\controller\helper $helper)
  {
    $this->config = $config;
    $this->template = $template;
    $this->user = $user;
    $this->helper = $helper;
  }

  public function add_mTCP_language_vars($event)
  {
    $lang_set_ext = $event['lang_set_ext'];
    $lang_set_ext[] = array(
      'ext_name' => 'phpbbseo/mobbernTCP',
      'lang_set' => 'mobbernTCP',
    );
    $event['lang_set_ext'] = $lang_set_ext;
  }

  public function add_mTCP_template_vars($event)
  {
    $this->template->assign_vars(array(
      // CP Vars
      'MBRN_CP'               => (bool) $this->config['mbrn_CP'],
      'MBRN_CP_URL'           => $this->helper->route('m_mTCP_base'),

      // General Options Vars
      'MBRN_SCROLL_CUSTOM'    => $this->config['mbrn_scrollCustom'],
      'MBRN_SCROLL_SMOOTH'    => $this->config['mbrn_scrollSmooth'],
      'MBRN_SCROLL_AUTO'      => $this->config['mbrn_scrollAuto'],
      'MBRN_LOGO_TEXT'        => $this->config['mbrn_logoText'],
      'MBRN_LOGO_FONT'        => $this->config['mbrn_logoFont'],
      'MBRN_LOGO_ICON'        => $this->config['mbrn_logoIcon'],
      'MBRN_LOGO_IMG'         => $this->config['mbrn_logoImg'],
      'MBRN_FAVICON'          => $this->config['mbrn_favicon'],
      'MBRN_FOOTER_COPYRIGHT' => $this->config['mbrn_footerCopyright'],
      'MBRN_FOOTER_FB'        => $this->config['mbrn_footerFb'],
      'MBRN_FOOTER_GP'        => $this->config['mbrn_footerGp'],
      'MBRN_FOOTER_TW'        => $this->config['mbrn_footerTw'],
      'MBRN_FOOTER_LN'        => $this->config['mbrn_footerLn'],
      'MBRN_FOOTER_PI'        => $this->config['mbrn_footerPi'],
      'MBRN_FOOTER_WP'        => $this->config['mbrn_footerWp'],
      'MBRN_FOOTER_YT'        => $this->config['mbrn_footerYt'],      

      // Design Options Vars
      'MBRN_COLOR_PRESET'     => $this->config['mbrn_colorPreset'],
      'MBRN_COLOR_CUSTOM'     => $this->config['mbrn_colorCustom'],
      'MBRN_BG_IMG'           => $this->config['mbrn_bgImg'],
      'MBRN_BG_COLOR'         => $this->config['mbrn_bgColor'],
      'MBRN_FONT_URL'         => $this->config['mbrn_fontUrl'],
      'MBRN_FONT_FAMILY'      => $this->config['mbrn_fontFamily'],
      'MBRN_FONT_HEADERS'     => $this->config['mbrn_fontHeaders'],
      'MBRN_FONT_SIZE'        => $this->config['mbrn_fontSize'],
      'MBRN_LAYOUT_FULL'      => $this->config['mbrn_layoutFull'],
      'MBRN_LAYOUT_SIDEBAR'   => $this->config['mbrn_layoutSidebar'],
      'MBRN_LAYOUT_WIDTH'     => $this->config['mbrn_layoutWidth'],
      'MBRN_LAYOUT_HEADER'    => $this->config['mbrn_layoutHeader'],
      'MBRN_LAYOUT_FOOTER'    => $this->config['mbrn_layoutFooter'],
      'MBRN_BORDERS'          => $this->config['mbrn_borders'],

      // Menu Options Vars
      'MBRN_MENU_LINK1'       => $this->config['mbrn_menuLink1'],
      'MBRN_MENU_LINKURL1'    => $this->config['mbrn_menuLinkUrl1'],
      'MBRN_MENU_LINKICON1'   => $this->config['mbrn_menuLinkIcon1'],
      'MBRN_MENU_LINK2'       => $this->config['mbrn_menuLink2'],
      'MBRN_MENU_LINKURL2'    => $this->config['mbrn_menuLinkUrl2'],
      'MBRN_MENU_LINKICON2'   => $this->config['mbrn_menuLinkIcon2'],
      'MBRN_MENU_LINK3'       => $this->config['mbrn_menuLink3'],
      'MBRN_MENU_LINKURL3'    => $this->config['mbrn_menuLinkUrl3'],
      'MBRN_MENU_LINKICON3'   => $this->config['mbrn_menuLinkIcon3'],

      'MBRN_MENU_ICONS'       => $this->config['mbrn_menuIcons'],
      'MBRN_MENU_CIRCLES'     => $this->config['mbrn_menuCircles'],
      'MBRN_MENU_MEGA'        => $this->config['mbrn_menuMega'],

      // Sidebar Widgets Options Vars
      'MBRN_W_AD'             => $this->config['mbrn_wAd'],
      'MBRN_W_AD_TITLE'       => $this->config['mbrn_wAdTitle'],
      'MBRN_W_AD_IMG'         => $this->config['mbrn_wAdImg'],
      'MBRN_W_AD_URL'         => $this->config['mbrn_wAdUrl'],

      'MBRN_W_NOTE'           => $this->config['mbrn_wNote'],
      'MBRN_W_NOTE_MSG'       => $this->config['mbrn_wNoteMsg'],
      'MBRN_W_NOTE_URL'       => $this->config['mbrn_wNoteUrl'],

      'MBRN_W_COL'            => $this->config['mbrn_wCol'],
      'MBRN_W_COL_TITLE'      => $this->config['mbrn_wColTitle'],
      'MBRN_W_COL_TXT'        => $this->config['mbrn_wColTxt'],

      'MBRN_W_TABS'           => $this->config['mbrn_wTabs'],

      'MBRN_W_TXT'            => $this->config['mbrn_wTxt'],
      'MBRN_W_TXT_TITLE'      => $this->config['mbrn_wTxtTitle'],
      'MBRN_W_TXT_TXT'        => $this->config['mbrn_wTxtTXT'],

      // Ads Options Vars
      'MBRN_ADS_HEADER'       => $this->config['mbrn_adsHeader'],
      'MBRN_ADS_FOOTER'       => $this->config['mbrn_adsFooter'],
      'MBRN_ADS_SIDEBAR'      => $this->config['mbrn_adsSidebar'],
      'MBRN_ADS_INPAGE'       => $this->config['mbrn_adsInpage'],

    ));
  }
}