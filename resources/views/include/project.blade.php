<section class="project" id="project">
    <div class="container">
    <!-- ==========section heading part start ================= -->
        <div class="section_heading">
            <h3 class="common_heading">My Project</h3>
        </div>
    <!-- ==========section heading part end =================    -->
    <!-- ==============main content part start ================= -->
        <div class="content">
            <div class="content_body">
                <!-- =======button group start ================ -->


                <div class="button_group" id="myBtnContainer">
                    <button class="butn butn_secondary item active"  onclick="filterSelection('all')">All</button>
                    @foreach ($project_cats as $pcat)
                        <button class="butn butn_secondary item" onclick="filterSelection('{{$pcat->slug}}')">{{$pcat->name}}</button>
                    @endforeach
                    {{-- <button class="butn butn_secondary item" onclick="filterSelection('web_develop')">Web Developed</button>
                    <button class="butn butn_secondary item"  onclick="filterSelection('seo')">SEO</button> --}}
                </div>
                <!-- =======button group start ================ -->
               <!-- =================== project item part start =============== -->
                <div class="card_group">
                    @foreach ($projects as $project)
                        <div class="card filter {{$project->project_cats->slug}}">
                            <div class="card_body">
                                <div class="content">
                                    <img src="{{asset($project->image)}}" alt="">
                                </div>
                                <div class="hover_content">
                                    <div class="content_area">
                                        <h3>{{$project->title}}</h3>
                                        <div class="button">
                                            <a href="javascript:void(0)" class="butn butn_info" onclick="document.getElementById('project_{{$project->id}}').style.display='flex'">Details</a>
                                            <a href="javascript:void(0)" class="butn butn_info"  onclick="document.getElementById('project_live_01').style.display='flex'">Live</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="card filter web_design">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{asset("assets/frontend/images/project/img-1.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Web Design</h3>
                                    <div class="button">
                                        <a href="javascript:void(0)" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="javascript:void(0)" class="butn butn_info"  onclick="document.getElementById('project_live_01').style.display='flex'">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter web_develop">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-2.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Web Development</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter web_design">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-3.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Frontend Design</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter web_develop">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-4.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Backend Development</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter web_design">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-5.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Web Development</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter seo">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-6.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Web Design</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter seo">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-1.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Backend Development</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter web_design">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-2.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Web Design</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter web_develop">
                        <div class="card_body">
                            <div class="content">
                                <img src="{{ asset("assets/frontend/images/project/img-3.jpg")}}" alt="">
                            </div>
                            <div class="hover_content">
                                <div class="content_area">
                                    <h3>Frontend Development</h3>
                                    <div class="button">
                                        <a href="#" class="butn butn_info" onclick="document.getElementById('project01').style.display='flex'">Details</a>
                                        <a href="liveView.html" class="butn butn_info">Live</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- =================== project item part end =============== -->
            </div>
        </div>
    </div>
</section>
