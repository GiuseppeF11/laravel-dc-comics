<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'                 => 'required|max:500',
            'description'           => 'required|max:2000',
            'thumb'                 => 'nullable|url|max:2000',
            'price'                 => 'required|decimal:2',
            'series'                => 'nullable|numeric|min:100|max:5000',
            'sale_date'             => 'nullable|date',
            'type'                  => 'nullable|max:200',
            'artists'               => 'nullable',
            'writers'               => 'nullable',
        ];
    }
}
