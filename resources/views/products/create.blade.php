@extends('layouts.app')
@section('header')
    <x-header-page title="Crea un producto" path="products.index" button="Volver"
        description="Añade un nuevo producto a tu inventario" />
@endsection

@section('content')
    <div class="md:grid grid-cols-2">
        <form class="max-w-md mx-auto space-y-4" enctype="multipart/form-data" method="POST"
            action="{{ route('products.store') }}">
            @csrf
            <div class="form-control">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name" placeholder="Nombre del producto">
            </div>

            <div class="form-control">
                <label for="name">Descripción: </label>
                <textarea type="text" id="description" name="description" placeholder="Detalles del producto"></textarea>
            </div>

            <div class="form-control">
                <label for="stock">Stock Disponible: </label>
                <input type="number" id="stock" name="stock" placeholder="Cantidad disponible">
            </div>

            <div class="form-control">
                <label for="price">Precio: </label>
                <input type="number" id="price" name="price" placeholder="Precio en $">
            </div>
            <div class="form-control">
                <label for="name">Selecciona una imagen: </label>
                <input type="file" name="image" id="inputImage">
            </div>

            <div>
                <label for="name">Selecciona una categoría: </label>
                <select class="bg-secondary w-full py-3 px-2 rounded-md" name="category_id" id="category">
                    @forelse ($categories as $category)
                        <option class="text-white" value="{{ $category->id }}">{{ $category->name }}</option>
                    @empty
                        <option>No se encontraron categorías</option>
                    @endforelse
                </select>
            </div>

            <button type="submit" class="btn-primary w-full">
                Guardar
            </button>
        </form>
        <div>
            <h3 class="text-center text-xl font-bold">
                Imagen del producto
            </h3>
            <p id="imagePreviewText" class="text-center"></p>
            <img id="imagePreview">
        </div>
    </div>
@endsection
