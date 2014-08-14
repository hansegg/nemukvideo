<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        if (isset($_COOKIE['contextery-autoplay'])) {
            $autoplay = 'off';
        } else {
            // turn autoplay off for 1 day
            setcookie('contextery-autoplay', 'off', time() + 60 * 60 * 24 * 1);
            $autoplay = 'on';
        }
        return new ViewModel(array('autoplay' => $autoplay));
    }

    public function howItWorksAction() {
        return new ViewModel;
    }

    public function referencesAction() {
        return new ViewModel;
    }

    public function aboutAction() {
        return new ViewModel();
    }

    public function artistsAction() {
        return new ViewModel;
    }

    public function tipsAndTricksAction() {
        return new ViewModel;
    }

    public function implementationAreasAction() {
        return new ViewModel;
    }

    public function videoStylesAction() {
        $selected_style = $this->params('param1', 'simplify');
        return new ViewModel(array('selected_style' => $selected_style));
    }

    public function yourBenefitsAction() {
        return new ViewModel(array('page'=>'yourBenefits'));
    }

}
