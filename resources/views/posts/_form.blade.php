@csrf

<label class="uppercase text-gray-100 text-xs">Titulo</label>
<input type="text" name="title" class="rounded border-gray-900 w-full mb-4 text-black"
value="{{ $post->title }}" >


<label class="uppercase text-gray-100 text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded border-gray-900 w-full mb-4 text-black">{{ $post->body }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-900 text-white rounded px-4 py-2">
</div>
