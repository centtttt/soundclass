<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f6f9;
    }

    .header {
        text-align: center;
        padding: 15px;
        background-color: gray;
        color: white;
    }

    .header h1 {
        margin: 0;
        font-size: 32px;
        font-weight: bold;
    }

    .main-container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .forum-category {
        background-color: #fff;
        margin-bottom: 50px;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .forum-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .forum-header h2 {
        font-size: 20px;
        color: #333;
    }

    .forum-header a {
        color: black;
        text-decoration: none;
    }

    .forum-header a:hover {
        text-decoration: underline;
    }

    .forum-posts {
        margin-top: 10px;
        border-top: 1px solid #ddd;
        padding-top: 10px;
    }

    .forum-post {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .forum-post strong {
        font-size: 16px;
        color: black;
    }

    .forum-post p {
        margin: 0;
        font-size: 14px;
        color: #555;
    }

    .forum-post span {
        font-size: 12px;
        color: #999;
    }

    .forum-input {
        margin-top: 15px;
    }

    .forum-input textarea {
        width: 100%;
        height: 80px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        resize: none;
    }

    .forum-input button {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: gray;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        position: ;
    }

    .forum-input button:hover {
        background-color: #D9D9D9;
    }

    @media (max-width: 768px) {
        .forum-category {
            margin-bottom: 15px;
        }
    }
</style>
<x-app-layout>
    <div class="header">
        <h1>SoundClass Community Forums</h1>
    </div>

    <div class="main-container">
        <div class="forum-category">
            <div class="forum-header">
                <h2>🎹 Piano Techniques</h2>
                <a href="#">View All</a>
            </div>
            <div class="forum-posts">
                <div class="forum-post">
                    <div>
                        <strong>How to play faster arpeggios?</strong>
                        <p>Posted by User1</p>
                    </div>
                    <span>2 hours ago</span>
                </div>
                <div class="forum-post">
                    <div>
                        <strong>What are some common finger exercises?</strong>
                        <p>Posted by User2</p>
                    </div>
                    <span>1 day ago</span>
                </div>
            </div>
            <div class="forum-input">
                <textarea placeholder="Start a discussion..."></textarea>
                <button>Post</button>
            </div>
        </div>

        <div class="forum-category">
            <div class="forum-header">
                <h2>🎤 Vocal Training</h2>
                <a href="#">View All</a>
            </div>
            <div class="forum-posts">
                <div class="forum-post">
                    <div>
                        <strong>How to improve pitch accuracy?</strong>
                        <p>Posted by User3</p>
                    </div>
                    <span>5 hours ago</span>
                </div>
                <div class="forum-post">
                    <div>
                        <strong>Best warm-up exercises for beginners?</strong>
                        <p>Posted by User4</p>
                    </div>
                    <span>3 days ago</span>
                </div>
            </div>
            <div class="forum-input">
                <textarea placeholder="Start a discussion..."></textarea>
                <button>Post</button>
            </div>
        </div>

        <div class="forum-category">
            <div class="forum-header">
                <h2>🎻 String Instruments</h2>
                <a href="#">View All</a>
            </div>
            <div class="forum-posts">
                <div class="forum-post">
                    <div>
                        <strong>Tips for maintaining violin strings?</strong>
                        <p>Posted by User5</p>
                    </div>
                    <span>1 week ago</span>
                </div>
                <div class="forum-post">
                    <div>
                        <strong>How to fix bow tension issues?</strong>
                        <p>Posted by User6</p>
                    </div>
                    <span>2 weeks ago</span>
                </div>
            </div>
            <div class="forum-input">
                <textarea placeholder="Start a discussion..."></textarea>
                <button>Post</button>
            </div>
        </div>
    </div>
</x-app-layout>
