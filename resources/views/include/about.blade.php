<section class="about" id="about">
    <div class="container">
    <!-- ==========section heading part start ================= -->
        <div class="section_heading">
            <h3 class="common_heading">About Me</h3>
        </div>
    <!-- ==========section heading part end =================    -->
    <!-- ==============main content part start ================= -->
        <div class="content">
            <div class="content_body">
                <!-- =============about image part start================ -->
                @foreach ($about as $item)
                    <div class="about_image">
                        <div class="image">
                            <div class="img">
                                <img src="{{asset($item->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- =============about image part end================ -->
                    <!-- ===============about content start=================== -->
                    <div class="about_content">
                        <h2>{{ $item->name }}</h2>
                        <p>{{$item->description}}</p>
                        {{-- <p>I'm Md Munurur Rashid. I"am a full-stack webdeveloper and SEO specialist. I have three years of experience in web development. I focus on work not speech. My main goal is highly required work to with clients to be happy.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, fuga blanditiis qui voluptas expedita ab tempora tempore deleniti placeat nisi accusamus neque itaque fugiat dignissimos ullam esse, repellendus quis. Numquam, repudiandae. Cupiditate unde id dolor harum iure laborum tempora, nihil fuga sapiente dolores exercitationem optio doloremque. Cum nemo laborum molestiae.</p> --}}
                        <div class="social_icon">
                            <a href="{{$item->link1}}" target="_blank"><span class="{{$item->icon1}}"></span></a>
                            <a href="{{$item->link2}}" target="_blank"><span class="{{$item->icon2}}"></span></a>
                            <a href="{{$item->link3}}" target="_blank"><span class="{{$item->icon3}}"></span></a>
                            <a href="{{$item->link4}}" target="_blank"><span class="{{$item->icon4}}"></span></a>
                            <a href="{{$item->link5}}" target="_blank"><span class="{{$item->icon5}}"></span></a>
                            {{-- <a href="https://www.facebook.com/mdmamunurrashid4" target="_blank"><span class="icon-facebook-f"></span></a>
                            <a href="https://github.com/DeveloperMamunur" target="_blank"><span class="icon-github"></span></a>
                            <a href="https://twitter.com/Developer_Mamun" target="_blank"><span class="icon-twitter"></span></a>
                            <a href="https://www.linkedin.com/in/md-mamunur1/" target="_blank"><span class="icon-linkedin-in"></span></a> --}}
                        </div>
                        <button class="butn butn_info butn_lg butn_hover"  onclick="document.getElementById('id_contact').style.display='flex'">Hire Me</button>
                    </div>
                    @endforeach
                    <!-- ===============about content part end ================== -->
                </div>
        </div>
    </div>
</section>
