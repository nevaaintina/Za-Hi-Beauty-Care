<form action="{{ isset($user->id) ? route('admin.users.update', $user->id) : route('admin.users.store') }}" 
      method="POST" 
      enctype="multipart/form-data">

    @csrf
    @if(isset($user->id))
        @method('PUT')
    @endif

    <div class="grid grid-cols-1 gap-4">

        {{-- NAME --}}
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Name</span>
            <input type="text" name="name" 
                   value="{{ old('name', $user->name ?? '') }}" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 @error('name') border-red-500 @enderror" required>
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </label>

        {{-- EMAIL --}}
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Email</span>
            <input type="email" name="email" 
                   value="{{ old('email', $user->email ?? '') }}" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 @error('email') border-red-500 @enderror" required>
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </label>

        {{-- PHONE --}}
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Phone</span>
            <input type="text" name="phone" 
                   value="{{ old('phone', $user->phone ?? '') }}" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 @error('phone') border-red-500 @enderror">
            @error('phone')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </label>

        {{-- PASSWORD --}}
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Password</span>
            <input type="password" name="password"
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 @error('password') border-red-500 @enderror"
                   placeholder="{{ isset($user->id) ? 'Biarkan kosong jika tidak diganti' : 'Masukkan password' }}">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </label>

        {{-- ROLE --}}
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Role</span>
            <select name="role" 
                    class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 @error('role') border-red-500 @enderror">
                <option value="admin" {{ old('role', $user->role ?? '')=='admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ old('role', $user->role ?? '')=='user' ? 'selected' : '' }}>User</option>
            </select>
            @error('role')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </label>

        {{-- PHOTO --}}
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Photo</span>
            <input type="file" name="photo" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 @error('photo') border-red-500 @enderror">
            @error('photo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            @if (!empty($user->photo))
                <img src="{{ asset('storage/'.$user->photo) }}" 
                     class="w-32 h-32 mt-3 rounded-lg object-cover shadow-md border">
            @endif
        </label>

    </div>

</form>
