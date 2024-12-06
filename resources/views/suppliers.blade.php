@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/suppliers.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="#">Home</a>
            <span>></span>
            <a href="#">Suppliers</a>
        </nav>
    </section>

    <section class="hero">
        <div class="hero-image-container">
            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Marine worker" class="hero-image">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Suppliers</h1>
        </div>
    </section>

    <section>
        <div class="wartsila-container">
            <div class="wartsila-sidebar">
                <div class="wartsila-nav-item has-submenu">Supplier requirements
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Environment,health and safety requirements</div>
                        <div class="wartsila-submenu-item">Customer and trade compliance requirements</div>
                    </div>
                </div>
                <div class="wartsila-nav-item">Whistleblowing channel</div>
                <div class="wartsila-nav-item">Suppliers guidelines</div>
                <div class="wartsila-nav-item">Digital collaboration</div>
                <div class="wartsila-nav-item">Report & presentations</div>
                <div class="wartsila-nav-item">Apply to become a supplier</div>
            </div>

            <div class="wartsila-content">
                <div class="w1-wrapper">
                    <div class="w1-container">
                        <header class="w1-header">
                            <h1 class="w1-main-title">Strong supplier network, strong company</h1>
                        </header>
            
                        <div class="w1-content-wrapper">
                            <div class="w1-main-content">
                                <p class="w1-paragraph">
                                    By sharing common goals and having a strong business relationship with our suppliers, our success is also the success of our suppliers. By continuously improving processes and systems our goal is to sustain excellence in quality, delivery, cost-efficiency, lead-time, solutions, and innovation. At Wärtsilä, we are dedicated to maintaining the highest standards in quality and innovation, ensuring that our products and services meet the evolving needs of our customers.
                                </p>
                                <p class="w1-paragraph">
                                    We expect both ourselves and our supplier network to consistently strive for excellence by continuously enhancing our performance and refining our processes. We need to continually assess and gauge the performance and efficiency of our processes, always looking for ways to improve, such as benchmarking. It is essential for us and our suppliers to innovate in sustainable technology and services to help our customers consistently enhance their environmental and economic outcomes.
                                </p>
                                <p class="w1-paragraph">
                                    We are committed to supporting our suppliers in adopting sustainable practices, ensuring that our supply chain contributes positively to environmental and economic outcomes.
                                </p>
                            </div>
            
                            <div class="w1-right-section">
                                <div class="w1-image-container">
                                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Industrial machinery component" class="w1-featured-image">
                                </div>
                                <div class="w1-apply-section">
                                    <h2 class="w1-apply-title">Apply to become a Wärtsilä supplier</h2>
                                    <p class="w1-apply-text">Want to become a supplier to Wärtsilä?</p>
                                    <a href="#" class="w1-apply-link">Fill in your application here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w2-mission-container">
                    <h1 class="w2-supply-title">Supply Management in Wärtsilä</h1>
                    
                    <h2 class="w2-subtitle">Mission</h2>
                    
                    <p class="w2-content">
                        We create value for Wärtsilä's customers through our supplier base by ensuring supply with the right quality, delivered on time with the lowest total cost and fulfilling customer's lead time requirement.
                    </p>
                    
                    <p class="w2-content">
                        We build excellent long-term relations with our key suppliers, create strong commitment to become the preferred customer. We select the right suppliers by benchmarking and sourcing globally. We optimize and innovate the supply chain and invite our suppliers early in our development processes. We develop our people and our organization to reach world class performance.
                    </p>
                </div>

                <div class="w3-role-container">
                    <h2 class="w3-role-title">Role</h2>
                    
                    <ul class="w3-role-list">
                        <li class="w3-role-item">
                            Validate, develop and manage the supplier base, relationships and negotiations
                        </li>
                        <li class="w3-role-item">
                            Ensure supplier agreements, including price lists
                        </li>
                        <li class="w3-role-item">
                            Ensure that objectives and targets on Quality, Delivery Reliability Lead Time and Cost are met
                        </li>
                        <li class="w3-role-item">
                            Supplier capacity management
                        </li>
                        <li class="w3-role-item">
                            Driving, sustaining and coordinating the Operational Excellence activities in the supplier base
                        </li>
                        <li class="w3-role-item">
                            Secure supplier qualification and part validation (e.g. Wärtsilä Parts Approval Process, etc.)
                        </li>
                        <li class="w3-role-item">
                            Supplier development and production improvement (e.g. Supplier audit, Wärtsilä Production Improvement Process, Value Analysis/Value Engineering, etc.)
                        </li>
                        <li class="w3-role-item">
                            Supplier compliance & risk management
                        </li>
                        <li class="w3-role-item">
                            Digitalization of the supply chain
                        </li>
                    </ul>
                </div>
                <div class="w4-container">
                    <div class="w4-image-section">
                        <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Wärtsilä Management Structure" class="w4-image">
                    </div>
            
                    <div class="w4-content">
                        <p class="w4-paragraph">
                            To secure coordinated interfaces and synergies for the cross-divisional supplier base, Wärtsilä has a category management structure in place.
                        </p>
            
                        <p class="w4-paragraph">
                            The main direct material products and components are divided into 19 different categories, based on cross-functional category teams. The direct material categories are divided under Wärtsilä Businesses based on the major volume distribution of the materials and components of each category. The categories are managed by a category team, headed by a Category Manager with his / her Strategic Purchasers and Supplier Development Engineers.
                        </p>
                    </div>
                

            </div>
    </section>


    @push('scripts')
        <script src="{{ asset('asset/js/suppliers.js') }}"></script>
    @endpush
