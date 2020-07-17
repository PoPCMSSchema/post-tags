<?php

declare(strict_types=1);

namespace PoP\PostTags\Conditional\API\RouteModuleProcessors;

use PoP\ModuleRouting\AbstractEntryRouteModuleProcessor;
use PoP\Routing\RouteNatures;
use PoP\Tags\Routing\RouteNatures as TagRouteNatures;

class EntryRouteModuleProcessor extends AbstractEntryRouteModuleProcessor
{
    public function getModulesVarsPropertiesByNature()
    {
        $ret = array();
        $ret[TagRouteNatures::TAG][] = [
            'module' => [\PoP_PostTags_Module_Processor_FieldDataloads::class, \PoP_PostTags_Module_Processor_FieldDataloads::MODULE_DATALOAD_RELATIONALFIELDS_TAG],
            'conditions' => [
                'scheme' => POP_SCHEME_API,
            ],
        ];
        return $ret;
    }

    public function getModulesVarsPropertiesByNatureAndRoute()
    {
        $ret = array();
        $routemodules = array(
            POP_POSTTAGS_ROUTE_POSTTAGS => [\PoP_PostTags_Module_Processor_FieldDataloads::class, \PoP_PostTags_Module_Processor_FieldDataloads::MODULE_DATALOAD_RELATIONALFIELDS_TAGLIST],
        );
        foreach ($routemodules as $route => $module) {
            $ret[RouteNatures::STANDARD][$route][] = [
                'module' => $module,
                'conditions' => [
                    'scheme' => POP_SCHEME_API,
                ],
            ];
        }
        // Commented until creating route POP_CUSTOMPOSTS_ROUTE_CUSTOMPOSTS
        // $routemodules = array(
        //     POP_CUSTOMPOSTS_ROUTE_CUSTOMPOSTS => [\PoP_PostTags_Module_Processor_FieldDataloads::class, \PoP_PostTags_Posts_Module_Processor_FieldDataloads::MODULE_DATALOAD_RELATIONALFIELDS_TAGPOSTLIST],
        // );
        // foreach ($routemodules as $route => $module) {
        //     $ret[TagRouteNatures::TAG][$route][] = [
        //         'module' => $module,
        //         'conditions' => [
        //             'scheme' => POP_SCHEME_API,
        //         ],
        //     ];
        // }
        $routemodules = array(
            POP_POSTS_ROUTE_POSTS => [\PoP_Taxonomies_Module_Processor_FieldDataloads::class, \PoP_Taxonomies_Posts_Module_Processor_FieldDataloads::MODULE_DATALOAD_RELATIONALFIELDS_TAGPOSTLIST],
        );
        foreach ($routemodules as $route => $module) {
            $ret[TagRouteNatures::TAG][$route][] = [
                'module' => $module,
                'conditions' => [
                    'scheme' => POP_SCHEME_API,
                ],
            ];
        }
        return $ret;
    }
}
