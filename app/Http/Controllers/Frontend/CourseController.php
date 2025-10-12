<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function elevenplus(){
        return view('frontend.allcourse.elevenplus');
    }
    public function ksonemaths(){
        return view('frontend.allcourse.ksonemath');
    }
    public function ksoneenglish(){

        return view('frontend.allcourse.ksoneenglish');
    }
    public function kstwomaths(){

        return view('frontend.allcourse.kstwomath');
    }

    public function kstwoenglish(){

        return view('frontend.allcourse.kstwoenglish');
    }
    public function ksthree(){
        return view('frontend.allcourse.ksthree');
    }
    public function gcse(){
        return view('frontend.allcourse.gcse');
    }
    public function alevelCourse(){
        return view('frontend.allcourse.alevelcourse');
    }
    // revison course start
    public function revisionCourses(){
        return view('frontend.revisioncourse.index');
    }
    // gcse
    public function chemistryRevision(){
        return view('frontend.revisioncourse.gcsechemistryrevisioncourse');
    }
    
    public function mathsRevision(){
        return view('frontend.revisioncourse.gcsemathrevisioncourse');
    }
    
     public function biologyRevision(){
        return view('frontend.revisioncourse.gcsebiologyrevisioncourse');
    }
     public function physicsRevision(){
        return view('frontend.revisioncourse.gcsephysicsrevisioncourse');
    }
     public function englishlanguageRevision(){
        return view('frontend.revisioncourse.gcseenglishlanguagerevisioncourse');
    }
    
      public function englishLiteratureRevision(){
        return view('frontend.revisioncourse.gcseenglishliteraturerevision');
    }
    
    
    //gcse end
        // alevel
    public function aLevelchemistryRevision(){
        return view('frontend.revisioncourse.aLevelchemistryrevisioncourse');
    }
    
    public function aLevelmathsRevision(){
        return view('frontend.revisioncourse.aLevelmathrevisioncourse');
    }
    
     public function aLevelbiologyRevision(){
        return view('frontend.revisioncourse.aLevelbiologyrevisioncourse');
    }
     public function aLevelphysicsRevision(){
        return view('frontend.revisioncourse.aLevelphysicsrevisioncourse');
    }
     public function aLevelpsychologyRevision(){
        return view('frontend.revisioncourse.aLevelpsychologyrevisioncourse');
    }
    //gcse end
    
}
