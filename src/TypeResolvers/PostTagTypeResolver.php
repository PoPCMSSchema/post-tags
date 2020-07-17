<?php

declare(strict_types=1);

namespace PoP\PostTags\TypeResolvers;

use PoP\PostTags\FieldResolvers\PostTagAPIContractImplementationTrait;
use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\PostTags\TypeDataLoaders\PostTagTypeDataLoader;
use PoP\Tags\TypeResolvers\AbstractTagTypeResolver;

class PostTagTypeResolver extends AbstractTagTypeResolver
{
    use PostTagAPIContractImplementationTrait;

    public const NAME = 'PostTag';

    public function getTypeName(): string
    {
        return self::NAME;
    }

    public function getSchemaTypeDescription(): ?string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        return $translationAPI->__('Representation of a tag, added to a post', 'post-tags');
    }

    public function getTypeDataLoaderClass(): string
    {
        return PostTagTypeDataLoader::class;
    }
}
