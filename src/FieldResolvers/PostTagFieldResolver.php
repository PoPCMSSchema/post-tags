<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\PostTags\TypeResolvers\PostTagTypeResolver;
use PoP\Tags\FieldResolvers\AbstractTagFieldResolver;
use PoP\PostTags\ComponentContracts\PostTagAPISatisfiedContractTrait;

class PostTagFieldResolver extends AbstractTagFieldResolver
{
    use PostTagAPISatisfiedContractTrait;

    public static function getClassesToAttachTo(): array
    {
        return array(PostTagTypeResolver::class);
    }
}
