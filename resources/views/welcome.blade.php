<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pines UI</title>
    <style>[x-cloak]{display:none}</style>
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- Include the TailwindCSS library on your page -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-start justify-center h-full bg-gray-50">
    <div class="flex items-center justify-center w-full max-w-full">

        <x-notice
    title="Cookie Notice"
    message="We use cookies to make your online experience better. By continuing to browse, you give us your digital consent."
    icon="https://cdn-icons-png.flaticon.com/512/9004/9004938.png"
    denyText="Deny Cookies"
    acceptText="Accept Cookies"
    :delay="500"
/>


    </div>
</body>
</html>
