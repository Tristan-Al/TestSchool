<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Professor;

class EditController extends BaseController
{
    public function professor(int $id){
        $professor = Professor::whereId($id)->first();

        return view('edits.edit_professor', ['professor'=>$professor]);
    }

    public function formation(int $id){
        $formation = Formation::whereId($id)->first();

        return view('edits.edit_formation', ['formation'=>$formation]);
    }

    public function subject(int $id){
        $subject = Subject::whereId($id)->first();
        $formationes = Formation::all();

        return view('edits.edit_subject', ['subject'=>$subject, 'formationes'=>$formationes]);
    }

    public function group(int $id){
        $group = Group::whereId($id)->first();
        $formationes = Formation::all();

        return view('edits.edit_group', ['group'=>$group, 'formationes'=>$formationes]);
    }
    

    public function lecture(int $id){
        $lecture = Lecture::whereId($id)->first();
        $subjects = Subject::all();
        $groups = Group::all();
        $professores = Professor::all();

        return view('edits.edit_lecture', ['lecture'=>$lecture, 'subjects'=>$subjects, 'groups'=>$groups, 'professores'=>$professores]);
    }
    
    public function confirmEditProfessor(Request $request){
        $professor = Professor::find($request->input('id'));

        if (!empty($request->input('senecaUser'))){
            $professor->senecaUser = $request->input('senecaUser');
        }
        if (!empty($request->input('name'))){
            $professor->name = $request->input('name');
        }
        if (!empty($request->input('surname1'))){
            $professor->surname1 = $request->input('surname1');
        }
        if (!empty($request->input('surname2'))){
            $professor->surname2 = $request->input('surname2');
        }
        if (!empty($request->input('speciality'))){
            $professor->speciality = $request->input('speciality');
        }

        $professor->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditFormation(Request $request){
        $formation = Formation::find($request->input('id'));

        if (!empty($request->input('denomination'))){
            $formation->denomination = $request->input('denomination');
        }
        if (!empty($request->input('acronym'))){
            $formation->acronym = $request->input('acronym');
        }

        $formation->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditsubject(Request $request){
        $subject = subject::find($request->input('id'));

        if (!empty($request->input('formation_id'))){
            $subject->formation_id = $request->input('formation_id');
        }
        if (!empty($request->input('denomination'))){
            $subject->denomination = $request->input('denomination');
        }
        if (!empty($request->input('acronym'))){
            $subject->acronym = $request->input('acronym');
        }
        if (!empty($request->input('year'))){
            $subject->year = $request->input('year');
        }
        if (!empty($request->input('hours'))){
            $subject->hours = $request->input('hours');
        }
        if (!empty($request->input('speciality'))){
            $subject->speciality = $request->input('speciality');
        }

        $subject->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditgroup(Request $request){
        $group = group::find($request->input('id'));

        if (!empty($request->input('schoolYear'))){
            $group->schoolYear = $request->input('schoolYear');
        }
        if (!empty($request->input('formation_id'))){
            $group->formation_id = $request->input('formation_id');
        }
        if (!empty($request->input('year'))){
            $group->year = $request->input('year');
        }
        if (!empty($request->input('denomination'))){
            $group->denomination = $request->input('denomination');
        }
        if (!empty($request->input('shift'))){
            $group->speciality = $request->input('shift');
        }
        if (!empty($request->input('hours'))){
            $subject->hours = $request->input('hours');
        }

        $group->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditlecture(Request $request){
        $lecture = lecture::find($request->input('id'));

        if (!empty($request->input('group_id'))){
            $lecture->group_id = $request->input('group_id');
        }
        if (!empty($request->input('subject_id'))){
            $lecture->subject_id = $request->input('subject_id');
        }
        if (!empty($request->input('professor_id'))){
            $lecture->professor_id = $request->input('professor_id');
        }
        if (!empty($request->input('hours'))){
            $lecture->hours = $request->input('hours');
        }

        $group->save();

        return redirect()->route('dashboard');
    } 
}
