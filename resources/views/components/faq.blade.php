<style>
    .faq-section {
        padding: 4rem 0;
        background-color: #ffffff;
    }

    .faq-container {
        max-width: 82.5rem;
        margin: 0 auto;
        padding: 0 7%;
    }

    .faq-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .faq-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 2.25rem;
        font-weight: 700;
        color: #000000;
        margin-bottom: 0.75rem;
    }

    .faq-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        color: #6B7280;
        font-weight: 400;
    }

    .faq-list {
        max-width: 50.76rem;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .faq-item {
        background-color: #FFFFFF;
        border-radius: 0.75rem;
        border: 1px solid #D1D5DB;
        overflow: hidden;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .faq-item.active {
        background-color: #F3F8FA;
        border: none;
        height: auto; /* Fix for content clipping */
    }

    .faq-question {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1.5rem;
        height: 3.75rem;
        gap: 1rem;
        padding-right:2.1rem;
    }

    .faq-question-text {
        font-family: 'Inter', sans-serif;
        font-size: 0.9375rem;
        font-weight: 600;
        color: #1F2937;
        line-height: 1.4;
    }

    /* Plus toggle in question row */
    .faq-toggle-plus {
        width: 1.75rem;
        height: 1.75rem;
        min-width: 1.75rem;
        border-radius: 50%;
        border: none;
        background: #EDF2F7;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        padding: 0;
    }

    .faq-toggle-plus svg {
        width: 1rem;
        height: 1rem;
        stroke: #94A3B8;
    }

    /* Hide plus when active */
    .faq-item.active .faq-toggle-plus {
        display: none;
    }

    /* Answer area */
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 40rem; /* Increased max-height to ensure complete visibility */
    }

    .faq-answer-inner {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 0 2.1rem 1.25rem 1.5rem;
    }

    .faq-answer-text {
        flex: 1;
        font-family: 'Inter', sans-serif;
        font-size: 0.875rem;
        color: #4B5563;
        line-height: 1.7;
        font-weight: 400;
        margin: 0;
    }

    /* Close button next to answer */
    .faq-toggle-close {
        width: 1.75rem;
        height: 1.75rem;
        min-width: 1.75rem;
        border-radius: 50%;
        border: none;
        background: #0B2545;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        padding: 0;
    }

    .faq-toggle-close svg {
        width: 0.75rem;
        height: 0.75rem;
        stroke: #ffffff;
    }

    @media (max-width: 48rem) {
        .faq-title {
            font-size: 24px;
            line-height: 30px;
        }

        .faq-subtitle {
            font-size: 16px;
            line-height: 24px;
            text-align: center;
        }

        .faq-question-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            font-size: 16px;
            line-height: 28px;
        }

        .faq-answer-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
        }

        .faq-list {
            max-width: 100%;
        }

        .faq-question {
            padding: 1rem 1.25rem;
        }

        .faq-answer-inner {
            padding: 0 1.25rem 1rem 1.25rem;
        }
    }
</style>

<section class="faq-section">
    <div class="faq-container">
        <div class="faq-header">
            <h2 class="faq-title">Genomic Diagnostics FAQ</h2>
            <p class="faq-subtitle">Answers to common questions about genomic testing.</p>
        </div>

        <div class="faq-list">
            <!-- FAQ Item 1 (Default Open) -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">What is genomic testing?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">Genomic testing analyzes a person's DNA to identify genetic variations associated with specific health conditions, inherited traits, or responses to medications. It helps healthcare providers make informed decisions about personalized treatment plans.</p>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">Who may need genomic testing?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">Genomic testing may be recommended for individuals with a family history of genetic conditions, patients with undiagnosed conditions, or those seeking personalized treatment plans.</p>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">What type of sample is required?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">Most genomic tests require a simple blood draw or saliva sample. Your healthcare provider will guide you through the specific collection process.</p>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">How long do genomic test results take?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">Results typically take 2–4 weeks depending on the complexity of the test. Your provider will notify you as soon as results are available.</p>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">Can patients order genomic tests directly?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">Some tests can be ordered directly by patients, while others require a physician's order. Contact us to learn which tests are available for direct ordering.</p>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">Where can I find a specific genomic test?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">You can browse our full test catalog on our website or contact our team for assistance in finding the right test for your needs.</p>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFaq(item) {
        const allItems = document.querySelectorAll('.faq-item');
        allItems.forEach(function(el) {
            if (el !== item) {
                el.classList.remove('active');
            }
        });
        item.classList.toggle('active');
    }
</script>
