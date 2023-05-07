<?php
// File upload related php.ini settings -

# php.ini ফাইল এর path দেখার জন্য এ function টা use হয়।
phpinfo();




// post_max_size
// upload_max_filesize
/**
 * PHP তে সবসময় php.ini নামে একটা ফাইল এর থেকে সমস্ত configuration গুলো load হয়।
 * post_max_size => এটার priority টা বেশী, কারণ আমার form এ যত ডাটা থাকবে, সব গুলোর যোগফল কিন্তু এটা।
 * upload_max_filesize => এটাতে যদি বেশী mb থাকে, তারপর ও কোন লাভ হবে না।

 * আমার form এ যদি ৫ টা file input থাকে,
 * upload_max_filesize যদি 10mb করে দিয়ে থাকি, তাহলে post_max_size দেওয়া উচিত 5*10 = 50mb, এবং তার সাথে কিছু breathing space | total upload_max_filesize = 54mb/60mb is perfect
 * post_max_size যদি কম থাকে, upload_max_filesize যদি বেশী থাকে, তাহলে কোন লাভ হবে না।

 * আমি যদি নিজস্ব local server এ থাকি তাহলে php.ini এর  Configuration File edit করতে পারি, আর যদি shared hosting হয় php.ini কিভাবে change করব, সেটা shared hosting guide এ বলা আছে, না থাকলে php.ini কিভাবে override করব সেটা জিজ্ঞেস করে নিতে হবে।

 * how can edit php.ini file in local server :
 *  step-1:  terminal open : vs_code [Ctrl + `] || php_strom [Alt + F12]
 *  step-2:  search: post_max_size | change: 60M করে দিব | অর্থাৎ, ৬ টা input field এর জন্য সব গুলো মিলিয়ে হবে
 *  step-3:  search: upload_max_filesize | change: 10M করে দিব | অর্থাৎ, প্রতিটার input field এর জন্য হবে
 *  step-4:  web server restart/php file reopen[php_strom] | অর্থাৎ, appcache server off & then on.
 *  step-5:  check: php.ini file <post_max_size> and <upload_max_filesize>

 * how can change php.ini file to cPanel in shared hosting server : if allowed
 *  step-1:  go to cPanel
 *  step-2:  search: php[select PHP Version] and <click>
 *  step-3: সেখান থেকে যেকোন কিছু change করা যাবে, এখানে সবচেয়ে important হচ্ছে <Switch to PHP Options>
 *  step-4: এখান থেকে যে কোন কিছু change করে <save> দিব
 */
// file_uploads: এটা যদি 0 করা থাকে, তাহলে কোন file upload করাই যাবে না,
// max_file_uploads: এখানে ডিফল্ট 20 দেওয়া থাকে, অর্থাৎ একটা ফাইল এ কয়টা ফাইল একসাথে upload করতে পারব।
