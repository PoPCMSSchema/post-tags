<?php

declare(strict_types=1);

namespace PoP\PostTags\Facades;

use PoP\PostTags\TypeAPIs\PostTagTypeAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class PostTagTypeAPIFacade
{
    public static function getInstance(): PostTagTypeAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('posttag_type_api');
    }
}
