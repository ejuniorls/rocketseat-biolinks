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

        // Additional validations you might want:
        //
        // if (strlen($value) < 4) {
        //     $fail('Must be at least 4 characters long (including @)');
        // }
        //
        // if (strlen($value) > 30) {
        //     $fail('Cannot exceed 30 characters');
        // }

        // Check for reserved usernames
        $reserved = ['admin', 'root', 'system', 'support', 'moderator'];
        $username = substr($value, 1); // Remove @
        if (in_array(strtolower($username), $reserved)) {
            $fail('This username is reserved');
        }
        //
        // // Check for minimum alphanumeric characters
        // $username = substr($value, 1);
        // if (preg_match_all('/[a-zA-Z0-9]/', $username) < 2) {
        //     $fail('Must contain at least 2 letters or numbers');
        // }
    }
}
