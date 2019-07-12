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

  <section id="programs">
    <div class="container mx-auto text-center md:pb-16 lg:px-4">
      <h2 class="text-mtat-orange text-3xl uppercase font-semibold tracking-wide pb-4">{{ $programs->title }}</h2>

      <div class="flex flex-col border-t-2 border-b-2 border-teal-500 md:flex-row md:border-none md:mb-8">
        @foreach($programs->programs_w_image as $program)
          <div id="program-img" class="relative border-box md:w-1/4 md:h-68 xl:h-76">
            <div class="absolute h-full w-full z-0" style="background-color: {{ $program->bg_color}}; opacity: {{$program->opacity}};"></div>
            <div class="relative md:h-full">
              <div class="flex py-6 md:flex-col md:py-10 md:justify-between md:h-full xl:py-16">
                <div class="w-1/2 flex justify-center items-center md:w-full">
                  <img class="h-16 w-16 md:w-20 h-20 lg:w-24 lg:h-24 xl:w-40 xl:h-40" src="{{$program->image->url}}" />
                </div>
                <div class="w-1/2 text-left md:w-full md:text-center">
                  <div class="flex flex-col justify-center text-blue-800">
                    <h3 class="uppercase text-lg mr-8 font-semibold tracking-wider md:mr-0 xl:text-2xl xl:px-8">{{$program->program_name}}</h3>
                    <p class="hidden text-gray-700 font-light md:block md:pb-4 xl:pb-8">{{$program->subtext}}</p>
                    <div class="mb-4">
                      <a class="border border-blue-800 px-6 py-2 uppercase text-xs xl:text-lg" href="{{$program->link->url}}">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="flex flex-col md:flex-row">
        @foreach($programs->program_no_image as $program)
        <div class="relative border-b-2 border-white border-box md:w-1/3">
          <div class="absolute h-full w-full z-0" style="background-color: {{ $program->bg_color}}; opacity: {{$program->opacity}};"></div>
          <div class="relative z-10 flex justify-between px-8 py-6 md:pl-8 md: pr-4 md:h-full">
            <div class="text-left flex items-center md:flex-col md:items-start md:justify-center">
              <h3 class="uppercase text-base mr-8 mb-0 font-medium tracking-wider text-blue-800 md:mr-0 md:pb-2">{!!$program->name!!}</h3>
              <p class="hidden text-gray-700 font-light md:block">{{$program->subtext}}</p>
            </div>
            <div class="flex items-center">
              <svg class="fill-current text-mtat-orange h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

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
