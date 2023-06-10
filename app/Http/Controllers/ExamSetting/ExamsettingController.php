<?php

namespace App\Http\Controllers\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamsettingController extends Controller
{

    public function ManageGrade(){
        return view('Examsetting.managegrade');
    }//end method
    public function AddGrade(){
        return view('Examsetting.addgrade');
    }//end method
   
    // EXAMTERMS

    public function Manageexamterms(){
        return view('Examsetting.manageexamterms');
    }//end method
    public function Addexamterms(){
        return view('Examsetting.addexamterms');
    }//end method


    // EXAM PARTS

    public function Manageexamparts(){
        return view('Examsetting.manageexamparts');
    }//end method
    public function Addexamparts(){
        return view('Examsetting.addexamparts');
    }//end method
    
    
    // EXAM ASSIGN

    public function Manageexamassign(){
        return view('Examsetting.manageexamassign');
    }//end method
    public function Addexamassign(){
        return view('Examsetting.addexamassign');
    }//end method


    // EXAM WORKINGDAYS

    public function Manageexamworkingdays(){
        return view('Examsetting.manageexamworkingdays');
    }//end method
    public function Addexamworkingdays(){
        return view('Examsetting.addexamworkingdays');
    }//end method
   
   
//    RESULT SETTING
    public function ResultSetting(){
        return view('Examsetting.resultsetting');
    }//end method

    //    Exam ELIGIBILITY
    public function ExamEligibility(){
        return view('Examsetting.exameligibility');
    }//end method
    
    //    Exam SeatPlan
    public function ExamSeatplan(){
        return view('Examsetting.examseatplan');
    }//end method


    //    Exam Attendance
    public function ExamAttendance(){
        return view('Examsetting.examattendance');
    }//end method

    //    Exam Attendance
    public function ExamattenSubject(){
        return view('Examsetting.examattensubject');
    }//end method
    public function ExamattenExam(){
        return view('Examsetting.examattenexam');
    }//end method

}
