<?php

namespace Buku;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\BukuController::class => InvokableFactory::class,
        ],
    ],

    'router' => [
        'routes' => [
            'buku' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/buku[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\BukuController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'buku' => __DIR__ . '/../view',
        ],
    ],
];
