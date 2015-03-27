<?php

return array(
	'router' => array(
        'routes' => array(
        	'home' => array(
        		'type' =>'Literal',
        		'options' => array(        			
	        		'route'	=> '/',
	        		'defaults' => array(
	        			'controller' => 'market-index-controller',
	        			'action' => 'index'
	        		)
	        	)	
        	),
        	'market' => array(
        		'type' =>'Literal',
        		'options' => array(        			
	        		'route'	=> '/market',
	        		'defaults' => array(
	        			'controller' => 'market-index-controller',
	        			'action' => 'index'
	        		)
	        	)	
        	),
        	'market-view' => array(
        		'type' => 'Literal',
        		'options' => array(
        			'route' => '/market/view',
        			'defaults' => array(
        				'controller' => 'market-view-controller',
        				'action' => 'index'
        			)
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
            )
        )
    ),        
	'controllers' => array(
        'invokables' => array(
            'market-index-controller' => 'Market\Controller\IndexController',
            'market-view-controller' => 'Market\Controller\ViewController'
        ),
        'factories' => array(
        	'market-post-controller' => 'Market\Factory\PostControllerFactory'
        )
    ),
    'view_manager' => array(        
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);