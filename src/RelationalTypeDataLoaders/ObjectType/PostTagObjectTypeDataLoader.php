<?php

declare(strict_types=1);

namespace PoPCMSSchema\PostTags\RelationalTypeDataLoaders\ObjectType;

use PoPCMSSchema\PostTags\TypeAPIs\PostTagTypeAPIInterface;
use PoPCMSSchema\Tags\RelationalTypeDataLoaders\ObjectType\AbstractTagObjectTypeDataLoader;
use PoPCMSSchema\Tags\TypeAPIs\TagTypeAPIInterface;

class PostTagObjectTypeDataLoader extends AbstractTagObjectTypeDataLoader
{
    private ?PostTagTypeAPIInterface $postTagTypeAPI = null;

    final protected function getPostTagTypeAPI(): PostTagTypeAPIInterface
    {
        if ($this->postTagTypeAPI === null) {
            /** @var PostTagTypeAPIInterface */
            $postTagTypeAPI = $this->instanceManager->getInstance(PostTagTypeAPIInterface::class);
            $this->postTagTypeAPI = $postTagTypeAPI;
        }
        return $this->postTagTypeAPI;
    }

    public function getTagTypeAPI(): TagTypeAPIInterface
    {
        return $this->getPostTagTypeAPI();
    }
}
