<footer class="content-info">
  <div class="bg-mtat-blue px-8">
    <div class="container mx-auto py-8 text-blue-100 text-center md:pb-4">
      <div class="md:flex md:flex-col xl:flex-row xl:flex-wrap">
        <div class="text-xs leading-normal md:text-sm md:flex md:flex-wrap md:order-1 md:pr-24 xl:pr-0 xl:flex-no-wrap">
          <h5 class="font-semibold leading-normal md:mb-0">Office & Mailing Address</h5>
          <p class="md:pl-4">{{ $acf_options->address }}</p>
          <p class="pt-8 md:pt-2 lg:pt-0 lg:pl-8"><span class="font-semibold">Phone:</span> {{$acf_options->phone}} <span class="text-mtat-orange">|</span> <span class="font-semibold">Fax:</span> {{$acf_options->fax}}</p>
        </div>
        <div class="flex justify-center py-8 md:order-3 xl:self-end xl:order-2 xl:py-0 xl:flex-grow xl:justify-end xl:pt-4">
          @foreach($acf_options->links as $link)
            <a class="px-3" href="{{$link->link->url}}" target="{{$link->link->target}}">
              <img class="h-10 w-auto"src="{{$link->image->url}}" alt="" />
            </a>
          @endforeach
        </div>
        <div class="pb-8 md:order-4 md:pb-0 lg:hidden">
          <p class="md:text-sm">&copy; {{$current_date}} {{ get_bloginfo('name', 'display') }}</p>
        </div>
        <div class="md:order-2 md:pt-3 lg:flex lg:items-center xl:order-3 xl:mb-4 xl:-mt-6">
          <p class="hidden md:text-sm lg:pr-8 lg:block">&copy; {{$current_date}} {{ get_bloginfo('name', 'display') }}</p>
          @if (has_nav_menu('footer_navigation'))
              {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav-footer']) !!}
          @endif
        </div>
      </div>  
    </div>
  </div>
</footer>
