<?php

namespace App\Validator\Constraints;

use Attribute;
use Symfony\Component\Validator\Constraint;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class ImagesCount extends Constraint
{
    public string $message = 'Le nombre d\'éléments pour "{{ property }}" est de %count% mais %expected% attendu(s).';
    public int $expectedCount = 0;
    public bool $allowNull = false;

    /**
     *
     * @param int|null
     * @param string|null
     * @param bool|null
     * @param array|null
     */
    public function __construct(?int $expectedCount = null, ?string $message = null, ?bool $allowNull = null, ?array $options = null)
    {
        
        if (is_array($expectedCount) && $options === null) {
            $options = $expectedCount;
            $expectedCount = null;
        }

        if (\is_int($expectedCount)) {
            $this->expectedCount = $expectedCount;
        }
        if (\is_string($message)) {
            $this->message = $message;
        }
        if (\is_bool($allowNull)) {
            $this->allowNull = $allowNull;
        }

        if (is_array($options)) {
            if (isset($options['expectedCount'])) {
                $this->expectedCount = (int) $options['expectedCount'];
            }
            if (isset($options['message'])) {
                $this->message = (string) $options['message'];
            }
            if (isset($options['allowNull'])) {
                $this->allowNull = (bool) $options['allowNull'];
            }
        }

        $parentOptions = is_array($options) ? $options : null;
        parent::__construct($parentOptions);
    }

    public function validatedBy(): string
    {
        return static::class . 'Validator';
    }

    public function getTargets(): string
    {
        return self::PROPERTY_CONSTRAINT;
    }
}
