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

            $professor->senecaUser = $request->input('senecaUser');
            $professor->name = $request->input('name');
            $professor->surname1 = $request->input('surname1');
            $professor->surname2 = $request->input('surname2');
            $professor->speciality = $request->input('speciality');

        $professor->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditFormation(Request $request){
        $formation = Formation::find($request->input('id'));

            $formation->denomination = $request->input('denomination');
            $formation->acronym = $request->input('acronym');

        $formation->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditsubject(Request $request){
        $subject = subject::find($request->input('id'));

            $subject->formation_id = $request->input('formation_id');
            $subject->denomination = $request->input('denomination');
            $subject->acronym = $request->input('acronym');
            $subject->year = $request->input('year');
            $subject->hours = $request->input('hours');
            $subject->speciality = $request->input('speciality');

        $subject->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditgroup(Request $request){
        $group = group::find($request->input('id'));

            $group->schoolYear = $request->input('schoolYear');
            $group->formation_id = $request->input('formation_id');
            $group->year = $request->input('year');
            $group->denomination = $request->input('denomination');
            $group->speciality = $request->input('shift');
            $subject->hours = $request->input('hours');

        $group->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditlecture(Request $request){
        $lecture = lecture::find($request->input('id'));

            $lecture->group_id = $request->input('group_id');
            $lecture->subject_id = $request->input('subject_id');
            $lecture->professor_id = $request->input('professor_id');
            $lecture->hours = $request->input('hours');

        $group->save();

        return redirect()->route('dashboard');
    } 
}
