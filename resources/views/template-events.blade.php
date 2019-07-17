{{--
  Template Name: Events
--}}

@extends('layouts.app')

@section('content')
  <div class="text-white relative">
    <div class="relative block">
      <div class="h-full w-full absolute bg-mtat-orange z-10"></div>
      <div class="relative flex justify-center px-8 items-center md:justify-start">
        <div class="container mx-auto relative z-10 ">
          <div class="py-8 text-center md:py-4 md:text-left lg:px-0 xl:px-0">
            <h1 class="text-2xl tracking-wide uppercase mb-0 px-16 font-medium md:pl-0 xl:text-3xl xl:font-semibold">Calendar</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main id="tribe-events-pg-template"
        class="tribe-events-pg-template pt-8">
        <?php tribe_events_before_html(); ?>
        <?php tribe_get_view(); ?>
        <?php tribe_events_after_html(); ?>
      {{-- @while(have_posts()) @php the_post() @endphp
      @php the_content() @endphp
      @endwhile --}}
  </main> <!-- #tribe-events-pg-template -->
@endsection