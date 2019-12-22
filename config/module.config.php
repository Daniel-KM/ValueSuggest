<?php
namespace ValueSuggest;

return [
    'controllers' => [
        'factories' => [
            'ValueSuggest\Controller\Admin\Index' => Service\Controller\Admin\IndexControllerFactory::class,
            'ValueSuggest\Controller\Site\Index' => Service\Controller\Site\IndexControllerFactory::class,
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => OMEKA_PATH . '/modules/ValueSuggest/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            OMEKA_PATH . '/modules/ValueSuggest/view',
        ],
    ],
    'data_types' => [
        'factories' => [
            /* Geonames */
            'valuesuggest:geonames:geonames' => Service\GeonamesDataTypeFactory::class,

            /* Getty */
            'valuesuggest:getty:aat' => Service\GettyDataTypeFactory::class,
            'valuesuggest:getty:tgn' => Service\GettyDataTypeFactory::class,
            'valuesuggest:getty:ulan' => Service\GettyDataTypeFactory::class,
            // @todo Add "The Cultural Objects Name Authority (CONA)" once it's
            // published (past due, fall 2015)

            /* Homosaurus */
            'valuesuggest:homosaurus:homosaurus' => Service\HomosaurusDataTypeFactory::class,

            /* IdRef */
            'valuesuggest:idref:all' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:person' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:corporation' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:conference' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:subject' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:rameau' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:fmesh' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:geo' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:family' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:title' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:authorTitle' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:trademark' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:ppn' => Service\IdRefDataTypeFactory::class,
            'valuesuggest:idref:library' => Service\IdRefDataTypeFactory::class,

            /* Library of Congress */
            'valuesuggest:lc:all' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:subjects' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:names' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:classification' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:childrensSubjects' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:genreForms' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:performanceMediums' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:demographicTerms' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:graphicMaterials' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:ethnographicTerms' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:organizations' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:relators' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:countries' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:geographicAreas' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:languages' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:iso6391' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:iso6392' => Service\LcDataTypeFactory::class,
            'valuesuggest:lc:iso6395' => Service\LcDataTypeFactory::class,
            // @todo Add more LC data types

            /* OCLC */
            'valuesuggest:oclc:viaf' => Service\OclcDataTypeFactory::class,
            'valuesuggest:oclc:fast' => Service\OclcDataTypeFactory::class,

            /* Opentheso / Pactols */
            'valuesuggest:pactols:all' => Service\PactolsDataTypeFactory::class,
            'valuesuggest:pactols:sujets' => Service\PactolsDataTypeFactory::class,

            /* PeriodO */
            'valuesuggest:periodo:periodo' => Service\PeriodoDataTypeFactory::class,

            /* RDA */
            'valuesuggestall:rda:AspectRatio' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:bookFormat' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:broadcastStand' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDACarrierEU' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDACarrierType' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDACartoDT' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAColourContent' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:configPlayback' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAContentType' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:CollTitle' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:fileType' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:fontSize' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:MusNotation' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:noteMove' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:TacNotation' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:formatNoteMus' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:frequency' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAGeneration' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:groovePitch' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:grooveWidth' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:IllusContent' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:layout' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAMaterial' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAMediaType' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:ModeIssue' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAPolarity' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:presFormat' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAproductionMethod' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:recMedium' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDAReductionRatio' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDARegionalEncoding' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:scale' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:soundCont' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:specPlayback' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:statIdentification' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:RDATerms' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:trackConfig' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:typeRec' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:videoFormat' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:gender' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofch' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofem' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofer' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofet' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofhf' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofid' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofim' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofin' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofit' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofrm' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofrr' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofrt' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofsm' => Service\RdaDataTypeFactory::class,
            'valuesuggestall:rda:rofsf' => Service\RdaDataTypeFactory::class,

            /* Tesauros-Diccionarios del patrimonio cultural de España */
            'valuesuggest:tesauros:bienesculturales' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:ceramica' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:contextosculturales' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:geografico' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:materias' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:mobiliario' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:numismatica' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:tecnicas' => Service\TesaurosDataTypeFactory::class,
            'valuesuggest:tesauros:toponimiahistorica' => Service\TesaurosDataTypeFactory::class,

            /* UNESCO vocabularios */
            'valuesuggest:unesco:unescothes' => Service\UnescoDataTypeFactory::class,
            'valuesuggest:unesco:unesco6' => Service\UnescoDataTypeFactory::class,
            'valuesuggest:unesco:floridablanca' => Service\UnescoDataTypeFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'site' => [
                'child_routes' => [
                    'value-suggest' => [
                        'type' => \Zend\Router\Http\Literal::class,
                        'options' => [
                            'route' => '/value-suggest',
                            'defaults' => [
                                '__NAMESPACE__' => 'ValueSuggest\Controller\Site',
                                'controller' => 'Index',
                            ],
                        ],
                        'may_terminate' => false,
                        'child_routes' => [
                            'proxy' => [
                                'type' => \Zend\Router\Http\Literal::class,
                                'options' => [
                                    'route' => '/proxy',
                                    'defaults' => [
                                        'action' => 'proxy',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'admin' => [
                'child_routes' => [
                    'value-suggest' => [
                        'type' => \Zend\Router\Http\Literal::class,
                        'options' => [
                            'route' => '/value-suggest',
                            'defaults' => [
                                '__NAMESPACE__' => 'ValueSuggest\Controller\Admin',
                                'controller' => 'Index',
                            ],
                        ],
                        'may_terminate' => false,
                        'child_routes' => [
                            'proxy' => [
                                'type' => \Zend\Router\Http\Literal::class,
                                'options' => [
                                    'route' => '/proxy',
                                    'defaults' => [
                                        'action' => 'proxy',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
