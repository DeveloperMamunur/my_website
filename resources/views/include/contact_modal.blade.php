<div id="id_contact" class="modal">
    <div class="modal_container">
        <span onclick="document.getElementById('id_contact').style.display='none'"
            class="close" title="Close Modal">&times;</span>
        <div class="modal_header">
            <h5>Message Me</h5>
        </div>
        <div class="modal_body">
            <form class="form" action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="form_group">
                    <input type="text" name="name" required>
                    <label class="label">Name</label>
                </div>
                <div class="form_group">
                    <input type="email" name="email" required>
                    <label class="label">Email</label>
                </div>
                <div class="form_group">
                    <input type="text" name="subject" required>
                    <label class="label">Subject</label>
                </div>
                <div class="form_group">
                    <textarea name="message" rows="2"  required></textarea>
                    <label class="label">Message</label>
                </div>
                <div>
                    <button type="submit" class="butn_l_a">
                        SEND
                        <span class="border_bottom"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
