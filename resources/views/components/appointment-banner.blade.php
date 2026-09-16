<section class="appointment-banner" aria-labelledby="appointment-banner-title">
    <div class="appointment-banner__image" aria-hidden="true"></div>
    <div class="appointment-banner__overlay" aria-hidden="true"></div>

    <div class="appointment-banner__inner">
        <div class="appointment-banner__content">
            <h1 id="appointment-banner-title">Schedule Your Laboratory<br>Appointment</h1>
            <p>Choose the appointment option that best fits your needs. Patients can request home sample collection or visit our laboratory, while healthcare providers and organizations can coordinate diagnostic services with our laboratory team.</p>
        </div>
    </div>
</section>

<style>
    .appointment-banner,
    .appointment-banner * {
        box-sizing: border-box;
    }

    .appointment-banner {
        background: #0b2038;
        color: #fff;
        isolation: isolate;
        min-height: 360px;
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .appointment-banner__image,
    .appointment-banner__overlay {
        inset: 0;
        position: absolute;
    }

    .appointment-banner__image {
        background-image: url('{{ asset('images/provider-hero.jpg') }}');
        background-position: center right;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -2;
    }

    .appointment-banner__overlay {
        background:
            linear-gradient(90deg, rgba(9, 31, 54, .99) 0%, rgba(9, 31, 54, .96) 33%, rgba(9, 31, 54, .73) 55%, rgba(9, 31, 54, .28) 78%, rgba(9, 31, 54, .18) 100%),
            linear-gradient(0deg, rgba(2, 15, 29, .16), rgba(2, 15, 29, .16));
        z-index: -1;
    }

    .appointment-banner__inner {
        align-items: center;
        display: flex;
        margin: 0 auto;
        max-width: 1700px;
        min-height: 360px;
        padding: 40px 76px;
        width: 100%;
    }

    .appointment-banner__content {
        max-width: 790px;
    }

    .appointment-banner h1 {
        color: #fff;
        font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
        font-size: clamp(40px, 3.05vw, 58px);
        font-weight: 700;
        letter-spacing: -.035em;
        line-height: 1.08;
        margin: 0 0 25px;
    }

    .appointment-banner p {
        color: rgba(255, 255, 255, .93);
        font-family: 'Inter', sans-serif;
        font-size: clamp(17px, 1.35vw, 24px);
        font-weight: 400;
        line-height: 1.58;
        margin: 0;
        max-width: 780px;
    }

    @media (max-width: 900px) {
        .appointment-banner__inner {
            padding: 40px 42px;
        }

        .appointment-banner__content {
            max-width: 650px;
        }

        .appointment-banner__overlay {
            background: linear-gradient(90deg, rgba(9, 31, 54, .98) 0%, rgba(9, 31, 54, .91) 60%, rgba(9, 31, 54, .55) 100%);
        }
    }

    @media (max-width: 600px) {
        .appointment-banner,
        .appointment-banner__inner {
            min-height: 320px;
        }

        .appointment-banner__image {
            background-position: 67% center;
        }

        .appointment-banner__overlay {
            background: rgba(7, 27, 48, .88);
        }

        .appointment-banner__inner {
            align-items: flex-end;
            padding: 40px 24px;
        }

        .appointment-banner h1 {
            font-size: 34px;
            margin-bottom: 22px;
        }

        .appointment-banner h1 br {
            display: none;
        }

        .appointment-banner p {
            font-size: 16px;
            line-height: 1.55;
        }
    }
</style>
