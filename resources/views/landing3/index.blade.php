<x-landing::app pageTitle="Landing Page 3">
    {{-- Header Section --}}
    <x-slot:header>
        <x-landing::header>
            <x-slot:logoText>
                <i class="fab fa-cloudsmith mr-1"></i> <span class="text-primary-dark">App</span>
            </x-slot:logoText>
            <x-slot:logoUrl>#</x-slot:logoUrl>

            <x-slot:nav>
                <a class="nav-link active" href="javascript:void(0)">Home</a>
                <a class="nav-link" href="javascript:void(0)">Features</a>
                <a class="nav-link" href="javascript:void(0)">Contact</a>
            </x-slot:nav>

            <x-slot:actions>
                <a class="nav-link" href="javascript:void(0)">
                    <i class="fa fa-sign-in-alt mr-1"></i> Login
                </a>
                <a class="nav-link" href="javascript:void(0)">
                    <i class="fa fa-plus-square mr-1"></i> Register
                </a>
            </x-slot:actions>
        </x-landing::header>
    </x-slot:header>

    {{-- Hero Section --}}
    <x-landing::hero>
        <x-slot:title>
            We help your business grow
        </x-slot:title>

        <x-slot:subtitle>
            We provide a sophisticated analytics platform to help you improve your conversions and rocket grow your business.
        </x-slot:subtitle>

        <x-slot:actions>
            <x-landing::button href="javascript:void(0)" variant="primary" class="rounded-pill shadow-lg py-3 px-4 px-md-5 m-1">
                <i class="fa fa-thumbs-up text-white-90 mr-1"></i> Subscribe
            </x-landing::button>
            <x-landing::button href="javascript:void(0)" variant="dark" class="rounded-pill shadow-lg py-3 px-4 px-md-5 m-1">
                <i class="fa fa-briefcase text-white-90 mr-1"></i> Projects
            </x-landing::button>
        </x-slot:actions>

        <div class="col-lg-5 offset-lg-1 py-5 text-center">
            <img class="img-fluid img-clip-overlay" src="{{ asset('vendor/landing/assets/landing3/media/various/hero-image.jpg') }}" srcset="{{ asset('vendor/landing/assets/landing3/media/various/hero-image@2x.jpg') }} 2x" alt="Hero Image">
        </div>
    </x-landing::hero>

    {{-- Stats Section - Placeholder for content from original landing3/views/index.blade.php --}}
    <div class="container container-big">
        <div class="row text-center">
            <div class="col-sm-6 col-lg-3 my-2">
                <div class="bg-light rounded-xl py-5 px-3">
                    <div class="mb-3">
                        <i class="fa fa-user-tie fa-2x text-primary-dark"></i>
                    </div>
                    <div class="text-uppercase text-muted font-weight-bold mb-1">Accounts</div>
                    <div class="h2 mb-0">12.582</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 my-2">
                <div class="bg-light rounded-xl py-5 px-3">
                    <div class="mb-3">
                        <i class="fa fa-business-time fa-2x text-primary-dark"></i>
                    </div>
                    <div class="text-uppercase text-muted font-weight-bold mb-1">Businesses</div>
                    <div class="h2 mb-0">15.000</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 my-2">
                <div class="bg-light rounded-xl py-5 px-3">
                    <div class="mb-3">
                        <i class="fa fa-chart-line fa-2x text-primary-dark"></i>
                    </div>
                    <div class="text-uppercase text-muted font-weight-bold mb-1">Sales</div>
                    <div class="h2 mb-0">589.563</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 my-2">
                <div class="bg-light rounded-xl py-5 px-3">
                    <div class="mb-3">
                        <i class="fa fa-hand-holding-usd fa-2x text-primary-dark"></i>
                    </div>
                    <div class="text-uppercase text-muted font-weight-bold mb-1">Donations</div>
                    <div class="h2 mb-0"><small class="align-top">$</small>760.584</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Features Section - Placeholder for content from original landing3/views/index.blade.php --}}
    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 my-2 position-relative">
                    <span class="text-back">01</span>
                    <h3 class="h3 font-weight-light mb-4">Stability</h3>
                    <p class="text-muted">
                        Am if number no up period regard sudden better. Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise. Distrusts an it contented perceived attending oh. Thoroughly estimating introduced stimulated why but motionless.
                    </p>
                </div>
                <div class="col-lg-4 my-2 position-relative">
                    <span class="text-back">02</span>
                    <h3 class="h3 font-weight-light mb-4">Credibility</h3>
                    <p class="text-muted">
                        Believing neglected so so allowance existence departure in. In design active temper be uneasy. Thirty for remove plenty regard you summer though. He preference connection astonished on of ye. Partiality on or continuing in particular principles as. Do believing oh disposing to supported allowance we.
                    </p>
                </div>
                <div class="col-lg-4 my-2 position-relative">
                    <span class="text-back">03</span>
                    <h3 class="h3 font-weight-light mb-4">Customizability</h3>
                    <p class="text-muted">
                        Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved enjoyment new way behaviour. Him yet devonshire celebrated especially.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Plans Section - Placeholder for content from original landing3/views/index.blade.php --}}
    <div class="container container-big">
        <h2 class="font-weight-bold mb-5 text-center">
            Our best plans
        </h2>
        <div class="row text-center pt-5">
            <div class="col-sm-6 col-lg-4 offset-lg-2 my-2">
                <div class="bg-light rounded-xl py-5 px-3 position-relative">
                    <span class="text-back">
                        <i class="fa fa-code"></i>
                    </span>
                    <h3 class="h3 font-weight-light mb-5">Developer</h3>
                    <p class="h5 mb-4">
                        <span class="text-primary">10</span>
                        <span class="text-muted">Projects</span>
                    </p>
                    <p class="h5 mb-4">
                        <span class="text-primary">3</span>
                        <span class="text-muted">Clients</span>
                    </p>
                    <p class="h5 mb-4">
                        <span class="text-primary">100</span>
                        <span class="text-muted">Deployments</span>
                    </p>
                    <p class="h5 mb-4">
                        <span class="text-primary">Email</span>
                        <span class="text-muted">Support</span>
                    </p>
                    <p class="h4 pt-4">
                        <span class="text-success">$29</span> per month
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 my-2">
                <div class="bg-light rounded-xl py-5 px-3 position-relative">
                    <span class="text-back">
                        <i class="fa fa-globe"></i>
                    </span>
                    <h3 class="h3 font-weight-light mb-5">Business</h3>
                    <p class="h5 mb-4">
                        <span class="text-primary">Unlimited</span>
                        <span class="text-muted">Projects</span>
                    </p>
                    <p class="h5 mb-4">
                        <span class="text-primary">Unlimited</span>
                        <span class="text-muted">Clients</span>
                    </p>
                    <p class="h5 mb-4">
                        <span class="text-primary">Unlimited</span>
                        <span class="text-muted">Deployments</span>
                    </p>
                    <p class="h5 mb-4">
                        <span class="text-primary">VIP</span>
                        <span class="text-muted">Support</span>
                    </p>
                    <p class="h4 pt-4">
                        <span class="text-success">$99</span> per month
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer Section --}}
    <x-slot:footer>
        <x-landing::footer>
            {{-- This is the new footer content based on original landing3 --}}
            <div class="position-relative overflow-hidden">
                <!-- Background -->
                <span class="square square-flipped square-1"></span>
                <span class="square square-flipped square-2"></span>

                <!-- Footer Content -->
                <footer class="position-relative">
                    <div class="container container-footer text-center">
                        <h2 class="font-weight-bold mb-2">
                            Get your own account
                        </h2>
                        <p class="lead font-weight-normal text-muted mb-4">
                            Only a few spots remain available, so hurry up!
                        </p>
                        <x-landing::button href="javascript:void(0)" variant="primary" class="rounded-pill shadow-lg py-3 px-4 px-md-5 m-1">
                            <i class="fa fa-thumbs-up text-white-90 mr-1"></i> Subscribe
                        </x-landing::button>
                        <p class="my-5">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="text-primary font-weight-600" href="https://pixelcave.com/">pixelcave</a>
                        </p>
                    </div>
                </footer>
            </div>
        </x-landing::footer>
    </x-slot:footer>

</x-landing::app>