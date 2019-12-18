<?php

declare(strict_types=1);

namespace MateuszBieniek\EzPlatformFormBuilderMultiStepForms\FormBuilder\Field\Mapper;

use EzSystems\EzPlatformFormBuilder\FieldType\Field\Mapper\GenericFieldMapper;
use EzSystems\EzPlatformFormBuilder\FieldType\Model\Field;
use MateuszBieniek\EzPlatformFormBuilderMultiStepForms\Form\Type\StepFieldType;

class StepMapper extends GenericFieldMapper
{
    /**
     * {@inheritdoc}
     */
    protected function mapFormOptions(Field $field, array $constraints): array
    {
        $options = parent::mapFormOptions($field, $constraints);
        $options['field'] = $field;
        $options['label'] = $field->getName();
        $options['attr'] = [
            'next_label' => $field->getAttributeValue('next_label'),
            'back_label' => $field->getAttributeValue('back_label'),
            'step_class' => $field->getAttributeValue('step_class'),
            'custom_template' => $field->getAttributeValue('custom_template'),
            'class' => StepFieldType::STEP_FIELD_IDENTIFIER,
        ];

        return $options;
    }
}
