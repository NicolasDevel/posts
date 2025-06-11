<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtiliesController extends Controller
{
    public function posts(Request $request)
    {
        $data = [
            [
                "title" => "Introduce Yourself!",
                "createdAt" => "3 minutes ago",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia nihil ab ad animi error expedita voluptatum.",
                "authorAvatar" => "https://placehold.co/60",
                "userAvatars" => [
                    "https://placehold.co/30",
                    "https://placehold.co/30",
                    "https://placehold.co/30",
                    "https://placehold.co/30",
                    "https://placehold.co/30",
                ],
                "comments" => 10,
            ],
            [
                "title" => "How to Start with Angular?",
                "createdAt" => "5 hours ago",
                "description" => "Angular is a platform for building mobile and desktop web applications.",
                "authorAvatar" => "https://placehold.co/60",
                "userAvatars" => [
                    "https://placehold.co/30",
                    "https://placehold.co/30",
                    "https://placehold.co/30",
                ],
                "comments" => 5,
            ],
        ];

        return response()->json($data);
    }
}
