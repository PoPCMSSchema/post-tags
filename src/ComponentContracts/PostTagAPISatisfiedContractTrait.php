<?php

declare(strict_types=1);

namespace PoP\PostTags\ComponentContracts;

use PoP\PostTags\TypeResolvers\PostTagTypeResolver;

trait PostTagAPISatisfiedContractTrait
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
