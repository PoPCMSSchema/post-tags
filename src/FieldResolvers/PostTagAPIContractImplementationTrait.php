<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\PostTags\TypeResolvers\PostTagTypeResolver;

trait PostTagAPIContractImplementationTrait
{
    protected function getTypeAPI(): \PoP\Tags\FunctionAPI
    {
        $cmstagsapi = \PoP\PostTags\FunctionAPIFactory::getInstance();
        return $cmstagsapi;
    }

    protected function getTypeResolverClass(): string
    {
        return PostTagTypeResolver::class;
    }
}
