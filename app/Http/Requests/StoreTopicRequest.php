<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;     //To Use The Rule Class to use the function in() to add array in the validation
class StoreTopicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $topics = [
            // General Workplace Topics
            "Project updates", "Workflow improvements", "Team collaboration", "Career development",
            "Feedback", "Company goals", "Industry trends", "Streamlining processes",
            "Leadership opportunities", "Company culture", "Mentorship", "Innovation",
            "Efficiency", "Social", "Scientific", "Wellness", "Growth", "Sustainability",
            "Strategy", "Diversity",
            // Programming and Technology Topics
            "Frontend vs Backend", "JavaScript frameworks", "Server-side frameworks",
            "APIs and RESTful services", "Database optimization", "Responsive design",
            "UX and accessibility", "Version control", "Security", "Web performance",
            "DevOps", "Progressive Web Apps", "Testing and debugging", "HTML5 and CSS3",
            "Real-time data", "Cloud deployment", "Microservices", "Single Page Applications", "SEO"
        ];
        return [
            'topic' => ['required',Rule::in($topics)]
        ];
    }
}
