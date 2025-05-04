<!-- resources/views/sections/shared/contact-form.blade.php -->
<section class="py-20 relative overflow-hidden bg-gradient-to-br from-[#0f0f0f] to-[#1a1a1a]">
    <div class="absolute inset-0 opacity-10 bg-[url('/images/logo.png')] bg-center bg-no-repeat bg-cover"></div>
    <div class="container mx-auto px-4 relative">
        <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-[#ff0055] to-[#00fff7]">
                CONTACT <span class="text-[#aaff00]">US</span>
            </h2>
            <p class="text-[#e0e0e0] text-lg max-w-2xl mx-auto">
                Have questions about our events or releases? Need help with tickets? Send us a message!
            </p>
        </div>

        <div class="max-w-2xl mx-auto bg-[#1a1a1a] rounded-xl shadow-2xl overflow-hidden border border-[#ff0055]/30" data-aos="fade-up">
            <form action="{{ route('contact.submit') }}" method="POST" class="p-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-[#e0e0e0] text-sm font-bold mb-2">FULL NAME</label>
                        <input type="text" id="name" name="name" required
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                    <div>
                        <label for="email" class="block text-[#e0e0e0] text-sm font-bold mb-2">EMAIL</label>
                        <input type="email" id="email" name="email" required
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="age" class="block text-[#e0e0e0] text-sm font-bold mb-2">AGE</label>
                        <input type="number" id="age" name="age" min="16" required
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                    <div>
                        <label for="subject" class="block text-[#e0e0e0] text-sm font-bold mb-2">SUBJECT</label>
                        <select id="subject" name="subject" required
                                class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]"
                                onchange="toggleEventFields(this.value)">
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Ticket">Ticket Request</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <div id="eventFields" class="hidden grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="event" class="block text-[#e0e0e0] text-sm font-bold mb-2">EVENT</label>
                        <input type="text" id="event" name="event"
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                    <div>
                        <label for="location" class="block text-[#e0e0e0] text-sm font-bold mb-2">LOCATION</label>
                        <input type="text" id="location" name="location"
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                    <div>
                        <label for="event_date" class="block text-[#e0e0e0] text-sm font-bold mb-2">DATE</label>
                        <input type="date" id="event_date" name="event_date"
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                    <div>
                        <label for="event_time" class="block text-[#e0e0e0] text-sm font-bold mb-2">TIME</label>
                        <input type="time" id="event_time" name="event_time"
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                    <div class="md:col-span-2">
                        <label for="djs" class="block text-[#e0e0e0] text-sm font-bold mb-2">DJs (comma separated)</label>
                        <input type="text" id="djs" name="djs"
                               class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-[#e0e0e0] text-sm font-bold mb-2">MESSAGE</label>
                    <textarea id="message" name="message" rows="5" required
                              class="w-full bg-[#0f0f0f] border border-[#00fff7]/20 rounded-lg py-3 px-4 text-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#ff0055]"></textarea>
                </div>



                <div class="text-center">
                    <button type="submit" class="glow-button px-8 py-4 bg-gradient-to-r from-[#ff0055] to-[#00fff7] rounded-full font-bold hover:from-[#00fff7] hover:to-[#ff0055] transition-all duration-300">
                        SEND MESSAGE
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    function toggleEventFields(value) {
        const eventFields = document.getElementById('eventFields');
        if (value === 'Ticket') {
            eventFields.classList.remove('hidden');
            eventFields.classList.add('grid');
        } else {
            eventFields.classList.remove('grid');
            eventFields.classList.add('hidden');
        }
    }
</script>

<style>
    .glow-button {
        box-shadow: 0 0 15px rgba(255, 0, 85, 0.5);
    }
    .glow-button:hover {
        box-shadow: 0 0 25px rgba(0, 255, 247, 0.8);
    }
</style>
