<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, "San Francisco", Helvetica, Arial, sans-serif;
            font-weight: 300;
            margin: 0;
        }

        html,
        body {
            height: 100vh;
            width: 100vw;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f3f2f2;
        }

        h4 {
            font-size: 24px;
            font-weight: 600;
            color: #000;
            opacity: .85;
        }

        label {
            font-size: 12.5px;
            color: #000;
            opacity: .8;
            font-weight: 400;
        }

        form {
            padding: 40px 30px;
            background: #fefefe;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 300px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        form h4 {
            margin-bottom: 20px;
        }

        form p {
            line-height: 1.55;
            margin-bottom: 40px;
            font-size: 14px;
            color: #000;
            opacity: 0.65;
        }

        a.discrete {
            color: rgba(0, 0, 0, 0.4);
            font-size: 14px;
            border-bottom: solid 1px transparent;
            padding-bottom: 4px;
            margin-left: auto;
            margin-top: 40px;
            text-decoration: none;
            transition: all .3s ease;
        }

        a.discrete:hover {
            border-bottom: solid 1px rgba(0, 0, 0, 0.2);
        }

        button {
            width: auto;
            min-width: 100px;
            border-radius: 24px;
            padding: 15px 40px;
            margin-top: 5px;
            background-color: blue;
            color: #fff;
            font-size: 14px;
            margin-left: auto;
            font-weight: 500;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.13);
            border: none;
            transition: all .3s ease;
            cursor: pointer;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 2px 6px rgba(182, 157, 230, 0.65);
        }

        input {
            font-size: 16px;
            padding: 20px 0;
            height: 56px;
            border: none;
            border-bottom: solid 1px rgba(0, 0, 0, 0.1);
            background: #fff;
            width: 280px;
            box-sizing: border-box;
            color: #000;
            font-weight: 400;
            transition: all .3s linear;
        }

        input:focus {
            border-bottom: solid 1px rgb(182, 157, 230);
            outline: 0;
            box-shadow: 0 2px 6px rgba(182, 157, 230, 0.45);
        }

        .floating-label {
            position: relative;
            margin-bottom: 20px;
            width: 100%;
        }

        .floating-label label {
            position: absolute;
            top: 50%;
            left: 0;
            opacity: 0;
            transition: all .3s ease;
            padding-left: 44px;
        }

        .floating-label input {
            width: calc(100% - 44px);
            margin-left: auto;
        }

        .floating-label .icon {
            position: absolute;
            top: 0;
            left: 0;
            height: 56px;
            width: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .floating-label input:not(:placeholder-shown) {
            padding-top: 28px;
        }

        .floating-label input:not(:placeholder-shown)+label {
            transform: translateY(-20px);
            opacity: 0.7;
        }

        .session {
            display: flex;
            background: #ffffff;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.12);
        }

        .left {
            width: 220px;
            background-image: url("https://images.pexels.com/photos/114979/pexels-photo-114979.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            background-size: cover;
            border-radius: 4px 0 0 4px;
        }

        .left svg {
            margin: 20px;
            height: 40px;
        }
    </style>
</head>

<body>
    <div class="session">
        <div class="left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 302.5">
                <path fill="#fff" d="M126 302.2c-2.3 0.7-5.7 0.2-7.7-1.2l-105-71.6c-2-1.3-3.7-4.4-3.9-6.7L0 96c-0.2-2.4 1.1-5.6 2.8-7.2L96 2.4c1.7-1.6 5.1-2.6 7.4-2.3l125.6 18.9c2.3 0.4 5.2 2.3 6.4 4.4l63.5 110.1c1.2 2 1.4 5.5 0.6 7.7l-46.4 118.3c-0.9 2.2-3.4 4.6-5.7 5.3l-121.4 37.4zm63.4-102.7c2.3-0.7 4.8-3.1 5.7-5.3l19.9-50.8c0.9-2.2 0.6-5.7-0.6-7.7l-27.3-47.3c-1.2-2-4.1-4-6.4-4.4l-53.9-8c-2.3-0.4-5.7 0.7-7.4 2.3l-40 37.1c-1.7 1.6-3 4.9-2.8 7.2l4.1 54.4c0.2 2.4 1.9 5.4 3.9 6.7l45.1 30.8c2 1.3 5.4 1.9 7.7 1.2l52-16.2z" />
            </svg>
        </div>
        <form class="log-in" autocomplete="off">
            <h4>Panel Login <span>WARGA</span></h4>
            <p>Selamat Datang kembali! Masuk ke akun Anda untuk melihat klien hari ini</p>
            <div class="floating-label">
                <input placeholder="NIK" type="number" name="nik" id="nik" autocomplete="off" required>
                <label for="nik">NIK :</label>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <path d="M17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z" />
                    </svg>
                </div>
            </div>
            <div class="floating-label">
                <input placeholder="Password" type="password" name="password" id="password" autocomplete="off" required>
                <label for="password">Password:</label>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    </svg>
                </div>
            </div>
            <button type="submit">Log in</button>
            <a class="discrete" href="pendaftaran.php">Pendaftaran</a>
        </form>
    </div>
</body>

</html>