<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfessorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return true;
        }
        throw new AuthorizationException('No permissions for this action.');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'seneca_user' => 'required|regex:/^[a-z]{7}\d{3}$/',
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'surname1' => 'required|regex:/^[\pL\s\-]+$/u',
            'surname2' => 'required|regex:/^[\pL\s\-]+$/u',
            'speciality' => ['required', 'in:secondary,vocational_training'],
        ];
    }
}
