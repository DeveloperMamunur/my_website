@foreach ($projects as $project)

    <div id="project_{{$project->id}}" class="modal">

        <div class="modal_container modal_sw_insect">
            <span onclick="document.getElementById('project_{{$project->id}}').style.display='none'"
              class="close" title="Close Modal">&times;</span>
            <div class="modal_header">
                <h5>{{$project->title}}</h5>
            </div>
            <div class="modal_body">
                <ul>
                    <li><p>{{$project->description}}</p></li>
                    <li><p>Responsive Web Design</p></li>
                    <li><p>Portfolio Web Design</p></li>
                    <li><p>Ecommerce Web Design</p></li>
                    <li><p>News Paper Web Design</p></li>
                    <li><p>Realestate Web Design</p></li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
