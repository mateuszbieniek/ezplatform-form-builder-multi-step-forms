<?php

declare(strict_types=1);

namespace MateuszBieniek\EzPlatformFormBuilderMultiStepForms\Form\Type;

use EzSystems\EzPlatformFormBuilder\Form\Type\Field\AbstractFieldType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class StepFieldType extends AbstractFieldType
{
    public const STEP_FIELD_IDENTIFIER = 'mb_step';

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return self::STEP_FIELD_IDENTIFIER;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
        return FormType::class;
    }
}
