<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.about.index')}}">About</a>
            </li>
            <li>
                <span>Edit</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.about.index')}}" class="butn butn_secondary butn_sm">
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
            <form action="{{route('admin.about.update', $about->id)}}" method="post" class="form_about" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form_group">
                    <label for="name" class="label">Name</label>
                    <input type="text" value="{{$about->name}}" name="name" class="form_control" id="name" placeholder="Enter About Name">
                    @error('name')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <textarea type="text" name="description" class="form_control" rows="7" id="description" placeholder="Enter Project description">{{$about->description}}</textarea>
                    @error('description')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="input_group">
                    <div class="form_group">
                        <label for="icon1" class="label">Icon 1</label>
                        <input type="text" value="{{$about->icon1}}" name="icon1" class="form_control" id="icon1" placeholder="Enter About icon">
                        @error('icon1')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form_group">
                        <label for="link1" class="label">Link 1</label>
                        <input type="text" value="{{$about->link1}}" name="link1" class="form_control" id="link1" placeholder="Enter About link">
                        @error('link1')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="input_group">
                    <div class="form_group">
                        <label for="icon2" class="label">Icon 2</label>
                        <input type="text" value="{{$about->icon2}}" name="icon2" class="form_control" id="icon2" placeholder="Enter About icon">
                        @error('icon2')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form_group">
                        <label for="link2" class="label">Link 2</label>
                        <input type="text" value="{{$about->link2}}" name="link2" class="form_control" id="link2" placeholder="Enter About link">
                        @error('link2')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="input_group">
                    <div class="form_group">
                        <label for="icon3" class="label">Icon 3</label>
                        <input type="text" value="{{$about->icon3}}" name="icon3" class="form_control" id="icon3" placeholder="Enter About icon">
                        @error('icon3')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form_group">
                        <label for="link3" class="label">Link 3</label>
                        <input type="text" value="{{$about->link3}}" name="link3" class="form_control" id="link3" placeholder="Enter About link">
                        @error('link3')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="input_group">
                    <div class="form_group">
                        <label for="icon4" class="label">Icon 4</label>
                        <input type="text" value="{{$about->icon4}}" name="icon4" class="form_control" id="icon4" placeholder="Enter About icon">
                        @error('icon4')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form_group">
                        <label for="link4" class="label">Link 4</label>
                        <input type="text" value="{{$about->link4}}" name="link4" class="form_control" id="link4" placeholder="Enter About link">
                        @error('link4')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="input_group">
                    <div class="form_group">
                        <label for="icon5" class="label">Icon 5</label>
                        <input type="text" value="{{$about->icon5}}" name="icon5" class="form_control" id="icon5" placeholder="Enter About icon">
                        @error('icon5')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form_group">
                        <label for="link5" class="label">Link 5</label>
                        <input type="text" value="{{$about->link5}}" name="link5" class="form_control" id="link5" placeholder="Enter About link">
                        @error('link5')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form_group">
                    <label for="image" class="label">Image</label>
                    <input type="file" name="image" class="form_control" id="image" placeholder="Enter Project image">
                    <img src="{{asset($about->image)}}" width="200px" height="auto" style="margin-top: 15px;" alt="">
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_select" required='status'>
                        <option value="">--select Status---</option>
                        <option value="1" {{$about->status ==1 ? 'selected':'' }}>Publish</option>
                        <option value="2" {{$about->status ==2 ? 'selected':'' }}>Unpublish</option>
                    </select>
                    @error('status')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="butn butn_success">Update</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
