<?php include 'includes/header.php'; ?>

<div class="relative pt-24 md:pt-32 pb-20 md:pb-24 overflow-hidden">
    <!-- Soft background glow -->
    <div class="absolute top-0 right-0 w-[350px] h-[350px] md:w-[520px] md:h-[520px] bg-primary/15 blur-[120px] opacity-40 rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-5 sm:px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-start">
            
            <!-- ================= LEFT INFO ================= -->
            <div class="space-y-8" data-aos="fade-right">
                <div>
                    <span class="text-accent text-sm font-semibold uppercase tracking-wide">Get in Touch</span>
                    <h1 class="text-3xl md:text-5xl font-bold mt-2 text-gray-900">Let’s Solve Your Technology Needs</h1>
                    <p class="text-gray-600 mt-4 text-sm md:text-base">
                        Contact Integrated Technologies for product sales, repair services, AMC contracts, and technical consultation. Our team responds quickly and professionally.
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <i data-lucide="map-pin" class="text-accent mt-1 w-5 h-5"></i>
                        <div>
                            <h3 class="font-semibold">Visit Us</h3>
                            <a href="https://maps.app.goo.gl/pMncUKVnUiTzceBx6" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors text-left text-gray-700">
                                Shankarnag Circle, 2nd Block, Ashok Nagar, Banashankari 1st Stage, Banashankari, Bengaluru, Karnataka 560050
                            </a>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <i data-lucide="phone" class="text-accent mt-1 w-5 h-5"></i>
                        <div>
                            <h3 class="font-semibold">Call Us</h3>
                            <a href="tel:+919845125274" class="hover:text-accent transition-colors text-left text-gray-700">+91 98451 25274</a>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <i data-lucide="mail" class="text-accent mt-1 w-5 h-5"></i>
                        <div>
                            <h3 class="font-semibold">Email</h3>
                            <a href="mailto:dinesh@integratedtech.co.in" class="hover:text-accent transition-colors text-left text-gray-700">dinesh@integratedtech.co.in</a>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact Buttons -->
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="tel:+919845125274" class="px-5 py-3 rounded-xl bg-gray-100 border border-gray-200 hover:border-accent transition text-sm font-semibold text-gray-900 flex items-center gap-2">
                         &#128222; Call Now
                    </a>
                    <a href="https://wa.me/919845125274" target="_blank" rel="noopener noreferrer" class="px-5 py-3 rounded-xl bg-green-50 border border-green-200 hover:border-green-400 transition text-sm font-semibold flex items-center gap-2 text-green-700">
                        <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp
                    </a>
                </div>

                <p class="text-xs text-gray-500 pt-2">
                    Trusted by businesses since 2000 • Fast response • Professional service
                </p>
            </div>

            <!-- ================= FORM ================= -->
            <form id="contact-form" class="bg-white/80 backdrop-blur-md border border-gray-200 p-6 md:p-8 rounded-2xl shadow-xl space-y-5" data-aos="fade-up">
                
                <div class="space-y-1">
                    <label class="text-sm text-gray-700">Your Name</label>
                    <input type="text" name="name" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                </div>
                
                <div class="space-y-1">
                    <label class="text-sm text-gray-700">Email Address</label>
                    <input type="email" name="email" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                </div>
                
                <div class="space-y-1">
                    <label class="text-sm text-gray-700">Phone Number</label>
                    <input type="tel" name="phone" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                </div>
                
                <div class="space-y-1">
                    <label class="text-sm text-gray-700">Subject</label>
                    <input type="text" name="subject" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent placeholder-gray-400">
                </div>

                <div class="space-y-1">
                    <label class="text-sm text-gray-700">Message</label>
                    <textarea name="message" rows="4" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent resize-none placeholder-gray-400"></textarea>
                </div>

                <button type="submit" id="submit-btn" class="w-full py-3 rounded-lg bg-gradient-to-r from-primary to-secondary text-white font-semibold shadow-lg hover:scale-[1.02] transition flex items-center justify-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                    <i data-lucide="send" class="w-4 h-4"></i>
                    <span id="btn-text">Send Message</span>
                </button>

                <!-- Status Messages -->
                <p id="status-success" class="text-green-500 text-center text-sm font-medium hidden">Message sent successfully! We will get back to you soon.</p>
                <p id="status-error" class="text-red-500 text-center text-sm font-medium hidden">Something went wrong. Please try again later.</p>

                <p class="text-xs text-gray-500 text-center">
                    We typically respond within a few hours during working time.
                </p>
            </form>

        </div>
    </div>
</div>

<script>
    const form = document.getElementById('contact-form');
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
        btnText.textContent = "Sending...";

        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        // Send to local PHP script
        const API_URL = "process_contact.php";

        try {
            const response = await fetch(API_URL, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });

            if (response.ok) {
                statusSuccess.classList.remove('hidden');
                form.reset();
            } else {
                statusError.classList.remove('hidden');
            }
        } catch (error) {
            console.error("Error sending email:", error);
            statusError.classList.remove('hidden');
        } finally {
            submitBtn.disabled = false;
            btnText.textContent = "Send Message";
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
