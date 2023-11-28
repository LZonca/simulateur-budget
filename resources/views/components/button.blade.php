<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white p-3 rounded-md hover:from-blue-600 hover:to-purple-600 transition duration-300']) }}>
    {{ $slot }}
</button>
