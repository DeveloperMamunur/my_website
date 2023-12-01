<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.services.index')}}">Servises</a>
            </li>
            <li>
                <a href="{{route('admin.services.details.index')}}">Details</a>
            </li>
            <li>
                <span>Edit</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.services.details.index')}}" class="butn butn_secondary butn_sm">
                <span class="material-symbols-outlined">
                    west
                </span>
                <span>back</span>
            </a>
        </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- main body start  -->
    <section class="main-body">
        <!-- ================================================= -->
        <!-- Content Area start  -->
        <div class="content main-container">
            <div class="heading">
                <h3>Edit Service</h3>
            </div>
            <form action="{{route('admin.services.details.update', $ser_detail->id)}}" method="post" class="form">
                @csrf
                @method('put')
                <div class="form_group">
                    <label for="service_id" class="label">Service Title</label>
                    <select name="service_id" id="service_id" class="form_control">
                        <option value="">--select Status---</option>
                        @foreach ($services as $service)
                            <option value="{{$service->id}}" {{$ser_detail->service_id == $service->id ? 'selected': ''}}>{{ $service->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <input type="text" value="{{$ser_detail->description}}" name="description" class="form_control" id="description" placeholder="Enter Services description">
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_control">
                        <option value="">--select Status---</option>
                        <option value="1" {{$ser_detail->status == 1 ? 'selected' : ''}}>Publish</option>
                        <option value="2" {{$ser_detail->status == 2 ? 'selected' : ''}}>Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="butn butn_success">Update</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
