<?php
if (!isset($page_title)) $page_title = 'Default Page Title';?>
<!DOCTYPE HTML>
<html>

<head>
  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" type="text/css" href="style.css" title="style" />
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io//favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
</head>

<body>

  <style>
      .wrapper_xml{
      /*width:200px;*/
      /*background:yellow;*/
      /*height:600px;*/
      /*border:1px solid black;*/
      margin:2px;padding: 0 0 0 0;
      /*display: inline-block;*/
      /*vertical-align: top;*/
      overflow:hidden;
    }
  </style>

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html">Linux<span class="logo_colour">magazine</span></a></h1>
          <h2>Something about Linux operating system</h2>
        </div>
      </div>
      <!-- menubar -->
      <div id="menubar">
        <ul id="menu">
          <li><a href="./">Home</a></li>
          <li><a href="videos">Videos</a></li>
          <li><a href="about">More about Linux</a></li>
        </ul>
      </div>
    
    </div>  <!-- End of header -->
    <div id="site_content">
      <div class="sidebar">
       <h3>News</h3>
      <?php
          $xmlDoc = new DOMDocument();
          $xmlDoc->load("https://www.linux-magazine.com/rss/feed/lmi_news");


          $vesti = $xmlDoc->getElementsByTagName("item");
          foreach($vesti as $vest){ 
              $title = $vest->getElementsByTagName("title")->item(0)->nodeValue;
              $link = $vest->getElementsByTagName("link")->item(0)->nodeValue;
              $description = $vest->getElementsByTagName("description")->item(0)->nodeValue;
            // Prikazivanje xml podataka:
              echo "<div class='wrapper_xml'>";
                echo "<h4>".$title ."</h4><br/>";
                echo "<p>";
                echo $description;
                echo "<p>";
                echo "<a href='$link' target=_blank;'>Read more...</a>";
              echo "</div>";
            }
    ?>
      </div> <!-- End of sidebar -->

      <div id="content">
