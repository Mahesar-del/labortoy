<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is a CBC Test? Understanding Your Complete Blood Count</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; background-color: #FFFFFF; }        /* Container Setup */
        .post-container { max-width: 1518px; margin: 0 auto; padding: 60px 99px 20px; box-sizing: border-box; }
        
        /* Title Section */
        .post-header { margin-bottom: 40px; }
        .post-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 34px; font-weight: 700; color: #000000; line-height: 44px; margin: 0 0 16px; }
        .post-subtitle { font-family: 'Inter', sans-serif; font-size: 18px; font-weight: 400; color: #000000; line-height: 30px; margin: 0 0 24px; }
        .post-meta { display: flex; flex-wrap: wrap; row-gap: 8px; align-items: center; font-size: 14px; color: #6B7280; font-weight: 500; }
        .post-meta span {color: #000; display: flex; align-items: center; white-space: nowrap; margin-right: 16px; }
        .post-meta span:last-child { margin-right: 0; }
        .post-meta span:not(:last-child)::after {
            content: "";
            display: block;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: #000;
            margin-left: 16px;
        }
        
        /* Hero Image */
        .post-hero-image { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; margin-bottom: 60px; }

        /* Main Content Area */
        .post-content-area { display: grid; grid-template-columns: 1fr 340px; gap: 60px; margin-bottom: 0; }
        
        /* Left Column: Article Body */
        .article-body { font-family: 'Inter', sans-serif; font-size: 16px; color: #000000; line-height: 30px; }
        .article-body p { margin: 0 0 24px; text-align: justify; }
        .article-body h2 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 28px; font-weight: 700; color: #000000; margin: 40px 0 20px; line-height: 44px; }
        .article-body ul { margin: 0 0 24px; padding-left: 20px; }
        .article-body li { margin-bottom: 12px; }
        .article-body strong { color: #000000; font-weight: 600; }

        /* Right Column: Sidebar */
        .sidebar { position: sticky; top: 20px; border-left: 1px dashed #D1D5DB; padding-left: 30px; align-self: start; }
        .sidebar-heading { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 18px; font-weight: 700; color: #000000; margin: 0 0 20px; }
        
        /* Author Card */
        .author-card { padding-bottom: 30px; margin-bottom: 30px; border-bottom: 1px dashed #D1D5DB; }
        .author-header { display: flex; align-items: center; gap: 16px; margin-bottom: 20px; }
        .author-image { width: 64px; height: 64px; border-radius: 50%; object-fit: cover; }
        .author-info h3 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 16px; font-weight: 600; color: #000000; margin: 0 0 4px; line-height: 24px; letter-spacing: -0.31px; }
        .author-info p { font-family: 'Inter', sans-serif; font-size: 15px; color: #6B7280; margin: 0; }
        .author-bio { font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 400; color: #000000; line-height: 24px; margin: 0; text-align: justify; }

        /* Share Section */
        .social-icons { display: flex; gap: 12px; }
        .social-icon { width: 44px; height: 44px; border-radius: 10px; background-color: #E5E7EB; display: flex; align-items: center; justify-content: center; color: #000000; text-decoration: none; transition: 0.3s; }
        .social-icon:hover { background-color: #D1D5DB; }

        /* Related Posts Section */
        .related-section { padding-bottom: 40px; margin-top: 0; }
        .related-container { max-width: 1518px; margin: 0 auto; padding: 0 99px; box-sizing: border-box; }
        .related-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 32px; font-weight: 800; color: #071A31; margin: 0 0 24px; }
        
        /* Blog Grid from blog.blade.php */
        .blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
        .blog-card { display: flex; flex-direction: column; text-decoration: none; color: inherit; }
        .blog-image-wrapper { width: 100%; height: auto; aspect-ratio: 4 / 3; border-radius: 20px; overflow: hidden; margin-bottom: 24px; position: relative; }
        .blog-image { width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease; }
        .blog-card:hover .blog-image { transform: scale(1.05); }
        .blog-meta { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; font-size: 13px; font-weight: 600; color: #6B7280; text-transform: uppercase; letter-spacing: 0.05em; }
        .blog-meta-left { display: flex; align-items: center; gap: 8px; }
        .blog-meta-right { display: flex; align-items: center; gap: 8px; }
        .meta-line { width: 20px; height: 1px; background-color: #D1D5DB; }
        .blog-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 24px; font-weight: 700; color: #071A31; line-height: 1.4; margin: 0; }

        /* Responsive */
        @media (max-width: 1024px) {
            .post-container, .related-container { padding-left: 24px; padding-right: 24px; }
            .post-content-area { grid-template-columns: 1fr; gap: 40px; }
            .sidebar { 
                position: static; 
                display: block; 
                padding: 32px; 
                border: 0.67px dashed #ACACAC; 
                border-radius: 2px;
                margin-top: 10px;
                border-left: 0.67px dashed #ACACAC; /* Ensure left border is overridden */
            }
            /* Keep the border inside the sidebar block */
            .author-card { margin-bottom: 30px; padding-bottom: 30px; border-bottom: 0.67px dashed #ACACAC; }
        }
        @media (max-width: 768px) {
            .post-container { padding-top: 16px; }
            .post-title { font-size: 24px; line-height: 34px; }
            .post-subtitle { font-size: 16px; line-height: 26px; }
            .post-meta { font-size: 15px; line-height: 26px; }
            .post-hero-image { height: 360px; margin-bottom: 30px; }
            .post-content-area { gap: 0; }
            .article-body h2 { font-size: 24px; line-height: 34px; margin: 30px 0 16px; }
            .blog-grid { 
                display: flex; 
                flex-wrap: nowrap; 
                overflow-x: auto; 
                gap: 20px; 
                padding-bottom: 20px;
                scroll-snap-type: x mandatory;
                -ms-overflow-style: none; /* IE and Edge */
                scrollbar-width: none; /* Firefox */
            }
            .blog-grid::-webkit-scrollbar { display: none; } /* Chrome, Safari and Opera */
            .blog-card { 
                flex: 0 0 100%; 
                scroll-snap-align: start; 
            }
            .sidebar { padding: 24px; margin-top: 0; }
            .author-card { margin-bottom: 24px; padding-bottom: 24px; }
        }
    </style>
</head>
<body>
    @include('components.header')

    <div class="post-container">
        <!-- Title Section -->
        <div class="post-header">
            <h1 class="post-title">What is a CBC Test? Understanding Your Complete Blood Count</h1>
            <p class="post-subtitle">A Complete Blood Count (CBC) is one of the most common blood tests. Learn what it measures, why it may be ordered, and what the different components of your CBC report mean.</p>
            <div class="post-meta">
                <span>Waqar Mazhar</span>
                <span>September 14, 2026</span>
                <span>6 min read</span>
            </div>
        </div>

        <!-- Hero Image -->
        <img src="{{ asset('images/what-cbc-test.jpg') }}" alt="Blood tubes for CBC Test" class="post-hero-image">

        <!-- Main Content Area -->
        <div class="post-content-area">
            
            <!-- Left Column: Article Body -->
            <div class="article-body">
                <p>A Complete Blood Count (CBC) is a common blood test that provides information about the major cells in your blood. It measures red blood cells, white blood cells, platelets, and several related measurements.</p>
                <p>A CBC may be performed as part of a routine health check or when a healthcare provider wants to investigate certain symptoms or monitor an existing condition.</p>
                
                <h2>What Does a CBC Check?</h2>
                <p>A CBC provides information about several important blood components:</p>
                <p><strong>Red Blood Cells</strong><br>Red blood cells carry oxygen from the lungs to tissues throughout the body. A CBC measures their number and related characteristics.</p>
                <p><strong>Hemoglobin</strong><br>Hemoglobin is the protein in red blood cells that carries oxygen. Hemoglobin levels are an important part of evaluating blood health.</p>
                <p><strong>White Blood Cells</strong><br>White blood cells help the body respond to infections and other conditions. A CBC measures their number and may also provide information about different types of white blood cells.</p>
                <p><strong>Platelets</strong><br>Platelets help the blood clot normally and play an important role in controlling bleeding. A CBC measures the number of platelets in the blood.</p>

                <h2>Why Is a CBC Performed?</h2>
                <p>A healthcare provider may order a CBC to help evaluate:</p>
                <ul>
                    <li>Anemia and other blood abnormalities</li>
                    <li>Possible infections</li>
                    <li>Unusual bleeding or bruising</li>
                    <li>Changes in blood cell levels</li>
                    <li>Certain blood or immune system conditions</li>
                </ul>
                <p>A CBC may also be used to monitor changes in blood counts over time.</p>

                <h2>How Is a CBC Test Done?</h2>
                <p>A CBC requires a small blood sample, usually collected from a vein in the arm. The sample is sent to the laboratory for analysis. The blood collection itself generally takes only a few minutes.</p>
                
                <h2>Do You Need to Fast?</h2>
                <p>A CBC alone usually does not require fasting. However, if other blood tests are performed at the same time, your healthcare provider may provide specific preparation instructions.</p>

                <h2>Understanding Your Results</h2>
                <p>CBC results are reported with laboratory reference ranges. These ranges can vary between laboratories, so always use the reference range provided on your own report.</p>
                <p>A result outside the reference range does not necessarily mean that you have a medical condition. Your healthcare provider will interpret your results along with your symptoms, medical history, and other relevant information.</p>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="sidebar">
                <!-- Author Card -->
                <div class="author-card">
                    <h4 class="sidebar-heading">Written by</h4>
                    <div class="author-header">
                        <!-- Using an available image -->
                        <img src="{{ asset('images/patient-page-DR-img.png') }}" alt="Waqar Mazhar" class="author-image">
                        <div class="author-info">
                            <h3>Waqar Mazhar</h3>
                            <p>Content Strategist & Writer</p>
                        </div>
                    </div>
                    <p class="author-bio">Waqar Mazhar is a healthcare content writer who specializes in making medical and laboratory topics easier to understand. He focuses on clear, accurate, and patient-friendly health information.</p>
                </div>

                <!-- Share Section -->
                <div class="share-section">
                    <h4 class="sidebar-heading">Share Article</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon" aria-label="Copy Link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Share on LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Share on X">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l16 16m0-16L4 20"></path></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Share on Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Related Posts Section -->
    <section class="related-section">
        <div class="related-container">
            <h2 class="related-title">Related Posts</h2>
            
            <div class="blog-grid">
                <!-- Card 1 -->
                <a href="/blog-post" class="blog-card">
                    <div class="blog-image-wrapper">
                        <img src="{{ asset('images/related_lab_on_chip.jpg') }}" alt="Lab-on-a-Chip Devices" class="blog-image">
                    </div>
                    <div class="blog-meta">
                        <div class="blog-meta-left">
                            <span>BIOMEDICAL</span>
                        </div>
                        <div class="blog-meta-right">
                            <div class="meta-line"></div>
                            <span>MARCH 18, 2024</span>
                        </div>
                    </div>
                    <h3 class="blog-title">Lab-on-a-Chip Devices for Rapid Diagnostics</h3>
                </a>

                <!-- Card 2 -->
                <a href="/blog-post" class="blog-card">
                    <div class="blog-image-wrapper">
                        <img src="{{ asset('images/related_sample_handling.jpg') }}" alt="Standardizing Sample Handling" class="blog-image">
                    </div>
                    <div class="blog-meta">
                        <div class="blog-meta-left">
                            <span>LABORATORY</span>
                        </div>
                        <div class="blog-meta-right">
                            <div class="meta-line"></div>
                            <span>MARCH 01, 2024</span>
                        </div>
                    </div>
                    <h3 class="blog-title">Standardizing Sample Handling in Clinical Labs</h3>
                </a>

                <!-- Card 3 -->
                <a href="/blog-post" class="blog-card">
                    <div class="blog-image-wrapper">
                        <img src="{{ asset('images/related_pediatric_patient.jpg') }}" alt="AI-Powered Drug Discovery" class="blog-image">
                    </div>
                    <div class="blog-meta">
                        <div class="blog-meta-left">
                            <span>SCIENTIFIC</span>
                        </div>
                        <div class="blog-meta-right">
                            <div class="meta-line"></div>
                            <span>JANUARY 12, 2024</span>
                        </div>
                    </div>
                    <h3 class="blog-title">AI-Powered Drug Discovery in Modern Research</h3>
                </a>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
