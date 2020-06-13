<?php
// Max Base
// https://github.com/BaseMax/twitter-github-trend
include "config.php";
try {
  $tweet = $twitter->send('Hello developers around worlds,

GitHub Trend, help to find interest and fantastic projects
How people build software.

Regards,
@MaxProgram');
}
catch (DG\Twitter\TwitterException $e) {
  echo 'Error: ' . $e->getMessage();
}
