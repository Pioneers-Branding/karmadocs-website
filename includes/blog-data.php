<?php
/**
 * Blog Data Repository
 * Standalone PHP Site Blog Articles
 */

function get_all_blog_posts() {
    return [
        [
            'id' => 1,
            'slug' => 'understanding-tms-therapy-for-depression',
            'title' => 'Understanding TMS Therapy: A Non-Invasive Solution for Depression',
            'author' => 'Dr. Keerthy Sunder, MD',
            'date' => 'August 24, 2026',
            'category' => 'TMS Therapy',
            'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1200&auto=format&fit=crop',
            'excerpt' => 'Discover how Transcranial Magnetic Stimulation (TMS) provides real relief for treatment-resistant depression without systemic side effects.',
            'content' => '
                <p class="mb-4">Transcranial Magnetic Stimulation (TMS) represents one of the most groundbreaking advancements in psychiatric care over the past two decades. Designed for individuals who haven’t found relief through traditional antidepressant medications, TMS offers a drug-free, non-invasive alternative.</p>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">How Does TMS Work?</h3>
                <p class="mb-4">TMS works by sending focused magnetic pulses to specific regions of the brain that regulate mood—primarily the prefrontal cortex. In individuals suffering from depression, neuronal activity in these areas is often reduced. TMS stimulates these dormant neural pathways, encouraging neuroplasticity and restoring healthy brain activity.</p>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">What to Expect During Treatment</h3>
                <p class="mb-4">During a standard TMS session, patients sit comfortably in a reclining chair. A magnetic coil is placed gently against the head. Treatments typically last between 19 to 37 minutes and require no anesthesia, meaning you can drive yourself home or back to work immediately after.</p>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">Is TMS Right for You?</h3>
                <p class="mb-4">If you have tried two or more antidepressant medications without experiencing full symptom relief, or if side effects have made medications intolerable, TMS therapy may be the ideal solution. Consult with our double board-certified psychiatric team in Palm Springs to evaluate your candidacy.</p>
            ',
            'tags' => ['TMS', 'Depression', 'MentalHealth', 'PalmSprings']
        ],
        [
            'id' => 2,
            'slug' => 'practical-strategies-for-managing-anxiety',
            'title' => '5 Practical Strategies for Managing Anxiety in Daily Life',
            'author' => 'Karma Doctors Team',
            'date' => 'August 18, 2026',
            'category' => 'Anxiety Care',
            'image' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?q=80&w=1200&auto=format&fit=crop',
            'excerpt' => 'Learn actionable techniques and evidence-based strategies to manage daily anxiety and regain emotional balance.',
            'content' => '
                <p class="mb-4">Anxiety is a natural human response to stress, but when it becomes chronic or overwhelming, it can disrupt your relationships, career, and physical health. Fortunately, there are effective strategies to help regain control.</p>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">1. Practice 4-7-8 Diaphragmatic Breathing</h3>
                <p class="mb-4">Deep breathing activates the parasympathetic nervous system, signalling to your brain that you are safe. Inhale through your nose for 4 seconds, hold your breath for 7 seconds, and exhale completely through your mouth for 8 seconds.</p>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">2. Challenge Negative Automatic Thoughts</h3>
                <p class="mb-4">When anxiety strikes, ask yourself: Is this thought based on facts or fear? What is the evidence for and against this worry?</p>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">3. Ground Yourself with the 5-4-3-2-1 Technique</h3>
                <p class="mb-4">Acknowledge 5 things you see, 4 things you can feel, 3 things you hear, 2 things you smell, and 1 thing you taste to anchor your awareness in the present moment.</p>
            ',
            'tags' => ['Anxiety', 'SelfCare', 'Mindfulness', 'Wellness']
        ],
        [
            'id' => 3,
            'slug' => 'understanding-adult-adhd-symptoms-treatment',
            'title' => 'Understanding Adult ADHD: Beyond Distraction and Inattention',
            'author' => 'Dr. Keerthy Sunder, MD',
            'date' => 'August 10, 2026',
            'category' => 'ADHD',
            'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=1200&auto=format&fit=crop',
            'excerpt' => 'ADHD isn’t just a childhood condition. Discover how adult ADHD presents and the comprehensive treatment options available.',
            'content' => '
                <p class="mb-4">Attention-Deficit/Hyperactivity Disorder (ADHD) is frequently misdiagnosed or overlooked in adults. Many individuals spend years struggling with executive dysfunction, disorganization, and emotional dysregulation without realizing ADHD is the underlying cause.</p>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">Common Signs of Adult ADHD</h3>
                <ul class="list-disc pl-6 mb-4 space-y-2">
                    <li>Persistent difficulty prioritizing tasks and meeting deadlines</li>
                    <li>Hyperfocus on stimulating activities, contrasted by paralysis on routine tasks</li>
                    <li>Frequent forgetfulness and difficulty maintaining organized routines</li>
                    <li>Restlessness, impulsive decision making, or emotional volatility</li>
                </ul>
                <h3 class="text-2xl font-bold text-gray-900 mt-6 mb-3">Comprehensive Treatment Approaches</h3>
                <p class="mb-4">At Karma Doctors & Associates, adult ADHD management combines precise clinical evaluation, personalized medication protocols, behavioral coaching, and lifestyle adjustments for optimal focus and life satisfaction.</p>
            ',
            'tags' => ['ADHD', 'MentalHealth', 'Focus', 'Psychiatry']
        ]
    ];
}

function get_blog_post_by_slug($slug) {
    $posts = get_all_blog_posts();
    foreach ($posts as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }
    return $posts[0]; // fallback to first post
}
