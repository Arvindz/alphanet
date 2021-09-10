<?php
namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;


class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        return view('course-list', compact('courses','courses'))->with('no', 1);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'txtCourseName'=>'required',
            'txtCourseDuration'=> 'required',
            'txtCourseCode' => 'required'
        ]);

        $course = new Course([
            'courseName' => $request->get('txtCourseName'),
            'courseDuration'=> $request->get('txtCourseDuration'),
            'courseCode'=> $request->get('txtCourseCode')
        ]);

        $course->save();       
        return redirect()->route('course.index')
            ->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return view('Course.course-view',compact('course'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view('course-edit',compact('course'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
 
        $request->validate([
            'txtCourseName'=>'required',
            'txtCourseDuration'=> 'required',
            'txtCourseCode' => 'required'
        ]);
 
 
        $course = Course::find($id);
        $course->courseName = $request->get('txtCourseName');
        $course->courseDuration = $request->get('txtCourseDuration');
        $course->courseCode = $request->get('txtCourseCode');
 
        $course->update();
 
        return redirect()->route('course.index')
            ->with('success', 'Course updated successfully.');
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return redirect()->route('course.index')
            ->with('success', 'Course deleted successfully.');
    }

    public function abc(){
        
    }


}
