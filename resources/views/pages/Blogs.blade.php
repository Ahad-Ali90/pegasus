@extends('layouts.user.layout')

@section('content')
<!-- HEADER END -->
<div class="gradient-background">
<main class="blog-listing">
  <section class="blog-filters">
    <div class="filter-group">
      <select name="category">
        <option>All Categories</option>
        <option>Airport Tips</option>
        <option>Service Updates</option>
        <option>London Travel</option>
      </select>
      <select name="sort">
        <option>Newest–Oldest</option>
        <option>Oldest–Newest</option>
      </select>
    </div>
    <a href="homepage.html" class="book-now-btn">Book Now</a>
  </section>

  <section class="post-grid">
    <!-- Blog Card 1 -->
    <article class="post-card">
      <div class="post-image">
        <img src="images/coorporation1.png.jpg" alt="Airport taxi vs train">
      </div>
      <div class="post-meta">
        <span class="post-category">Airport Tips</span>
        <p class="post-date">10 July 2025</p>
      </div>
      <h2>
        <a href="blogarticle1.html">
          Airport Taxi vs Train: What's the Best Way to Travel from London Airports?
        </a>
      </h2>
      <p class="post-excerpt">
        Is a taxi or train better from Heathrow, Gatwick, Luton, or Stansted? Discover the pros and cons of each — including cost, convenience, and speed.
      </p>
      <a href="blogarticle1.html" class="read-more">Read More →</a>
    </article>

    <!-- Blog Card 2 -->
    <article class="post-card">
      <div class="post-image">
        <img src="images/coorporationreplace.jpg" alt="Stress-free airport transfer tips by Pegasus Minicab">
      </div>
      <div class="post-meta">
        <span class="post-category">Travel Tips</span>
        <p class="post-date">10 July 2025</p>
      </div>
      <h2>
        <a href="blog2article.html">
          5 Tips for a Stress-Free London Airport Transfer
        </a>
      </h2>
      <p class="post-excerpt">
        Avoid delays and travel stress with these expert airport transfer tips from Pegasus Minicab London. Book smart, arrive relaxed, and stay connected.
      </p>
      <a href="blog2article.html" class="read-more">Read More →</a>
    </article>
  </section>

  <nav class="pagination">
    <a href="#" class="prev">« Previous</a>
    <a href="#" class="page active">1</a>
    <a href="#" class="page">2</a>
    <a href="#" class="next">Next »</a>
  </nav>
</main>
</div>
@endsection