<section class="services" id="services">
    <div class="container">
        <!-- ==========section heading part start ================= -->
        <div class="section_heading">
            <h3 class="common_heading">My Services</h3>
        </div>
         <!-- ==========section heading part end =================    -->
         <!-- ==============main content part start ================= -->
        <div class="content">
            <div class="content_body">
                @foreach ($services as $service)
                    <div class="card_service rainbow">
                        <div class="card_content">
                            <div class="icon_area">
                                <div class="icon"><span class="{{$service->icon}}"></span></div>
                            </div>
                            <div class="text">
                                <h3>{{$service->title}}</h3>
                                <p>{{$service->sort_desc}}</p>
                            </div>
                            <div class="button">
                                <div class="butn butn_info butn_md"  onclick="document.getElementById('id_{{$service->id}}').style.display='flex'">See More</div>
                            </div>
                        </div>
                    </div>

                @endforeach
                {{-- <div class="card_service rainbow">
                    <div class="card_content">
                        <div class="icon_area">
                            <div class="icon"><span class="icon-code-solid"></span></div>
                        </div>
                        <div class="text">
                            <h3>Frontend Development</h3>
                            <p>My Web Design technology includes HTML, CSS, JavaScript, jQuery, Bootstrap, Tailwind CSS, and Vuejs.</p>
                        </div>
                        <div class="button">
                            <div class="butn butn_info butn_md"  onclick="document.getElementById('id02').style.display='flex'">See More</div>
                        </div>
                    </div>
                </div>
                <div class="card_service rainbow">
                    <div class="card_content">
                        <div class="icon_area">
                            <div class="icon"><span class="icon-laptop-code-solid"></span></div>
                        </div>
                        <div class="text">
                            <h3>Web App Development</h3>
                            <p>My Web Application technology includes javascript, ajax, PHP, My SQL, and Laravel.</p>
                        </div>
                        <div class="button">
                            <div class="butn butn_info butn_md"  onclick="document.getElementById('id02').style.display='flex'">See More</div>
                        </div>
                    </div>
                </div>
                <div class="card_service rainbow">
                    <div class="card_content">
                        <div class="icon_area">
                            <div class="icon"><span class="icon-magnifying-glass-solid"></span></div>
                        </div>
                        <div class="text">
                            <h3>Search Engine Optimization</h3>
                            <p>SEO technolory uses local seo, on-page seo, off-page seo, technical seo.</p>
                        </div>
                        <div class="button">
                            <div class="butn butn_info butn_md"  onclick="document.getElementById('id02').style.display='flex'">See More</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
         <!-- ==============main content part end ================= -->
    </div>
</section>
