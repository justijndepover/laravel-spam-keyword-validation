<?php

namespace Justijndepover\LaravelSpamKeywordValidation\Validators;

class SpamKeywordValidator
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        foreach (config('spam-keywords.keywords') as $keyword) {
            if (strpos($value, $keyword) !== false) {
                return false;
            }
        }

        return true;
    }
}
