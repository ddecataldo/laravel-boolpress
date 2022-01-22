<div class="sidebar d-flex flex-column bg-dark text-white vh-100 py-4 px-3 ">

    @if(Route::has("admin.users.index") && Auth::user()->role === "admin")
        <a href="{{ route("admin.users.index") }}" class="text-white display-4">Utenti</a>
    @endif

    @if(Route::has("admin.posts.index"))
        <a href="{{ route("admin.posts.index") }}" class="text-white display-4">Articoli</a>
    @endif

</div>