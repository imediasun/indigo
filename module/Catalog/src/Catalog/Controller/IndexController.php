<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Catalog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        // get the article from the persistence layer, etc...

        // Get the "layout" view model and set an alternate template
        $layout = $this->layout();
        $layout->setTemplate('layout/layout'); 
        // Create and return a view model for the retrieved article
        $view = new ViewModel();
		$articleView = new ViewModel();
        $articleView->setTemplate('content/article');
		/* $menu = new ViewModel(); */
        $menu = $this->forward()->dispatch(\Menu\Controller\Index::class, ['action' => 'index']);
		$view->addChild($articleView,'article');
        return $view;
    }
}
