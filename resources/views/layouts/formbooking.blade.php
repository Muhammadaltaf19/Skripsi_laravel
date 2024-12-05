<div class="flex flex-col items-center justify-center p-6 text-white bg-center bg-cover main-container lg:items-end lg:pr-48 lg:py-12"
    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('https://cf.bstatic.com/xdata/images/hotel/max1280x900/490034721.jpg?k=12d5f748565a0fd718e95cf1d69c1e29d9f431949672629467bcc00a7c8a9883&o=&hp=1');">
    <div class="flex flex-col mt-5 lg:mt-12">
        <text class="text-xs tracking-wider">CHECK AVAILABILITY</text>
        <text class="mt-2 text-xl tracking-wider md:text-2xl font-playfair">Come as you are and we will take care of the
            rest</text>
        <div class="w-24 h-0.5 bg-white mt-8"></div>
        <form id="availabilityForm" class="flex flex-col mt-8">
            <div class="flex flex-col md:flex-row md:space-x-8">
                <div class="flex flex-col flex-1">
                    <label for="check_in">Check In</label>
                    <input id="check_in" name="check_in" type="date"
                        class="w-full px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary date">
                </div>
                <div class="flex flex-col flex-1">
                    <label for="check_out">Check Out</label>
                    <input id="check_out" name="check_out" type="date"
                        class="w-full px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary date">
                </div>
            </div>
            <div class="flex flex-col flex-1 mt-4 md:mt-0">
                <label for="name">Name</label>
                <input id="name" name="name" min="1"
                    class="px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary"
                    placeholder="Name"
            </div>
                       <div class="flex flex-col flex-1 mt-4 md:mt-0">
                <label for="telpon">Telpon</label>
                <input id="telpon" name="" min="1"
                    class="px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary"
                    placeholder="Telpon"
            <div class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-8">
                <div class="flex flex-col flex-1">
                    <label for="accommodation">Select Accommodation</label>
                    <select id="accommodation" name="accommodation"
                        class="px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-select placeholder:text-white focus:ring-secondary focus:border-secondary">
                        <option class="text-black" value="">Select Accommodation</option>
                        @foreach ($rooms as $room)
                            <option class="text-black" value="{{ $room->type }}"> - {{ $room->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col flex-1 mt-4 md:mt-0">
                    <label for="guest">Guest</label>
                    <input id="guest" name="guest" min="1"
                        class="px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary"
                        placeholder="Guest" type="number" value="">
                </div>
            </div>
            <button type="button" onclick="sendWhatsAppMessage()"
                class="px-5 py-3 my-6 text-sm font-medium text-black bg-white rounded-lg hover:bg-slate-900 hover:text-white focus:ring-4 focus:ring-slate-950 md:my-10">CHECK
                AVAILABILITY</button>
        </form>
    </div>
</div>

<script>
    function sendWhatsAppMessage() {
        const checkIn = document.getElementById('check_in').value;
        const checkOut = document.getElementById('check_out').value;
        const accommodation = document.getElementById('accommodation').value;
        const name = document.getElementById('name').value;
        const telpon = document.getElementById('telpon').value;
        const guest = document.getElementById('guest').value;

        const message =
            `Halo Lisa Home Stay, saya ingin menanyakan ketersediaan akomodasi di properti Anda. Berikut adalah detail permintaan saya: \n\n- Check In: ${checkIn}\n- Check Out: ${checkOut}\n- Name: ${name}\n- Nomor telpon: ${telpon}\n- Tipe Akomodasi: ${accommodation}\n- Jumlah Tamu: ${guest}\n\nMohon informasi mengenai ketersediaan dan harga. Terima kasih!`;

        const phoneNumber = '628998211377'; // Ganti dengan nomor WhatsApp tujuan
        const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

        window.open(url, '_blank');
    }
</script>
