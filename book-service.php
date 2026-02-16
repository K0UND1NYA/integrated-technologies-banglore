<?php include 'includes/header.php'; ?>

<div class="relative pt-24 md:pt-32 pb-20 md:pb-24 overflow-hidden">
    <!-- Soft background glow -->
    <div class="absolute top-0 right-0 w-[350px] h-[350px] md:w-[520px] md:h-[520px] bg-primary/15 blur-[120px] opacity-40 rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-5 sm:px-6 relative z-10">
        <div class="max-w-3xl mx-auto">
            
            <!-- ================= HEADER ================= -->
            <div class="text-center mb-10" data-aos="fade-up">
                <span class="text-accent text-sm font-semibold uppercase tracking-wide">Service Request</span>
                <h1 class="text-3xl md:text-5xl font-bold mt-2 text-gray-900">Book a Service</h1>
                <p class="text-gray-600 mt-4 text-sm md:text-base">
                    Please provide the details below to book a service or report an incident. Our technician will contact you shortly.
                </p>
            </div>

            <!-- ================= FORM ================= -->
            <form id="booking-form" class="bg-white/80 backdrop-blur-md border border-gray-200 p-6 md:p-10 rounded-2xl shadow-xl space-y-6" data-aos="fade-up">
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Incident ID (Read Only) -->
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-gray-700">Incident ID</label>
                        <input type="text" name="incident_id" id="incident_id" readonly class="w-full bg-gray-100 border border-gray-200 rounded-lg px-4 py-3 text-gray-600 font-mono focus:outline-none">
                    </div>

                    <!-- Name -->
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-gray-700">Full Name</label>
                        <input type="text" name="name" required placeholder="Enter your name" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Email -->
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-gray-700">Email ID</label>
                        <input type="email" name="email" required placeholder="yourname@example.com" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                    </div>

                    <!-- Contact No -->
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-gray-700">Contact No</label>
                        <input type="tel" name="phone" required placeholder="Enter phone number" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Problem Reported -->
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-gray-700">Problem Reported</label>
                        <input type="text" name="problem_reported" required placeholder="Brief summary of issue" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                    </div>

                    <!-- Device Dropdown -->
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-gray-700">Device</label>
                        <select name="device" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent">
                            <option value="">Select Device Type</option>
                            <option value="Desktop">Desktop</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Printer">Printer</option>
                            <option value="Network Issue">Network Issue</option>
                        </select>
                    </div>
                </div>

                <!-- Company -->
                <div class="space-y-1">
                    <label class="text-sm font-semibold text-gray-700">Company Name</label>
                    <input type="text" name="company" placeholder="Enter company name" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                </div>

                <!-- Address -->
                <div class="space-y-1">
                    <label class="text-sm font-semibold text-gray-700">Address</label>
                    <textarea name="address" rows="2" required placeholder="Enter your full address" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent resize-none placeholder-gray-400"></textarea>
                </div>

                <!-- Elaborate -->
                <div class="space-y-1">
                    <label class="text-sm font-semibold text-gray-700">Explain More about the Issue </label>
                    <textarea name="elaborate" rows="4" required placeholder="Tell us more about the issue..." class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent resize-none placeholder-gray-400"></textarea>
                </div>

                <button type="submit" id="submit-btn" class="w-full py-4 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-bold text-lg shadow-lg hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed mt-4">
                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                    <span id="btn-text">Confirm Booking</span>
                </button>

                <!-- Status Messages -->
                <div id="status-success" class="hidden p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-center animate-pulse">
                    <p class="font-bold"> Success!</p>
                    <p class="text-sm">Your service request has been registered. Our team will contact you shortly.</p>
                </div>
                <div id="status-error" class="hidden p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-center">
                    <p class="font-bold"> Error</p>
                    <p class="text-sm">Something went wrong. Please try again or call us directly.</p>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
    // Generate Incident ID
    const generateIncidentId = () => {
        const prefix = "INT";
        const timestamp = Date.now().toString().slice(-6);
        const random = Math.floor(Math.random() * 1000).toString().padStart(3, '0');
        return `${prefix}-${timestamp}${random}`;
    };

    document.getElementById('incident_id').value = generateIncidentId();

    const form = document.getElementById('booking-form');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const statusSuccess = document.getElementById('status-success');
    const statusError = document.getElementById('status-error');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        // Reset status
        statusSuccess.classList.add('hidden');
        statusError.classList.add('hidden');
        submitBtn.disabled = true;
        btnText.textContent = "Processing...";

        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        try {
            const response = await fetch("process_booking.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });

            const result = await response.json();

            if (response.ok && result.success) {
                statusSuccess.classList.remove('hidden');
                form.reset();
                document.getElementById('incident_id').value = generateIncidentId(); // New ID for next time
                // Scroll to success message
                statusSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                statusError.classList.remove('hidden');
            }
        } catch (error) {
            console.error("Error booking service:", error);
            statusError.classList.remove('hidden');
        } finally {
            submitBtn.disabled = false;
            btnText.textContent = "Confirm Booking";
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
