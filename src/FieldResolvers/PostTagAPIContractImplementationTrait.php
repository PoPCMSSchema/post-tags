<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\PostTags\TypeResolvers\PostTagTypeResolver;

trait PostTagAPIContractImplementationTrait
{
    protected function getTypeAPI()
    {
        $cmstagsapi = \PoP\PostTags\FunctionAPIFactory::getInstance();
        return $cmstagsapi;
    }

    protected function getTypeResolverClass(): string
    {
        return PostTagTypeResolver::class;
    }

    protected function getObjectPropertyAPI()
    {
        $cmstagsresolver = \PoP\Tags\ObjectPropertyResolverFactory::getInstance();
        return $cmstagsresolver;
    }
}
