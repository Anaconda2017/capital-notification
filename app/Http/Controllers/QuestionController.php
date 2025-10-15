<?php

namespace App\Http\Controllers;

use App\Question;
use App\Choice;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // عرض أول سؤال
    public function showFirstQuestion() {
        $firstQuestion = Question::with('choices')->first();  // جلب أول سؤال مع اختياراته
        return view('frontend.questions_chart', compact('firstQuestion'));
    }

    // عرض السؤال التالي بناءً على اختيار المستخدم
    public function getNextQuestion($choiceId) {
    // البحث عن الاختيار بناءً على الـ ID
    $choice = Choice::with('nextQuestion')->find($choiceId);
    if (!$choice) {
        return response()->json(['error' => 'Choice not found'], 404);
    }

    // الحصول على السؤال التالي
    $nextQuestion = $choice->nextQuestion;

    if (!$nextQuestion) {
        return response()->json(['error' => 'Next question not found'], 404);
    }

    // بناء البيانات الخاصة بالسؤال القادم
    $chartData = [
        'text' => $nextQuestion->text,
        'choices' => $nextQuestion->choices->map(function($choice) {
            return [
                'text' => $choice->text,
                'id' => $choice->id
            ];
        })
    ];

    return response()->json($chartData);  // إرجاع البيانات إلى الـ Client
}

    // دالة مساعدة لبناء الشجرة
    private function buildChart($nextQuestion) {
        $chart = [
            'name' => $nextQuestion->text,
            'children' => []
        ];

        foreach ($nextQuestion->choices as $choice) {
            $chart['children'][] = [
                'name' => $choice->text,
                'id' => $choice->id
            ];
        }

        return $chart;
    }
}
