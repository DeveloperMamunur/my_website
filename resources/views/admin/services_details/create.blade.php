<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.services.index')}}">Services</a>
            </li>
            <li>
                <a href="{{route('admin.services.details.index')}}">Details</a>
            </li>
            <li>
                <span>Create</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.services.index')}}" class="butn butn_secondary butn_sm">
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
                <h3>Create Service Details</h3>
            </div>
            <form action="{{route('admin.services.details.store')}}" method="POST" class="form">
                @csrf
                <div class="form_group">
                    <label for="service_id" class="label">Service Title</label>
                    <select name="service_id" id="service_id" class="form_control">
                        <option value="">--select Status---</option>
                        @foreach ($services as $service)
                            <option value="{{$service->id}}">{{ $service->title }}</option>
                        @endforeach
                    </select>
                    @error('service_id')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <input type="text" name="description" class="form_control" id="description" placeholder="Enter Services description">
                    @error('description')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_control">
                        <option value="">--select Status---</option>
                        <option value="1">Publish</option>
                        <option value="2">Unpublish</option>
                    </select>
                    @error('status')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="butn butn_success">Submit</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
