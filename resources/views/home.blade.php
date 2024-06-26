@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Home Page</h1>
    <p>Welcome to the home page of MyApp!</p>

    <div class="row">
        <div class="col-md-6">
            <h2>About Our Company</h2>
            <p>MyApp is a leading provider of innovative ICT solutions. We specialize in delivering high-quality software development, web development, and IT support services. Our mission is to help businesses thrive in the digital age by offering customized technology solutions that meet their unique needs.</p>
        </div>
        <div class="col-md-6">
            <h2>Our Services</h2>
            <ul>
                <li><strong>Software Development:</strong> Custom software solutions tailored to enhance your business operations.</li>
                <li><strong>Web Development:</strong> Professional website design and development services to establish your online presence.</li>
                <li><strong>Network Solutions:</strong> Comprehensive network setup, management, and security services.</li>
                <li><strong>IT Support:</strong> Reliable IT support and maintenance services to keep your systems running smoothly.</li>
                <li><strong>Cloud Services:</strong> Scalable cloud solutions for data storage, backup, and collaboration.</li>
                <li><strong>Cybersecurity:</strong> Advanced security measures to protect your business from cyber threats.</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Testimonials</h2>
            <blockquote class="blockquote">
                <p class="mb-0">"MyApp provided us with an excellent custom software solution that has significantly improved our business operations."</p>
                <footer class="blockquote-footer">John Doe, CEO of ABC Corp</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p class="mb-0">"The team at MyApp is professional, knowledgeable, and always available to help with our IT needs."</p>
                <footer class="blockquote-footer">Jane Smith, IT Manager at XYZ Ltd</footer>
            </blockquote>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Contact Us</h2>
            <p>If you have any questions or would like to learn more about our services, please <a href="{{ route('contact.create') }}">contact us</a>.</p>
        </div>
    </div>
@endsection
