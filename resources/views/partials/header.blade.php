<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="Logo">
        </div>

        @php
            
            $menu = [
                [
                    'text' => 'Characters'
                ],
                [
                    'text' => 'Comics'
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
                    <a class="{{ $loop -> first ? 'active' : '' }}"> 
                        {{ $link['text'] }} 
                    </a>
                </li>       
            @endforeach
        </ul>
    </div>
</header>