<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Subject;

class SubjectRequest extends FormRequest
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
        $subject_id = $this->route('subject')->id;
        return [
            'formation_id' => ['required', Rule::exists('formations', 'id')],
            'denomination' => 'required|max:60|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
            'acronym' => 'required|max:10|regex:/^[A-Z]+$/',
            'year' => ['required', 'regex:/^[1-4]$/'],
            'hours' => ['required', 'regex:/^\d+$/', function ($attribute, $value, $fail) use ($subject_id){
                $formation_subjects=Subject::where('formation_id', $this->input('formation_id'))
                    ->where('id', '<>', $subject_id)
                    ->sum('hours');
                $total_hours=$formation_subjects+$value;
                $max_hours=30;
                if($total_hours > $max_hours){
                    $fail('A subject can not have more than '.$max_hours.' hours per week.');
                }
                elseif($total_hours < 0){
                    $fail('A subject\'s hours can not be negative.');
                }
            }],
            'speciality' => ['required', 'in:secondary,vocational_training'],
        ];
    }
}
