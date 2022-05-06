<?php

namespace CuyZ\Valinor\Mapper\Tree\Builder;

use CuyZ\Valinor\Mapper\Tree\Exception\CannotCastToScalarValue;
use CuyZ\Valinor\Mapper\Tree\Node;
use CuyZ\Valinor\Mapper\Tree\Shell;
use CuyZ\Valinor\Type\Types\ConstantType;
use RuntimeException;
use function assert;

class ConstantNodeBuilder implements NodeBuilder
{

    public function build(Shell $shell, RootNodeBuilder $rootBuilder): Node
    {
        $type = $shell->type();
        $value = $shell->value();

        assert($type instanceof ConstantType);

        // TODO Implement..

        throw new RuntimeException('Cannot cast ' . $value . ' to constant');
    }
}
