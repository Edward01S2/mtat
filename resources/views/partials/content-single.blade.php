@include('partials.page-header')
<article @php post_class() @endphp>

  @include('partials/entry-meta')
  
  <div class="page-content">
    <div class="container mx-auto">
        @php the_content() @endphp
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
