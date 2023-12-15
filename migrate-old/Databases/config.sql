CREATE DATABASE IF NOT EXISTS `if0_35189511_task_generator`;
USE if0_35189511_task_generator;

-- Tasks Table
CREATE TABLE `Tasks` (
  `Task_ID` int(11) NOT NULL,
  `Task_code` varchar(64) CHARACTER SET ascii NOT NULL,
  `Task_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `Tasks`
  ADD PRIMARY KEY (`Task_ID`);

ALTER TABLE `Tasks`
  MODIFY `Task_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
