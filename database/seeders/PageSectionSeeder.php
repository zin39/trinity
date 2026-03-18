<?php

namespace Database\Seeders;

use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            // ── Homepage ──────────────────────────────
            'home-hero' => json_encode([
                'candidate_heading' => 'Your Career Journey Starts Here',
                'candidate_cta' => 'Explore Candidate Pathways',
                'candidate_image' => 'uploads/page/hero-candidate.jpg',
                'employer_heading' => 'Build Your Global Workforce',
                'employer_cta' => 'Explore Employer Solutions',
                'employer_image' => 'uploads/page/hero-employer.jpg',
            ]),
            'home-about-short' => json_encode([
                'heading' => 'About Karissa Subedi Career Consultancy Services',
                'body' => 'Karissa Subedi Career Consultancy Services connects skilled international candidates with employers across healthcare, aged care, hospitality, and other industries. We provide end-to-end guidance for candidates and tailored recruitment partnerships for employers, ensuring ethical, transparent, and professional outcomes.',
                'cta_text' => 'Learn More About Us',
                'cta_link' => '/about',
            ]),

            // ── About ─────────────────────────────────
            'about-main' => json_encode([
                'heading' => 'About Karissa Subedi Career Consultancy Services',
                'body' => 'Karissa Subedi Career Consultancy Services was established with a vision to bridge the gap between international talent and Australian employers, providing professional, ethical, and personalised career consultancy services.

We believe that every career journey is unique. Our approach centres on understanding each client\'s goals, strengths, and aspirations to deliver tailored pathways that create lasting impact for both candidates and employers.

Our commitment to transparency, integrity, and excellence drives everything we do — from initial consultation through to successful placement and beyond.',
            ]),
            'about-mission' => json_encode([
                'heading' => 'Our Mission',
                'body' => 'To empower individuals and organisations through professional career consultancy services that create meaningful, sustainable employment outcomes built on trust, transparency, and mutual respect.',
            ]),
            'about-vision' => json_encode([
                'heading' => 'Our Vision',
                'body' => 'To be the most trusted career consultancy service connecting international talent with Australian employers, recognised for integrity, professionalism, and the quality of our partnerships.',
            ]),
            'about-values' => json_encode([
                'heading' => 'Our Values',
                'value_1' => 'Integrity',
                'value_2' => 'Professionalism',
                'value_3' => 'Transparency',
                'value_4' => 'Respect',
                'value_5' => 'Client-Centred Excellence',
                'value_6' => 'Ethical Practice',
            ]),

            // ── Candidate ─────────────────────────────
            'candidate-hero' => json_encode([
                'heading' => 'Your Career Pathway to Australia',
                'body' => 'Whether you are a qualified nurse, aged care worker, hospitality professional, or skilled worker in another field, we provide clear, ethical guidance to help you achieve your career goals in Australia.',
            ]),
            'candidate-pathways' => json_encode([
                'heading' => 'Career Pathways We Support',
                'pathway_1_title' => 'Registered Nurses',
                'pathway_1_desc' => 'Guidance through AHPRA registration, skills assessment, and employer-sponsored visa pathways for internationally qualified nurses.',
                'pathway_2_title' => 'Aged Care Workers',
                'pathway_2_desc' => 'Support for qualified aged care professionals seeking employment opportunities in Australia\'s growing aged care sector.',
                'pathway_3_title' => 'Hospitality Professionals',
                'pathway_3_desc' => 'Career pathway guidance for chefs, hotel managers, and hospitality workers with relevant qualifications and experience.',
                'pathway_4_title' => 'Allied Health Professionals',
                'pathway_4_desc' => 'Consultancy support for physiotherapists, occupational therapists, and other allied health professionals.',
                'pathway_5_title' => 'Other Skilled Workers',
                'pathway_5_desc' => 'Tailored career guidance for skilled professionals across various industries seeking Australian opportunities.',
            ]),
            'candidate-values' => json_encode([
                'heading' => 'What We Offer Candidates',
                'value_1_title' => 'Personalised Career Guidance',
                'value_1_desc' => 'One-on-one consultations tailored to your qualifications, experience, and career aspirations.',
                'value_2_title' => 'Registration & Compliance Support',
                'value_2_desc' => 'Guidance through professional registration, skills assessments, and regulatory requirements.',
                'value_3_title' => 'Employer Introduction Pathways',
                'value_3_desc' => 'Connections with vetted Australian employers seeking international talent in your field.',
                'value_4_title' => 'Interview & Placement Preparation',
                'value_4_desc' => 'Comprehensive preparation for interviews, workplace orientation, and cultural transition.',
                'value_5_title' => 'Ongoing Support',
                'value_5_desc' => 'Continued guidance throughout your transition to ensure a successful and sustainable career outcome.',
            ]),
            'candidate-services' => json_encode([
                'heading' => 'Industries We Serve',
                'body' => 'We connect candidates with employers across Australia\'s key growth industries.',
                'cta_text' => 'Register Your Interest',
                'cta_link' => '/contact',
            ]),

            // ── Employer ──────────────────────────────
            'employer-hero' => json_encode([
                'heading' => 'Partner With Us for Ethical International Recruitment',
                'subheading' => 'We connect Australian employers with pre-qualified, job-ready international candidates across healthcare, aged care, hospitality, and more.',
                'cta_text' => 'Discuss Your Workforce Needs',
                'cta_link' => '/contact',
            ]),
            'employer-partnerships' => json_encode([
                'heading' => 'Tailored Workforce Partnerships',
                'body' => 'Finding the right international talent requires more than matching resumes to job descriptions. We take a consultative approach — understanding your organisation\'s culture, workforce challenges, and long-term goals to deliver candidates who are not just qualified, but genuinely prepared to succeed in your workplace.

Our partnerships are built on transparency, regular communication, and a shared commitment to ethical recruitment practices that benefit both employers and candidates.',
            ]),
            'employer-values' => json_encode([
                'heading' => 'Why Employers Choose Us',
                'value_1_title' => 'Pre-Qualified Candidates',
                'value_1_desc' => 'Every candidate undergoes thorough screening including qualifications verification, English proficiency assessment, and professional reference checks.',
                'value_2_title' => 'Ethical Recruitment',
                'value_2_desc' => 'We adhere to ethical recruitment standards, ensuring transparency and fairness for both employers and candidates.',
                'value_3_title' => 'Industry Expertise',
                'value_3_desc' => 'Deep understanding of healthcare, aged care, and hospitality sectors, including regulatory requirements and workforce dynamics.',
                'value_4_title' => 'End-to-End Support',
                'value_4_desc' => 'From candidate sourcing through to onboarding and settlement support, we manage the entire recruitment journey.',
                'value_5_title' => 'Retention Focus',
                'value_5_desc' => 'Our candidate preparation and ongoing support programs are designed to maximise long-term retention and workplace integration.',
            ]),
            'employer-preparation' => json_encode([
                'heading' => 'Our Candidate Preparation Framework',
                'step_1_title' => 'Initial Assessment',
                'step_1_desc' => 'Comprehensive evaluation of qualifications, experience, and career aspirations.',
                'step_2_title' => 'Skills Verification',
                'step_2_desc' => 'Thorough verification of professional credentials and regulatory compliance requirements.',
                'step_3_title' => 'English Proficiency',
                'step_3_desc' => 'Assessment and support for English language requirements including IELTS/OET preparation guidance.',
                'step_4_title' => 'Cultural Orientation',
                'step_4_desc' => 'Preparation for Australian workplace culture, professional expectations, and community integration.',
                'step_5_title' => 'Interview Preparation',
                'step_5_desc' => 'Tailored interview coaching and employer-specific preparation to ensure candidates present their best.',
                'step_6_title' => 'Pre-Departure Briefing',
                'step_6_desc' => 'Comprehensive briefing covering logistics, accommodation, banking, and practical settlement information.',
                'step_7_title' => 'Ongoing Support',
                'step_7_desc' => 'Post-arrival check-ins and continued support to ensure successful transition and workplace integration.',
            ]),
            'employer-workforce' => json_encode([
                'heading' => 'Workforce Partnership Approach',
                'body' => 'We understand that every organisation has unique workforce needs. Our consultative approach means we work closely with you to understand your specific requirements — from the number of positions and skill levels needed, to cultural fit and long-term workforce planning.

Whether you need a single specialist or are planning a large-scale international recruitment initiative, we provide a tailored, transparent, and professional service from start to finish.',
            ]),
            'employer-cta' => json_encode([
                'heading' => 'Ready to Build Your Workforce?',
                'cta_text' => 'Get In Touch',
                'cta_link' => '/contact',
            ]),

            // ── Testimonials ──────────────────────────
            'testimonials-hero' => json_encode([
                'heading' => 'What Our Clients Say',
            ]),

            // ── Contact ───────────────────────────────
            'contact-main' => json_encode([
                'heading' => 'Contact Us',
                'intro' => 'Whether you are a candidate exploring career pathways or an employer seeking international talent, we would be pleased to hear from you. Get in touch to discuss how we can help.',
            ]),
            'contact-details' => json_encode([
                'business_name' => 'Karissa Subedi Career Consultancy Services',
            ]),

            // ── Footer ───────────────────────────────
            'footer-brand' => json_encode([
                'tagline' => 'Connecting International Talent with Australian Employers',
            ]),

            // ── Legacy / Privacy ──────────────────────
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
