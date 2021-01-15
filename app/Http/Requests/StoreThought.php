<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreThought extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // permissions management hidden in bg
        return (bool) Auth::user()->hasOnboarded;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'value' => 'required|numeric|min:0|max:10',
            'thoughts' => 'nullable|array',
            // 'thoughts.*' => 'string|required_with:thoughts|min:1|max:120' // when we have thoughts it has to be valid
        ];
    }
}
