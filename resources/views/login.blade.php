<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')

</head>
<body class=" bg-background-black h-screen flex justify-center items-center">
    <div class="flex flex-col justify-center items-start">

        <div class="flex flex-col gap-20 justify-center items-center ">
         <h1 class="text-3xl font-bold text-white">LOGIN</h1>
         <form class="flex-col justify-center items-center flex w-full gap-4" action="/login/auth/login" method="post">
             @csrf
             <div class="flex flex-col w-96 ">
                 <label class="text-white text-2xl font-bold" for="">Username</label>
                 <input type="text" class="px-2 py-1" name="username">
             </div>
             <div class="flex flex-col w-96 ">
                 <label class="text-white text-2xl font-bold" for="">Password</label>
                 <input type="password" class="px-2 py-1" name="password" >        
             </div>
            
             <button type="submit" class="bg-success mt-4 w-96 text-lg py-1 font-bold">Login</button>
         </form>
     </div>
     <p class="text-white font-bold text-sm mt-1">Dont have an Account? <a href="/register"><span class="text-gray-600 underline">Register!</span></a></p>
         
    </div>
</body>
</html>
