<?php
namespace Menu\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $em;

    public function indexAction()
    {    

		$layout = $this->layout();
        $layout->setTemplate('layout/layout'); 
	    $menu = $this->prepareArrayResult(
        $this->getEntityManager()->getRepository(\Menu\Entity\Menu::class)->findAll()
        );
		/* $menu3 = $this->prepareArrayResult3(
        $this->getEntityManager()->getRepository(\Menu\Entity\Menu3::class)->findAll()
        ); */
		$content='ASD';
        // Create and return a view model for the retrieved article
        $view =  new ViewModel([
		'menu2' => $menu,
		'content'=>$content
        ]);
		return $view;
    }

    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get(\Doctrine\ORM\EntityManager::class);
        }

        return $this->em;
    }

    protected function prepareArrayResult($data)
    {
        $result = [];

        foreach ($data as $i => $item) {
            $result[$i]['id']    = $item->getId();
            $result[$i]['category']  = $item->getCategory();
			 $result[$i]['name_menu']  = $item->getNamemenu();
        }

        return $result;
    }
	
	protected function prepareArrayResult3($data)
    {
        $result = [];

        foreach ($data as $i => $item) {
            $result[$i]['id']    = $item->getId();
            $result[$i]['department']  = $item->getDepartment();
			 $result[$i]['name_menu']  = $item->getNamemenu();
        }

        return $result;
    }
}