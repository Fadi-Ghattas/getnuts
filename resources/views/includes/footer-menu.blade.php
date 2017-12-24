<ul class="row">
    @php
      $footerMenu = [];
      $mixesAdded = FALSE;
      $productCategories = \App\ProductCategory::all()->toArray();
      $items = $items->toArray();

      foreach ($items as $item) {
          $footerMenu [] = $item;
          if (isset($item['menu_id'])) {
              if ($item['id'] == 16) {
                  foreach ($productCategories as $category) {
                      $categoryMenuItem = [];
                      if (!$mixesAdded) {
                          $mixesAdded = TRUE;
                          $categoryMenuItem['name'] = 'Mixes';
                          $categoryMenuItem['url'] = url('our-mixes');
                          $footerMenu [] = $categoryMenuItem;
                      }
                      $categoryMenuItem = $category;
                      $footerMenu [] = $categoryMenuItem;
                  }
              }
          }
      }

      $firstFooterMenuSet = array_splice($footerMenu, 0, ceil(count($footerMenu)/2));
      $secondFooterMenuSet = $footerMenu;

    @endphp

    <li class="col-sm-6 col-md-6 col-lg-6">
        <ul>
            @foreach($firstFooterMenuSet as $menuItem)
                @if(@isset($menuItem['menu_id']))
                    <li class="page">
                        <span class="dot"></span>
                        <p><a href="{{url($menuItem['url'])}}">{{$menuItem['title']}}</a></p>
                    </li>
                @elseif(!@isset($menuItem['menu_id']))
                    @if($menuItem['name'] == 'Mixes')
                        <li class="mixes"><p><a href="{{$menuItem['url']}}">{{$menuItem['name']}}</a></p></li>
                    @else
                        <li class="product-category"><p><a href="{{url('/products#'.$menuItem['slug'])}}">{{$menuItem['name']}}</a></p></li>
                    @endif
                @endif
            @endforeach
        </ul>
    </li>

    <li class="col-sm-6 col-md-6 col-lg-6">
        <ul>
            @foreach($secondFooterMenuSet as $menuItem)
                @if(@isset($menuItem['menu_id']))
                    <li class="page">
                        <span class="dot"></span>
                        <p><a href="{{url($menuItem['url'])}}">{{$menuItem['title']}}</a></p>
                    </li>
                @elseif(!@isset($menuItem['menu_id']))
                    @if($menuItem['name'] == 'Mixes')
                        <li class="mixes"><p><a href="{{$menuItem['url']}}">{{$menuItem['name']}}</a></p></li>
                    @else
                        <li class="product-category"><p><a href="{{url('/products#'.$menuItem['slug'])}}">{{$menuItem['name']}}</a></p></li>
                    @endif
                @endif
            @endforeach
        </ul>
    </li>

</ul>