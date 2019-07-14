<section id="programs">
    <div class="container mx-auto text-center md:pb-16 lg:px-4">

      @if($programs->title)
        <h2 class="text-mtat-orange text-3xl uppercase font-semibold tracking-wide pb-4">{{ $programs->title }}</h2>
      @endif

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
                      <a class="border border-blue-800 px-6 py-2 uppercase text-xs xl:text-lg" href="{{$program->link->url}}">{{$program->link->title}}</a>
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
              <h3 class="uppercase text-base mr-8 mb-0 font-medium tracking-wider text-blue-800 md:mr-0 md:pb-2 lg:text-lg">{!!$program->name!!}</h3>
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