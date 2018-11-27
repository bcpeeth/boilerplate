<?php

namespace Concrete\Package\Boilerplate;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Page;
use Concrete\Core\Page\Theme\Theme;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {
  protected $pkgHandle  = 'boilerplate';
  protected $pkgVersion = '1.0.0';

  protected $appVersionRequired = '5.7.0';

  public function getPackageDescription() {
    return t('Adds the Boilerplate theme.');
  }

  public function getPackageName(){
    return t('Boilerplate');
  }

  public function install() {
    $pkg = parent::install();
    Theme::add('boilerplate', $pkg);
  }
}

