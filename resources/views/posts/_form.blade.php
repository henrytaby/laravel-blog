@csrf

<label class="uppercase text-gray-100 text-xs">Titulo</label>
<span class="text-xs text-red-600" >@error('title') {{ $message }} @enderror</span>

<input type="text" name="title" class="rounded border-gray-900 w-full mb-4 text-black"
value="{{ old('title',$post->title) }}" >


<label class="uppercase text-gray-100 text-xs">Contenido</label>
<span class="text-xs text-red-600" >@error('body') {{ $message }} @enderror</span>

<textarea name="body" rows="5" class="rounded border-gray-900 w-full mb-4 text-black">{{ old('body',$post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-900 text-white rounded px-4 py-2">
</div>
