<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\PostTags\TypeResolvers\PostTagTypeResolver;
use PoP\Tags\FieldResolvers\AbstractCustomPostListTagFieldResolver;

class CustomPostListPostTagFieldResolver extends AbstractCustomPostListTagFieldResolver
{
    use PostTagAPIContractImplementationTrait;

    public static function getClassesToAttachTo(): array
    {
        return array(PostTagTypeResolver::class);
    }

    protected function getQueryProperty(): string
    {
        return 'tag-ids';
    }
}
