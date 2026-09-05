<?php
/**
 * Blog Data Repository - Karma Doctors & Associates
 *
 * This file holds ONLY post metadata (the index). Article bodies live in
 * includes/blog-posts/{slug}.php and are loaded on demand by
 * get_blog_post_by_slug(), so listing pages never parse ~1.1MB of article HTML.
 *
 * Migrated from the karmadocs.com WordPress site.
 */

function get_blog_index() {
    static $index = null;
    if ($index !== null) {
        return $index;
    }
    $index = [
        [
            'id' => 2273,
            'slug' => 'can-anxiety-cause-hearing-loss-understanding-the-connection',
            'title' => 'Can Anxiety Cause Hearing Loss? Understanding the Connection',
            'author' => 'Karma Doctors Team',
            'date' => 'August 14, 2026',
            'date_iso' => '2026-08-14',
            'category' => 'Anxiety',
            'image' => '/assets/blog/chatgpt-image-aug-14-2026-05-36-55-pm.webp',
            'excerpt' => 'Can anxiety cause hearing loss? Anxiety can affect the way you experience and process sounds, but it does not usually cause permanent hearing loss by itself. People experiencing anxiety may notice ringing in the...',
        ],
        [
            'id' => 2265,
            'slug' => 'does-medicare-cover-tms-therapy',
            'title' => 'Does Medicare Cover TMS Therapy? What to Know',
            'author' => 'Karma Doctors Team',
            'date' => 'August 6, 2026',
            'date_iso' => '2026-08-06',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/tms-clinician-placing-coil-1-scaled.webp',
            'excerpt' => 'If you or a loved one has been struggling with depression that hasn’t improved after trying medications or therapy, you may be wondering, does Medicare cover TMS therapy? The good news is that Medicare does provide...',
        ],
        [
            'id' => 2247,
            'slug' => 'does-tms-therapy-hurt',
            'title' => 'Does TMS Therapy Hurt?',
            'author' => 'Karma Doctors Team',
            'date' => 'July 14, 2026',
            'date_iso' => '2026-07-14',
            'category' => 'Uncategorized',
            'image' => '/assets/blog/chatgpt-image-jul-14-2026-03-28-20-pm.webp',
            'excerpt' => 'If you’ve been considering TMS therapy in Palm Springs for depression, anxiety, OCD, or PTSD, chances are you’ve asked one important question: “Does TMS therapy hurt?” It’s one of the most common concerns people have...',
        ],
        [
            'id' => 2243,
            'slug' => 'how-many-tms-sessions-do-you-need',
            'title' => 'How Many TMS Sessions Do You Need to See Results? Expert TMS Advice',
            'author' => 'Karma Doctors Team',
            'date' => 'July 5, 2026',
            'date_iso' => '2026-07-05',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/e733c38b-9c51-4c42-a57d-55ae9e7f807e.webp',
            'excerpt' => 'If you’re considering Transcranial Magnetic Stimulation (TMS) for depression, anxiety, OCD, or PTSD, you’ve probably already asked your search engine some version of this question: how many sessions until I actually...',
        ],
        [
            'id' => 2233,
            'slug' => 'tms-therapy-near-me-that-accepts-medicaid',
            'title' => 'TMS Therapy Near Me That Accepts Medicaid in Palm Springs, CA: What You Need to Know',
            'author' => 'Karma Doctors Team',
            'date' => 'June 18, 2026',
            'date_iso' => '2026-06-18',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/chatgpt-image-jul-3-2026-01-35-33-pm.webp',
            'excerpt' => 'If you’ve been searching for “TMS therapy near me Medicaid“, you’re likely looking for an effective depression treatment that’s both accessible and affordable. For many individuals living with depression, anxiety, or...',
        ],
        [
            'id' => 2226,
            'slug' => 'what-does-tms-therapy-help-with',
            'title' => 'What Does TMS Therapy Help With?',
            'author' => 'Karma Doctors Team',
            'date' => 'June 13, 2026',
            'date_iso' => '2026-06-13',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/chatgpt-image-jun-13-2026-08-09-59-pm.webp',
            'excerpt' => 'For many people living with mental health conditions, finding the right treatment can feel like a long and frustrating journey. While medication and therapy help countless individuals manage their symptoms, others...',
        ],
        [
            'id' => 2210,
            'slug' => 'why-mental-health-awareness-month',
            'title' => 'Why Mental Health Awareness Month Matters More Than Ever in 2026',
            'author' => 'Karma Doctors Team',
            'date' => 'May 20, 2026',
            'date_iso' => '2026-05-20',
            'category' => 'Mental Health',
            'image' => '/assets/blog/mental-halth-awareness.webp',
            'excerpt' => 'Every year, Mental Health Awareness Month serves as an important reminder: mental health is just as important as physical health. Yet many people across Coachella Valley, Palm Springs, Rancho Mirage, Palm Desert,...',
        ],
        [
            'id' => 2207,
            'slug' => 'how-can-i-get-tms-for-ocd',
            'title' => 'How Can I Get TMS for OCD in Coachella Valley? A Complete Guide to Treatment Options',
            'author' => 'Karma Doctors Team',
            'date' => 'May 16, 2026',
            'date_iso' => '2026-05-16',
            'category' => 'OCD',
            'image' => '/assets/blog/gemini-generated-image-wvui6wwvui6wwvui-photoroom.webp',
            'excerpt' => 'Living with obsessive thoughts and compulsive behaviors can feel emotionally exhausting. For many people with OCD, daily routines become controlled by anxiety, repetitive rituals, and intrusive thoughts that are...',
        ],
        [
            'id' => 2199,
            'slug' => 'can-tms-therapy-help-ptsd',
            'title' => 'Can TMS Therapy Help PTSD? What Trauma Survivors Need to Know',
            'author' => 'Karma Doctors Team',
            'date' => 'May 12, 2026',
            'date_iso' => '2026-05-12',
            'category' => 'PTSD',
            'image' => '/assets/blog/ptsd.webp',
            'excerpt' => 'Trauma can leave lasting emotional wounds that affect every part of life, relationships, sleep, work performance, mood, and even physical health. For many people living with post-traumatic stress disorder (PTSD),...',
        ],
        [
            'id' => 2195,
            'slug' => 'does-tms-make-you-tired',
            'title' => 'Does TMS Make You Tired? The Truth Most Clinics Won’t Tell You',
            'author' => 'Karma Doctors Team',
            'date' => 'May 6, 2026',
            'date_iso' => '2026-05-06',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/gemini-generated-image-h0sn4fh0sn4fh0sn.webp',
            'excerpt' => 'Transcranial Magnetic Stimulation (TMS) has become a leading non-medication treatment for depression, anxiety, and other mental health conditions. As interest grows, so do practical questions from patients—one of the...',
        ],
        [
            'id' => 2178,
            'slug' => 'does-tricare-cover-tms-therapy-everything-you-need-to-know',
            'title' => 'Does Tricare Cover TMS Therapy? Everything You Need to Know',
            'author' => 'Karma Doctors Team',
            'date' => 'April 16, 2026',
            'date_iso' => '2026-04-16',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/gemini-generated-image-iqux5ziqux5ziqux.webp',
            'excerpt' => 'If you are a military member, veteran, or dependent and have been wondering does Tricare cover TMS therapy, you are asking exactly the right question. Transcranial Magnetic Stimulation (TMS) is an FDA-approved,...',
        ],
        [
            'id' => 2174,
            'slug' => 'is-adhd-a-disability-what-you-need-to-know',
            'title' => 'Is ADHD a Disability? What You Need to Know',
            'author' => 'Karma Doctors Team',
            'date' => 'April 13, 2026',
            'date_iso' => '2026-04-13',
            'category' => 'ADHD',
            'image' => '/assets/blog/fb2df8ac-1cef-483b-8c2d-8aa9c6e7e173.webp',
            'excerpt' => 'If you or someone you love has been diagnosed with ADHD, you may be wondering: is ADHD a disability? The short answer is yes, ADHD (Attention-Deficit/Hyperactivity Disorder) can qualify as a disability under federal...',
        ],
        [
            'id' => 2156,
            'slug' => 'what-are-tms-treatments',
            'title' => 'What Are TMS Treatments? A Complete Guide to Transcranial Magnetic Stimulation',
            'author' => 'Karma Doctors Team',
            'date' => 'April 6, 2026',
            'date_iso' => '2026-04-06',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/gemini-generated-image-xelnw8xelnw8xeln.webp',
            'excerpt' => 'Mental health treatment has evolved rapidly—but many patients still struggle to find relief through medications or therapy alone. That’s where Transcranial Magnetic Stimulation (TMS) comes in. TMS treatments are a...',
        ],
        [
            'id' => 2176,
            'slug' => 'how-to-calm-anxiety-proven-tips-that-actually-work',
            'title' => 'How to Calm Anxiety: Proven Tips That Actually Work',
            'author' => 'Karma Doctors Team',
            'date' => 'April 4, 2026',
            'date_iso' => '2026-04-04',
            'category' => 'Anxiety',
            'image' => '/assets/blog/d354ce85-b10d-441b-bc95-b8e4d108af80.webp',
            'excerpt' => 'Feeling overwhelmed, on edge, or unable to breathe deeply? If you’ve been searching for how to calm anxiety, you are not alone. Anxiety is one of the most common mental health challenges in America, affecting...',
        ],
        [
            'id' => 1005,
            'slug' => 'bipolar-disorder-vs-mood-swings-whats-the-difference',
            'title' => 'Bipolar Disorder vs Mood Swings: What’s the Difference?',
            'author' => 'Karma Doctors Team',
            'date' => 'March 17, 2026',
            'date_iso' => '2026-03-17',
            'category' => 'Bipolar Disorder',
            'image' => '/assets/blog/gemini-generated-image-cebjuecebjuecebj.webp',
            'excerpt' => 'Wondering if your mood swings might be bipolar disorder? Learn the clear clinical differences between normal mood variability and bipolar disorder — including duration, triggers, functional impact, and specific symptoms.',
        ],
        [
            'id' => 1004,
            'slug' => 'how-do-i-know-if-i-have-bipolar-disorder-early-warning-signs',
            'title' => 'How Do I Know If I Have Bipolar Disorder? Early Warning Signs',
            'author' => 'Karma Doctors Team',
            'date' => 'March 13, 2026',
            'date_iso' => '2026-03-13',
            'category' => 'Bipolar Disorder',
            'image' => '/assets/blog/gemini-generated-image-30fjml30fjml30fj.webp',
            'excerpt' => 'Wondering if you might have bipolar disorder? Discover the early warning signs — from decreased sleep need and impulsivity to grandiosity and rapid mood shifts — and when to seek a professional evaluation.',
        ],
        [
            'id' => 1003,
            'slug' => 'physical-symptoms-of-anxiety-most-people-dont-recognize',
            'title' => 'Physical Symptoms of Anxiety Most People Don’t Recognize',
            'author' => 'Karma Doctors Team',
            'date' => 'March 10, 2026',
            'date_iso' => '2026-03-10',
            'category' => 'Anxiety',
            'image' => '/assets/blog/gemini-generated-image-iyb6qtiyb6qtiyb6.webp',
            'excerpt' => 'Anxiety doesn’t just affect the mind — it produces real, disruptive physical symptoms that are often misdiagnosed. Learn the 12 most overlooked physical signs of anxiety and what to do about them.',
        ],
        [
            'id' => 1002,
            'slug' => 'treatment-resistant-depression-when-medication-stops-working',
            'title' => 'Treatment-Resistant Depression: When Medication Stops Working',
            'author' => 'Karma Doctors Team',
            'date' => 'March 6, 2026',
            'date_iso' => '2026-03-06',
            'category' => 'Depression',
            'image' => '/assets/blog/gemini-generated-image-w74nhfw74nhfw74n-photoroom.webp',
            'excerpt' => 'Tried multiple antidepressants with no relief? Learn what treatment-resistant depression is, why medication stops working, and the advanced evidence-based options — from TMS to ketamine — that can help.',
        ],
        [
            'id' => 1001,
            'slug' => 'how-do-psychiatrists-diagnose-adhd-in-adults',
            'title' => 'How Do Psychiatrists Diagnose ADHD in Adults?',
            'author' => 'Karma Doctors Team',
            'date' => 'March 3, 2026',
            'date_iso' => '2026-03-03',
            'category' => 'ADHD',
            'image' => '/assets/blog/gemini-generated-image-4l6sei4l6sei4l6s.webp',
            'excerpt' => 'Wondering how psychiatrists diagnose ADHD in adults? Discover the step-by-step evaluation process, DSM-5 criteria, standardized tests, and what to expect — from initial interview to treatment plan.',
        ],
        [
            'id' => 377,
            'slug' => 'mental-health-palm-springs-ca-karmadocs',
            'title' => 'Mental Health Palm Springs Ca | KarmaDocs',
            'author' => 'Karma Doctors Team',
            'date' => 'February 25, 2026',
            'date_iso' => '2026-02-25',
            'category' => 'Mental Health',
            'image' => '/assets/blog/mental-healthhhh.webp',
            'excerpt' => '📋 Table of Contents Mental Health Palm Springs Ca | KarmaDocs At KarmaDocs, we understand that your mental health is the cornerstone of a fulfilling life. Whether you’re seeking emotional clarity, overcoming trauma,...',
        ],
        [
            'id' => 376,
            'slug' => 'benefits-of-therapy-for-anxiety-how-professional-support-can-transform-mental-health',
            'title' => 'Benefits of Therapy for Anxiety: How Professional Support Can Transform Mental Health',
            'author' => 'Karma Doctors Team',
            'date' => 'February 18, 2026',
            'date_iso' => '2026-02-18',
            'category' => 'Anxiety',
            'image' => '/assets/blog/anxiety-11zon.webp',
            'excerpt' => '📋 Table of Contents Benefits of Therapy for Anxiety: How Professional Support Can Transform Mental Health Anxiety can also manifest in unexpected physical ways. Read our guide on physical symptoms of anxiety most...',
        ],
        [
            'id' => 375,
            'slug' => 'how-much-does-a-psychiatrist-cost-a-complete-guide-to-mental-health-care',
            'title' => 'How Much Does a Psychiatrist Cost? A Complete Guide to Mental Health Care',
            'author' => 'Karma Doctors Team',
            'date' => 'February 12, 2026',
            'date_iso' => '2026-02-12',
            'category' => 'Mental Health',
            'image' => '/assets/blog/freepik-calm-psychiatrist-office-modern-tidy-desk-comforta-4.webp',
            'excerpt' => '📋 Table of Contents Understanding psychiatrist costs helps you plan for care. Learn more about finding the best psychiatrist in California for your needs. If you’re exploring TMS Therapy, read about TMS cost without...',
        ],
        [
            'id' => 385,
            'slug' => 'does-ocd-go-away-without-treatment',
            'title' => 'Does OCD Go Away Without Treatment? {Expert Guide}',
            'author' => 'Karma Doctors Team',
            'date' => 'February 5, 2026',
            'date_iso' => '2026-02-05',
            'category' => 'Mental Health',
            'image' => '/assets/blog/images-7.webp',
            'excerpt' => '📋 Table of Contents Does OCD Go Away Without Treatment? {Expert Guide} Obsessive-Compulsive Disorder (OCD) can be a challenging mental health condition to live with, but understanding OCD is the first step towards...',
        ],
        [
            'id' => 379,
            'slug' => 'adhd-online-doctors',
            'title' => 'ADHD Online Doctors: The Smart Way to Get Expert ADHD Care from Home',
            'author' => 'Karma Doctors Team',
            'date' => 'January 21, 2026',
            'date_iso' => '2026-01-21',
            'category' => 'ADHD',
            'image' => '/assets/blog/personality-disorders.webp',
            'excerpt' => '📋 Table of Contents ADHD Online Doctors: The Smart Way to Get Expert ADHD Care from Home Getting help for ADHD shouldn’t be complicated — and now, it isn’t.If you’re searching for ADHD online doctors, you can now...',
        ],
        [
            'id' => 378,
            'slug' => 'best-psychiatrist-california-how-to-find-expert-mental-health-care',
            'title' => 'Best Psychiatrist California: How to Find Expert Mental Health Care',
            'author' => 'Karma Doctors Team',
            'date' => 'January 8, 2026',
            'date_iso' => '2026-01-08',
            'category' => 'Mental Health',
            'image' => '/assets/blog/908e689a-58db-422e-bb2a-ce934f252a05.webp',
            'excerpt' => '📋 Table of Contents Best Psychiatrist California: How to Find Expert Mental Health Care If you’re searching for the best psychiatrist California has to offer, you need a doctor who combines professional expertise,...',
        ],
        [
            'id' => 381,
            'slug' => 'is-tms-therapy-covered-by-insurance-complete-guide-for',
            'title' => 'Is TMS Therapy Covered by Insurance? Complete Guide for 2025',
            'author' => 'Karma Doctors Team',
            'date' => 'December 17, 2025',
            'date_iso' => '2025-12-17',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/freepik-calm-psychiatrist-office-modern-tidy-desk-comforta-4.webp',
            'excerpt' => '',
        ],
        [
            'id' => 380,
            'slug' => 'tms-cost-without-insurance-what-you-need-to-know-before-starting-treatment',
            'title' => 'TMS Cost Without Insurance: What You Need to Know Before Starting Treatment',
            'author' => 'Karma Doctors Team',
            'date' => 'December 4, 2025',
            'date_iso' => '2025-12-04',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/tms-side-effects.webp',
            'excerpt' => '📋 Table of Contents If you’re exploring Transcranial Magnetic Stimulation (TMS) therapy, one of the first questions that comes to mind is, “How much does it cost?”The TMS cost without insurance can vary depending on...',
        ],
        [
            'id' => 384,
            'slug' => 'does-psychiatric-treatment-work-evidence-success-rates-real-results',
            'title' => 'Does Psychiatric Treatment Work? Evidence, Success Rates & Real Results',
            'author' => 'Karma Doctors Team',
            'date' => 'November 22, 2025',
            'date_iso' => '2025-11-22',
            'category' => 'Mental Health',
            'image' => '/assets/blog/freepik-therapy-session-in-a-warm-office-natural-light-pla-4.webp',
            'excerpt' => '📋 Table of Contents Does Psychiatric Treatment Work? Evidence, Success Rates & Real Results Exploring the effectiveness of psychiatric interventions in treating mental health conditions is crucial for understanding...',
        ],
        [
            'id' => 383,
            'slug' => 'does-adhd-get-worse-without-treatment-long-term-effects',
            'title' => 'Does ADHD Get Worse Without Treatment Long Term Effects',
            'author' => 'Karma Doctors Team',
            'date' => 'November 10, 2025',
            'date_iso' => '2025-11-10',
            'category' => 'ADHD',
            'image' => '/assets/blog/relationship-issues.webp',
            'excerpt' => 'Does ADHD get worse without treatment is one of the most important questions asked by individuals, parents, and adults who suspect they may be living with attention deficit hyperactivity disorder. ADHD is not simply...',
        ],
        [
            'id' => 346,
            'slug' => '9-digital-transformation-challenges-every-company-is-facing',
            'title' => '9 Digital Transformation Challenges Every Company Is Facing',
            'author' => 'Karma Doctors Team',
            'date' => 'October 19, 2025',
            'date_iso' => '2025-10-19',
            'category' => 'Mental Health',
            'image' => '/assets/blog/pexels-kelvin-valerio-810775-1-scaled-1.webp',
            'excerpt' => '📋 Table of Contents Digital transformation challenges affect organizations in all sectors. For healthcare organizations, managing mental health services digitally is crucial — learn about ADHD online doctor services...',
        ],
        [
            'id' => 347,
            'slug' => 'how-to-better-your-nutrition-for-mental-wellness-and-welcoming-dr-todd-born-nd-cns',
            'title' => 'How to Better Your Nutrition for Mental Wellness, and Welcoming Dr. Todd Born, ND, CNS',
            'author' => 'Karma Doctors Team',
            'date' => 'October 6, 2025',
            'date_iso' => '2025-10-06',
            'category' => 'Mental Health',
            'image' => '/assets/blog/pexels-foodie-factor-566566-2-scaled-1.webp',
            'excerpt' => '📋 Table of Contents Good nutrition plays a vital role in mental wellness. Learn how our Palm Springs mental health team takes a holistic approach to treatment, and read about the gut-brain connection and its...',
        ],
        [
            'id' => 349,
            'slug' => 'the-unique-challenges-vets-face-and-5-ways-to-support-the-vets-in-your-life',
            'title' => 'The Unique Challenges Vets Face, and 5 Ways to Support the Vets in Your Life',
            'author' => 'Karma Doctors Team',
            'date' => 'September 25, 2025',
            'date_iso' => '2025-09-25',
            'category' => 'Mental Health',
            'image' => '/assets/blog/unhappy-disabled-young-man-military-veteran-attend-2023-11-2.webp',
            'excerpt' => '📋 Table of Contents Veterans face unique mental health challenges that benefit from specialized care. Learn about the comprehensive mental health services available at KarmaDocs and how psychiatric treatment can make...',
        ],
        [
            'id' => 348,
            'slug' => 'can-the-gut-brain-axis-influence-mood-and-recommendations-for-a-healthy-microbiome',
            'title' => 'Can the Gut-Brain Axis Influence Mood? And Recommendations for a Healthy Microbiome',
            'author' => 'Karma Doctors Team',
            'date' => 'September 11, 2025',
            'date_iso' => '2025-09-11',
            'category' => 'Mental Health',
            'image' => '/assets/blog/family-and-friends.webp',
            'excerpt' => '📋 Table of Contents The connection between gut health and mental wellbeing is growing in scientific recognition. Read our related article on how to better your nutrition for mental wellness. Our Palm Springs mental...',
        ],
        [
            'id' => 351,
            'slug' => 'the-research-behind-mindfulness-for-mental-health-and-easy-ways-to-get-started-today',
            'title' => 'The Research behind Mindfulness for Mental Health, and Easy Ways to get Started Today',
            'author' => 'Karma Doctors Team',
            'date' => 'August 23, 2025',
            'date_iso' => '2025-08-23',
            'category' => 'Mental Health',
            'image' => '/assets/blog/freepik-therapy-session-in-a-warm-office-natural-light-pla-4.webp',
            'excerpt' => '📋 Table of Contents Mindfulness is a powerful complement to professional treatment. Explore how therapy for anxiety works alongside mindfulness, and discover how the gut-brain connection supports holistic mental...',
        ],
        [
            'id' => 350,
            'slug' => 'the-cost-of-tms-without-insurance-your-complete-guide',
            'title' => 'How Much Does TMS Cost Without Insurance: Your Complete Guide',
            'author' => 'Karma Doctors Team',
            'date' => 'August 7, 2025',
            'date_iso' => '2025-08-07',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/tms-appollo-machine.webp',
            'excerpt' => '📋 Table of Contents You’ve tried other treatments, and done your research on TMS therapy. Now you’re thinking about the bottom line: how much is TMS going to cost you? TMS is FDA-approved for depression,...',
        ],
        [
            'id' => 353,
            'slug' => 'tms-for-addiction-whats-the-4th-wave-of-the-opioid-epidemic-whats-the-4th-wave-of-the-opioid-epidemic-and-how-tms-can-help-with-addiction',
            'title' => 'TMS for Addiction: What’s the 4th Wave of the Opioid Epidemic? And How TMS Can Help with Addiction',
            'author' => 'Karma Doctors Team',
            'date' => 'July 16, 2025',
            'date_iso' => '2025-07-16',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/1-1.webp',
            'excerpt' => '📋 Table of Contents Explore related mental health topics: learn about our mental health services in Palm Springs, CA and read about the evidence behind psychiatric treatment. According to Wikipedia’s overview of...',
        ],
        [
            'id' => 352,
            'slug' => 'understanding-your-options-for-atypical-depression-treatment',
            'title' => 'Understanding Your Options for Atypical Depression Treatment',
            'author' => 'Karma Doctors Team',
            'date' => 'July 3, 2025',
            'date_iso' => '2025-07-03',
            'category' => 'Depression',
            'image' => '/assets/blog/depression.webp',
            'excerpt' => '📋 Table of Contents TMS therapy offers hope for conditions beyond depression. For patients with treatment-resistant conditions, read about TMS insurance coverage and explore our guide on treatment-resistant...',
        ],
        [
            'id' => 355,
            'slug' => 'adhd-treatment-online-can-it-work',
            'title' => 'ADHD Treatment Online: Can it Work?',
            'author' => 'Karma Doctors Team',
            'date' => 'June 27, 2025',
            'date_iso' => '2025-06-27',
            'category' => 'ADHD',
            'image' => '/assets/blog/slider-humb-2.webp',
            'excerpt' => '📋 Table of Contents Explore related topics on mental health care: learn about comprehensive mental health services in Palm Springs and understand the evidence behind psychiatric treatment. According to Wikipedia’s...',
        ],
        [
            'id' => 354,
            'slug' => 'the-pros-cons-of-tms-therapy',
            'title' => 'The Pros & Cons of TMS Therapy',
            'author' => 'Karma Doctors Team',
            'date' => 'June 10, 2025',
            'date_iso' => '2025-06-10',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/theta-burst.webp',
            'excerpt' => '📋 Table of Contents Related reading: learn more about ADHD online doctors and how telehealth has made expert care more accessible. Also discover how psychiatrists diagnose ADHD in adults. According to Wikipedia’s...',
        ],
        [
            'id' => 357,
            'slug' => 'the-link-between-trauma-and-depression-understanding-the-connection',
            'title' => 'The Link Between Trauma and Depression: Understanding the Connection',
            'author' => 'Karma Doctors Team',
            'date' => 'May 20, 2025',
            'date_iso' => '2025-05-20',
            'category' => 'Depression',
            'image' => '/assets/blog/pexels-karolina-grabowska-4471315-1-scaled-1.webp',
            'excerpt' => '📋 Table of Contents Learn about related mental health topics: explore mental health services in Palm Springs and understand the benefits of anxiety therapy. According to Wikipedia’s article on depression, it is one...',
        ],
        [
            'id' => 356,
            'slug' => 'helping-a-loved-one-with-a-mood-disorder',
            'title' => 'Helping a Loved One With a Mood Disorder',
            'author' => 'Karma Doctors Team',
            'date' => 'May 5, 2025',
            'date_iso' => '2025-05-05',
            'category' => 'Mental Health',
            'image' => '/assets/blog/family-and-friends.webp',
            'excerpt' => '📋 Table of Contents Anxiety disorders are highly treatable. Explore the benefits of anxiety therapy and learn about the physical symptoms of anxiety that many people don’t recognize. According to Wikipedia’s article...',
        ],
        [
            'id' => 359,
            'slug' => 'understanding-your-mental-health-the-vital-role-of-psychiatrists',
            'title' => 'Understanding Your Mental Health: The Vital Role of Psychiatrists',
            'author' => 'Karma Doctors Team',
            'date' => 'April 22, 2025',
            'date_iso' => '2025-04-22',
            'category' => 'Mental Health',
            'image' => '/assets/blog/freepik-therapy-session-in-a-warm-office-natural-light-pla-4.webp',
            'excerpt' => '📋 Table of Contents Related topics: explore mental health services in Palm Springs and learn about how psychiatric treatment works. According to Wikipedia’s article on major depressive disorder, depression is a...',
        ],
        [
            'id' => 358,
            'slug' => 'the-effectiveness-of-tms-on-treatment-resistant-depression',
            'title' => 'The Effectiveness of TMS on Treatment Resistant Depression',
            'author' => 'Karma Doctors Team',
            'date' => 'April 8, 2025',
            'date_iso' => '2025-04-08',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/tms-helping-veterans-address-mental-health-challenges.webp',
            'excerpt' => '📋 Table of Contents Explore related topics: discover bipolar disorder vs mood swings and learn the early warning signs of bipolar disorder. According to Wikipedia’s article on bipolar disorder, it is characterized by...',
        ],
        [
            'id' => 360,
            'slug' => 'embracing-diversity-in-mental-health-care-culturally-responsive-psychiatry',
            'title' => 'Embracing Diversity In Mental Health Care: Culturally Responsive Psychiatry',
            'author' => 'Karma Doctors Team',
            'date' => 'March 12, 2025',
            'date_iso' => '2025-03-12',
            'category' => 'Mental Health',
            'image' => '/assets/blog/racial-trauma.webp',
            'excerpt' => '📋 Table of Contents Learn more about mental health treatment options: explore TMS therapy insurance coverage and understand the cost of TMS without insurance. According to Wikipedia’s article on TMS, transcranial...',
        ],
        [
            'id' => 386,
            'slug' => 'top-10-psychiatrists-in-california-your-guide-to-trusted-mental-health-care',
            'title' => 'Top 10 Psychiatrists in California: Your Guide to Trusted Mental Health Care',
            'author' => 'Karma Doctors Team',
            'date' => 'February 19, 2025',
            'date_iso' => '2025-02-19',
            'category' => 'Mental Health',
            'image' => '/assets/blog/top-psychiatrists-in-california-guide.webp',
            'excerpt' => '📋 Table of Contents Top 10 Psychiatrists in California: Your Guide to Trusted Mental Health Care Finding the right psychiatrist is a life changing decision. When people search for the Top 10 Psychiatrists in...',
        ],
        [
            'id' => 393,
            'slug' => 'is-ptsd-a-disability',
            'title' => 'Is PTSD a Disability?',
            'author' => 'Karma Doctors Team',
            'date' => 'February 6, 2025',
            'date_iso' => '2025-02-06',
            'category' => 'Mental Health',
            'image' => '/assets/blog/karma-services-2.webp',
            'excerpt' => '📋 Table of Contents Post-Traumatic Stress Disorder (PTSD) is a mental health condition that can significantly impact daily life. A common and important question many people ask is: Is PTSD considered a disability?...',
        ],
        [
            'id' => 388,
            'slug' => 'is-tms-therapy-legitimate-a-2026-evidence-based-guide',
            'title' => 'Is TMS Therapy Legitimate? A 2026 Evidence-Based Guide',
            'author' => 'Karma Doctors Team',
            'date' => 'January 24, 2025',
            'date_iso' => '2025-01-24',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/screen-shot-2023-02-27-at-6-48-35-pm.webp',
            'excerpt' => '📋 Table of Contents Mental health treatments have evolved rapidly over the last decade, and one therapy that continues to raise questions is Transcranial Magnetic Stimulation (TMS). If you or someone you love has...',
        ],
        [
            'id' => 389,
            'slug' => 'why-some-patients-say-tms-ruined-my-life-a-psychiatrists-perspective',
            'title' => 'Why Some Patients Say “TMS Ruined My Life”? A Psychiatrist’s Perspective',
            'author' => 'Karma Doctors Team',
            'date' => 'January 9, 2025',
            'date_iso' => '2025-01-09',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/services-5.webp',
            'excerpt' => '📋 Table of Contents Search forums, Reddit threads, or patient reviews about Transcranial Magnetic Stimulation (TMS), and you may eventually come across alarming statements like: Learn more about mental health...',
        ],
        [
            'id' => 392,
            'slug' => 'what-are-the-5-causes-of-schizophrenia',
            'title' => 'What Are the 5 Causes of Schizophrenia?',
            'author' => 'Karma Doctors Team',
            'date' => 'December 18, 2024',
            'date_iso' => '2024-12-18',
            'category' => 'Mental Health',
            'image' => '/assets/blog/stressed-man-sitting-with-hands-head-107420-96348.webp',
            'excerpt' => '📋 Table of Contents Schizophrenia is a complex mental health condition that affects how a person thinks, feels, and perceives reality. Despite decades of research, there is no single, definitive cause. Instead,...',
        ],
        [
            'id' => 387,
            'slug' => 'is-tms-dip-normal',
            'title' => 'Is TMS Dip Normal?',
            'author' => 'Karma Doctors Team',
            'date' => 'December 4, 2024',
            'date_iso' => '2024-12-04',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/deep-tms-photoroom.webp',
            'excerpt' => 'Transcranial Magnetic Stimulation (TMS) therapy has become an important treatment option for people who have not found enough relief from traditional approaches for depression and related mental health conditions....',
        ],
        [
            'id' => 390,
            'slug' => 'what-are-the-side-effects-of-tms-things-you-must-know',
            'title' => 'What Are the Side Effects of TMS? Things You Must Know',
            'author' => 'Karma Doctors Team',
            'date' => 'November 26, 2024',
            'date_iso' => '2024-11-26',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/p2863.webp',
            'excerpt' => '📋 Table of Contents Transcranial Magnetic Stimulation (TMS) is a non-invasive treatment that has gained widespread attention for its effectiveness in managing various mental health conditions. As more people explore...',
        ],
        [
            'id' => 391,
            'slug' => 'what-is-deep-tms-therapy-process-benefits-treatment-overview',
            'title' => 'What Is Deep TMS Therapy? Process, Benefits & Treatment Overview',
            'author' => 'Karma Doctors Team',
            'date' => 'November 11, 2024',
            'date_iso' => '2024-11-11',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/tms-side-effects.webp',
            'excerpt' => '📋 Table of Contents As mental health care continues to evolve, treatments are becoming more targeted, evidence-based, and patient-friendly. One of the most advanced non-invasive treatment options available today is...',
        ],
        [
            'id' => 367,
            'slug' => 'how-long-does-tms-therapy-last',
            'title' => 'How Long Does TMS Therapy Last?',
            'author' => 'Karma Doctors Team',
            'date' => 'October 21, 2024',
            'date_iso' => '2024-10-21',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/services-1.webp',
            'excerpt' => '📋 Table of Contents For expert psychiatric evaluation in California, visit our Palm Springs mental health center. Learn how to find the best psychiatrist in California for your unique needs. According to Wikipedia’s...',
        ],
        [
            'id' => 366,
            'slug' => 'is-anxiety-a-disability-the-legal-and-medical-truth',
            'title' => 'Is Anxiety a Disability? {The Legal and Medical Truth}',
            'author' => 'Karma Doctors Team',
            'date' => 'October 7, 2024',
            'date_iso' => '2024-10-07',
            'category' => 'Anxiety',
            'image' => '/assets/blog/anxiety-11zon.webp',
            'excerpt' => '📋 Table of Contents Related topics: understand the benefits of therapy for anxiety and explore our comprehensive mental health services in Palm Springs. According to Wikipedia’s article on mental health, preventive...',
        ],
        [
            'id' => 369,
            'slug' => 'how-tms-is-helping-veterans-address-mental-health-challenges',
            'title' => 'How TMS Is Helping Veterans Address Mental Health Challenges',
            'author' => 'Karma Doctors Team',
            'date' => 'September 17, 2024',
            'date_iso' => '2024-09-17',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/tms-helping-veterans-address-mental-health-challenges.webp',
            'excerpt' => '📋 Table of Contents Veterans commonly experience a number of challenges after leaving active military service, and the transition back to civilian life is not always a smooth one. Many veterans return home with...',
        ],
        [
            'id' => 368,
            'slug' => 'how-tms-helps-military-members-dependents',
            'title' => 'How TMS Helps Military Members & Dependents?',
            'author' => 'Karma Doctors Team',
            'date' => 'September 3, 2024',
            'date_iso' => '2024-09-03',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/benefits-of-tms-for-military-personnel.webp',
            'excerpt' => '📋 Table of Contents Explore related topics: learn about our mental health services in Palm Springs and understand the physical symptoms of anxiety. According to Wikipedia’s article on anxiety, it is one of the most...',
        ],
        [
            'id' => 371,
            'slug' => 'what-are-the-best-treatments-for-anxiety',
            'title' => 'What are the Best Treatments for Anxiety?',
            'author' => 'Karma Doctors Team',
            'date' => 'August 29, 2024',
            'date_iso' => '2024-08-29',
            'category' => 'Anxiety',
            'image' => '/assets/blog/visual-selection-2025-10-16t123102-377.webp',
            'excerpt' => '📋 Table of Contents Feeling anxious is a part of life — we all worry about exams, jobs, or relationships sometimes. But when anxiety becomes constant, overwhelming, or affects daily life, it may be a sign of an...',
        ],
        [
            'id' => 370,
            'slug' => 'benefits-of-tms-for-military-personnel-addressing-unique-challenges',
            'title' => 'Benefits of TMS for Military Personnel: Addressing Unique Challenges',
            'author' => 'Karma Doctors Team',
            'date' => 'August 14, 2024',
            'date_iso' => '2024-08-14',
            'category' => 'TMS Therapy',
            'image' => '/assets/blog/untitled-design-2023-02-10t171153-768.webp',
            'excerpt' => '📋 Table of Contents Military members must endure significant physical, emotional, and psychological stress in an infinite number of scenarios, from combat operations to readjusting to civilian lifestyles. Explore...',
        ],
        [
            'id' => 373,
            'slug' => 'how-does-adhd-treatment-work',
            'title' => 'How does ADHD Treatment Work?',
            'author' => 'Karma Doctors Team',
            'date' => 'July 22, 2024',
            'date_iso' => '2024-07-22',
            'category' => 'ADHD',
            'image' => '/assets/blog/visual-selection-2025-10-16t122515-675.webp',
            'excerpt' => '📋 Table of Contents How Does ADHD Treatment Work? Attention-Deficit/Hyperactivity Disorder (ADHD) is a common neurodevelopmental condition that affects both children and adults. It impacts focus, impulse control, and...',
        ],
        [
            'id' => 372,
            'slug' => 'can-depression-come-back-after-treatment',
            'title' => 'Can Depression Come Back After Treatment?',
            'author' => 'Karma Doctors Team',
            'date' => 'July 8, 2024',
            'date_iso' => '2024-07-08',
            'category' => 'Depression',
            'image' => '/assets/blog/depression.webp',
            'excerpt' => '📋 Table of Contents Depression is one of the most common mental health conditions that affects how people think, feel, and function in daily life. With proper therapy, medication, and lifestyle changes, many people...',
        ],
        [
            'id' => 382,
            'slug' => 'how-effective-are-ptsd-treatments-for-veterans-evidence-based-results',
            'title' => 'How Effective Are PTSD Treatments for Veterans? Evidence-Based Results',
            'author' => 'Karma Doctors Team',
            'date' => 'June 20, 2024',
            'date_iso' => '2024-06-20',
            'category' => 'Mental Health',
            'image' => '/assets/blog/unhappy-disabled-young-man-military-veteran-attend-2023-11-2.webp',
            'excerpt' => '📋 Table of Contents How Effective Are PTSD Treatments for Veterans? Evidence-Based Results For many former service members, life after the military comes with invisible wounds that are just as real as physical...',
        ],
        [
            'id' => 374,
            'slug' => 'what-are-the-treatments-for-ptsd',
            'title' => 'What are the Treatments for PTSD?',
            'author' => 'Karma Doctors Team',
            'date' => 'June 5, 2024',
            'date_iso' => '2024-06-05',
            'category' => 'Mental Health',
            'image' => '/assets/blog/adobestock-motortion-ptsd-jpeg.webp',
            'excerpt' => '📋 Table of Contents What are the Treatments for PTSD? Post-Traumatic Stress Disorder (PTSD) is a mental health condition that develops after experiencing or witnessing a traumatic event such as violence, abuse, war,...',
        ],
        [
            'id' => 362,
            'slug' => 'unraveling-the-link-adhd-and-depression-comorbidity',
            'title' => 'Unraveling the Link – ADHD and Depression Comorbidity',
            'author' => 'Karma Doctors Team',
            'date' => 'May 25, 2024',
            'date_iso' => '2024-05-25',
            'category' => 'ADHD',
            'image' => '/assets/blog/why-img.webp',
            'excerpt' => '📋 Table of Contents Related resources: learn about our mental health services in Palm Springs and explore the benefits of therapy for anxiety. According to Wikipedia’s article on anxiety disorders, these conditions...',
        ],
        [
            'id' => 361,
            'slug' => 'family-and-friends-in-mental-health-recovery',
            'title' => 'Family and Friends in Mental Health Recovery',
            'author' => 'Karma Doctors Team',
            'date' => 'May 11, 2024',
            'date_iso' => '2024-05-11',
            'category' => 'Mental Health',
            'image' => '/assets/blog/family-and-friends.webp',
            'excerpt' => '📋 Table of Contents Related topics: learn about how psychiatrists diagnose ADHD in adults and explore ADHD online doctor options for convenient access to care. According to Wikipedia’s article on ADHD, the disorder...',
        ],
        [
            'id' => 365,
            'slug' => 'does-insurance-cover-depression-treatment',
            'title' => 'Does Insurance Cover Depression Treatment?',
            'author' => 'Karma Doctors Team',
            'date' => 'April 23, 2024',
            'date_iso' => '2024-04-23',
            'category' => 'Depression',
            'image' => '/assets/blog/28425944-7439878.webp',
            'excerpt' => '',
        ],
        [
            'id' => 364,
            'slug' => 'feeling-weighed-down-by-depression-you-can-feel-better-heres-how',
            'title' => 'Feeling Weighed Down by Depression? You Can Feel Better- Here’s How',
            'author' => 'Karma Doctors Team',
            'date' => 'April 17, 2024',
            'date_iso' => '2024-04-17',
            'category' => 'Depression',
            'image' => '/assets/blog/pexels-engin-akyurt-1458826-scaled-1.webp',
            'excerpt' => '📋 Table of Contents Related topics: explore our mental health services in Palm Springs and learn about finding the best psychiatrist in California. According to Wikipedia’s article on major depressive disorder,...',
        ],
    ];
    return $index;
}

