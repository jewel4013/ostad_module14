@extends('layouts.app')
@section('title', 'About')


   @section('content') 
    <!-- About Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/myphoto.jpg') }}" alt="About Me" class="img-fluid rounded-circle">
                </div>
                <div class="col-lg-7">
                    <h2 class="display-5 mb-4">About Me</h2>
                    <p class="lead">Hi! I am an MBA graduate with a programmer's soul.</p>
                    <p>Since 2014, I have been passionately teaching myself software development, mastering technologies like PHP, Laravel, JavaScript, SQL, and C.My academic background in Accounting gives me a unique edge in understanding business operations, workflows, and financial systems. Combined with my quick ability to adapt to any programming language, I focus on building impactful web applications and Fintech/ERP solutions that solve real-world business challenges.</p>
                    <p>I possess a rare hybrid skill set: the analytical mind of an accountant and the logical problem-solving ability of a programmer. I love transforming complex data systems into user-friendly, efficient web applications.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Name:</strong> Jewel Rana</li>
                                <li class="mb-2"><strong>Email:</strong> jewel.rana.4013@gmail.com</li>
                                <li class="mb-2"><strong>Phone:</strong> +880 1319 331904</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Experience:</strong> 10+ Years</li>
                                <li class="mb-2"><strong>Location:</strong> Banani, Dhaka</li>
                                <li class="mb-2"><strong>Freelance:</strong> Not available</li>
                            </ul>
                        </div>
                    </div>
                    <a href="contact.html" class="btn btn-primary mt-3">Contact Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">My Skills</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5>HTML5</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 95%">97%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>CSS3</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 90%">93%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>JavaScript</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 85%">85%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Bootstrap</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 90%">90%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>React</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 80%">80%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Node.js</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 75%">75%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection