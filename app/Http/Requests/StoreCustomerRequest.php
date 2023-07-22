<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\AllowedAddressTypes;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:5', 'max:255'],
            'contact_number' => ['sometimes', 'numeric'],
            'address_type' => new AllowedAddressTypes(),
            'address' => ['required', 'min:5', 'max:255'],
            'city' => ['required', 'min:5', 'max:255'],
            'postal_code' => ['required', 'min:5', 'max:255'],
        ];
    }
}
