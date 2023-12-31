<?php

declare(strict_types=1);

namespace VStelmakh\UrlHighlight\Filter;

/**
 * @internal
 */
interface FilterInterface
{
    /**
     * Filter input string and return result
     *
     * @param string $string
     * @return string
     */
    public function filter(string $string): string;
}
