@props(['label', 'type', 'name'])
<div class="flex items-center gap-3 p-3">
    <label class="shrink-0" for="{{ $label }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}"
        class="border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 flex-1 block w-full px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm">
</div>
