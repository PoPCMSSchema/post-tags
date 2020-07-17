<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\Posts\TypeResolvers\PostTypeResolver;
use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\ComponentModel\TypeResolvers\TypeResolverInterface;
use PoP\Tags\FieldResolvers\AbstractCustomPostQueryableFieldResolver;

class PostQueryableFieldResolver extends AbstractCustomPostQueryableFieldResolver
{
    use TagAPIContractImplementationTrait;

    public static function getClassesToAttachTo(): array
    {
        return [
            PostTypeResolver::class,
        ];
    }

    public function getSchemaFieldDescription(TypeResolverInterface $typeResolver, string $fieldName): ?string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        $descriptions = [
            'tags' => $translationAPI->__('Tags added to this post', 'pop-post-tags'),
            'tagCount' => $translationAPI->__('Number of tags added to this post', 'pop-post-tags'),
        ];
        return $descriptions[$fieldName] ?? parent::getSchemaFieldDescription($typeResolver, $fieldName);
    }
}
