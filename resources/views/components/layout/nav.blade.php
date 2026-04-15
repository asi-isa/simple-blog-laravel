<nav class="flex flex-col max-w-7xl px-4 py-3 mx-auto">
    <div class="flex justify-between items-center">

        <div>
            logo Name
        </div>

        <ul class="flex items-center gap-4">
            <li><a href="/subscribe">Subscribe</a></li>
            @guest
                <li><a href="/login">Log in</a></li>
            @endguest

            @auth
                <form action="/logout" method="post">
                    @csrf

                    <button type="submit">Log out</button>
                </form>
            @endauth
        </ul>
    </div>

    <ul class="flex gap-3 md:mx-auto">
        <li><a href="/">Welcome</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Online-Kurs</a></li>
        <li><a href="#">About</a></li>
    </ul>
</nav>
