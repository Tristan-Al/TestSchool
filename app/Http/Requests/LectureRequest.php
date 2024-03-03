<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Lecture;

class LectureRequest extends FormRequest
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
        $lecture_id = $this->route('lecture')->id;
        return [
            'group_id' => ['required', Rule::exists('groups', 'id')],
            'subject_id' => ['required', Rule::exists('subjects', 'id')],
            'professor_id' => ['required', Rule::exists('professors', 'id')],
            'hours' => ['required', 'regex:/^\d+$/', function ($attribute, $value, $fail) use ($lecture_id){
                $professor_lectures=Lecture::where('professor_id', $this->input('professor_id'))
                    ->where('id', '<>', $lecture_id)
                    ->sum('hours');
                $total_hours=$professor_lectures+$value;
                $max_hours=40;
                if($total_hours > $max_hours){
                    $fail('A professor can not work more than 40 hours per week.');
                }
                elseif($total_hours < 0){
                    $fail('A professor\'s hours  can not be negative.');
                }
            }],
        ];
    }
}
