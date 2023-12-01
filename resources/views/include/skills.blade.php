<section class="skills" id="skills">
    <div class="container">
    <!-- ==========section heading part start ================= -->
        <div class="section_heading">
            <h3 class="common_heading">My Skills</h3>
        </div>
    <!-- ==========section heading part end =================    -->
    <!-- ==============main content part start ================= -->
        <div class="content">
            <div class="content_body">
                <!-- ==============line progress part start================= -->
                <div class="line_progress">
                    @foreach ($skills as $skill)
                        @if ($skill->category == 'language')
                            <div class="skill_box">
                                <div class="parcial">
                                    <div class="info">
                                        <div class="name" style="--fclr: #{{$skill->color}}">{{$skill->name}}<span style="--fclr: #{{$skill->color_sec}}; margin-left: 5px;">{{$skill->sec_name}}</span></div>
                                        <div class="percentage_num" style="--nclr: #{{$skill->color}}">{{$skill->value}}%</div>
                                    </div>
                                    <div class="progressBar">
                                        <div class="parcentage" style="--pct: {{$skill->value}}%; --clr: #{{$skill->color}}"></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    {{-- <div class="skill_box">
                        <div class="parcial">
                            <div class="info">
                                <div class="name" style="--fclr: #E44D26">HTML</div>
                                <div class="percentage_num" style="--nclr: #E44D26">96%</div>
                            </div>
                            <div class="progressBar">
                                <div class="parcentage" style="--pct: 96%; --clr: #E44D26"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill_box">
                        <div class="parcial">
                            <div class="info">
                                <div class="name" style="--fclr: #2465F1;">CSS</div>
                                <div class="percentage_num" style="--nclr: #2465F1;">91%</div>
                            </div>
                            <div class="progressBar">
                                <div class="parcentage" style="--pct: 91%; --clr: #2465F1;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill_box">
                        <div class="parcial">
                            <div class="info">
                                <div class="name" style="--fclr: #b19d09;">JavaScript</div>
                                <div class="percentage_num" style="--nclr: #b19d09;">72%</div>
                            </div>
                            <div class="progressBar">
                                <div class="parcentage" style="--pct: 72%; --clr: #bba606;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill_box">
                        <div class="parcial">
                            <div class="info">
                                <div class="name" style="--fclr: #787CB4;">PHP</div>
                                <div class="percentage_num" style="--nclr: #787CB4;">81%</div>
                            </div>
                            <div class="progressBar">
                                <div class="parcentage" style="--pct: 81%; --clr: #787CB4;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill_box">
                        <div class="parcial">
                            <div class="info">
                                <div class="name" style="--fclr: #5D87A2;">MY <span style="--fclr: #F49823;">SQL</span></div>
                                <div class="percentage_num" style="--nclr: #F49823;">86%</div>
                            </div>
                            <div class="progressBar">
                                <div class="parcentage" style="--pct: 83%; --clr: #5D87A2;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill_box">
                        <div class="parcial">
                            <div class="info">
                                <div class="name" style="--fclr: #CD669A;">SASS/SCSS</div>
                                <div class="percentage_num" style="--nclr: #CD669A;">80%</div>
                            </div>
                            <div class="progressBar">
                                <div class="parcentage" style="--pct: 80%; --clr: #CD669A;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill_box">
                        <div class="parcial">
                            <div class="info">
                                <div class="name" style="--fclr: #1266A9;">jQuery</div>
                                <div class="percentage_num" style="--nclr: #1266A9;">83%</div>
                            </div>
                            <div class="progressBar">
                                <div class="parcentage" style="--pct: 83%; --clr: #1266A9;"></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- ==============line progress part end================= -->
                <!-- ======================circular progress part start================== -->
                <div class="curcular_progress">
                    <ul class="framwork_progress">
                        @foreach ($skills as $skill)
                            @if ($skill->category == 'framwork')
                                <li>
                                    <div class="progress_circle" data-progress="{{$skill->value}}" style="--clr: #{{$skill->color}};">
                                        <div class="progress_value" data-num="{{$skill->value}}">0%</div>
                                    </div>
                                    <div class="skill_name" style="--fclr: #{{$skill->color}};">{{$skill->name}}</div>
                                </li>
                            @endif
                        @endforeach
                        {{-- <li>
                            <div class="progress_circle" data-progress="95" style="--clr: #7952B3;">
                                <div class="progress_value" data-num="95" >0%</div>
                            </div>
                            <div class="skill_name" style="--fclr: #7952B3;">Bootstrap</div>
                        </li>
                        <li>
                            <div class="progress_circle" data-progress="90" style="--clr: #38BDF8;">
                                <div class="progress_value" data-num="90">0%</div>
                            </div>
                            <div class="skill_name" style="--fclr: #38BDF8;">Tailwind CSS</div>
                        </li>
                        <li>
                            <div class="progress_circle" data-progress="82" style="--clr: #FF2D20;">
                                <div class="progress_value" data-num="82">0%</div>
                            </div>
                            <div class="skill_name" style="--fclr: #FF2D20;">Laravel</div>
                        </li>
                        <li>
                            <div class="progress_circle" data-progress="74" style="--clr: #42B883;">
                                <div class="progress_value" data-num="74">0%</div>
                            </div>
                            <div class="skill_name" style="--fclr: #42B883;">Vuejs</div>
                        </li> --}}
                    </ul>
                </div>
                <!-- ======================circular progress part end================== -->
            </div>
        </div>
</section>
