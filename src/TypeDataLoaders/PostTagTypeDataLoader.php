<?php

declare(strict_types=1);

namespace PoP\PostTags\TypeDataLoaders;

use PoP\PostTags\ComponentContracts\PostTagAPISatisfiedContractTrait;
use PoP\Tags\TypeDataLoaders\AbstractTagTypeDataLoader;

class PostTagTypeDataLoader extends AbstractTagTypeDataLoader
{
    use PostTagAPISatisfiedContractTrait;

    public function getFilterDataloadingModule(): ?array
    {
        return [\PoP_PostTags_Module_Processor_FieldDataloads::class, \PoP_PostTags_Module_Processor_FieldDataloads::MODULE_DATALOAD_RELATIONALFIELDS_TAGLIST];
    }
}
