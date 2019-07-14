@extends('layouts.app')

@section('content')

  {{-- @include('partials.page-header') --}}


  <section id="hero" class="relative bg-cover bg-center" style="background-image: url({!! $hero->bg_image->url !!});">
    <div class="hidden w-full h-full absolute md:block">
      <div class="flex w-full h-full">
        <div class="w-1/2"></div>
        <div class="w-1/2 bg-mtat-orange opacity-50"></div>
      </div>
    </div>
    <div class="container mx-auto flex flex-col md:flex-row">
        <div class="relative invisible">
            <div class="relative z-10 p-4 pt-6 text-center text-white">
              <h2 class="uppercase">{{ $hero->header}}</h2>
              <p class="text-sm leading-loose lg:px-16">{{ $hero->subtext}}</p>
            </div>
            <div class="relative flex justify-center text-white pb-6">
              @foreach($hero->buttons as $button)
                <a class="border-2 border-white px-4 py-2 mx-2" href="{{$button->link}}">{{$button->text}}</a>
              @endforeach
            </div>
          </div>
      <div class="relative">
        <div class="absolute bg-mtat-orange opacity-50 w-full h-full z-0 md:hidden"></div>
        <div class="relative text-white md:py-16 lg:py-24 xl:py-40 xl:pl-12">
          <div class="relative z-10 p-4 pt-6 text-center text-white lg:pb-8">
            <h2 class="uppercase font-semibold tracking-wider text-base md:text-xl xl:text-2xl">{{ $hero->header}}</h2>
            <p class="text-sm leading-loose lg:px-16 xl:px-24 xl:text-base">{{ $hero->subtext}}</p>
          </div>
          <div class="relative flex justify-center text-white tracking-widest font-thin pb-6">
            @foreach($hero->buttons as $button)
              <a class="border-2 border-white px-4 py-2 mx-2" href="{{$button->link}}">{{$button->text}}</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mission">
      <div class="container mx-auto text-center px-8 py-16 xl:py-24">
        <h2 class="text-mtat-orange text-3xl uppercase font-semibold tracking-wide pb-4">{{ $mission->header }}</h2>
        <p class="leading-loose text-left text-gray-600 md:text-center md:px-12 xl:px-32">{{ $mission->content }}</p>
      </div>
  </section>

  {{-- Programs Partials --}}
  @include('partials.programs')

  <section id="commitment">
    <div class="bg-mtat-green pt-8 px-8 pb-4 ">
      <div class="container mx-auto text-center text-mtat-darkgreen">
        <h3 class="uppercase text-3xl font-medium tracking-wide">{!! $commitment->header!!}</h3>
        <div id="commit-item" class="mb-8 md:flex md:flex-wrap md:justify-center md:mb-12">
          @foreach($commitment->items as $item)
            <div class="flex flex-col items-center pt-4 md:px-4 md:w-1/3 lg:w-1/5">
              <div class="pb-4">
                <img class="h-32 w-32 mx-auto xl:h-40 xl:w-40" src="{{$item->image->url}}" />
              </div>
              <p class="text-lg px-24 normal-case md:px-0">{{ $item->subtitle}}</p>
            </div>
          @endforeach
        </div>
        <div class="pb-12">
          <a class="border border-mtat-darkgreen px-8 py-3 uppercase text-base" href="{{$commitment->button_link->url}}">{{$commitment->button_text}}</a>
        </div>
        <div class="append-dots relative block"></div>
      </div>
    </div>
  </section>

  <section id="testimonials">
    <div class="bg-mtat-testgreen text-white text-center py-8 px-4">
      <div class="container mx-auto">
        <h3 class="uppercase text-3xl font-medium tracking-wide">Testimonials</h3>
        <div id="testimony-slider" class="md:flex">
          @foreach($testimony_loop as $item)
            <div class="py-4 px-4 text-left md:w-1/3 lg:px-8">
              <p class="leading-loose text-sm text-justify md:text-sm">{{$item['testimony']}}</p>
              <div class="flex pt-4 items-center md:flex-col md:items-start lg:flex-row lg:items-center">
                <div class="h-20 w-20 rounded-full md:h-24 md:w-24 md:self-center lg:h-20 lg:w-20" style="background: url({!! $item['image']['url'] !!}); background-position: center; background-size: cover;"></div>
                <div class="pl-4 md:pl-0 md:pt-4 lg:pl-4 lg:pt-0">
                  <h4 class="mb-0 text-mtat-ltblue">{{$item['title']}}</h4>
                  <div class="font-light text-sm">
                    <p>Class of {{$item['year']}},</p>
                    <p>{{$item['school']}}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section id="annoucements">
    <div class="bg-mtat-purple pt-8 pb-4 md:px-4">
        <div class="container mx-auto text-center text-white">
          <h3 class="uppercase text-3xl font-medium tracking-wide">Announcements</h3>
          <div id="announce-slider" class="mb-8 md:flex">
            @foreach($announcement_loop as $item)
              <div class="flex flex-col text-left p-8 md:w-1/3 md:px-4 lg:px-8">
                <h4 class="text-mtat-orange text-2xl md:text-xl">{{ $item['title'] }}</h4>
                <p class="normal-case pb-12 leading-loose text-base md:text-sm">{{ $item['content']}}</p>
                <div class="text-center lg:text-left">
                  <a class="border border-white px-8 py-3 uppercase text-sm" href="{{$item['link']['url']}}">Learn More</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
  </section>

  <section id="student">
    <div class="container mx-auto text-center px-8 pt-16 pb-24 lg:px-32 lg:pt-24 lg:pb-32">
      <h2 class="text-mtat-orange text-3xl uppercase font-semibold tracking-wide pb-4 leading-normal">{{ $new_student->title }}</h2>
      <p class="leading-loose text-gray-600 pb-8 lg:px-16">{{ $new_student->content }}</p>
      <div class="flex justify-between md:justify-center">
        @foreach($new_student->buttons as $item)
          <div class="md:px-4">
            <a class="border-2 border-mtat-blue px-6 py-3 uppercase text-base text-mtat-blue" href="{{$item->link->url}}">{{$item->button_text}}</a>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- @debug
  @dump($acf_options) --}}


@endsection
