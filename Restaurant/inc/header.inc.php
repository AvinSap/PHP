<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"/>
    <title>Dine and Whine &bull; <?php echo $pageTitle; ?></title>
  </head>
  <body>
    <header class="header-with-background" style="background-image: url('<?php echo $headerImage; ?>'); height: 20rem; color: white; background-repeat:no-repeat; background-size: cover;">
      <h1 style ="text-align: center;" class="text-4xl font-bold p-5 ">Dine and Whine Nepal</h1>
      <p style="text-align: center; font-size: 1.2rem; max-width: 800px; margin: auto;">
        At Dine and Whine Nepal, we are dedicated to bringing the best of global
        cuisine to your table. Our mission is to create a dining experience that
        celebrates the rich tapestry of flavors from Nepal.
      </p>
      <nav style="text-align: center;" class="mt-2 pt-2 font-bold">
        <a class="bg-white rounded-lg hover:shadow-lg" href="web.php">Our Mission</a>
        <a class="bg-white rounded-lg" href="ingredient.php">Ingredients</a>
        <a class="bg-white rounded-lg" href="menu.php">Menu</a>
      </nav>
    </header>

    <main>