<?php

namespace CuyZ\Valinor\Type\Types;

use CuyZ\Valinor\Type\FixedType;
use CuyZ\Valinor\Type\Type;
use function constant;

class ConstantType implements Type
{

    private string $constant;

    private $constantValue;

    public function __construct($constantValue)
    {
        $this->constantValue = $constantValue;
    }

    /**
     * @return string
     */
    public function getConstantValue(): string
    {
        return $this->constantValue;
    }

    public function accepts($value): bool
    {
        return $this->constantValue === $value;
    }

    public function matches(Type $other): bool
    {
        if ($other instanceof FixedType) {
            return $this->constantValue === $other->value();
        }

        return false;
    }

    public function __toString(): string
    {
        return $this->constantValue;
    }
}
