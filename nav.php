<?php
<ul class="nav">
    <li class="nav-item"><a class="nav-link" href="template.php?page=home">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="template.php?page=about">About</a></li>
    <li class="nav-item"><a class="nav-link" href="template.php?page=contact">Contact</a></li>
    <li class="nav-item"><a class="nav-link" href="template.php?page=buy">Buy Now!</a></li>
      <li class="nav-item"><a class="nav-link" href="template.php?page=bob ">bob</a></li>
</ul>

$myNav = array(
    array(
        "title"=>"Home",
        "page"=>"index.php"
        ),
    array(
        "title"=>"Contact",
        "page"=>"contact.php"
        ),
    array(
        "title"=>"About",
        "page"=>"about.php"
        ),
    array(
        "title"=>"Mariah",
        "page"=>"mariah.php")
        );
        $myNavCount($myNav) ?>
        