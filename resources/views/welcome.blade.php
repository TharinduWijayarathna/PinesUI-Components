<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pines UI</title>
    <style>
        [x-cloak] {
            display: none
        }
    </style>
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- Include the TailwindCSS library on your page -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-start justify-center h-full bg-gray-50">
    <div class="flex items-center justify-center w-full max-w-full">

        <x-notice title="Cookie Notice"
            message="We use cookies to make your online experience better. By continuing to browse, you give us your digital consent."
            icon="https://cdn-icons-png.flaticon.com/512/9004/9004938.png" denyText="Deny Cookies"
            acceptText="Accept Cookies" :delay="500" />

        @php
            $breadcrumbs = [
                ['label' => 'Dashboard', 'url' => '/dashboard', 'icon' => '<path d="M13.6986 3.68267..."/>'],
                ['label' => 'Settings', 'url' => '/settings', 'icon' => '<path d="M7.84 1.804..."/>'],
                ['label' => 'Users', 'url' => '/users', 'icon' => '<path d="M7 8a3 3..."/>'],
                ['label' => 'Adam Wathan', 'url' => '#', 'icon' => null],
            ];
        @endphp

        <x-breadcrumb :breadcrumbs="$breadcrumbs" />

        <x-button>Default</x-button>

        <x-button size="sm">Small Button</x-button>
<x-button size="md">Medium Button</x-button>
<x-button size="lg">Large Button</x-button>



        <x-button color="blue">Blue Button</x-button>
<x-button color="red">Red Button</x-button>
<x-button color="green">Green Button</x-button>
<x-button color="yellow">Yellow Button</x-button>
<x-button color="white">Neutral Button</x-button>



    </div>
</body>

</html>
