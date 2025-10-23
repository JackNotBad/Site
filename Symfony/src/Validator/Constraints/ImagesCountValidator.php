<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\Common\Collections\Collection;

class ImagesCountValidator extends ConstraintValidator
{
    /**
     * @param Collection|array|null $value
     * @param ImagesCount $constraint
     */
    public function validate($value, Constraint $constraint): void
    {
        if (!$constraint instanceof ImagesCount) {
            return;
        }

        if ($value === null && $constraint->allowNull) {
            return;
        }

        if ($value instanceof Collection) {
            $count = $value->count();
        } elseif (is_array($value)) {
            $count = count($value);
        } elseif ($value === null) {
            $count = 0;
        } else {
            $this->context->buildViolation('La valeur pour "{{ property }}" n\'est pas une collection.')
                ->setParameter('{{ property }}', $this->formatValue($this->context->getPropertyName()))
                ->addViolation();
            return;
        }

        if ($count !== $constraint->expectedCount) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('%count%', (string) $count)
                ->setParameter('%expected%', (string) $constraint->expectedCount)
                ->setParameter('{{ property }}', $this->context->getPropertyName() ?? 'value')
                ->addViolation();
        }
    }
}
