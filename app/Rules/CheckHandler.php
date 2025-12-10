<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^@[a-zA-Z0-9_\-]+$/', $value)) {
            $fail('Must start with @ and can only contain letters, numbers, underscores (_), and hyphens (-). No spaces allowed.');
        }

        if (!str_starts_with($value, '@')) {
            $fail('Must start with @');
        }

        if (str_contains($value, ' ')) {
            $fail('Cannot contain spaces');
        }
    }
}
