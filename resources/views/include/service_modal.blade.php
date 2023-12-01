@foreach ($ser_details as $detail)
    <div id="id_{{$detail->service_id}}" class="modal">

        <div class="modal_container modal_sw_insect">
            <span onclick="document.getElementById('id_{{$detail->service_id}}').style.display='none'"
              class="close" title="Close Modal">&times;</span>
            <div class="modal_header">
                <h5>Web Design/Frontend development</h5>
            </div>
            <div class="modal_body">
                <ul>
                    <li><p>{{$detail->description}}</p></li>
                    <li><p>Portfolio Web Design</p></li>
                    <li><p>Ecommerce Web Design</p></li>
                    <li><p>News Paper Web Design</p></li>
                    <li><p>Realestate Web Design</p></li>
                </ul>
            </div>
        </div>
    </div>

@endforeach
