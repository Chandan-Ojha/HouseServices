<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Service</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.all_services')}}">Service list</a></li>
                    <li class="breadcrumb-item active">Create Service</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Create Service</h3>
                            <a href="{{route('admin.all_services')}}" class="btn btn-primary">Go Back to Service List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                @if(Session::has('message'))
                                  <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <form class="form-horizontal" wire:submit.prevent="createService">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" wire:model="name" wire:keyup="generateSlug" />
                                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" wire:model="slug" />
                                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="tagline">Tagline</label>
                                            <input type="text" class="form-control" id="tagline" name="tagline" wire:model="tagline" />
                                            @error('tagline') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="service_category_id">Service Category</label>
                                            <select class="form-control" wire:model="service_category_id" >
                                                <option value="">Select Service Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('service_category_id') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="slug" name="price" wire:model="price" />
                                            @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="discount">Discount</label>
                                            <input type="text" class="form-control" id="discount" name="discount" wire:model="discount" />
                                            @error('discount') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="discount_type">Discount</label>
                                            <select class="form-control" wire:model="discount_type" >
                                                <option value="">Select Discount Type</option>
                                                <option value="fixed">Fixed</option>
                                                <option value="percent">Percent</option>
                                            </select>
                                            @error('discount_type') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" wire:model="description"></textarea>
                                            @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="inclusion">Inclusion</label>
                                            <textarea class="form-control" wire:model="inclusion"></textarea>
                                            @error('inclusion') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exclusion">Exclusion</label>
                                            <textarea class="form-control" wire:model="exclusion"></textarea>
                                            @error('exclusion') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="thumbnail">Thumbnail</label>
                                            <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" wire:model="thumbnail" />
                                            @error('thumbnail') <p class="text-danger">{{$message}}</p> @enderror
                                            @if($thumbnail)
                                               <img src="{{$thumbnail->temporaryUrl()}}" width="60" />
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control-file" id="image" name="image" wire:model="image" />
                                            @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                            @if($image)
                                               <img src="{{$image->temporaryUrl()}}" width="60" />
                                            @endif
                                        </div>                                  
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

