<section class="testimonial" id="testimonial">
    <div class="container">
    <!-- ==========section heading part start ================= -->
        <div class="section_heading">
            <h3 class="common_heading">Testimonial</h3>
        </div>
     <!-- ==========section heading part end =================    -->
    <!-- ==============main content part start ================= -->
        <div class="content">
            <div class="content_body">
                <!-- ==============testimonial slide part start================ -->
                <div class="slideRow">
                    <!-- ===================slide item========== -->
                    @foreach ($reviews as $review)
                        <div class="slideItem {{$loop->first ? 'active': ''}}">
                            @if ($review->users->image)
                                <img src="{{ asset($review->users->image)}}" alt="">
                            @else
                                <img src="{{ asset('assets/backend/images/avatar.jpg')}}" alt="">
                            @endif
                            <h3>{{$review->users->name}}</h3>
                            <h4>{{$review->users->city}}, {{$review->users->country}}</h4>
                            <p><span style="font-size: 28px;">&ldquo;</span>{{$review->description}}<span style="font-size: 28px;">&rdquo;</span></p>
                        </div>
                    @endforeach
                    {{-- <div class="slideItem active">
                        <img src="{{ asset("assets/frontend/images/avatar.jpg")}}" alt="">
                        <h3>John Doe</h3>
                        <h4>San Francisco, USA</h4>
                        <p><span style="font-size: 28px;">&ldquo;</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus ipsam accusamus aspernatur dolore deleniti ipsum porro, itaque asperiores aut excepturi inventore odio soluta suscipit! Excepturi qui nostrum deleniti molestias blanditiis ducimus quam quis nobis consequuntur eaque? Similique eligendi praesentium debitis corporis aliquid suscipit eos,
                            facilis, distinctio, nihil optio mollitia maiores!<span style="font-size: 28px;">&rdquo;</span></p>
                    </div>
                    <div class="slideItem">
                        <img src="{{ asset("assets/frontend/images/avatar5.jpg")}}" alt="">
                        <h3>John Doe</h3>
                        <h4>San Francisco, USA</h4>
                        <p><span style="font-size: 28px;">&#8220;</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus ipsam accusamus aspernatur dolore deleniti ipsum porro, itaque asperiores aut excepturi inventore odio soluta suscipit! Excepturi qui nostrum deleniti molestias blanditiis ducimus quam quis nobis consequuntur eaque? Similique eligendi praesentium debitis corporis aliquid suscipit eos,
                            facilis, distinctio, nihil optio mollitia maiores!<span style="font-size: 28px;">&rdquo;</span></p>
                    </div>
                    <div class="slideItem">
                        <img src="{{ asset("assets/frontend/images/avatar6.jpg")}}" alt="">
                        <h3>John Doe</h3>
                        <h4>San Francisco, USA</h4>
                        <p><span style="font-size: 28px;">&#8220;</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus ipsam accusamus aspernatur dolore deleniti ipsum porro, itaque asperiores aut excepturi inventore odio soluta suscipit! Excepturi qui nostrum deleniti molestias blanditiis ducimus quam quis nobis consequuntur eaque? Similique eligendi praesentium debitis corporis aliquid suscipit eos,
                            facilis, distinctio, nihil optio mollitia maiores!<span style="font-size: 28px;">&rdquo;</span></p>
                    </div>
                    <div class="slideItem">
                        <img src="{{ asset("assets/frontend/images/avatar7.jpg")}}" alt="">
                        <h3>John Doe</h3>
                        <h4>San Francisco, USA</h4>
                        <p><span style="font-size: 28px;">&#8220;</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus ipsam accusamus aspernatur dolore deleniti ipsum porro, itaque asperiores aut excepturi inventore odio soluta suscipit! Excepturi qui nostrum deleniti molestias blanditiis ducimus quam quis nobis consequuntur eaque? Similique eligendi praesentium debitis corporis aliquid suscipit eos,
                            facilis, distinctio, nihil optio mollitia maiores!<span style="font-size: 28px;">&rdquo;</span></p>
                    </div>
                    <div class="slideItem">
                        <img src="{{ asset("assets/frontend/images/avatar8.png")}}" alt="">
                        <h3>John Doe</h3>
                        <h4>San Francisco, USA</h4>
                        <p><span style="font-size: 28px;">&#8220;</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus ipsam accusamus aspernatur dolore deleniti ipsum porro, itaque asperiores aut excepturi inventore odio soluta suscipit! Excepturi qui nostrum deleniti molestias blanditiis ducimus quam quis nobis consequuntur eaque? Similique eligendi praesentium debitis corporis aliquid suscipit eos,
                            facilis, distinctio, nihil optio mollitia maiores!<span style="font-size: 28px;">&rdquo;</span></p>
                    </div> --}}
                    <!-- ================slide part end============= -->
                </div>
                <!-- ===================indicator part start ================ -->
                <div class="indicators">
                    <div class="dot active" attr="0" onclick="switchTest(this)"></div>
                    <div class="dot" attr="1" onclick="switchTest(this)"></div>
                    <div class="dot" attr="2" onclick="switchTest(this)"></div>
                    <div class="dot" attr="3" onclick="switchTest(this)"></div>
                    <div class="dot" attr="4" onclick="switchTest(this)"></div>
                </div>
                <!-- ===================indicator part end ================ -->

                <!-- ==============testimonial slide part end================ -->
            </div>
        </div>
    </div>
</section>
