<div id="hero" class="home">

    <div class="container">
        <div class="hero-content">
            <h1>I'm <span class="typed"></span></h1>
            <p class="typed-items" data-typed-person="{{config('beanie.firstbanner.data_typed_person')}}">{{config('beanie.firstbanner.typed_items')}}</p>
            @php
            $SocialMedia= App\Models\SocialMedia::where('is_active',1)->orderBy('order','asc')->get();
            @endphp
            @if($SocialMedia)
            <ul class="list-unstyled list-social">
                @foreach($SocialMedia as $sm)
                @if($sm->is_email)
                <li><a href="mailto:{{$sm->url}}"><i class="{{$sm->icon}}"></i></a></li>
                @else
                <li><a href="{{$sm->url}}"><i class="{{$sm->icon}}"></i></a></li>
                @endif
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
<!-- 
<li><a href="#"><i class="ion-social-twitter"></i></a></li>
<li><a href="#"><i class="ion-social-instagram"></i></a></li>
<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
<li><a href="#"><i class="ion-social-tumblr"></i></a></li>
<li><a href="#"><i class="ion-social-dribbble"></i></a></li> -->