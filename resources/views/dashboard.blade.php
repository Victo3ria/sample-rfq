<x-layout>
    <x-slot:heading>
        Welcome to Kijabe Hospital (Admin)
    </x-slot:heading>

    <div class="flex justify-center mt-4">
        <a href="#explore" class="animate-bounce text-black font-bold text-lg">
            <h7> <strong><i> Procurement Dashboard </i></strong></h7>
        </a>
    </div>

    <div class="w-full max-w-4xl mx-auto mt-8">
        <div class="relative w-full overflow-hidden rounded-lg shadow-lg">
            <div class="carousel">
                <img class="w-full h-96 object-cover" src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Office Work">
                
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.carousel img');

        setInterval(() => {
            images[currentIndex].classList.add('hidden');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.remove('hidden');
        }, 3000);
    </script>
</x-layout>
