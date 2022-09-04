<x-app-layout>

    <section>
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
            <livewire:smprofile />
        </div>
    </section>

    <script>
        window.addEventListener('resize', () => {
            const desktopScreen = window.innerWidth < 1024

            document.querySelector('details').open = !desktopScreen
        })
    </script>

</x-app-layout>
