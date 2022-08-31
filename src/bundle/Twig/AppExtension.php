<?php

namespace MateuszBieniek\EzPlatformFormBuilderMultiStepFormsBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    /**
     * getFilters.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('multistep_form', [AppRuntime::class, 'prepareMultistepForm']),
        ];
    }

    /**
     * getName.
     *
     * @return string
     */
    public function getName()
    {
        return 'multi_step_form_builder_twig_extensions';
    }
}