/**
 * All posts, newest first. Metadata only - no article bodies.
 */
function get_all_blog_posts() {
    return get_blog_index();
}

/**
 * Load one article body from includes/blog-posts/{slug}.php.
 * The slug is pattern-checked before it ever touches the filesystem.
 */
function get_blog_post_content($slug) {
    if (!preg_match('/^[a-z0-9\-]+$/', $slug)) {
        return '';
    }
    $file = __DIR__ . '/blog-posts/' . $slug . '.php';
    if (!is_readable($file)) {
        return '';
    }
    return (string) require $file;
}

/**
 * One post by slug, with its article body attached. Returns null if not found.
 */
function get_blog_post_by_slug($slug) {
    foreach (get_blog_index() as $post) {
        if ($post['slug'] === $slug) {
            $post['content'] = get_blog_post_content($post['slug']);
            return $post;
        }
    }
    return null;
}

/**
 * One page of posts, optionally filtered by category.
 */
function get_blog_posts_paged($page = 1, $per_page = 9, $category = '') {
    $posts = get_blog_index();
    if ($category !== '') {
        $posts = array_values(array_filter($posts, function ($p) use ($category) {
            return $p['category'] === $category;
        }));
    }
    $total       = count($posts);
    $total_pages = max(1, (int) ceil($total / $per_page));
    $page        = max(1, min((int) $page, $total_pages));
    return [
        'posts'       => array_slice($posts, ($page - 1) * $per_page, $per_page),
        'page'        => $page,
        'per_page'    => $per_page,
        'total'       => $total,
        'total_pages' => $total_pages,
        'category'    => $category,
    ];
}

/**
 * Category names with post counts, most posts first.
 */
function get_blog_categories() {
    $counts = [];
    foreach (get_blog_index() as $post) {
        $counts[$post['category']] = ($counts[$post['category']] ?? 0) + 1;
    }
    arsort($counts);
    return $counts;
}

/**
 * A few related posts from the same category, excluding the current one.
 */
function get_related_blog_posts($slug, $limit = 3) {
    $current = null;
    foreach (get_blog_index() as $post) {
        if ($post['slug'] === $slug) { $current = $post; break; }
    }
    if ($current === null) {
        return [];
    }
    $related = [];
    foreach (get_blog_index() as $post) {
        if ($post['slug'] !== $slug && $post['category'] === $current['category']) {
            $related[] = $post;
            if (count($related) >= $limit) break;
        }
    }
    return $related;
}
