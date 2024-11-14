<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          width: 100%;
      }
      /* CSS */
      .button-36 {
        background-image: linear-gradient(92.88deg, #455eb5 9.16%, #5643cc 43.89%, #673fd7 64.72%);
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: #ffffff;
        cursor: pointer;
        flex-shrink: 0;
        font-family: "Inter UI", "SF Pro Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        font-size: 16px;
        font-weight: 500;
        height: 4rem;
        padding: 0 1.6rem;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
        transition: all 0.5s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
      }

      .button-36:hover {
        box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
        transition-duration: 0.1s;
      }

      .button-36 img {
        margin-right: 10px;
        height: 24px;
        width: 24px;
      }

      @media (min-width: 768px) {
        .button-36 {
          padding: 0 2.6rem;
        }
      }
    </style>
  </head>
  <body>
    <?php
      $authentication = new Authentication(array(
          'client_key' => 'aw1f3cx28k4wj2xj',
          'client_secret' => 'l2Q2VPxfqZGt5R6baLnGmyPUjdTxJmEv'
      ));
      
      $redirectUri = 'https://path/to/tiktok/login/redirect.php';
      
      $scopes = array(
          'user.info.basic',
          'user.info.profile',
          'user.info.stats',
          'video.publish',
          'video.upload',
          'video.list'
      );
      
      $authenticationUrl = $authentication->getAuthenticationUrl($redirectUri, $scopes);
    ?>
    <!-- HTML Button with TikTok Login URL !-->
    <a href="<?php echo $authenticationUrl; ?>" class="button-36" role="button">
      <img src="/path/to/tiktok/logo.png" alt="TikTok Logo" /> Continue With TikTok
    </a>
  </body>
</html>
