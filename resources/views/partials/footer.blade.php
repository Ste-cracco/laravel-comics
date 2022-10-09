<footer>
    <div class="footer_top">
        <div class="container_footer_top">
            <div class="card">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <h4>Digital Comics</h4>
            </div>
            <div class="card">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <h4>DC Merchandise</h4>
            </div>
            <div class="card">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <h4>Subcription</h4>
            </div>
            <div class="card">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <h4>Comic Shop Locator</h4>
            </div>
            <div class="card">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                <h4>DC Power Visa</h4>
            </div>
        </div> <!-- Chiusura Container Footer Top -->
    </div> <!-- Chiusura Footer Top -->

    @php
        
        $menu = [
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ], 
            [
                'text' => 'DC Comics'
            ]     
        ]

    @endphp

        <div class="footer_middle">
            <div class="container_footer_middle">
                <div class="menu_footer">
                    <ul>
                        @foreach ($menu as $link)
                        <li>
                            <a class="{{ $loop -> first ? 'title' : '' }}"> 
                                {{ $link['text'] }} 
                            </a>
                        </li>                             
                        @endforeach
                    </ul>
                    <ul>
                        <li>
                            <a class="titolo" href=""> DC </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                        <li>
                            <a href=""> Lorem Ipsum </a>
                        </li>
                    </ul>
                </div>
                <div class="logo_footer">
                    <img src="{{ asset('img/dc-logo-bg.png') }}" alt="Logo footer">
                </div>
            </div> <!-- Chiusura Container Footer middle -->
        </div> <!-- Chiusura Footer middle -->

        <div class="footer_bottom">
            <div class="container_footer_bottom">
                <div class="bottone">
                    <button>Sign Up Now!</button>
                </div>
                <div class="container_social">
                    <span>Follow Us</span>
                    <img src="{{ asset('img/footer-facebook.png') }}" alt="">
                    <img src="{{ asset('img/footer-periscope.png') }}" alt="">
                    <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                    <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                    <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                </div>
            </div>    
        </div> <!-- Chiusura Footer bottom -->        
</footer>