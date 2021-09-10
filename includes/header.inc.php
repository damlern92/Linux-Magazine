<?php
if (!isset($page_title)) $page_title = 'Linux magazine';?>
<!DOCTYPE HTML>
<html>

<head>
  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" type="text/css" href="assets/header.css" title="style" />
  <link rel="stylesheet" type="text/css" href="assets/content.css" title="style" />
  <link rel="stylesheet" type="text/css" href="assets/footer.css" title="style" />
  <link rel="stylesheet" type="text/css" href="assets/additional_c.css" title="style" />

  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon_io//favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
</head>

<body>

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
            // for($i=0;$i<=count($vesti);$i++){
              $title = $vest->getElementsByTagName("title")->item(0)->nodeValue;
              $link = $vest->getElementsByTagName("link")->item(0)->nodeValue;
              $description = $vest->getElementsByTagName("description")->item(0)->nodeValue;
            // Displaying xml data:
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
