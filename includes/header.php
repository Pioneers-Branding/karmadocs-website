<?php
require_once __DIR__ . '/config.php';

$page_key = isset($page_key) ? $page_key : 'home';
$page_title = isset($page_title) ? $page_title : get_page_title($page_key);
$meta_desc = isset($meta_desc) ? $meta_desc : get_meta_description($page_key);

// Active link helper
$is_active = function($key) use ($page_key) {
    if (is_array($key)) {
        return in_array($page_key, $key) ? 'text-brand-purple font-bold' : 'text-gray-700 hover:text-brand-purple';
    }
    return $page_key === $key ? 'text-brand-purple font-bold' : 'text-gray-700 hover:text-brand-purple';
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-22JDJ6N3W5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-22JDJ6N3W5');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo url('/assets/favicon-purple.png'); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo url('/assets/favicon-purple.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo url('/assets/favicon-purple.png'); ?>">

    <?php if ($page_key === 'home'): ?>
    <meta name="facebook-domain-verification" content="zgpw5nbikaspzue5i5cgtacxo1gt49" />
    <?php endif; ?>

    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@graph": [
 {
 "@type": ["MedicalBusiness", "MedicalOrganization"],
 "@id": "https://karmadocs.com/#palm-springs",
 "name": "Karma Doctors & Associates — Palm Springs",
 "url": "https://karmadocs.com/",
 "telephone": "+1-951-297-8375",
 "email": "contact@karmadocs.com",
 "image": "<?php echo url('/assets/cloudinary/Karma-Docs-Logo-Horizental_w48ja1.webp'); ?>",
 "logo": "<?php echo url('/assets/cloudinary/Logo-2_bchwgb.webp'); ?>",
 "priceRange": "$$",
 "description": "Double board-certified psychiatry and FDA-cleared TMS therapy.",
 "medicalSpecialty": [
 { "@type": "MedicalSpecialty", "name": "Psychiatry" },
 { "@type": "MedicalSpecialty", "name": "Addiction Medicine" }
 ],
 "address": {
 "@type": "PostalAddress",
 "streetAddress": "560 S Paseo Dorotea, Suite 4-A",
 "addressLocality": "Palm Springs",
 "addressRegion": "CA",
 "postalCode": "92264",
 "addressCountry": "US"
 },
 "geo": {
 "@type": "GeoCoordinates",
 "latitude": 33.8189,
 "longitude": -116.5453
 },
 "openingHoursSpecification": [{
 "@type": "OpeningHoursSpecification",
 "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
 "opens": "09:00",
 "closes": "17:00"
 }],
 "aggregateRating": {
 "@type": "AggregateRating",
 "ratingValue": "4.9",
 "reviewCount": "50"
 }
 },
 {
 "@type": ["Physician", "Person"],
 "@id": "https://karmadocs.com/#dr-sunder",
 "name": "Dr. Keerthy Sunder, MD",
 "jobTitle": "Double Board-Certified Psychiatrist",
 "description": "Double Board-Certified Psychiatrist with 20+ years of experience...",
 "image": "<?php echo url('/assets/cloudinary/4990c7a6-07b7-48c2-9a5f-cd188d2ad944.png'); ?>",
 "medicalSpecialty": [
 { "@type": "MedicalSpecialty", "name": "Psychiatry" },
 { "@type": "MedicalSpecialty", "name": "Addiction Medicine" }
 ],
 "alumniOf": {
 "@type": "EducationalOrganization",
 "name": "Mayo Clinic"
 },
 "worksFor": { "@id": "https://karmadocs.com/#palm-springs" },
 "sameAs": ["https://www.healthgrades.com/physician/dr-rajagopal-keerthy-sunder-yhxfj"]
 },
 {
 "@type": ["MedicalProcedure", "Service"],
 "@id": "https://karmadocs.com/#tms",
 "name": "TMS Therapy",
 "description": "FDA-cleared, non-invasive treatment using focused magnetic pulses.",
 "procedureType": {
 "@type": "MedicalProcedureType",
 "name": "NoninvasiveProcedure"
 },
 "provider": { "@id": "https://karmadocs.com/#palm-springs" }
 },
 {
 "@type": "Service",
 "@id": "https://karmadocs.com/#medication-management",
 "name": "Medication Management",
 "url": "https://karmadocs.com/medication-management",
 "provider": { "@id": "https://karmadocs.com/#palm-springs" }
 }
 ]
}
</script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            purple: '#603177',
                            purpleLight: '#7A4D8F',
                            orange: '#F48F12',
                            orangeHover: '#D67A0A',
                            dark: '#1F2937',
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        body: ['Open Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url('/style.css'); ?>">
</head>

<body class="font-body text-gray-700 antialiased overflow-x-hidden">

    <!-- Header/Nav -->
    <header class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-gradient-to-b from-white/90 via-white/80 to-transparent py-4 shadow-sm" id="main-header">

        <!-- Top Contact Bar -->
        <div id="top-contact-bar" class="container mx-auto px-4 mb-1 hidden opacity-0 transition-all duration-300 transform -translate-y-2">
            <div class="flex flex-col sm:flex-row justify-between items-center text-xs text-brand-purple font-medium backdrop-blur rounded-lg px-4 py-2 shadow-sm border border-gray-200 bg-gray-100">
                <div class="flex items-center space-x-4 mb-2 sm:mb-0">
                    <span><i class="fas fa-phone-alt mr-2 text-brand-orange"></i> +1 (951) 297 8375</span>
                    <span class="hidden sm:inline"><i class="fas fa-fax mr-2 text-brand-orange"></i> Fax: +1 (951) 602 8264</span>
                    <span class="hidden sm:inline"><i class="fas fa-envelope mr-2 text-brand-orange"></i> contact@karmadocs.com</span>
                </div>
                <div class="w-fit">
                    <span>Mon - Fri: 9:00 AM - 5:00 PM</span>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="<?php echo url('/'); ?>" class="text-2xl font-bold font-sans tracking-tight flex items-center transition-all duration-500">
                <img src="<?php echo url('/assets/cloudinary/Karma-Docs-Logo-Horizental_w48ja1.webp'); ?>" alt="KDA logo" class="h-16 md:h-20 transition-all duration-500">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center space-x-8 font-semibold text-sm uppercase tracking-wide text-gray-800">
                <a href="<?php echo url('/'); ?>" class="<?php echo $is_active('home'); ?> transition-colors">Home</a>
                <a href="<?php echo url('/about'); ?>" class="<?php echo $is_active('about'); ?> transition-colors">About Us</a>

                <!-- Conditions Dropdown -->
                <div class="group relative py-2">
                    <button class="<?php echo $is_active(['anxiety', 'depression', 'ptsd', 'adhd', 'bipolar', 'ocd']); ?> transition-colors flex items-center gap-1.5 focus:outline-none">
                        Conditions
                        <i class="fas fa-chevron-down text-[10px] text-gray-400 group-hover:text-brand-purple group-hover:rotate-180 transition-transform"></i>
                    </button>
                    <div class="absolute top-full left-0 pt-2 w-52 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-2">
                            <a href="<?php echo url('/anxiety'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">Anxiety</a>
                            <a href="<?php echo url('/depression'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">Depression</a>
                            <a href="<?php echo url('/ptsd'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">PTSD</a>
                            <a href="<?php echo url('/adhd'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">ADHD</a>
                            <a href="<?php echo url('/bipolar'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">Bipolar Disorder</a>
                            <a href="<?php echo url('/ocd'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">OCD</a>
                        </div>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="group relative py-2">
                    <button class="<?php echo $is_active(['medication-management', 'tms']); ?> transition-colors flex items-center gap-1.5 focus:outline-none">
                        Services
                        <i class="fas fa-chevron-down text-[10px] text-gray-400 group-hover:text-brand-purple group-hover:rotate-180 transition-transform"></i>
                    </button>
                    <div class="absolute top-full left-0 pt-2 w-60 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-2">
                            <a href="<?php echo url('/medication-management'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">Medication Management</a>
                            <a href="<?php echo url('/tms'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">TMS Therapy</a>
                        </div>
                    </div>
                </div>

                <!-- Patient Resources Dropdown -->
                <div class="group relative py-2">
                    <button class="<?php echo $is_active(['insurance-rates', 'patient-education', 'blog', 'single-blog']); ?> transition-colors flex items-center gap-1.5 focus:outline-none">
                        Patient Resources
                        <i class="fas fa-chevron-down text-[10px] text-gray-400 group-hover:text-brand-purple group-hover:rotate-180 transition-transform"></i>
                    </button>
                    <div class="absolute top-full left-0 pt-2 w-60 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-2">
                            <a href="<?php echo url('/insurance-rates'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">Insurance & Rates</a>
                            <a href="<?php echo url('/patient-education'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">Patient Education</a>
                            <a href="<?php echo url('/blog'); ?>" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800">Blogs</a>
                            <a href="https://sunderfoundation.org/" target="_blank" rel="noopener" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-brand-purple transition-colors text-xs font-bold text-gray-800 border-t border-gray-100 mt-1 pt-3">
                                <span class="flex items-center gap-2">
                                    <i class="fas fa-heart text-brand-orange text-[10px]"></i>
                                    Foundation
                                    <i class="fas fa-external-link-alt text-gray-300 text-[9px] ml-auto"></i>
                                </span>
                                <span class="block text-[10px] font-normal text-gray-500 normal-case tracking-normal mt-0.5">Research, Arts & Mental Health</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?php echo url('/research-publications'); ?>" class="<?php echo $is_active('research-publications'); ?> transition-colors">Research</a>
                <a href="<?php echo url('/contact'); ?>" class="<?php echo $is_active('contact'); ?> transition-colors">Contact</a>
            </nav>

            <!-- CTA & Mobile Toggle -->
            <div class="flex items-center space-x-4">
                <a href="<?php echo url('/contact'); ?>" class="hidden sm:inline-flex items-center justify-center bg-gradient-to-r from-brand-orange to-brand-orangeHover text-white px-6 py-2.5 rounded-full font-semibold uppercase text-xs tracking-wider transition-all transform hover:-translate-y-0.5 hover:shadow-lg shadow-md">
                    Book Online
                </a>
                <button class="lg:hidden text-2xl text-gray-800 focus:outline-none p-2" id="mobile-menu-btn" aria-label="Toggle navigation menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="lg:hidden hidden bg-white absolute top-full left-0 w-full shadow-2xl h-[calc(100vh-80px)] overflow-y-auto z-40 transition-all duration-300 border-t border-gray-100" id="mobile-menu">
            <div class="flex flex-col px-6 py-8 space-y-6 font-semibold uppercase text-sm text-gray-800">
                <a href="<?php echo url('/'); ?>" class="block hover:text-brand-purple transition-colors">Home</a>
                <a href="<?php echo url('/about'); ?>" class="block hover:text-brand-purple transition-colors">About Us</a>

                <!-- Conditions Accordion -->
                <details class="group border-b border-gray-100 pb-2">
                    <summary class="flex justify-between items-center w-full cursor-pointer list-none focus:outline-none hover:text-brand-purple transition-colors [&::-webkit-details-marker]:hidden">
                        <span>Conditions</span>
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-gray-50 group-hover:bg-brand-purple/10 transition-colors">
                            <i class="fas fa-chevron-down text-[10px] text-gray-400 group-hover:text-brand-purple transition-transform duration-300 group-open:rotate-180"></i>
                        </span>
                    </summary>
                    <div class="flex flex-col pl-4 mt-5 space-y-5 text-xs font-semibold text-gray-500 border-l border-brand-orange/30 animate-fade-in-up">
                        <a href="<?php echo url('/anxiety'); ?>" class="block hover:text-brand-purple transition-colors">Anxiety</a>
                        <a href="<?php echo url('/depression'); ?>" class="block hover:text-brand-purple transition-colors">Depression</a>
                        <a href="<?php echo url('/ptsd'); ?>" class="block hover:text-brand-purple transition-colors">PTSD</a>
                        <a href="<?php echo url('/adhd'); ?>" class="block hover:text-brand-purple transition-colors">ADHD</a>
                        <a href="<?php echo url('/bipolar'); ?>" class="block hover:text-brand-purple transition-colors">Bipolar Disorder</a>
                        <a href="<?php echo url('/ocd'); ?>" class="block hover:text-brand-purple transition-colors">OCD</a>
                    </div>
                </details>

                <!-- Services Accordion -->
                <details class="group border-b border-gray-100 pb-2">
                    <summary class="flex justify-between items-center w-full cursor-pointer list-none focus:outline-none hover:text-brand-purple transition-colors [&::-webkit-details-marker]:hidden">
                        <span>Services</span>
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-gray-50 group-hover:bg-brand-purple/10 transition-colors">
                            <i class="fas fa-chevron-down text-[10px] text-gray-400 group-hover:text-brand-purple transition-transform duration-300 group-open:rotate-180"></i>
                        </span>
                    </summary>
                    <div class="flex flex-col pl-4 mt-5 space-y-5 text-xs font-semibold text-gray-500 border-l border-brand-orange/30 animate-fade-in-up">
                        <a href="<?php echo url('/medication-management'); ?>" class="block hover:text-brand-purple transition-colors">Medication Management</a>
                        <a href="<?php echo url('/tms'); ?>" class="block hover:text-brand-purple transition-colors">TMS Therapy</a>
                    </div>
                </details>

                <!-- Patient Resources Accordion -->
                <details class="group border-b border-gray-100 pb-2">
                    <summary class="flex justify-between items-center w-full cursor-pointer list-none focus:outline-none hover:text-brand-purple transition-colors [&::-webkit-details-marker]:hidden">
                        <span>Patient Resources</span>
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-gray-50 group-hover:bg-brand-purple/10 transition-colors">
                            <i class="fas fa-chevron-down text-[10px] text-gray-400 group-hover:text-brand-purple transition-transform duration-300 group-open:rotate-180"></i>
                        </span>
                    </summary>
                    <div class="flex flex-col pl-4 mt-5 space-y-5 text-xs font-semibold text-gray-500 border-l border-brand-orange/30 animate-fade-in-up">
                        <a href="<?php echo url('/insurance-rates'); ?>" class="block hover:text-brand-purple transition-colors">Insurance & Rates</a>
                        <a href="<?php echo url('/patient-education'); ?>" class="block hover:text-brand-purple transition-colors">Patient Education</a>
                        <a href="<?php echo url('/blog'); ?>" class="block hover:text-brand-purple transition-colors">Blogs</a>
                        <a href="https://sunderfoundation.org/" target="_blank" rel="noopener" class="flex items-center gap-2 hover:text-brand-purple transition-colors">
                            <i class="fas fa-heart text-brand-orange text-[10px]"></i>
                            Foundation
                            <i class="fas fa-external-link-alt text-gray-300 text-[9px]"></i>
                        </a>
                    </div>
                </details>

                <a href="<?php echo url('/research-publications'); ?>" class="block hover:text-brand-purple transition-colors">Research</a>
                <a href="<?php echo url('/contact'); ?>" class="block hover:text-brand-purple transition-colors">Contact</a>

                <div class="pt-6 mt-4">
                    <a href="<?php echo url('/contact'); ?>" class="flex items-center justify-center w-full bg-brand-orange hover:bg-brand-orangeHover text-white py-4 rounded-xl font-bold transition-colors shadow-lg shadow-brand-orange/30 mb-4">
                        Book Online Now
                    </a>
                    <a href="tel:+19512978375" class="flex items-center justify-center w-full bg-gray-50 hover:bg-gray-100 border border-gray-200 text-brand-purple py-4 rounded-xl font-bold transition-colors mb-2">
                        <i class="fas fa-phone-alt mr-2"></i> +1 (951) 297 8375
                    </a>
                    <a href="mailto:contact@karmadocs.com" class="flex items-center justify-center w-full text-gray-500 hover:text-brand-purple py-2 font-medium text-xs transition-colors lowercase">
                        <i class="fas fa-envelope mr-2"></i> contact@karmadocs.com
                    </a>
                </div>
            </div>
        </div>
    </header>
