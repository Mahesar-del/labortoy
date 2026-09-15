<style>
    .faq-section, .faq-section * { box-sizing: border-box; }
    .faq-section {
        padding: 1rem 99px 2rem 99px;
        background-color: #ffffff;
        width: 100%;
    }

    .faq-container {
        max-width: 1320px;
        width: 100%;
        margin: 0 auto;
        padding: 0;
    }

    .faq-header {
        text-align: center;
        margin-bottom: 1.5rem;
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
        color: #000000;
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
        border-color: transparent;
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
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows 0.3s ease;
    }

    .faq-item.active .faq-answer {
        grid-template-rows: 1fr;
    }

    .faq-answer-inner {
        overflow: hidden;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 0 2.1rem 0 1.5rem;
        opacity: 0;
        transition: padding 0.3s ease, opacity 0.3s ease;
    }

    .faq-item.active .faq-answer-inner {
        padding: 1.25rem 2.1rem 1.25rem 1.5rem;
        opacity: 1;
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
        display: none;
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

    @media (max-width: 1150px) {
        .faq-section {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    @media (max-width: 768px) {
        .faq-section {
            padding: 2.5rem 20px;
        }

        .faq-container {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
            padding: 0;
        }

        .faq-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 24px;
            line-height: 34px;
            letter-spacing: 0px;
            color: #000000;
        }

        .faq-subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            letter-spacing: 0px;
            text-align: center;
        }

        .faq-question-text {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0px;
        }

        .faq-answer-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            letter-spacing: 0px;
            text-align: justify;
        }

        .faq-list {
            max-width: 100%;
        }

        .faq-question {
            padding: 1rem 1.25rem;
        }

        .faq-answer-inner {
            padding: 0 1.25rem 0 1.25rem;
        }

        .faq-item.active .faq-answer-inner {
            padding: 1.25rem 1.25rem 1.25rem 1.25rem;
        }
    }

    .faq-item.active .faq-question {
        background-color: #0B2545;
    }
    .faq-item.active .faq-question-text {
        color: #ffffff;
    }
    .faq-toggle-close {
        display: none;
    }
    .faq-item.active .faq-toggle-close {
        display: flex;
    }
</style>

<section class="faq-section">
    <div class="faq-container">
        <div class="faq-header">
            <h2 class="faq-title">Frequently Asked Question For Patient</h2>
            <p class="faq-subtitle">Answers to common questions about genomic testing.</p>
        </div>

        <div class="faq-list">
            <!-- FAQ Item 1 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">Do all laboratory tests require preparation?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">No. Preparation requirements depend on the specific test. Some tests may require fasting or other instructions, while others may not.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">What type of specimen is required for a test?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">The type of specimen required depends on the specific test ordered by your healthcare provider. Common specimens include blood, urine, saliva, or tissue samples.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">What should I do if I am unsure how to prepare?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">If you are unsure how to prepare, please contact your healthcare provider or reach out to our laboratory directly for specific instructions regarding your test.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">How long does laboratory testing take?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">Turnaround times vary by test. Routine tests are typically completed within 24-48 hours, while complex genomic or specialized tests may take several days to a few weeks.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">Can Sterling explain my laboratory results?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">While Sterling provides your test results, we recommend discussing them with your healthcare provider, who can explain what they mean in the context of your overall health and medical history.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span class="faq-question-text">Where can I find information about a specific test?</span>
                    <button class="faq-toggle-plus" aria-label="Open answer">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                        <button class="faq-toggle-close" aria-label="Close answer">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p class="faq-answer-text">You can find information about specific tests in our test directory on our website, or by consulting with your healthcare provider who ordered the test.</p>
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
