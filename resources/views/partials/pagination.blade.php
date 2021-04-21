@if ($paginator->hasPages())
    <div class="section-pager-bar-wrap align-right">
        <!-- SECTION PAGER BAR -->
        <div class="section-pager-bar">
                <!-- SECTION PAGER -->
                <div class="section-pager">
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <div class="section-pager-item disabled">
                                <!-- SECTION PAGER ITEM TEXT -->
                                <p class="section-pager-item-text">{{ $element }}</p>
                                <!-- /SECTION PAGER ITEM TEXT -->
                            </div>
                        @endif
    
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <div class="section-pager-item active">
                                        <!-- SECTION PAGER ITEM TEXT -->
                                        <p class="section-pager-item-text">{{ $page }}</p>
                                        <!-- /SECTION PAGER ITEM TEXT -->
                                    </div>
                                @else
                                    <a href="{{ $url }}" class="section-pager-item">
                                        <!-- SECTION PAGER ITEM TEXT -->
                                        <p class="section-pager-item-text">{{ $page }}</p>
                                        <!-- /SECTION PAGER ITEM TEXT -->
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    <!-- /SECTION PAGER ITEM -->
                </div>
                <!-- /SECTION PAGER -->
    
                <!-- SECTION PAGER CONTROLS -->
                <div class="section-pager-controls">
                    <!-- LEFT -->
                    @if ($paginator->onFirstPage())
                        <div class="slider-control left disabled">
                            <span>
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                            </span>
                        </div>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="slider-control left">
                            <span>
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                            </span>
                        </a>
                    @endif
    
                    <!-- RIGHT -->
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" class="slider-control right">
                            <!-- SLIDER CONTROL ICON -->
                            <svg class="slider-control-icon icon-small-arrow">
                                <use xlink:href="#svg-small-arrow"></use>
                            </svg>
                            <!-- /SLIDER CONTROL ICON -->
                        </a>
                    @else
                        <div class="slider-control right disabled">
                            <!-- SLIDER CONTROL ICON -->
                            <svg class="slider-control-icon icon-small-arrow">
                                <use xlink:href="#svg-small-arrow"></use>
                            </svg>
                            <!-- /SLIDER CONTROL ICON -->
                        </div>
                    @endif
                </div>
                <!-- /SECTION PAGER CONTROLS -->
        </div>
        <!-- /SECTION PAGER BAR -->
    </div>
@endif
