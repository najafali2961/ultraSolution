@extends('frontend.layouts.app')
@section('content')
    <!-- ====== Sign Up Section Start -->
    <section class="wow fadeInUp fh dp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
        <div class="rf xi">
            <div class="ie ig oj">
                <div class="ja hb md">
                    <div class="hc rf">
                        <div class="ma bd de he af wf tf sj wj vk">
                            <h3 class="ua mh nh zh ei ck il gp fq iq">
                                Create your Account
                            </h3>
                            <p class="pa sh zh gi">
                                Welcome, Please enter your credentials to register.
                            </p>
                            <h3 class="ya mh vh fi ck">
                                Sign Up with Social Media
                            </h3>
                            <div class="pa hb od td">
                                <a href="{{ route('auth.google') }}">
                                    <button class="hb tb fc od pd de he sh gi sj xj tk _k">

                                        <span class="dl">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1416_409)">
                                                    <path
                                                        d="M18 9.19932C18.0109 8.58059 17.9457 7.96284 17.806 7.35938H9.18372V10.6993H14.2449C14.149 11.2849 13.9333 11.8455 13.6106 12.3473C13.288 12.8491 12.8651 13.2818 12.3674 13.6193L12.3497 13.7311L15.0761 15.8009L15.2649 15.8194C16.9995 14.2493 17.9997 11.9393 17.9997 9.19932"
                                                        fill="#4285F4"></path>
                                                    <path
                                                        d="M9.18382 18.0003C11.6633 18.0003 13.745 17.2003 15.2655 15.8203L12.3675 13.6202C11.592 14.1503 10.5512 14.5203 9.18382 14.5203C8.02249 14.5137 6.89279 14.1488 5.955 13.4775C5.0172 12.8061 4.31894 11.8624 3.95927 10.7803L3.85164 10.7893L1.01679 12.9392L0.979736 13.0402C1.74323 14.5314 2.91494 15.7851 4.36385 16.661C5.81276 17.537 7.48174 18.0007 9.18417 18.0003"
                                                        fill="#34A853"></path>
                                                    <path
                                                        d="M3.95921 10.7798C3.75834 10.2069 3.65469 9.60558 3.65239 8.99982C3.65609 8.39505 3.75591 7.79453 3.94828 7.21988L3.94316 7.10057L1.07355 4.91602L0.979681 4.95976C0.335608 6.21294 0.00012207 7.59658 0.00012207 8.99973C0.00012207 10.4029 0.335608 11.7865 0.979681 13.0397L3.95921 10.7798Z"
                                                        fill="#FBBC05"></path>
                                                    <path
                                                        d="M9.1838 3.47965C10.4997 3.45963 11.7725 3.93991 12.7348 4.81971L15.3267 2.33965C13.6644 0.811346 11.463 -0.0272143 9.1838 -0.000350488C7.48139 -0.000747434 5.81242 0.462942 4.36352 1.33887C2.91461 2.2148 1.74289 3.46843 0.97937 4.95959L3.94902 7.21971C4.31223 6.13773 5.01281 5.19476 5.95199 4.52376C6.89117 3.85275 8.02156 3.48755 9.1838 3.47965Z"
                                                        fill="#EB4335"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1416_409">
                                                        <rect width="18" height="18" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="jb qk">
                                            Sign-in with Google
                                        </span>


                                    </button> </a>
                                <a href="{{ route('auth.facebook') }}">
                                    <button class="hb tb fc od pd de he sj xj">
                                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.7 12.65H10.45L11.55 8.25H7.7V6.05C7.7 4.917 7.7 3.85 9.9 3.85H11.55V0.154C11.1914 0.1067 9.8373 0 8.4073 0C5.4208 0 3.3 1.8227 3.3 5.17V8.25H0V12.65H3.3V22H7.7V12.65Z"
                                                fill="#1877F2"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                            <div class="e ba ya hb od pd">
                                <span class="d y/2 q aa jb qb hc ed/2 ze yj pk"></span>
                                <p class="af sh zh gi wj yk">
                                    Or sign-up account with email
                                </p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="ja hb md">

                                    <div class="hc rf sk/2">
                                        <div class="oa">
                                            <label for="name" class="ua fb mh sh fi ck">
                                                Full Name
                                            </label>
                                            <input id="name" type="text" name="name" :value="old('name')"
                                                required autofocus autocomplete="name" placeholder="Jhon Andrio"
                                                class="hc ie _e _f sh zh fi ki qi dj nj ck jk">
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <!-- Email Address -->

                                    <div class="hc rf sk/2">
                                        <div class="oa">
                                            <label for="email" class="ua fb mh sh fi ck">
                                                Email Address
                                            </label>
                                            <input id="email" type="email" name="email" :value="old('email')"
                                                required autocomplete="username"
                                                class="hc ie _e _f sh zh fi ki qi dj nj ck jk">
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="hc rf sk/2">
                                        <div class="oa">
                                            <label for="password" class="ua fb mh sh fi ck">
                                                Password
                                            </label>
                                            <input id="password" type="password" name="password" required
                                                autocomplete="new-password"
                                                class="block w-full mt-1 hc ie _e _f sh zh fi ki qi dj nj ck jk">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>


                                    <!-- Confirm Password -->

                                    <div class="hc rf sk/2">
                                        <div class="oa">
                                            <label for="re-password" class="ua fb mh sh fi ck">
                                                Retype Password
                                            </label>
                                            <input id="password_confirmation" type="password" name="password_confirmation"
                                                required autocomplete="new-password"
                                                class="hc ie _e _f sh zh fi ki qi dj nj ck jk">
                                        </div>
                                    </div>


                                    {{-- <div class="flex items-center justify-end mt-8">
                                        <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    </div> --}}
                                    <div class="hc rf">

                                        <button type="submit" class="hb od pd de ye bg of uh _h ii">
                                            {{ __('Register') }}
                                        </button>
                                    </div>

                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Sign Up Section End -->
@endsection
