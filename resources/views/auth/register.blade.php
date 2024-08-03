<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('output.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body class="font-poppins text-black">
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen">
        <div class="w-full min-h-screen flex flex-col items-center justify-center py-[46px] px-4 gap-8">
          <div class="w-[calc(100%-26px)] rounded-[20px] overflow-hidden relative">
            <img src="assets/backgrounds/Asset-signup.png" class="w-full h-full object-contain" alt="background">
          </div>
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="flex flex-col w-full bg-white p-[24px_16px] gap-8 rounded-[22px] items-center">
            @csrf
            <div class="flex flex-col gap-1 text-center">
              <h1 class="font-semibold text-2xl leading-[42px] ">Sign Up</h1>
              <p class="text-sm leading-[25px] tracking-[0.6px] text-darkGrey">Enter valid data to create your account</p>
            </div>
            <div class="flex flex-col gap-[15px] w-full max-w-[311px]">
              <!-- Avatar -->
              <div class="flex flex-col gap-1 w-full">
                <p class="font-semibold">Avatar</p>
                <div class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                  <div class="w-4 h-4 flex shrink-0">
                    <img src="assets/icons/gallery-2.svg" alt="icon">
                  </div>
                  <input type="file" id="avatar" name="avatar" class="appearance-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]" required>
                </div>
                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
              </div>

              <!-- Full Name -->
              <div class="flex flex-col gap-1 w-full">
                <p class="font-semibold">Full Name</p>
                <div class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                  <div class="w-4 h-4 flex shrink-0">
                    <img src="assets/icons/user-flat-black.svg" alt="icon">
                  </div>
                  <input type="text" id="name" name="name" class="appearance-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]" placeholder="Write your full name" :value="old('name')" required autofocus autocomplete="name">
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>

              <!-- Phone Number -->
              <div class="flex flex-col gap-1 w-full">
                <p class="font-semibold">Phone Number</p>
                <div class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                  <div class="w-4 h-4 flex shrink-0">
                    <img src="assets/icons/call.svg" alt="icon">
                  </div>
                  <input type="tel" id="phone_number" name="phone_number" class="appearance-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]" placeholder="Your valid phone number" :value="old('phone_number')" required>
                </div>
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
              </div>

              <!-- Email Address -->
              <div class="flex flex-col gap-1 w-full">
                <p class="font-semibold">Email Address</p>
                <div class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                  <div class="w-4 h-4 flex shrink-0">
                    <img src="assets/icons/sms.svg" alt="icon">
                  </div>
                  <input type="email" id="email" name="email" class="appearance-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]" placeholder="Your email address" :value="old('email')" required autocomplete="username">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>

              <!-- Password -->
              <div class="flex flex-col gap-1 w-full">
                <p class="font-semibold">Password</p>
                <div class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                  <div class="w-4 h-4 flex shrink-0">
                    <img src="assets/icons/password-lock.svg" alt="icon">
                  </div>
                  <input type="password" id="password" name="password" class="appearance-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]" placeholder="Enter your valid password" required autocomplete="new-password">
                  <button type="button" class="reveal-password w-4 h-4 flex shrink-0" onclick="togglePasswordVisibility('password', this)">
                    <img src="assets/icons/password-eye.svg" class="see-password" alt="icon">
                    <img src="assets/icons/password-eye-slash.svg" class="hide-password hidden" alt="icon">
                  </button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>

              <!-- Confirm Password -->
              <div class="flex flex-col gap-1 w-full">
                <p class="font-semibold">Confirm Password</p>
                <div class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                  <div class="w-4 h-4 flex shrink-0">
                    <img src="assets/icons/password-lock.svg" alt="icon">
                  </div>
                  <input type="password" id="password_confirmation" name="password_confirmation" class="appearance-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]" placeholder="Confirm your valid password" required autocomplete="new-password">
                  <button type="button" class="reveal-password w-4 h-4 flex shrink-0" onclick="togglePasswordVisibility('password_confirmation', this)">
                    <img src="assets/icons/password-eye.svg" class="see-password" alt="icon">
                    <img src="assets/icons/password-eye-slash.svg" class="hide-password hidden" alt="icon">
                  </button>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
            </div>
            <button type="submit" class="bg-[#4D73FF] p-[16px_24px] w-full max-w-[311px] rounded-[10px] text-center text-white font-semibold hover:bg-[#06C755] transition-all duration-300">Sign up</button>
            <p class="text-center text-sm tracking-035 text-darkGrey">Already have an account? <a href="{{ route('login') }}" class="text-[#4D73FF] font-semibold tracking-[0.6px]">Sign In</a></p>
          </form>
        </div>
    </section>

    <script src="js/reveal-password.js"></script>
    <script>
      document.getElementById('upload-file').addEventListener('click', function() {
          // Trigger the file input
          document.getElementById('file').click();
      });

      document.getElementById('file').addEventListener('change', function() {
          // Get the file name
          var fileName = this.files[0].name;

          // Update the file name text and show the file info
          document.getElementById('fileName').textContent = fileName;
          document.getElementById('file-info').classList.remove('hidden');
          document.getElementById('placeholder').classList.add('hidden');
          document.getElementById('chosse-file-dummy-btn').classList.add('hidden');
      });
    </script>
</body>
</html>
