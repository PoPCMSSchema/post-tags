<?php

declare(strict_types=1);

namespace PoP\PostTags\TypeAPIs;

use PoP\Tags\TypeAPIs\TagTypeAPIInterface;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
interface PostTagTypeAPIInterface extends TagTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type PostTag
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfPostTagType($object): bool;
}
