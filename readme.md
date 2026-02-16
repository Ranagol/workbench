# How to start

We are using workbench just for testing and learning. For this, the built in PHP server is more than
enough. So, just run:

php -S localhost:8889

You will need Xampp when you want to use DB.


# Hot reload
This means: whenever we save our code, the browser reloads our page (so we do not have to do this 
every time, manually.) To do this...

Start php server:                               php -S localhost:8000
Start Browser-Sync in another terminal:         npx browser-sync start --proxy "localhost:8000" --files "**/*.php"

Open browser to:                                http://localhost:3000/testTopics/testingPlace.php
Edit and save - browser auto-refreshes!