<div>
    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}">
        <!-- 1 -->
        @if ($beritaTerkini->count() > 0)
            @foreach ($beritaTerkini as $news)
                <div>
                    <div class="row my-3">
                        <div class="col" style="width: 180px;">
                            <img src="{{ asset('storage/upload/img/' . $news->gambar) }}"
                                style="height: 190px; width: auto;">
                        </div>
                        {{-- <div class="col" style="width: 180px;">
                                    <img src="/main/img/blog/small/blog-1.jpg">
                                </div> --}}
                    </div>
                    <div class="recent-posts">
                        <article class="post">
                            <div class="row">
                                <div class="col-auto pe-0">
                                    <div class="post-date">
                                        <span class="day text-color-dark font-weight-extra-bold">
                                            {{ $news->created_at->day }}
                                        </span>
                                        <span class="month">
                                            {{ $news->created_at->format('F') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col ps-1">
                                    <div>
                                        <h4 class="line-height-3">
                                            <a href="{{ route('berita-terkini', [app()->getLocale(), 'id' => $news->id]) }}"
                                                target="_blank" class="text-decoration-none text-show-line-tajuk">
                                                {{ $news->title_my }}
                                            </a>
                                        </h4>
                                        <div>
                                            <div class="mb-1 info-semasa-paragraph text-show-line">
                                                {!! $news->excerptMy() !!}
                                            </div>
                                            <a href="blog-post.html"
                                                class="read-more text-color-dark font-weight-bold text-2">{{ __('message.Details') }}<i
                                                    class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <text class="info-semasa-paragraph overflow-tajuk">
                    {{ __('message.No News') }}
                </text>
            </div>
        @endif
    </div>
</div>
