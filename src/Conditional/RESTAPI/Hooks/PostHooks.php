<?php

declare(strict_types=1);

namespace PoP\PostTags\Conditional\RESTAPI\Hooks;

use PoP\Engine\Hooks\AbstractHookSet;
use PoP\CustomPosts\Conditional\RESTAPI\RouteModuleProcessors\EntryRouteModuleProcessorHelpers;

class PostHooks extends AbstractHookSet
{
    const TAG_RESTFIELDS = 'tags.id|name|url';

    protected function init()
    {
        $this->hooksAPI->addFilter(
            EntryRouteModuleProcessorHelpers::HOOK_REST_FIELDS,
            [$this, 'getRESTFields']
        );
    }

    public function getRESTFields($restFields): string
    {
        return $restFields . ',' . self::TAG_RESTFIELDS;
    }
}
