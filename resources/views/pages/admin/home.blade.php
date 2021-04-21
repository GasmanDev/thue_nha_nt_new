@extends('layouts.dashboard')

@section('template_title')
    Welcome {{ Auth::user()->name }}
@endsection

{{-- @section('head')
@endsection --}}

@section('content')
<!-- PAGE LOADER -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Search what you want!</p>
        <!-- /SECTION PRETITLE -->

        <!-- SECTION TITLE -->
        <h2 class="section-title">Market Categories</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid grid-3-3-3-3 centered">
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-all" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Browse All</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->

        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Check out all items</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->

        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">1360 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->

      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-featured" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Featured</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->

        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Handpicked by us</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->

        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">254 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->

      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-digital" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Digital</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->

        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Logos, banners...</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->

        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">1207 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->

      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-physical" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Physical</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->

        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Prints, joysticks...</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->

        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">153 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    </div>
    <!-- /GRID -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">See what's new!</p>
        <!-- /SECTION PRETITLE -->

        <!-- SECTION TITLE -->
        <h2 class="section-title">Latest Items</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->

      <!-- SECTION HEADER ACTIONS -->
      <div class="section-header-actions">
        <!-- SECTION HEADER ACTION -->
        <a class="section-header-action" href="marketplace-category.html">Browse All Latest</a>
        <!-- /SECTION HEADER ACTION -->
      </div>
      <!-- /SECTION HEADER ACTIONS -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid grid-3-3-3-3 centered">
      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="{{asset('dashboard/img/marketplace/items/01.jpg')}}" alt="item-01">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 12.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Stream Packs</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Awesome hexagon themed stream pack, you can change all colors and...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="{{asset('dashboard/img/marketplace/items/01.jpg')}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="{{asset('dashboard/img/marketplace/items/02.jpg')}}" alt="item-02">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 34.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Jaxxy Witch Black Frame</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category physical"><a href="marketplace-category.html">Art Prints</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">30x60 inches fine art print, with glossy paper and a polymer black frame...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="{{asset('dashboard/img/marketplace/items/02.jpg')}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Neko Bebop</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="{{asset('dashboard/img/marketplace/items/03.jpg')}}" alt="item-03">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 40.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Flaming Skull Team Logo</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Logos &amp; Badges</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Get this incredible horned skull logo! It's really easy to change colors with the...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="{{asset('dashboard/img/marketplace/items/03.jpg')}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="{{asset('dashboard/img/marketplace/items/03.jpg')}}" alt="item-04">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 29.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Carbon Black Joystick</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category physical"><a href="marketplace-category.html">Electronics</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Slightly used X-Rock Carbon model joystick. Works perfectly, like the first...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/04.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Bearded Wonder</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/05.jpg" alt="item-05">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 24.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Emerald Dragon Digital Marketpl...</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">HTML Templates</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Digital marketplace HTML template with all you need to build your own web...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/06.jpg" alt="item-06">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 26.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Crimson Red Joystick</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category physical"><a href="marketplace-category.html">Electronics</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Almost new joystick! I bought it but my console gave up so I haven't used it...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/04.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Bearded Wonder</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/07.jpg" alt="item-07">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 40.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Mercenaries White Frame</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category physical"><a href="marketplace-category.html">Art Prints</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">30x30 inches fine art print, with glossy paper and a whitewood white frame...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/05.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Neko Bebop</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/08.jpg" alt="item-08">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 5.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">People Illustrations Pack 02</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Illustrations</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Pack that includes 6 people illustrations made with PS vectors. Photoshop files...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/02.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Destroy Dex</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/09.jpg" alt="item-09">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 5.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">People Illustrations Pack 01</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Illustrations</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Pack that includes 6 people illustrations made with PS vectors. Photoshop files...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/02.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Destroy Dex</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/10.jpg" alt="item-10">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 26.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Pixel Diamond Gaming Magazine</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">HTML Templates</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Awesome HTML template for eSports and gaming! Also includes a forum...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/11.jpg" alt="item-11">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 6.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Gaming Coin Badges Pack</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Logos &amp; Badges</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Very detailed gaming coin illustration badges, perfect for forums and...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/03.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Nick Grissom</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/12.jpg" alt="item-12">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 16.00</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Crazy Bunny Coffee Mug</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category physical"><a href="marketplace-category.html">Crafts</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Incredible white coffee mug with the Crazy Bunny Illustration! Sizes are...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/04.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Bearded Wonder</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->
    </div>
    <!-- /GRID -->

@endsection
