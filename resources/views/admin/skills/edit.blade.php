<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.skills.index')}}">Skills</a>
            </li>
            <li>
                <span>Edit</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.skills.index')}}" class="butn butn_secondary butn_sm">
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
                <h3>Edit Skill</h3>
            </div>
            <form action="{{route('admin.skills.update', $skill->id)}}" method="post" class="form">
                @csrf
                @method('put')
                <div class="form_group">
                    <label for="name" class="label">Name</label>
                    <input type="text" name="name" value="{{ $skill->name }}" class="form_control" id="name" placeholder="Enter Skill Name">
                    @error('name')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="sec_name" class="label">Second Name</label>
                    <input type="text" name="sec_name" value="{{$skill->sec_name}}" class="form_control" id="sec_name" placeholder="Enter Skill Second Name">
                    @error('sec_name')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="category" class="label">Category</label>
                    <select name="category" id="category" class="form_control">
                        <option value="">--select Category---</option>
                        <option value="language" {{ $skill->category == 'language' ? 'selected' : ''}}>Language</option>
                        <option value="framwork" {{ $skill->category == 'framwork' ? 'selected' : ''}}>Framework</option>
                    </select>
                    @error('category')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="value" class="label">Value</label>
                    <input type="number" name="value" value="{{ $skill->value }}"  class="form_control" id="value" placeholder="Enter Skill Value">
                    @error('value')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="order" class="label">Order</label>
                    <input type="number" name="order" value="{{ $skill->order }}"  class="form_control" id="order" placeholder="Enter Skill order">
                    @error('order')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="color" class="label">Color</label>
                    <input type="text" name="color" value="{{ $skill->color }}"  class="form_control" id="color" placeholder="Enter Skill Color">
                    @error('color')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="color_sec" class="label">Second Color</label>
                    <input type="text" name="color_sec" value="{{ $skill->color_sec }}"  class="form_control" id="color_sec" placeholder="Enter Skill Second Color">
                    @error('color_sec')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_control">
                        <option value="">--select Status---</option>
                        <option value="1" {{ $skill->status == '1' ? 'selected' : ''}}>Publish</option>
                        <option value="2" {{ $skill->status == '2' ? 'selected' : ''}}>Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="butn butn_success">Update</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
