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

        <x-banner />

        <x-alert
        type="success"
        headline="Operation Successful"
        message="Your data has been saved successfully."
    />

    <x-alert
        type="error"
        headline="Error Occurred"
        message="Something went wrong. Please try again."
    />

    <x-alert
        type="warning"
        headline="Warning"
        message="Please ensure all fields are filled correctly."
    />

    <x-alert
        type="info"
        headline="Information"
        message="This is an informational message."
    />

    </div>
</body>
</html>
