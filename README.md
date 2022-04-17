# Instructions on how to setup the program

Copy paste the code into the htdocs folder. Than follow the instructions on setting up the database.
You will have to start the Apache and MySQL programs on the xammp dashboard.

Open xammp and set up a database.

Click new under your database and go to the sql tab.
Copy paste and run:
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL ,
  `FirstName` varchar(128) NOT NULL,
  `LastName` varchar(128) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userUid` varchar(100) NOT NULL,
  `userPwd` varchar(100) NOT NULL,
  `Admin` varchar(1) NOT NULL DEFAULT '0',
  `OrderHist` text DEFAULT ' '
)

Than run:

ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

Than run:

ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

Than run:
INSERT INTO `accounts` (`id`, `FirstName`, `LastName`, `userEmail`, `userUid`, `userPwd`, `Admin`, `OrderHist`) VALUES
(1, 'customer', 'customer', 'customer@example.com', 'customerUID', 'customerPWD', '0', 'test Order:;:;:HD:;:;:2B'),
(2, 'super', 'user', 'superuser@example.com', 'superuserUID', 'superuserPWD', '1', NULL);


With this, you have created a working database that handles the login system and the order system.
You have also setup a dummy customer account, a dummy admin account, and a test order.


The credincials for the customer account is:
Username: customerUID
Password: customerPWD

The credincials for the admin is:
Username: superuserUID
Password: superuserPWD
