<?php

declare(strict_types=0);

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AllowedAddressTypes implements Rule
{
    private const ALLOWED_ADDRESS_TYPES = [
        'Billing',
        'Delivery',
        'Postal',
    ];
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return in_array($value, self::ALLOWED_ADDRESS_TYPES);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The supplied address type is invalid.';
    }
}
