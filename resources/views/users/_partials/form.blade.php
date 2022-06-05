@csrf

<input class="shadow px-2 my-2" type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
<input class="shadow px-2 my-2" type="email" name="email" placeholder="Email:" value="{{ $user->email ?? old('email') }}">
<input class="shadow px-2 my-2" type="password" name="password" placeholder="Senha:">

<button type="submit" class="bg-blue-400 rounded-full px-2">Enviar</button>