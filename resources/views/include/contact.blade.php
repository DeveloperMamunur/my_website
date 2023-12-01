<section class="contact" id="contact">
    <div class="container">
    <!-- ==========section heading part start ================= -->
        <div class="section_heading">
            <h3 class="common_heading">Contact Me</h3>
        </div>
    <!-- ==========section heading part end =================    -->
    <!-- ==============main content part start ================= -->
        <div class="content">
            <div class="content_body">
                <div class="contact_body">
                    <!-- ================contact info text part start============= -->
                    <div class="contact_info_box">
                        <h5>Contact Info</h5>
                        <div class="box">
                            <div class="icon"><span class="icon-location-dot-solid"></span></div>
                            <div class="text">Rajshahi, Bangladesh</div>
                        </div>
                        <div class="box">
                            <div class="icon"><span class="icon-whatsapp"></span></div>
                            <div class="text">+8801752098369</div>
                        </div>
                        <div class="box">
                            <div class="icon"><span class="icon-envelope-solid"></span></div>
                            <div class="text">info@mdmamunurrashid.com</div>
                        </div>
                    </div>
                    <!-- ================contact info text part end============= -->
                    <!-- ================contact message part start============= -->
                    <div class="message_form_box">
                        <h5>Message Me</h5>
                        <form action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="user-box">
                                <input type="text" name="name" required>
                                <label>Name</label>
                            </div>
                            <div class="user-box">
                                <input type="email" name="email" required>
                                <label>Email</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="subject" required>
                                <label>Subject</label>
                            </div>
                            <div class="user-box">
                                <textarea name="message" rows="2"  required></textarea>
                                <label>Message</label>
                            </div>
                            <div>
                                <button type="submit" class="butn_l_a">
                                        SEND
                                    <span class="border_bottom"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- ================contact message part end============= -->
                </div>
            </div>
        </div>
    </div>
</section>
