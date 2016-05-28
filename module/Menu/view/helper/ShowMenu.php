<?php
namespace Menu\View\Helper;

use Zend\View\Helper\AbstractHelper;

class ShowMenu extends AbstractHelper
{

	

 public function __invoke($str, $find)
    {
        if (!is_string($str)){
            return 'must be string';
        }
 
        if (strpos($str, $find) === false){
            return 'not found';
        }
 
        return 'found';
    }
}