<?php

declare(strict_types=1);

namespace PoP\PostTags\FieldResolvers;

use PoP\Tags\FieldResolvers\AbstractTagFieldResolver;
use PoP\PostTags\FieldResolvers\PostTagAPIContractImplementationTrait;

abstract class AbstractPostTagFieldResolver extends AbstractTagFieldResolver
{
    use PostTagAPIContractImplementationTrait;
}
