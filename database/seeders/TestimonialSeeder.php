<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            // Candidate testimonials
            [
                'name' => 'Priya Sharma',
                'message' => 'Karissa and her team guided me through every step of my AHPRA registration and helped me secure a nursing position in Melbourne. Their support made the entire process feel manageable and I felt confident throughout my transition to Australia.',
                'type' => 'candidate',
                'image' => 'uploads/testimonial/testimonial-1.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Rajan Thapa',
                'message' => 'I was unsure about the process of moving to Australia for aged care work, but the consultancy made everything clear. From documentation to employer introductions, they were with me at every step. I am now happily working in Sydney.',
                'type' => 'candidate',
                'image' => 'uploads/testimonial/testimonial-2.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Maria Santos',
                'message' => 'As a nurse from the Philippines, navigating Australian registration requirements felt overwhelming. The team provided clear guidance on my skills assessment and AHPRA pathway, and I secured a role within three months of arriving.',
                'type' => 'candidate',
                'image' => 'uploads/testimonial/testimonial-3.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Anita Gurung',
                'message' => 'I came from a hospitality background and wanted to explore career opportunities in Australia. The personalised career consultation helped me understand my options and prepare for interviews. I would highly recommend their services.',
                'type' => 'candidate',
                'image' => 'uploads/testimonial/testimonial-4.jpg',
                'status' => 1,
            ],

            // Employer testimonials
            [
                'name' => 'Sarah Mitchell',
                'message' => 'As HR Director at Sunrise Aged Care Group, finding reliable international candidates has always been a challenge. Karissa Subedi Career Consultancy Services consistently provides us with well-prepared, qualified candidates who integrate smoothly into our teams.',
                'type' => 'employer',
                'image' => null,
                'status' => 1,
            ],
            [
                'name' => 'David Chen',
                'message' => 'We partnered with the consultancy to fill several nursing positions across our facilities. The candidates were thoroughly screened, professionally prepared, and the entire recruitment process was transparent and efficient. A truly valuable partnership.',
                'type' => 'employer',
                'image' => null,
                'status' => 1,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['name' => $testimonial['name']],
                $testimonial
            );
        }
    }
}
