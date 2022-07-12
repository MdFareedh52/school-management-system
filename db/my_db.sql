SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `school1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `role` enum('teacher','principal') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'teacher', 'admin', 'learn', 'prasath'),
(2, 'principal', 'user', 'learn1', 'Md Fareedh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

--
--CREATE TABLE 'student'
--
create table student_insert (
   id int(100) not null auto_increment,
   Name varchar(256) not null,
   Age int(11) not null,
   Class varchar(256) not null,
   Email varchar(256) not null,
   DateofBirth varchar(100) not null,
   Gender varchar(256) not null,
   FatherName varchar(256) not null,
   MotherName varchar(256) not null,
   Address varchar(256) not null,
   City varchar(256) not null,
   State varchar(256) not null,
   Zip bigint(20) not null,
   Contact bigint(40) not null,
   primary key(id)
    );

----
----CREATE TABLE 'teacher'
----
CREATE TABLE teacher_register(
    Id int(11) not null AUTO_INCREMENT,
    Name varchar(256) not null,
    Age int(3) not null,
    Class varchar(256) not null,
    Date_of_Birth varchar(256) not null,
    Qualification varchar(256) not null,
    Gender varchar(256) not null,
    Email varchar(256) not null,
    Address varchar(256) not null,
    Contact bigint(10) not null,
    City varchar(256) not null,
    State varchar(256) not null,
    Zip bigint(20) not null,
    PRIMARY KEY(Id)
    );

----
----EVENT APPROVAL
----
CREATE TABLE event_approval (
  id int(100) not null AUTO_INCREMENT,
  EventTitle varchar(256) not null,
  Discription varchar(256) not null,
  EventDate varchar(256) not null,
  EventApproval varchar(256) not null,
  Place varchar(256) not null,
  PRIMARY KEY(id)
);

----
----CREATE EVENT 
----
CREATE TABLE event (
  id int(100) not null AUTO_INCREMENT,
  EventTitle varchar(256) not null,
  Discription varchar(256) not null,
  EventDate varchar(256) not null,
  Place varchar(256) not null,
  PRIMARY KEY(id)
  );

----
---- CREATE TABLE 'eventreport'
----
CREATE TABLE eventreport (
  id int(100) not null AUTO_INCREMENT,
  EventTitle varchar(256) not null,
  EventDate varchar(256) not null,
  PublishDate varchar(256) not null,
  Discription varchar(256) not null,
  ChiefGuest varchar(256) not null,
  Place varchar(256) not null,
  PrincipalApproval varchar(256) not null,
  PRIMARY KEY(id)
);

