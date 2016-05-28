<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Menu;

return array(
	
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )),
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Catalog\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
			'menu' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Catalog\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
			'pages' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Catalog\Controller\Index',
                        'action'     => 'index',
                    ),
				
			    ),
				'child_routes'=>array(
				'category'=>array(
				'type'=>'segment',
				'options'=>array(
					'route'  =>  'category/[:action/][:id/]',
					'defaults' => array(
					     'controller' => 'category',
						 'action'=> 'index'
					),
				),
				
				),
				'article'=>array(
				'type'=>'segment',
				'options'=>array(
					'route'  =>  'article/[:action/][:id/]',
					'defaults' => array(
					     'controller' => 'article',
						 'action'=> 'index'
					),
				),
				
				),
				
				),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/catalog',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Catalog\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
	
	    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
		
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
			'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
			'admin_navigation' => 'Admin\Lib\AdminNavigationFactory',
			
        ),
    ),
	'navigation' => array(
'default' =>array(
          array(
               'label'=>'Panal',
				'route'=>'home',
				'action'=>'index',
				'resource'=>'Admin\Controller\Index',
				
				
			'pages'=> array(
				array(
					'label'=>'Statiyi',
					'route'=>'pages/article',
					'action'=>'index',
				),
				array(
					'label'=>'Category',
					'route'=>'pages/category',
					'action'=>'index',
					),
					array(
					'label'=>'Добавить категорию',
					'route'=>'pages/category',
					'action'=>'add',
					),
					
				),
			),
			  array(
               'label'=>'Panal',
				'route'=>'home',
				'action'=>'index',
				'resource'=>'Admin\Controller\Index',
				
				
			'pages'=> array(
				array(
					'label'=>'Statiyi',
					'route'=>'pages/article',
					'action'=>'index',
				),
				array(
					'label'=>'Category',
					'route'=>'pages/category',
					'action'=>'index',
					),
					array(
					'label'=>'Добавить категорию',
					'route'=>'pages/category',
					'action'=>'add',
					),
					
				),
			),
			  array(
               'label'=>'Panal',
				'route'=>'home',
				'action'=>'index',
				'resource'=>'Admin\Controller\Index',
				
				
			'pages'=> array(
				array(
					'label'=>'Statiyi',
					'route'=>'pages/article',
					'action'=>'index',
				),
				array(
					'label'=>'Category',
					'route'=>'pages/category',
					'action'=>'index',
					),
					array(
					'label'=>'Добавить категорию',
					'route'=>'pages/category',
					'action'=>'add',
					),
					
				),
			),
		),


	'admin navigation' =>array(
          array(
               'label'=>'Panal',
				'route'=>'admin',
				'action'=>'index',
				'resource'=>'Admin\Controller\Index',
				
				
			'pages'=> array(
				array(
					'label'=>'Statiyi',
					'route'=>'admin/article',
					'action'=>'index',
				),
				array(
					'label'=>'Category',
					'route'=>'admin/category',
					'action'=>'index',
					),
					array(
					'label'=>'Добавить категорию',
					'route'=>'admin/category',
					'action'=>'add',
					),
					array(
					'label'=>'Comments',
					'route'=>'admin/comment',
					'action'=>'index',
					),
				),
			),
		),
	),

    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Catalog\Controller\Index' => Controller\IndexController::class,
			'Menu\Controller\Index' => Controller\IndexController::class
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
			'layout/menu'           => __DIR__ . '/../view/layout/menu.phtml',
			'content/article'           => __DIR__ . '/../view/content/article.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
		
		
    ),
	
	'view_helpers' => [
      'invokables' => [
      'showMenu' => \Menu\View\Helper\ShowMenu::class,
],
],
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),

);
