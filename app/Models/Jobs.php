<?php

namespace App\Models;



class Jobs
{
    public static function all() { // Simulated static method to fetch all job listings

        return [
            [
                "id" => 1,
                "title" => "Laravel Developer",
                "description" => "We are looking for a skilled Laravel developer to join our team.",
                "location" => "Remote",
                "salary" => "$70,000 - $90,000"
            ],
            [
                "id" => 2,
                "title" => "Frontend Developer",
                "description" => "Seeking a creative frontend developer with experience in React.",
                "location" => "New York, NY",
                "salary" => "$80,000 - $100,000"
            ],
            [
                "id" => 3,
                "title" => "Backend Developer",
                "description" => "Looking for a backend developer proficient in Node.js and Express.",
                "location" => "San Francisco, CA",
                "salary" => "$90,000 - $110,000"
            ]
        ]; // Sample static data
    }
}
