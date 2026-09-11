<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
        }
        .appointment-page-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 200px);
            padding: 40px 20px;
        }
        .appointment-section {
            background: #F3F8FA;
            width: 100%;
            max-width: 1083px;
            border-radius: 20px;
            padding: 60px 40px;
            margin: 0 auto;
        }
        .text-center {
            text-align: center;
        }
        .heading {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 34px;
            line-height: 44px;
            color: #000000;
            margin-bottom: 12px;
        }
        .sub-heading {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            color: #000000;
            margin-bottom: 40px;
        }
        .tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }
        .tab-btn {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 16px;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            outline: none;
        }
        .tab-btn.active {
            background: #0B2545;
            color: #ffffff;
            border: 2px solid #0B2545;
        }
        .tab-btn.inactive {
            background: transparent;
            color: #0B2545;
            border: 2px solid #0B2545;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 24px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .form-group.full-width {
            grid-column: span 2;
        }
        
        label {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: #000000;
        }
        
        input, select, textarea {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            padding: 14px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background: #ffffff;
            color: #000000;
            outline: none;
            transition: border-color 0.3s ease;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="none" stroke="%23333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6"/></svg>');
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
        }
        
        input::placeholder, select::placeholder, textarea::placeholder {
            color: #6A6A6A;
        }
        
        input:focus, select:focus, textarea:focus {
            border-color: #0B2545;
        }
        
        textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .submit-btn-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        
        .submit-btn {
            width: 259px;
            height: 64px;
            border-radius: 12px;
            border: 2px solid transparent;
            background: #25B8A9;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            background: #0B2545;
            color: #ffffff;
        }

        .provider-field {
            display: none;
        }

        @media (max-width: 768px) {
            .appointment-section {
                padding: 40px 20px;
            }
            .form-grid {
                grid-template-columns: 1fr;
            }
            .form-group.full-width {
                grid-column: span 1;
            }
            .desktop-text {
                display: none;
            }
            .tabs {
                gap: 10px;
            }
            .tab-btn {
                padding: 12px 16px;
                flex: 1;
            }
            .submit-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    @include('components.header')
    <div class="appointment-page-wrapper">
    <section class="appointment-section">
        <div class="text-center">
            <h1 class="heading">Book an Appointment</h1>
            <p class="sub-heading">Tell us who you are and select the service you need.</p>
        </div>

        <div class="tabs">
            <button type="button" class="tab-btn active" id="tab-patient" onclick="switchTab('patient')">
                <span class="desktop-text">Individuals & </span>Patients
            </button>
            <button type="button" class="tab-btn inactive" id="tab-provider" onclick="switchTab('provider')">
                <span class="desktop-text">Healthcare </span>Provider
            </button>
        </div>

        <form>
            <div class="form-grid">
                <div class="form-group">
                    <label for="first_name">First Name *</label>
                    <input type="text" id="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name *</label>
                    <input type="text" id="last_name" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" placeholder="Number" required>
                </div>

                <!-- Provider Only Fields -->
                <div class="form-group provider-field">
                    <label for="clinic_name">Practice / Clinic Name *</label>
                    <input type="text" id="clinic_name" placeholder="Name">
                </div>
                <div class="form-group provider-field">
                    <label for="provider_type">Provider Type *</label>
                    <select id="provider_type">
                        <option value="" disabled selected>Select provider type</option>
                        <option value="doctor">Doctor</option>
                        <option value="hospital">Hospital</option>
                        <option value="clinic">Clinic</option>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label for="appointment_type">Appointment Type *</label>
                    <select id="appointment_type" required>
                        <!-- Options populated by JS -->
                    </select>
                </div>

                <!-- Provider Only Fields -->
                <div class="form-group provider-field">
                    <label for="collection_address">Collection Address *</label>
                    <input type="text" id="collection_address" placeholder="Street Address">
                </div>
                <div class="form-group provider-field">
                    <label for="zip_code">ZIP Code *</label>
                    <input type="text" id="zip_code" placeholder="Code">
                </div>

                <div class="form-group">
                    <label for="date">Preferred Date *</label>
                    <input type="date" id="date" placeholder="mm/dd/yyyy" required>
                </div>
                <div class="form-group">
                    <label for="slot">Available Slot *</label>
                    <select id="slot" required>
                        <option value="" disabled selected>Select Time</option>
                        <option value="morning">Morning</option>
                        <option value="afternoon">Afternoon</option>
                    </select>
                </div>

                <!-- Provider Only Field -->
                <div class="form-group provider-field full-width">
                    <label for="service_needed">Service Needed *</label>
                    <select id="service_needed">
                        <option value="" disabled selected>Select Service</option>
                        <option value="service1">Service 1</option>
                        <option value="service2">Service 2</option>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label for="service">Test / Service Details *</label>
                    <select id="service" required>
                        <option value="" disabled selected>Select Test</option>
                        <option value="blood_test">Blood Test</option>
                        <option value="urine_test">Urine Test</option>
                    </select>
                </div>
                <div class="form-group full-width">
                    <label for="additional_info">Additional Information</label>
                    <textarea id="additional_info" placeholder="Tell us anything...."></textarea>
                </div>
            </div>

            <div class="submit-btn-container">
                <button type="submit" class="submit-btn">Book Appointment</button>
            </div>
        </form>
    </section>

    <script>
        const patientOptions = `
            <option value="" disabled selected>Visit Laboratory</option>
            <option value="visit">Visit Laboratory</option>
            <option value="home">Home Sample Collection</option>
        `;

        const providerOptions = `
            <option value="" disabled selected>Clinic Sample Collection</option>
            <option value="clinic">Clinic Sample Collection</option>
            <option value="laboratory">Visit Laboratory</option>
        `;

        const appointmentTypeSelect = document.getElementById('appointment_type');
        const providerFields = document.querySelectorAll('.provider-field');
        const tabPatient = document.getElementById('tab-patient');
        const tabProvider = document.getElementById('tab-provider');

        function switchTab(tab) {
            if (tab === 'provider') {
                tabProvider.classList.add('active');
                tabProvider.classList.remove('inactive');
                tabPatient.classList.add('inactive');
                tabPatient.classList.remove('active');
                
                appointmentTypeSelect.innerHTML = providerOptions;
                
                providerFields.forEach(field => {
                    field.style.display = 'flex';
                });
            } else {
                tabPatient.classList.add('active');
                tabPatient.classList.remove('inactive');
                tabProvider.classList.add('inactive');
                tabProvider.classList.remove('active');
                
                appointmentTypeSelect.innerHTML = patientOptions;
                
                providerFields.forEach(field => {
                    field.style.display = 'none';
                });
            }
        }

        // Initialize with patient tab
        switchTab('patient');
    </script>
    </div>
    @include('components.footer')
</body>
</html>
