<?php

declare(strict_types=1);

namespace MateuszBieniek\EzPlatformFormBuilderMultiStepForms\FieldType\EzForm;

use EzSystems\EzPlatformFormBuilder\FieldType\Model\Form;
use EzSystems\EzPlatformFormBuilder\FieldType\Value as BaseValue;
use Symfony\Component\Form\FormInterface;

class Value extends BaseValue
{
    /** @var bool */
    private $isMultiStep = false;

    /**
     * @param \EzSystems\EzPlatformFormBuilder\FieldType\Model\Form|null $formValue
     * @param \Symfony\Component\Form\FormInterface|null $form
     */
    public function __construct(
        ?Form $formValue = null,
        ?FormInterface $form = null,
        bool $isMultiStep = false
    ) {
        parent::__construct($formValue, $form);

        $this->isMultiStep = $isMultiStep;
    }

    public function isMultiStep(): bool
    {
        return $this->isMultiStep;
    }

    public function setIsMultiStep(bool $isMultiStep): void
    {
        $this->isMultiStep = $isMultiStep;
    }
}
