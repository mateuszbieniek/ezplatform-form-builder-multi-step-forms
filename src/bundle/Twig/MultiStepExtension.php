<?php

declare(strict_types=1);

namespace MateuszBieniek\EzPlatformFormBuilderMultiStepFormsBundle\Twig;

use MateuszBieniek\EzPlatformFormBuilderMultiStepForms\Form\Type\StepFieldType;
use Symfony\Component\Form\FormView;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class MultiStepExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('multistep_form', [$this, 'prepareMultistepForm']),
        ];
    }

    public function prepareMultistepForm(FormView $form)
    {
        $steps = [];
        $currentStep = 0;

        $fieldsForm = $form->children["fields"];
        foreach ($fieldsForm->children as $field) {
            if ($field->vars['block_prefixes'][1] == StepFieldType::STEP_FIELD_IDENTIFIER) {
                $currentStep++;
                $steps[$currentStep]['step_field'] = $field;
                $steps[$currentStep]['fields'] = [];
            } else {
                if ($currentStep !== 0) {
                    $steps[$currentStep]['fields'][] = $field;
                }
            }
        }

        return $steps;
    }
}
