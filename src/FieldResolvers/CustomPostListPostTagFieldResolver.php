<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\PostTags\TypeResolvers\PostTagTypeResolver;
use PoP\Tags\FieldResolvers\AbstractCustomPostListTagFieldResolver;
use PoP\PostTags\ComponentContracts\PostTagAPISatisfiedContractTrait;

class CustomPostListPostTagFieldResolver extends AbstractCustomPostListTagFieldResolver
{
    use PostTagAPISatisfiedContractTrait;

    public static function getClassesToAttachTo(): array
    {
        return array(PostTagTypeResolver::class);
    }

    protected function getQueryProperty(): string
    {
        return 'tag-ids';
    }
}
