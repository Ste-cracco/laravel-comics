<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="Logo">
        </div>

        @php
            
            $menu = [
                [
                    'text' => 'Characters',
                    'routeName' => 'home'
                ],
                [
                    'text' => 'Comics',
                    'routeName' => 'comics'
                ],
                [
                    'text' => 'Movies'
                                       
                ],
                [
                    'text' => 'TV'
                    
                ],
                [
                    'text' => 'Games'
                    
                ],
                [
                    'text' => 'Collectible'
                    
                ],
                [
                    'text' => 'Videos'
                    
                ],
                [
                    'text' => 'Fans'
                    
                ],
                [
                    'text' => 'News'
                    
                ],
                [
                    'text' => 'Shop'
                ],
            ]

        @endphp

        <ul class="menu">
            @foreach ($menu as $link)
                <li>
                    <a href="{{ isset($link['routeName']) ? route($link['routeName']) : '/' }}"
                    @if (isset($link['routeName']))
                        class="{{ Route::currentRouteName() === $link['routeName'] ? 'active' : '' }}"> 
                            {{ $link['text'] }}                         
                    @endif 
                    
                    </a>
                </li>       
            @endforeach
        </ul>
    </div>
</header>