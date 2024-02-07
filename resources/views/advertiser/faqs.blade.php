@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.app_title") }}
</h2>
<div class="tarlanweb_center">
    <div class="center_title">
        <h2>سوالات متداول</h2>
    </div>
    <div id="questions_box">
        <div class="h3-to-tab" itemscope="" itemtype="https://schema.org/FAQPage">
            @foreach ($faqs as  $faq)
            <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <h3 class="accordion-header closed" itemprop="name">
                    {{  $faq->title }}
                </h3>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="accordion-body closed" style="display: none;">
                    <div itemprop="text">
                      <p>
                        {{  $faq->content }}
                      </p>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
        <div class="clear"></div>
    </div>

    <div class="clear"></div>
</div>

@endsection
