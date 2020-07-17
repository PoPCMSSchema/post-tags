<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\PostTags\TypeResolvers\PostTagTypeResolver;
use PoP\Tags\FieldResolvers\AbstractTagFieldResolver;

class PostTagFieldResolver extends AbstractTagFieldResolver
{
    use PostTagAPIContractImplementationTrait;

    public static function getClassesToAttachTo(): array
    {
        return array(PostTagTypeResolver::class);
    }
}
