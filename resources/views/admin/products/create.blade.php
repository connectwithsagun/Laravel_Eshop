<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
{{-- displaying error message all at one place --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}



              <h2>Create Product</h2>
            <form action="/admin/products/store" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <x-forms.input type="text" name="full_name"/> --}}
                Product Name: <input type="text" name="product_name" id="" class="form-control" value="{{ old('product_name') }}">
                @error('product_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br><br>
                Product Desc: <textarea name="product_desc" id="" cols=30 rows=10 class="form-control" >{{ old('product_desc') }}</textarea>
                @error('product_desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                Price: <input type="text" name="price" id="" class="form-control" value="{{ old('price') }}">
                @error('price')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                <br><br>
                Category:

                <x-forms.select name="category_id" class="form-control" >
                    <option value="0"> Select a category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? "selected" : ''  }}>{{ $category->category_name}}</option>   
                    @endforeach
                </x-forms.select>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                <br><br>

                {{-- <select name="category_id" id="">
                    <option value="0"> Select a category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name}}</option>   
                    @endforeach
                </select> --}}

                <br><br>
                <input type="file" name="image_upload" id="">
                <input type="Submit" name="Submit" value="Save" class="form-control">
            </form>
          </div>
        </div>
    </div>
</x-admin.layout>