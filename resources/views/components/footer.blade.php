<!-- resources/views/components/footer.blade.php -->
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
        <p class="text-light">&copy; {{ date('Y') }} shahariar shakil. All rights reserved.</p>
        <p>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('services') }}">Services</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('contact.create') }}">Contact</a>
        </p>
    </div>
</footer>
