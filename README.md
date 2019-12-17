# ezplatform-form-builder-multi-step-forms
## Description
Bundle provides "step" field for the Form Builder in eZ Platform EE which makes Form "Mulit-Step".

## Installation
### 1. Enable `EzPlatformFormBuilderMultiStepFormsBundle`
Edit `app/AppKernel.php`, and add 
```
new MateuszBieniek\EzPlatformFormBuilderMultiStepFormsBundle\EzPlatformFormBuilderMultiStepFormsBundle(),
```
at the end of the `$bundles` array.
### 2. Install `mateuszbieniek/ezplatform-form-builder-multi-step-forms`
```
composer require mateuszbieniek/ezplatform-form-builder-multi-step-forms
```
