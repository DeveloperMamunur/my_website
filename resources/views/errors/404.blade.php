@extends('frontend_master')

@section('content')
    <div style="min-height: 550px; display: flex; flex-direction:column; align-items: center; justify-content: center;">
        <h4>Opps! Page Not Founds</h4>
        <p>It looks like this page doesn't exist. Please check the URL or
            <a href="/" style="color: #33cfff;" onMouseOver="this.style.color='#05799c'"
            onMouseOut="this.style.color='#33cfff'">click here</a>
            to return to the home page</p>
    </div>
@endsection