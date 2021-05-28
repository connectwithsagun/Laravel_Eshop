<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
              <h2>Create Product</h2>
            <form action="/admin/products/store" method="POST">
                @csrf
                {{-- <x-forms.input type="text" name="full_name"/> --}}
                Product Name: <input type="text" name="product_name" id="" class="form-control"><br><br>
                Product Desc: <textarea name="product_desc" id="" cols=30 rows=10 class="form-control"></textarea><br>
                Price: <input type="text" name="price" id="" class="form-control"><br><br>
                Category:

                <x-forms.select name="category_id" class="form-control" >
                    <option value="0"> Select a category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name}}</option>   
                    @endforeach
                </x-forms.select><br><br>

                {{-- <select name="category_id" id="">
                    <option value="0"> Select a category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name}}</option>   
                    @endforeach
                </select> --}}

                <br><br>
                <input type="Submit" name="Submit" value="Save" class="form-control">
            </form>
          </div>
        </div>
    </div>
</x-admin.layout>