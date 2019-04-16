<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Component\Dumper\Resolver;

/**
 * Class GenericResolver
 */
class GenericResolver extends Resolver
{
    /**
     * @var string
     */
    protected const PATTERN_GENERIC = '%s(?)';

    /**
     * @param mixed $value
     * @return bool
     */
    public function match($value): bool
    {
        return $value === null;
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function type($value): string
    {
        return \strtolower(\gettype($value));
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function value($value): string
    {
        return \print_r($value, true);
    }
}
