<div
    {{ $attributes->merge(['class' => 'p-6 border-b border-gray-200 ' . $attributes->get('class-bg-color', 'bg-white')]) }}>
    {{ $slot }}
</div>
