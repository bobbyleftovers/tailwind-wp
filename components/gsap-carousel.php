<section class="gsap-carousel relative z-100" data-component="gsap-carousel">
  <div class="container relative">
    <button class="gsap__button gsap__button--prev transition-opacity duration-300 opacity-0 absolute z-125 top-1/2 -left-6 md:left-0 lg:left-10"><?= get_component('svg', ['icon' => 'arrow-left-circle', 'height' => 60, 'width' => 60, 'viewbox' => '0 0 60 60']) ?><span class="sr-only">Previous slide</span></button>
    <button class="gsap__button gsap__button--next transition-opacity duration-300 opacity-0 absolute z-125 top-1/2 -right-6 md:right-0 lg:right-10"><?= get_component('svg', ['icon' => 'arrow-right-circle', 'height' => 60, 'width' => 60, 'viewbox' => '0 0 60 60']) ?><span class="sr-only">Next slide</span></button>
    <!--  h-e740 w-full flex relative z-100 -top-e240 -->
    <div class="gsap-carousel__slide-container relative z-100 h-e460 md:h-e585 lg:h-e660 flex flex-nowrap overflow-visible">
      <div class="carousel__card carousel__card--c">
        <div class="carousel__card-content h-e480 md:h-e585 lg:h-e660">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--a">
        <div class="carousel__card-content h-e510 md:h-e645 lg:h-e740">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--b">
        <div class="carousel__card-content h-e500 md:h-e625 lg:h-e700">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--c">
        <div class="carousel__card-content h-e480 md:h-e585 lg:h-e660">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--a">
        <div class="carousel__card-content h-e510 md:h-e645 lg:h-e740">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--b">
        <div class="carousel__card-content h-e500 md:h-e625 lg:h-e700">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--c">
        <div class="carousel__card-content h-e480 md:h-e585 lg:h-e660">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--a">
        <div class="carousel__card-content h-e510 md:h-e645 lg:h-e740">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--b">
        <div class="carousel__card-content h-e500 md:h-e625 lg:h-e700">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--c">
        <div class="carousel__card-content h-e480 md:h-e585 lg:h-e660">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--a">
        <div class="carousel__card-content h-e510 md:h-e645 lg:h-e740">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__card carousel__card--b">
        <div class="carousel__card-content h-e500 md:h-e625 lg:h-e700">
          <div class="carousel__card-inner">
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-logo.svg', 'alt' => 'company logo', 'wrap_classes' => 'carousel__card-logo']) ?>
            <?= get_component('svg', ['icon' => 'close', 'classes' => 'carousel__card-close', 'viewbox' => '0 0 20 20']) ?>
            <?= get_component('image', ['image' => get_stylesheet_directory_uri().'/images/monday-people.png', 'alt' => 'company background image', 'cover' => true, 'wrap_classes' => 'carousel__card-bk', 'class' => 'object-left h-full']) ?>
            <span class="carousel__card-label absolute bottom-6 left-6 text-white text-xs font-semibold uppercase">Stage</span>
            <div class="carousel__subcard">
              <div class="subcard__content">
                <div class="subcard__inner">
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon']) ?>
                  <span class="subcard__eyebrow">REBRANDING FOR CLARITY 1</span>
                  <div class="subcard__facts">
                    <span class="subcard__fact">Increased user base by 70% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 34% in 6 months.</span>
                    <span class="subcard__fact hidden">Increased user base by 256% in 6 months.</span>
                  </div>
                  <span class="subcard__progress-track"><span class="subcard__progress">&nbsp;</span></span>
                  <div class="subcard__mid">
                    <span class="subcard__tags">Series A / Series B / Series C / Series D / Series E / Late Stage / IPO</span>
                    <span class="subcard__category">Location</span>
                  </div>
                </div>
                <a href="#" class="subcard__bottom">
                  <span class="subcard__link-text">See Case Study</span>
                  <?= get_component('arrow', ['direction' => 'top-right', 'inner_color' => 'bg-purple-lt', 'wrap_classes' => 'subcard__icon subcard__icon--mobile']) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <span class="gsap-carousel__progress-track bg-sky-dk w-full h-e3 block mt-e50 mb-e100 lg:mt-e60 md:mb-e110 lg:mb-e150">
      <span class="gsap-carousel__progress-handle bg-sky-lt h-e3 block w-0" style="transform: translate3d(0px, 0px, 0px); cursor: move; touch-action: pan-y; user-select: none; z-index: 1000;"></span>
    </span>
  </div>
</section>