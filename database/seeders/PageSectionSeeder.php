<?php

namespace Database\Seeders;

use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            // Home Page
            'home-hero' => json_encode([
                'heading' => 'Guiding You Towards Meaningful Career Pathways',
                'subheading' => 'Karissa Subedi Career Consultancy Services provides professional career guidance, education support, and pathway information for individuals seeking opportunities in healthcare and related industries.',
                'cta1_text' => 'Book a Consultation',
                'cta1_link' => '/contact',
                'cta2_text' => 'Enquire Now',
                'cta2_link' => '/contact',
                'background_image' => '',
            ]),
            'home-intro' => json_encode([
                'heading' => 'Professional Guidance with a Personal Approach',
                'body' => 'At Karissa Subedi Career Consultancy Services, we are committed to helping individuals explore clear and informed career pathways with confidence. Our service is designed for students, graduates, and aspiring professionals who want trusted guidance on education, career development, and employer introduction pathways.

We provide support with clarity, professionalism, and care, ensuring every client feels informed, prepared, and empowered in their next step.',
            ]),
            'home-why-choose-us' => json_encode([
                'heading' => 'Why Choose Karissa Subedi Career Consultancy Services?',
                'point_1' => 'Personalised career guidance',
                'point_2' => 'Professional and ethical approach',
                'point_3' => 'Clear pathway information',
                'point_4' => 'Supportive and approachable service',
                'point_5' => 'Strong focus on healthcare and career development',
                'point_6' => 'Premium, client-focused experience',
            ]),
            'home-services-preview' => json_encode([
                'heading' => 'Our Services',
                'intro' => 'We offer professional support for individuals seeking guidance on education, training, and career opportunities.',
                'service_1' => 'Career Consultation',
                'service_1_desc' => 'One-on-one consultation to help clients understand their goals, strengths, and possible career pathways.',
                'service_2' => 'Education and Pathway Guidance',
                'service_2_desc' => 'Support in exploring relevant study options, training pathways, and development opportunities.',
                'service_3' => 'Employer Introduction Pathway Information',
                'service_3_desc' => 'Guidance for individuals interested in learning about employer introduction pathways and professional opportunities.',
                'service_4' => 'Graduate Career Support',
                'service_4_desc' => 'Advisory support for fresh graduates seeking direction and clarity in navigating early career opportunities.',
                'service_5' => 'Healthcare Career Advisory',
                'service_5_desc' => 'Specialised support for individuals interested in healthcare-related pathways, including education and career direction.',
            ]),
            'home-closing-cta' => json_encode([
                'heading' => 'Take the Next Step with Confidence',
                'body' => 'Whether you are a fresh graduate, an aspiring healthcare worker, or someone exploring a new direction, we are here to help you understand your options and move forward with confidence.',
                'button_text' => 'Contact Us Today',
                'button_link' => '/contact',
            ]),

            // About Page
            'about-main' => json_encode([
                'heading' => 'About Karissa Subedi Career Consultancy Services',
                'body' => 'Karissa Subedi Career Consultancy Services was established with a vision to provide professional, supportive, and ethical career guidance for individuals seeking to build meaningful futures.

We understand that every career journey is unique. That is why our approach is centred on personalised support, clear communication, and trusted guidance. We aim to help clients better understand their pathways, explore suitable opportunities, and make informed decisions aligned with their goals.

Our focus is on delivering a premium consultancy experience that is professional, warm, and client-centred.',
            ]),
            'about-mission' => json_encode([
                'heading' => 'Our Mission',
                'body' => 'To provide clear, supportive, and professional career consultancy services that empower individuals to pursue meaningful education and employment pathways with confidence.',
            ]),
            'about-vision' => json_encode([
                'heading' => 'Our Vision',
                'body' => 'To be a trusted and respected career consultancy service known for integrity, professionalism, and personalised guidance.',
            ]),
            'about-values' => json_encode([
                'heading' => 'Our Values',
                'value_1' => 'Integrity',
                'value_2' => 'Professionalism',
                'value_3' => 'Clarity',
                'value_4' => 'Respect',
                'value_5' => 'Client-Centred Support',
                'value_6' => 'Excellence',
            ]),

            // Services Page
            'services-main' => json_encode([
                'heading' => 'Our Services',
                'intro' => 'We provide professional consultancy services for individuals looking for guidance in career planning, education options, and pathway opportunities, particularly in healthcare and related sectors.',
            ]),
            'services-items' => json_encode([
                'service_1_title' => 'Career Consultation',
                'service_1_desc' => 'One-on-one consultation to help clients understand their goals, strengths, and possible career pathways.',
                'service_2_title' => 'Education and Pathway Guidance',
                'service_2_desc' => 'Support in exploring relevant study options, training pathways, and development opportunities aligned with career goals.',
                'service_3_title' => 'Employer Introduction Pathway Information',
                'service_3_desc' => 'Guidance for individuals interested in learning about employer introduction pathways and professional opportunities, with a clear and ethical approach to information sharing.',
                'service_4_title' => 'Graduate Career Support',
                'service_4_desc' => 'Advisory support for fresh graduates seeking direction, confidence, and clarity in navigating early career opportunities.',
                'service_5_title' => 'Healthcare Career Advisory',
                'service_5_desc' => 'Specialised support for individuals interested in healthcare-related pathways, including education and career direction.',
            ]),
            'services-cta' => json_encode([
                'heading' => 'Ready to Learn More?',
                'body' => 'Enquire about our services today.',
                'button_text' => 'Enquire Now',
                'button_link' => '/contact',
            ]),

            // Information Sessions Page
            'info-sessions-main' => json_encode([
                'heading' => 'Information Sessions',
                'intro' => 'We offer information sessions for individuals who want to better understand available career pathways, education options, and professional opportunities.',
            ]),
            'info-sessions-graduates' => json_encode([
                'heading' => 'For Fresh Graduates in Health-Related Courses',
                'body' => 'This session is designed for fresh graduates from health-related backgrounds who are exploring career pathways, further development opportunities, and employer introduction options relevant to their qualifications.',
            ]),
            'info-sessions-nursing' => json_encode([
                'heading' => 'For Bachelor of Nursing Graduates',
                'body' => 'This session is designed for graduates of Bachelor of Nursing who are interested in understanding professional opportunities, career planning, and employer introduction pathways relevant to registered nursing employment.',
            ]),
            'info-sessions-cta' => json_encode([
                'heading' => 'Interested in Attending?',
                'body' => 'Register your interest and we will be in touch with upcoming session details.',
                'button_text' => 'Register Your Interest',
                'button_link' => '/contact',
            ]),

            // Contact Page
            'contact-main' => json_encode([
                'heading' => 'Contact Us',
                'intro' => 'We would be pleased to assist you with your career enquiries. Get in touch to learn more about our services and available pathways.',
            ]),
            'contact-details' => json_encode([
                'business_name' => 'Karissa Subedi Career Consultancy Services',
            ]),

            // Footer brand
            'footer-brand' => json_encode([
                'tagline' => 'Professional Career Guidance and Pathway Support',
            ]),

            // Legacy slugs (kept for backwards compatibility)
            'privacy-policy-banner' => json_encode([
                'tagline' => 'Privacy Policy',
            ]),
            'privacy-policy-main-content' => json_encode([
                'description' => '<h4>Privacy Policy</h4><p>Karissa Subedi Career Consultancy Services is committed to protecting your privacy. This policy outlines how we collect, use, and safeguard your personal information.</p><h5>Information We Collect</h5><p>We collect personal information that you voluntarily provide when you contact us or submit an enquiry.</p><h5>How We Use Your Information</h5><p>We use your information to process enquiries, communicate with you about our services, and improve our offerings.</p><h5>Data Security</h5><p>We implement appropriate security measures to protect your personal information against unauthorised access or disclosure.</p><h5>Contact Us</h5><p>If you have questions about our privacy policy, please contact us via our contact page.</p>',
            ]),
        ];

        foreach ($sections as $slug => $content) {
            PageSection::updateOrCreate(
                ['slug' => $slug],
                ['content' => $content]
            );
        }
    }
}
