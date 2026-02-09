{{-- resources/views/section/footer.blade.php --}}
<footer class="footer-section py-4" style="background-color: #ffffff; color: #333;">
    <div class="container text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <p class="mb-0 fw-bold" style="font-size: 16px; font-family: 'Titillium Web', sans-serif;">
                   Copyright &copy; {{ date('Y') }} BrainFit Indonesia
                </p>
            </div>
            <!-- <div class="col-auto">
                <a href="https://www.brainfit.co.id" target="_blank" rel="noopener noreferrer" 
                   style="color: #2e7d32; text-decoration: none; font-weight: 600; font-family: 'Titillium Web', sans-serif; font-size: 14px;">
                    www.brainfit.co.id
                </a>
            </div> -->
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12">
                <ul class="countries-list list-unstyled d-flex flex-wrap justify-content-center gap-3 mb-0">
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Singapore</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Malaysia</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Indonesia</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">China</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Hong Kong</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Thailand</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Philippines</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Turkey</li>
                    <li style="font-family: 'Titillium Web', sans-serif; font-size: 12px; font-weight: 500; color: #333;">Saudi Arabia</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-section {
        border-top: 1px solid #dee2e6;
    }
    
    .countries-list {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .countries-list li {
        list-style: none;
        transition: color 0.3s ease;
    }
    
    .countries-list li:hover {
        color: #2e7d32;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .countries-list {
            gap: 1rem;
        }
        
        .countries-list li {
            font-size: 11px;
        }
        
        .footer-section p {
            font-size: 14px;
        }
    }
    
    @media (max-width: 576px) {
        .countries-list {
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }
    }
</style>