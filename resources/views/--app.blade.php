<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Layout By TailwindCSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="parent text-center flex flex-col h-screen">
        <x-mycomponent.header></x-mycomponent.header>
        <main class="bg-grey-400 flex-1 flex">
        <x-mycomponent.sidebar></x-mycomponent.sidebar>
        <x-mycomponent.content></x-mycomponent.content>
    </main>
    <x-mycomponent.footer></x-mycomponent.footer>
        
    </div>
</body>
</html>