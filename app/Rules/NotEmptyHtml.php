<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NotEmptyHtml implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Strip all HTML tags except <p> and <br>
        $cleanedValue = strip_tags($value, '<p><br>');

        // Normalize whitespace and check if the cleaned value is exactly <p><br></p>
        $cleanedValue = trim(preg_replace('/\s+/', ' ', $cleanedValue));

        // Special case to treat exact <p><br></p> as empty
        if ($cleanedValue === '<p><br></p>' || empty($cleanedValue)) {
            $fail('The :attribute field cannot be empty.');
        }
    }
}
