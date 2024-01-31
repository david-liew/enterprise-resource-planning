<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeChat Login</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>WeChat Login</h1>
        <button id="wechatLoginBtn">Login with WeChat</button>
    </div>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script>
        $(document).ready(function() {
            // Replace 'YOUR_WECHAT_APP_ID' with your actual WeChat App ID
            const wechatAppId = 'wxf109e7cf39864d08';

            $('#wechatLoginBtn').on('click', function() {
                // Redirect the user to WeChat for authentication
                //window.location.href = `https://open.weixin.qq.com/connect/oauth2/authorize?appid=${wechatAppId}&redirect_uri=${encodeURIComponent(window.location.href)}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect`;
                window.location.href = `https://open.weixin.qq.com/connect/oauth2/authorize?appid=${wechatAppId}&redirect_uri=${encodeURIComponent(window.location.href)}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect`;
            });
        });
    </script>
</body>

</html>