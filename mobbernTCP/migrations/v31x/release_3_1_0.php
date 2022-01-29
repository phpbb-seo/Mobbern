<?php
/**
*
* @package phpbbseo MobbernTCP
* @copyright (c) 2022 phpbbseo
* @license GPL-2.0-only
*
*/

namespace phpbbseo\mobbernTCP\migrations\v31x;

class release_3_1_0 extends \phpbb\db\migration\migration
{
  public function effectively_installed()
  {
    return isset($this->config['mbrn_CP']) && version_compare($this->config['mbrn_CP'], '3.1.0', '>=');
  }

  static public function depends_on()
  {
    return array('\phpbb\db\migration\data\v310\dev');
  }

  public function update_data()
  {
    return array(
      # CP Version:
      array('config.add', array('mbrn_CP', '3.1.0')),
      # General Settings :
      array('config.add', array('mbrn_scrollCustom', 1)),
      array('config.add', array('mbrn_scrollSmooth', 1)),
      array('config.add', array('mbrn_scrollAuto', 1)),
      array('config.add', array('mbrn_logoText', 'Home')),
      array('config.add', array('mbrn_logoFont', '')),
      array('config.add', array('mbrn_logoIcon', 'fa-home')),
      array('config.add', array('mbrn_logoImg', '')),
      array('config.add', array('mbrn_favicon', '')),
      array('config.add', array('mbrn_footerCopyright', '')),
      array('config.add', array('mbrn_footerFb', '')),
      array('config.add', array('mbrn_footerGp', '')),
      array('config.add', array('mbrn_footerTw', '')),
      array('config.add', array('mbrn_footerLn', '')),
      array('config.add', array('mbrn_footerPi', '')),
      array('config.add', array('mbrn_footerWp', '')),
      array('config.add', array('mbrn_footerYt', '')),
      # Design Settings :
      array('config.add', array('mbrn_colorPreset', 'azure')),
      array('config.add', array('mbrn_colorCustom', '')),
      array('config.add', array('mbrn_bgImg', '')),
      array('config.add', array('mbrn_bgColor', '#EEE')),
      array('config.add', array('mbrn_fontUrl', '')),
      array('config.add', array('mbrn_fontFamily', '')),
      array('config.add', array('mbrn_fontHeaders', '')),
      array('config.add', array('mbrn_fontSize', '13px')),
      array('config.add', array('mbrn_layoutFull', '0')),
      array('config.add', array('mbrn_layoutSidebar', '1')),
      array('config.add', array('mbrn_layoutWidth', '')),
      array('config.add', array('mbrn_layoutHeader', 'transnav')),
      array('config.add', array('mbrn_layoutFooter', 'complex')),
      array('config.add', array('mbrn_borders', '1')),
      # Menu Settings :
      array('config.add', array('mbrn_menuLink1', '')),
      array('config.add', array('mbrn_menuLinkUrl1', '')),
      array('config.add', array('mbrn_menuLinkIcon1', 'fa-star')),
      array('config.add', array('mbrn_menuLink2', '')),
      array('config.add', array('mbrn_menuLinkUrl2', '')),
      array('config.add', array('mbrn_menuLinkIcon2', 'fa-star')),
      array('config.add', array('mbrn_menuLink3', '')),
      array('config.add', array('mbrn_menuLinkUrl3', '')),
      array('config.add', array('mbrn_menuLinkIcon3', 'fa-star')),
      array('config.add', array('mbrn_menuIcons', '1')),
      array('config.add', array('mbrn_menuCircles', '1')),
      array('config.add', array('mbrn_menuMega', '1')),
      # Sidebar Widgets Settings :
      array('config.add', array('mbrn_wAd', '1')),
      array('config.add', array('mbrn_wAdTitle', 'Advertisement')),
      array('config.add', array('mbrn_wAdImg', '')),
      array('config.add', array('mbrn_wAdUrl', '')),
      array('config.add', array('mbrn_wNote', '1')),
      array('config.add', array('mbrn_wNoteMsg', 'Notification')),
      array('config.add', array('mbrn_wNoteUrl', '')),
      array('config.add', array('mbrn_wCol', '1')),
      array('config.add', array('mbrn_wColTitle', 'Collapsible')),
      array('config.add', array('mbrn_wColTxt', 'Sample text...')),
      array('config.add', array('mbrn_wTabs', '1')),
      array('config.add', array('mbrn_wTxt', '0')),
      array('config.add', array('mbrn_wTxtTitle', '')),
      array('config.add', array('mbrn_wTxtTXT', '')),
      # Ads Settings :
      array('config.add', array('mbrn_adsHeader', '1')),
      array('config.add', array('mbrn_adsFooter', '1')),
      array('config.add', array('mbrn_adsSidebar', '0')),
      array('config.add', array('mbrn_adsInpage', '0')),
    );
  }
}
