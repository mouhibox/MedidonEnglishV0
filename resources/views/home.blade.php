@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header class="purple text-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold">Welcome to MediDon</h1>
                    <p class="lead">
                        MediDon is an innovative digital platform that facilitates the donation of paramedical equipment between individuals.
                    </p>
                    <!-- Search Bar -->
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Search for equipment (wheelchairs, hospital beds...)">
                                <button class="btn btn-light" type="button">
                                    <i class="bi bi-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="background" aria-hidden="true" viewBox="0 0 1920 164" preserveAspectRatio="none">
            <polygon class="c1" points="1920 206 0 206 0 38 382 164 1147 99 1573 164 1920 46 1920 206"></polygon>
        </svg>
    </header>

    <!-- Main Content -->
    <main class="py-5">
        <div class="container">
            <!-- Statistics -->
            <div class="row mb-5 text-center">
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="counter-blue display-5 fw-bold">1K+</h1>
                        <p class="mb-0">Donations made</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="counter-yellow display-5 fw-bold">700+</h1>
                        <p class="mb-0">Beneficiary establishments</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="counter-green display-5 fw-bold">89+</h1>
                        <p class="mb-0">Types of equipment</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="counter-purple display-5 fw-bold">24h</h1>
                        <p class="mb-0">Average response time</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Filters -->
            <div class="row mb-4 d-flex justify-content-between" id="needs">
                <div class="col-md-3">
                    <label>Type of equipment:</label>
                    <select class="form-select" aria-label="Filter by category">
                        <option selected>All equipment</option>
                        <option value="1">Mobility (wheelchairs, walkers...)</option>
                        <option value="2">Beds and lifting aids</option>
                        <option value="3">Diagnostic equipment</option>
                        <option value="4">Medical consumables</option>
                        <option value="5">Rehabilitation equipment</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Region:</label>
                    <select class="form-select" aria-label="Filter by location">
                        <option selected>All of France</option>
                        <option value="1">Île-de-France</option>
                        <option value="2">Auvergne-Rhône-Alpes</option>
                        <option value="3">Nouvelle-Aquitaine</option>
                        <option value="4">Occitanie</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Condition:</label>
                    <select class="form-select" aria-label="Filter by condition">
                        <option selected>All conditions</option>
                        <option value="1">New</option>
                        <option value="2">Very good condition</option>
                        <option value="3">Good condition</option>
                        <option value="4">Functional condition</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button class="btn btn-dark w-100">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                </div>
            </div>

            <!-- Equipment Cards -->
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="badge bg-success position-absolute" style="top: 10px; right: 10px;">Available</div>
                        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="Wheelchair">
                        <div class="card-body">
                            <h5 class="card-title">Manual wheelchair</h5>
                            <p class="card-text">Manual wheelchair in good condition, lightly used. Dimensions: 90cm x 60cm. Max weight: 120kg.</p>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <span class="badge bg-primary">Mobility</span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="badge bg-info">Good condition</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-1"><i class="bi bi-geo-alt"></i> Saint-Louis Hospital, Paris 10th</p>
                                    <p class="mb-1"><i class="bi bi-calendar"></i> Available until 15/12/2025</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <a href="#" class="btn btn-primary">View Details</a>
                                <a href="#" class="btn btn-outline-dark">Contact the donor</a>
                            </div>
                        </div>
                        <div class="card-footer text-muted bg-transparent">
                            <small>Posted 2 days ago by Dr. Martin</small>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="badge bg-warning position-absolute" style="top: 10px; right: 10px;">Reserved</div>
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="Walker">

                        <div class="card-body">
                            <h5 class="card-title">Electric hospital bed</h5>
                            <p class="card-text">Electric hospital bed with remote control, anti-pressure sore mattress included. Dimensions: 200x90cm.</p>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <span class="badge bg-secondary">Beds</span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="badge bg-success">Very good condition</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-1"><i class="bi bi-geo-alt"></i> Val Clinic, Lyon 3rd</p>
                                    <p class="mb-1"><i class="bi bi-calendar"></i> Available immediately</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <a href="#" class="btn btn-primary">View Details</a>
                                <a href="#" class="btn btn-outline-dark">Contact the donor</a>
                            </div>
                        </div>
                        <div class="card-footer text-muted bg-transparent">
                            <small>Posted 5 days ago by Nurse Legrand</small>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="badge bg-success position-absolute" style="top: 10px; right: 10px;">Available</div>
                        <img src="https://picsum.photos/300/200?random=3" class="card-img-top"
                             alt="Diagnostic equipment">
                        <div class="card-body">
                            <h5 class="card-title">Complete rehabilitation kit</h5>
                            <p class="card-text">Set of physiotherapy equipment: balls, bands, mats. Brand new, never used.</p>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <span class="badge bg-info">Rehabilitation</span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="badge bg-primary">New</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-1"><i class="bi bi-geo-alt"></i> Rehabilitation Center, Marseille</p>
                                    <p class="mb-1"><i class="bi bi-calendar"></i> Available from 01/11</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <a href="#" class="btn btn-primary">View Details</a>
                                <a href="#" class="btn btn-outline-dark">Contact the donor</a>
                            </div>
                        </div>
                        <div class="card-footer text-muted bg-transparent">
                            <small>Posted 1 week ago by Physiotherapist Durand</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button class="btn btn-outline-dark px-4">
                        <i class="bi bi-arrow-down-circle"></i> See more listings
                    </button>
                </div>
            </div>

            <!-- How it Works Section -->
            <div class="row mt-5 pt-5" id="how-it-works">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold">How does it work?</h2>
                    <p class="lead">3 simple steps to donate or receive equipment</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="p-4 bg-light rounded-circle d-inline-block mb-3">
                        <i class="bi bi-plus-circle-fill text-purple" style="font-size: 2rem;"></i>
                    </div>
                    <h4>1. Post an ad</h4>
                    <p>Describe the equipment you want to donate or search for, specifying its features.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="p-4 bg-light rounded-circle d-inline-block mb-3">
                        <i class="bi bi-chat-left-text-fill text-purple" style="font-size: 2rem;"></i>
                    </div>
                    <h4>2. Get in touch</h4>
                    <p>Communicate with other members via our secure messaging system.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="p-4 bg-light rounded-circle d-inline-block mb-3">
                        <i class="bi bi-check-circle-fill text-purple" style="font-size: 2rem;"></i>
                    </div>
                    <h4>3. Organize the exchange</h4>
                    <p>Arrange a meeting for handing over the equipment.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
