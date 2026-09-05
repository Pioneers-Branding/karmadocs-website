<?php
/**
 * Configuration & SEO Helper Functions
 * Karma Doctors & Associates - Standalone PHP Site
 */

// Define Base URL dynamically if needed or root relative
if (!defined('BASE_URL')) {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $base = rtrim($script_dir, '/\\');
    define('BASE_URL', $base === '/' ? '' : $base);
}

/**
 * Helper to generate root-relative URLs
 */
function url($path = '') {
    if ($path === '' || $path === false || $path === null) {
        return BASE_URL;
    }
    $clean_path = '/' . ltrim($path, '/');
    return BASE_URL . $clean_path;
}

/**
 * Get dynamic page titles based on current page key or custom title
 */
function get_page_title($page_key = '', $custom_title = '') {
    if (!empty($custom_title)) {
        return $custom_title;
    }

    $titles = [
        'home' => 'Karma Doctors & Associates | Psychiatry & TMS Therapy in Palm Springs',
        'patient-education' => 'Mental Health Resources & Support | Patient Education Library',
        'about' => 'About Karma Doctors | Expert Psychiatrists in Palm Springs, CA',
        'team' => 'Meet Our Expert Psychiatrists in California | Karma Doctors Team',
        'contact' => 'Contact Psychiatrist in Palm Springs, CA | Book Appointment',
        'anxiety' => 'Anxiety Treatment in Palm Springs, CA | Expert Psychiatric Care',
        'depression' => 'Depression Treatment in Palm Springs | TMS Therapy Available',
        'ptsd' => 'PTSD Treatment in Palm Springs, CA | Trauma-Informed Care',
        'adhd' => 'ADHD Treatment in Palm Springs | Adult & Child Psychiatry',
        'bipolar' => 'Bipolar Disorder Treatment in Palm Springs, CA',
        'ocd' => 'OCD Treatment in Palm Springs | Obsessive Compulsive Disorder Help',
        'medication-management' => 'Psychiatric Medication Management in Palm Springs, CA',
        'tms' => 'TMS Therapy in Palm Springs, CA | Drug-Free Depression Treatment',
        'privacy-policy' => 'Privacy Policy | Karma Doctors & Associates',
        'terms-conditions' => 'Terms & Conditions | Karma Doctors & Associates',
        'insurance-rates' => 'Insurance & Rates | Karma Doctors & Associates',
        'areas-we-serve' => 'Areas We Serve | Karma Doctors & Associates',
        'research-publications' => 'Research & Publications | Karma Doctors & Associates',
        'blog' => 'Mental Health Blog & Insights | Karma Doctors & Associates',
        'thank-you' => 'Thank You | Karma Doctors & Associates',
        'tms-quiz' => 'TMS Therapy Quiz | Karma Doctors & Associates',
        'client-forms' => 'Patient & Client Forms | Karma Doctors & Associates'
    ];

    return isset($titles[$page_key]) ? $titles[$page_key] : 'Karma Doctors & Associates | Psychiatry & TMS Therapy';
}

/**
 * Get dynamic meta description based on current page key or custom description
 */
function get_meta_description($page_key = '', $custom_desc = '') {
    if (!empty($custom_desc)) {
        return $custom_desc;
    }

    $descriptions = [
        'patient-education' => 'Explore trusted mental health resources, support groups, and expert information on depression, anxiety, PTSD, ADHD, and more. Learn and take control today.',
        'about' => 'Learn about Karma Doctors, a trusted psychiatry practice in Palm Springs specializing in depression, anxiety, ADHD & TMS therapy. Compassionate, personalized care.',
        'team' => 'Meet our experienced psychiatry team providing compassionate, evidence-based mental health care across California. Personalized treatment you can trust.',
        'contact' => 'Contact Karma Doctors to book psychiatry, therapy, or TMS treatment in Palm Springs, Rancho Mirage & Twentynine Palms. Start your mental wellness journey today.',
        'anxiety' => 'Struggling with anxiety? Get expert diagnosis and personalized treatment in Palm Springs. Therapy, medication & TMS options available. Start feeling better today.',
        'depression' => 'Advanced depression treatment in Palm Springs, including FDA-approved TMS therapy. Get relief with personalized psychiatric care. Book a Board-Certified Psychiatric Evaluation today.',
        'ptsd' => 'Find relief from PTSD with compassionate, trauma-informed psychiatric care. Proven treatments for lasting recovery in Palm Springs. Get help today.',
        'adhd' => 'Comprehensive ADHD diagnosis and treatment for children and adults. Improve focus, productivity, and daily life with expert care in Palm Springs.',
        'bipolar' => 'Stabilize mood and regain control with expert bipolar disorder treatment. Personalized medication and therapy plans in Palm Springs. Book today.',
        'ocd' => 'Effective OCD treatment with evidence-based therapy and medication management. Reduce intrusive thoughts and regain control. Start treatment today.',
        'medication-management' => 'Safe, personalized psychiatric medication management for depression, anxiety, ADHD & more. Ongoing monitoring for better outcomes. Book today.',
        'tms' => 'FDA-approved TMS therapy for treatment-resistant depression. Non-invasive, medication-free solution available in Palm Springs. Verify insurance today.',
        'privacy-policy' => 'Read the Privacy Policy of Karma Doctors & Associates. Understand how we collect, protect, and safeguard your personal information and clinical data.',
        'terms-conditions' => 'Read the Terms & Conditions of Karma Doctors & Associates. Understand the terms, protocols, and SMS guidelines governing our clinic services.'
    ];

    return isset($descriptions[$page_key]) ? $descriptions[$page_key] : 'Karma Doctors & Associates provides double board-certified psychiatry and FDA-cleared TMS therapy in Palm Springs, Rancho Mirage, and Twentynine Palms, CA.';
}

/**
 * Escapes URL to prevent XSS and undefined function errors
 */
if (!function_exists('esc_url')) {
    function esc_url($url) {
        return htmlspecialchars((string)$url, ENT_QUOTES, 'UTF-8');
    }
}

