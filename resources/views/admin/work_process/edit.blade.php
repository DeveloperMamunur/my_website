<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.wprocess.index')}}">Work Process</a>
            </li>
            <li>
                <span>Edit</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.wprocess.index')}}" class="butn butn_secondary butn_sm">
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
            <form action="{{route('admin.wprocess.update', $wprocess->id)}}" method="post" class="form">
                @csrf
                @method('put')
                <div class="form_group">
                    <label for="step" class="label">Work Step</label>
                    <input type="text" value="{{$wprocess->step}}" name="step" class="form_control" id="step" placeholder="Enter service step">
                    @error('step')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="sort_desc" class="label">Sort Description</label>
                    <input type="text"  value="{{$wprocess->sort_desc}}"  name="sort_desc" class="form_control" id="sort_desc" placeholder="Enter Services sort_desc">
                    @error('sort_desc')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_control">
                        <option value="">--select Status---</option>
                        <option value="1" {{$wprocess->status == 1 ? 'selected': ''}}>Publish</option>
                        <option value="2" {{$wprocess->status == 2 ? 'selected': ''}}>Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="butn butn_success">Update</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
