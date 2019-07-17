@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    {{-- @include('partials.content-page') --}}
    <div class="page-content">
      <div class="container mx-auto">
          @php the_content() @endphp
      </div>
    </div>
    
    @include('partials.programs')

    @include('partials.classes')

    
  @endwhile

    {{-- @debug
    @dump($classes) --}}
@endsection
