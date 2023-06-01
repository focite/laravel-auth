<?php

declare(strict_types=1);

namespace Focite\Auth;

interface TokenExtractorInterface
{
    /**
     * 提取token
     */
    public function extractToken(): string;
}
