<div id="product-list" class="w-full">
    @foreach($products->get() as $prod)
    <div class="p-4 m-2 rounded bg-gray-200 w-full flex flex-col items-start" id="product-{{ $prod->id }}">
        <div class="flex items-center w-full">
            <img src="{{ $prod->imgUrl }}" style="width: 100px; height: auto;" class="mr-4">
            <div class="flex-1">
                <h3 class="text-2xl">{{ $prod->name }}</h3>
                <div class="italic text-gray-700">{{ $prod->description }}</div>
            </div>
            <button hx-get="/api/products/{{ $prod->id }}/edit"
                    hx-target="#edit-product-modal"
                    hx-swap="innerHTML"
                    class="ml-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                    onclick="showEditModal()">Update</button>
            <button hx-delete="/api/products/{{ $prod->id }}"
                    hx-target="#product-{{ $prod->id }}"
                    hx-swap="delete"
                    hx-confirm="Are you sure you want to delete this product?"
                    class="ml-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
        </div>
        <div class="text-4xl text-green-900 self-end mt-4">{{ $prod->price }}</div>

    </div>
    @endforeach

</div>






<div id="imgUrl_Error" hx-swap-oob="true"></div>

<div id="name_Error" hx-swap-oob="true"></div>

<div id="description_Error" hx-swap-oob="true"></div>

<div id="price_Error" hx-swap-oob="true"></div>

<div id='addMessage' hx-swap-oob='true'>
    <div class='bg-green-200 text-center text-green-800 p-3 rounded'>
        The Product has been added successfully.
    </div>
</div>

<script>
    function showEditModal() {
        document.getElementById('edit-product-modal').classList.remove('hidden');
    }


</script>





