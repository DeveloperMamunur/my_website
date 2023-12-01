<section class="work_process" id="work_process">
    <div class="container">
    <!-- ==========section heading part start ================= -->
        <div class="section_heading">
            <h3 class="common_heading">My Work Process</h3>
        </div>
    <!-- ==========section heading part end =================    -->
    <!-- ==============main content part start ================= -->
        <div class="content">
            <div class="content_body">
                <div class="timeline">
                    @foreach ($wprocesses as $wprocess)
                        <div class="q_container left">
                            <div class="q_content">
                                <p class="step">{{$wprocess->step}}</p>
                                <p>{{$wprocess->sort_desc}}</p>
                            </div>
                        </div>

                    @endforeach
                    {{-- <div class="q_container left">
                        <div class="q_content">
                            <p class="step">First Step</p>
                            <p>Firstly, I take Ideas about the project and client requirements.</p>
                        </div>
                    </div>
                    <div class="q_container left">
                        <div class="q_content">
                            <p class="step">Second Step</p>
                            <p>I do project analysis for design and development.</p>
                        </div>
                    </div>
                    <div class="q_container left">
                        <div class="q_content">
                            <p class="step">Third Step</p>
                            <!-- <p>Project plans are prepared in the design and development as per the client's requirements.</p> -->
                            <p>Project plans are prepared according to the client's requirements and information.</p>
                        </div>
                    </div>
                    <div class="q_container left">
                        <div class="q_content">
                            <p class="step">Fourth Step</p>
                            <!-- <p>The project is designed and developed according to the project plan.</p> -->
                            <p>According to the project plan and client requirements are designed and developed.</p>
                        </div>
                    </div>
                    <div class="q_container left">
                        <div class="q_content">
                            <p class="step">Fifth Step</p>
                            <p>If there are amendments in the project it is amended.</p>
                        </div>
                    </div>
                    <div class="q_container left">
                        <div class="q_content">
                            <p class="step">Final Step</p>
                            <p>Finally, the project is provided on time to the client.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
