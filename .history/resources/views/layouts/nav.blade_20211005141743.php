<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="">Home</a>
      <a class="p-2 link-secondary" href="/about">About Page</a>
      <a class="p-2 link-secondary" href="#">Technology</a>
      <a class="p-2 link-secondary" href="#">Design</a>
      <a class="p-2 link-secondary" href="#">Culture</a>
      <a class="p-2 link-secondary" href="#">Business</a>
      <a class="p-2 link-secondary" href="#">Style</a>

      @if (Auth::check())
      <p class="p-2 ml-auto" href="#">{{ Auth::user()->name }}</p>
      @endif
    </nav>
</div>