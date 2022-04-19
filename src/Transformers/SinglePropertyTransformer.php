<?php

namespace Grogu\FluentPlus\Transformers;

abstract class SinglePropertyTransformer implements TransformerInterface
{
    public function handles($castDefinition, $value)
    {
        return true;
    }
}