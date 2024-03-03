<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Subject;

class GroupRequest extends FormRequest
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
        $currentMonth = date('m');
        if ($currentMonth >= 9 && $currentMonth <= 12) {
            $four_digits_year = date('Y');
            $two_digits_year = date('y')+1;
        }
        else{
            $four_digits_year = date('Y')-1;
            $two_digits_year = date('y');
        }

        return [
            'school_year' => ['required', 'regex:/^'.$four_digits_year.'-'.$two_digits_year.'$/'],
            'formation_id' => ['required', Rule::exists('formations', 'id')],
            'year' => ['required', 'regex:/^[1-4]$/'],
            'denomination' => ['required', 'max:60', 'regex:/^[1-4][A-Z]{3,5}[A-B]$/', function ($attribute, $value, $fail){
                $numberPart = substr($value, 0, 1);
                $subject=Subject::where('formation_id', $this->input('formation_id'))->first();
                $speciality = $subject ? $subject->speciality : null;
                if($speciality=='vocational_training' && intval($numberPart) > 2){
                    $fail('The denomination field format is invalid.');
                }
            }],
            'shift' => ['required', 'in:morning,afternoon'],
        ];
    }
}
