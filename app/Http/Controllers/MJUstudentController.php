<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Models\MJUstudent;
use Illuminate\Support\Facades\Log;

class MJUstudentController extends Controller
{
    public function index()
    {
        $students = MJUstudent::all();
        return $students;
    }

    public function show(Request $request, MjuStudent $mju)
    {
        
        Log::info("mjuStudent->".$mju);
        $student_cod = $request->mju;
        $mju = MJUstudent::find(
            $student_cod
        );
        return response()->json(
            [
                'message' => 'Student get successfully',
                'get Data by' => 'Attawit',
                'data' => $mju
            ],
            200
        );

        // Log::info($request->mju);
        // $student_cod = $request->mju;
        // $mjuStudent = MJUstudent::find(
        //     $student_cod
        // );
        // // return 'succeess';
        // return response()->json(
        //     [
        //         'message' => 'Student update successfully',
        //         'name' => $mjuStudent->first_name,
        //         'all data is' => $mjuStudent
        //     ],
        //     200
        // );
    }
    public function update(Request $request, MjuStudent $mju)
    {
        // 1)   ตรวจสอบความถูกต้องของข้อมูล validate $request 
        $validated = $request->validate([
            'student_code' => 'required|string|max:15',
            'first_name' => 'required|string|max:50',
            'first_name_en' => 'required|string|max:50',
            'major_id' => 'required|exists:majors,major_id',
            'id_card' => 'required||digits:13',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',

        ]);
        // 2)   แก้ไขข้อมูลใหม่ 
        $mju->update($validated);
        // 3)   กลับไปยังหน้าจอแสดงผล (json)

        return response()->json([
            'message' => 'Student update successfully',
            'all data is' => $mju

        ], 200);
    }
    public function destroy(Request $request, MjuStudent $mju)

    {
      
        $mju->delete();
        return response()->json([
            'message' => 'ทำลายละหายไปละบรื้วู้้้้้้้',
            'deleted_data' => $mju

        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_code' => 'required|string|max:15',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'first_name_en' => 'required|string|max:50',
            'last_name_en' => 'required|string|max:50',
            'major_id' => 'required|exists:majors,major_id',
            'id_card' => 'required|digits:13',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',

        ]);


        MJUstudent::create($validated);

        return response()->json(['message' => 'Student created successfully'], 201);
    }
}
