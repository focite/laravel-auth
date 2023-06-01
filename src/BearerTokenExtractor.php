<?php

declare(strict_types=1);

namespace Focite\Auth;

use Focite\Auth\Exception\ExtractTokenException;
use Exception;

class BearerTokenExtractor implements TokenExtractorInterface
{
    /**
     * 提取token
     *
     * @throws Exception
     */
    public function extractToken(): string
    {
        $authorization = request()->header('Authorization');

        if (! str_starts_with($authorization, 'Bearer ')) {
            throw new ExtractTokenException('Failed to extract token.');
        }

        return substr($authorization, 7);
    }
}
