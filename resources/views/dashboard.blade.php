<x-app-layout>
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }

    .background-container {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .background-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        animation: slideBackground 12s infinite;
        z-index: -1;
    }

    @keyframes slideBackground {
        0% {
            background-image: url('{{ asset('images/image 1.png') }}');
        }

        33.33% {
            background-image: url('{{ asset('images/image 2.png') }}');
        }

        66.66% {
            background-image: url('{{ asset('images/image 3.png') }}');
        }

        100% {
            background-image: url('{{ asset('images/image 1.png') }}');
        }
    }

    .content {
        width: 90%;
        height: 80%;
        background-color: rgba(255, 255, 255, 0.85);
        display: flex;
        align-items: center;
    }

    .soundClassContainer {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-top: -70px;
    }

    .soundClassContainer span {
        margin-top: -70px;
        font-size: 24px;
        font-weight: bold;
    }

    .promoContainer {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1rem;
    }

    .promoContainer h1 {
        font-size: 45px;
        font-weight: bold;
    }

    .promoContainer span {
        font-size: 26px;
        
    }

    .joinNowContainer {
        width: 100%;
        display: flex;
        justify-content: center;
        text-align: center;
        margin-top: 60px;
    }

    .joinNowButton {
        background-color: #444;
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        border: none;
        padding: 15px 40px;
        border-radius: 40px;
        cursor: pointer;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .joinNowButton:hover {
        background-color: #333;
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }
</style>

<div class="background-container">
    <div class="background-slider"></div>

    <div class="content">
        <div class="soundClassContainer">
            <img loading="lazy" src="{{ asset('images/SoundClassLogo.svg') }}">
            <span>UPGRADE YOUR MUSIC SKILLS</span>
        </div>

        <div class="promoContainer">
            <h1>Learn Music Easily and Enjoyable with SoundClass</h1>
            <span>Join SoundClass and discover a more effective, interactive, and enjoyable way to learn music!</span>
            <div class="joinNowContainer">
                @auth
                    <div>
                        <a href="{{ route('teachers') }}" class="joinNowButton">Get Started</a>
                        <h4 class="mt-4 fw-bold text-gray">Choose your future music instructor!</h4>
                    </div>
                @endauth
                @guest
                    <a href="{{ route('register') }}" class="joinNowButton">Join Now</a>
                @endguest
            </div>
        </div>
    </div>
</div>
</x-app-layout>
