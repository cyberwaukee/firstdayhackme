# firstdayhackme

Just a simple hackme to have a little bit of fun on the first day of Cyber Defense for Waukee High School.

Developed by Ethan Grote and Andrew Colosky. 


*************   WARNING SPOILERS!!   *************


Level 1 - You have to view the source of the web page in order to get the password.

Level 2 - See level 1 but it's in the javascript of the page (the javascript doesn't actually do anything fun-fact).

Level 3 - Simply need to add an alert statement in the bot (EX <script>alert('BLUH')</script>). You don't actully need the middle part, the script only looks for the <script>alert( and </script> to verify. Pretty basic but it will work for what we need it to.

Level 4 - The title of the page is a huge hint. Each number set describes the number set behind it. For example, if the first number in the set is '2', the second number would be '12' (one 2), the third would be '1112' (one 1 one 2).

Level 5 - You have to download the picture and go to the website that is linked in the source code. Pretty simple click of a button after that.

Level 6 - This one uses GET requests instead of POST. You have to change the username in the url in order to get the right username in. 

Requires PHP 5 and a web server to run, the web pages are pretty simple and straightforward. 
