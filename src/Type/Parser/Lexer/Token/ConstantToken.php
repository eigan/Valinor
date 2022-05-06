<?php

namespace CuyZ\Valinor\Type\Parser\Lexer\Token;

use CuyZ\Valinor\Type\Parser\Lexer\TokenStream;
use CuyZ\Valinor\Type\Type;
use CuyZ\Valinor\Type\Types\ConstantType;

class ConstantToken implements TraversingToken
{
    private $constantValue;

    public function __construct(string $constant)
    {
        $this->constant = constant($constant);
    }

    /**
     * @return string
     */
    public function getConstant(): string
    {
        return $this->constant;
    }

    public function traverse(TokenStream $stream): Type
    {
        return new ConstantType($this->constant);
    }
}
