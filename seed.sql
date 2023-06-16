-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: mariaDb
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` varchar(36) NOT NULL,
  `fullName` varchar(128) NOT NULL,
  `bookingDate` varchar(512) NOT NULL,
  `checkIn` varchar(512) NOT NULL,
  `checkOut` varchar(512) NOT NULL,
  `specialRquest` varchar(512) NOT NULL,
  `roomType` varchar(128) NOT NULL,
  `roomId` varchar(36) NOT NULL,
  `status` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES ('0f01605c-3751-47d8-8998-a7dccb01eacd','Paul Willms','5/30/2023','5/31/2023','5/30/2023','Animi facere quam officia aspernatur.','double','4f6c4d01-9336-4f4d-96b8-85d2de7eefa3','Booked'),('14e9bf89-8669-4a11-a599-ef8beb9d438e','Tommy Volkman PhD','5/31/2023','5/30/2023','5/31/2023','Nobis incidunt odio rerum voluptatum.','double','ea4a7359-8ec7-4a15-8c5e-5b7ad404e0ac','inProgress'),('40b1411b-4447-4bde-a05c-ad8521ed199d','Mrs. Cheryl Dare','5/31/2023','5/31/2023','5/31/2023','Praesentium placeat at quis dolores.','double-superior','c0bbb482-dc0e-4d1b-b527-99bc84efbd80','Canceled'),('4604c40d-4dba-4585-b3b3-d763ad0c0c6f','Victor Connelly','5/31/2023','5/31/2023','5/31/2023','Deserunt voluptas possimus accusantium odio.','suite','dae9ceab-e915-4579-8db5-cd4868794b96','Booked'),('4b13f40c-7eda-422b-ac05-723b07cb126a','Mrs. Warren Boyle','5/31/2023','5/31/2023','5/30/2023','Pariatur voluptate dignissimos explicabo ex.','double','2379240f-fe90-48bb-8a3b-57caf5a990f4','Canceled'),('4fd531b1-ae4c-49ae-8457-503e8af2f92e','Ben Zulauf','5/31/2023','5/30/2023','5/31/2023','Impedit quia blanditiis minus iusto.','double','2379240f-fe90-48bb-8a3b-57caf5a990f4','inProgress'),('51172755-b0db-4536-b868-c8487ca7214c','Krystal Wiegand','5/31/2023','5/31/2023','5/31/2023','Nisi eius commodi aspernatur placeat.','double','2379240f-fe90-48bb-8a3b-57caf5a990f4','Canceled'),('55469f88-a5bc-4cd6-bcad-ec788ee2b44c','Otis Murphy','5/31/2023','5/31/2023','5/31/2023','Commodi ab libero dolorum consequuntur.','single','d3706e4a-8108-41fc-aa85-9ea5317ef0d8','Booked'),('6abb7a31-0064-4df0-902c-9e9d78f4ea0c','Miss Ernestine Johnston','5/31/2023','5/30/2023','5/31/2023','Ut id qui voluptatum rerum.','double-superior','fd6e60cd-4184-4d1b-9071-90a0aea8ca09','Booked'),('886f456a-7ba7-4bcb-9c0d-fc5b93063837','Ashley Kunze','5/31/2023','5/31/2023','5/31/2023','Fuga suscipit iure qui corporis.','suite','90943cba-103e-4fa8-a453-b5ac9b8dd9be','inProgress'),('abd1811d-3c17-49c1-ae86-111e711ea2f7','George Ratke','5/31/2023','5/30/2023','5/31/2023','Possimus nihil atque ipsam quod.','double-superior','c0a920b9-330b-4870-9c65-54c1f84ff3d8','Canceled'),('b0aa1b09-86a0-4dd5-86c4-cf72bc61af59','Karl Weber','5/31/2023','5/31/2023','5/31/2023','Eveniet nobis hic impedit illo.','double-superior','452e9940-4561-4024-b2ce-adabd2570a5b','Booked'),('bf65b349-e28d-437a-8c93-9659dfa76c57','Dave Wiza','5/31/2023','5/30/2023','5/31/2023','Dolores ducimus repudiandae dicta occaecati.','double-superior','8eeb8ea6-f6df-44f7-898c-94b7cd4c3ab3','Canceled'),('c077eb80-52a9-4bc9-9fbc-bc67eeadb2a3','Dianne Lehner MD','5/31/2023','5/31/2023','5/31/2023','Vitae natus repudiandae soluta at.','single','fb189e98-22c9-4e74-a672-a5eb31f0a6e4','Canceled'),('c3688fa5-b07f-4cfb-94cb-1f6c89a18d8f','Steven Bauch','5/31/2023','5/31/2023','5/31/2023','Ea nemo omnis molestiae molestiae.','single','ce06bd8c-d7c6-4edf-811b-03ef994fd63d','inProgress'),('c4b08f8a-65e9-4810-b0b7-55b8b82afade','Deborah Haag','5/31/2023','5/31/2023','5/30/2023','Excepturi esse modi praesentium eligendi.','single','ce06bd8c-d7c6-4edf-811b-03ef994fd63d','inProgress'),('e3867e48-8077-4042-a5b2-c32986392448','Michele Heidenreich','5/30/2023','5/31/2023','5/31/2023','Quos dolorum laudantium consequuntur nostrum.','single','fe028801-99de-4b21-962c-4219e5653cef','Canceled'),('e7fda617-aafa-4fcf-9b39-f6c54d6921c2','Rick Spencer','5/30/2023','5/31/2023','5/31/2023','Possimus placeat quam dolorum qui.','double-superior','452e9940-4561-4024-b2ce-adabd2570a5b','Booked'),('eb0b710a-0157-4595-8e3d-1528b22705f2','Cecilia Bartell','5/31/2023','5/31/2023','5/31/2023','Distinctio dolor totam voluptatum saepe.','suite','90943cba-103e-4fa8-a453-b5ac9b8dd9be','Canceled'),('f7a16559-5bc1-4d8b-86f5-792b0b4763f3','Corey Tromp','5/31/2023','5/31/2023','5/31/2023','Minus voluptates omnis vel laborum.','double','4f6c4d01-9336-4f4d-96b8-85d2de7eefa3','inProgress');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` varchar(36) NOT NULL,
  `fullName` varchar(128) NOT NULL,
  `commentDate` varchar(36) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `subjet` varchar(128) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  `action` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES ('266fb371-284d-4bff-8fdf-88fc9a1b039b','Megan Lockman DDS','Wed May 31 2023','Kevon.Kiehn81@hotmail.com','+34-892-283-685','Quidem ullam quisquam praesentium tenetur.',0,0),('2ce634a6-b0c6-4125-97c1-6e23ce5f73af','Jesse Senger','Wed May 31 2023','Wyman23@hotmail.com','+34-122-637-667','Totam quibusdam temporibus atque reiciendis.',1,1),('2f68da5e-8298-43ee-a9a7-a8396c00e7fd','Carlos Abernathy V','Wed May 31 2023','Emmet_Heathcote87@gmail.com','+34-659-864-363','Ad voluptatibus fuga aut quam.',0,0),('3af2eab8-8de7-4db2-9604-49033c4cb156','Ramiro Dickinson','Tue May 30 2023','Henriette81@gmail.com','+34-889-311-536','Minima quibusdam excepturi magnam ut.',1,0),('3dd0575d-556d-4112-9a16-55fdd1031e8f','Lee Lockman','Wed May 31 2023','Ellis_Olson@gmail.com','+34-716-142-326','Eligendi reprehenderit incidunt temporibus iure.',1,1),('5bbb85cf-42a5-4a66-8dbe-fd14fe2d7f43','Mathew Osinski','Tue May 30 2023','Jeremy.Gutmann43@hotmail.com','+34-914-883-143','Impedit molestias dignissimos commodi sit.',0,0),('6630de13-71c2-43d0-a39b-ea3d56e75aab','Erick Mann I','Tue May 30 2023','Betsy.Schumm60@yahoo.com','+34-854-627-620','Corrupti numquam dolor magni adipisci.',0,1),('697dea71-6b93-4951-a0e8-fc8d8ccce7a3','Genevieve Sanford Sr.','Tue May 30 2023','Malvina_Padberg37@hotmail.com','+34-234-549-045','Molestias distinctio iure ex fuga.',1,1),('793726d4-08de-4134-bdd7-8b67f285f6ac','Camille Durgan','Tue May 30 2023','Clay21@hotmail.com','+34-404-461-496','Qui neque perspiciatis tempore commodi.',1,1),('7bfbd821-9575-45b9-b5bc-2c8357110d2b','Barry Berge','Wed May 31 2023','Brooks_Krajcik20@gmail.com','+34-393-346-210','Minus perferendis facilis accusantium provident.',0,0),('88d07efa-32fd-4d04-bfd9-f6888b17a93b','Forrest Kassulke','Wed May 31 2023','Joan_Prosacco@hotmail.com','+34-472-241-504','Temporibus deleniti voluptate delectus accusamus.',1,1),('997ddf8f-de3f-437e-a57e-c51e77e6cc60','Tiffany Schumm','Wed May 31 2023','Modesto.Zboncak@gmail.com','+34-752-991-608','Consectetur ipsum mollitia esse illum.',1,1),('9b48eb84-f420-4e3c-b96d-739d11a7e950','Kim Halvorson DVM','Tue May 30 2023','Carley_Schiller@hotmail.com','+34-444-372-208','Exercitationem iste laudantium nostrum animi.',0,0),('9c92c85f-b75e-4a7f-a2e0-d19c96ce594c','Antonia VonRueden','Wed May 31 2023','Victor46@gmail.com','+34-527-341-706','Nesciunt aspernatur maiores vel magni.',0,0),('b4641bea-ed49-4c46-8678-c1c6a9125675','Dorothy Labadie DDS','Tue May 30 2023','Kaela_Hilll@yahoo.com','+34-602-155-049','Facilis rem vero qui distinctio.',1,0),('c968edaa-fe93-4e06-aba0-2d24b7c140e3','Dana Anderson','Wed May 31 2023','Margarette94@yahoo.com','+34-160-714-924','Quaerat cupiditate debitis dicta rerum.',0,1),('caa70ee1-1e6c-471a-a201-7d3d50ba6f9e','Sherri Toy','Tue May 30 2023','Joannie.Yundt@hotmail.com','+34-812-195-740','Aspernatur eveniet voluptatum tempora impedit.',1,1),('cfaf26e5-2d53-4150-adb2-39bdf2af40a7','Isabel Harber','Wed May 31 2023','Eloy.Grimes39@hotmail.com','+34-956-792-242','Deserunt impedit hic placeat praesentium.',1,1),('f715f904-a602-4586-8093-8e555eb056cd','Steve Heaney','Wed May 31 2023','Cullen.OConnell@yahoo.com','+34-819-500-064','Saepe corrupti tenetur aspernatur sit.',1,0),('f81561c1-ad05-4cf3-9727-06ee883f3732','Wilma Welch','Wed May 31 2023','Kallie_Kirlin41@yahoo.com','+34-051-764-659','Omnis laborum quam sint quod.',1,1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` varchar(36) NOT NULL,
  `bedType` varchar(128) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `facilities` varchar(512) NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `doorNumber` int NOT NULL,
  `floorNumber` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES ('0645b711-7bfd-46a7-899a-6d1ccdeb2453','suite',1,'[\"Free parking\",\"Coffee set\",\"TV\"]',975,11,5,4),('0648bc80-3142-4247-9213-0d18cb3e1464','suite',0,'[\"Free parking\",\"TV\",\"Coffee set\"]',599,38,9,2),('22f47e07-38fa-4735-a94b-035a0a0bee4e','double',0,'[\"Air conditioning\",\"Bathtub\",\"Kitchen\"]',976,41,6,3),('2379240f-fe90-48bb-8a3b-57caf5a990f4','double',0,'[\"Kitchen\",\"TV\",\"Free parking\"]',832,94,3,1),('32ead8cf-a9d0-4402-94e7-60c123bd4be2','double',0,'[\"Kitchen\",\"Coffee set\",\"TV\"]',670,74,17,3),('3fcbeea3-701f-4234-9a7f-61e3fe2f0ca9','double-superior',0,'[\"Kitchen\",\"Wifi\",\"Air conditioning\"]',275,83,17,1),('452e9940-4561-4024-b2ce-adabd2570a5b','double-superior',0,'[\"Bathtub\",\"Wifi\",\"TV\"]',679,75,3,2),('4f6c4d01-9336-4f4d-96b8-85d2de7eefa3','double',1,'[\"Air conditioning\",\"Free parking\",\"Bathtub\"]',232,10,15,1),('610a001f-3c2b-466e-b4d6-cd3950bbb624','single',0,'[\"Kitchen\",\"Air conditioning\",\"Wifi\"]',729,21,17,5),('8eeb8ea6-f6df-44f7-898c-94b7cd4c3ab3','double-superior',1,'[\"Free parking\",\"TV\",\"Coffee set\"]',484,74,11,1),('90943cba-103e-4fa8-a453-b5ac9b8dd9be','suite',1,'[\"Kitchen\",\"TV\",\"Coffee set\"]',199,83,2,3),('c0a920b9-330b-4870-9c65-54c1f84ff3d8','double-superior',1,'[\"Wifi\",\"TV\",\"Coffee set\"]',194,6,8,4),('c0bbb482-dc0e-4d1b-b527-99bc84efbd80','double-superior',0,'[\"Kitchen\",\"Air conditioning\",\"Free parking\"]',591,56,6,5),('ce06bd8c-d7c6-4edf-811b-03ef994fd63d','single',0,'[\"Kitchen\",\"Air conditioning\",\"Wifi\"]',535,18,4,1),('d3706e4a-8108-41fc-aa85-9ea5317ef0d8','single',1,'[\"Wifi\",\"Kitchen\",\"TV\"]',653,64,16,4),('dae9ceab-e915-4579-8db5-cd4868794b96','suite',0,'[\"Kitchen\",\"TV\",\"Bathtub\"]',400,43,9,2),('ea4a7359-8ec7-4a15-8c5e-5b7ad404e0ac','double',1,'[\"Air conditioning\",\"Kitchen\",\"Coffee set\"]',559,78,13,5),('fb189e98-22c9-4e74-a672-a5eb31f0a6e4','single',0,'[\"Free parking\",\"Wifi\",\"TV\"]',751,57,10,3),('fd6e60cd-4184-4d1b-9071-90a0aea8ca09','double-superior',1,'[\"Coffee set\",\"Free parking\",\"TV\"]',870,15,8,3),('fe028801-99de-4b21-962c-4219e5653cef','single',0,'[\"Free parking\",\"TV\",\"Kitchen\"]',245,54,4,4);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` varchar(36) NOT NULL,
  `fullName` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `joinDate` varchar(36) NOT NULL,
  `jobTitle` varchar(128) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `number` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('0064acd6-b158-4c38-afd5-b1f6674952f3','Vanessa Pfannerstill III','Annamarie71@yahoo.com','5/31/2023','Central Solutions Executive',0,'+34-383-956-051'),('0ac40479-4104-4d0b-80da-75fa983b4b07','Trevor Feest','Sincere40@hotmail.com','5/31/2023','International Marketing Supervisor',1,'+34-465-038-206'),('0fc60bb2-9c52-4dde-a63e-bb60e396f838','Mrs. Terri Abshire','Sydney81@yahoo.com','5/31/2023','Legacy Intranet Technician',1,'+34-925-517-952'),('1b503b59-bf35-402b-a1cb-8109b46c74ae','Elvira Rath MD','Orin.Ziemann41@gmail.com','5/31/2023','District Program Liaison',0,'+34-186-182-893'),('275f3854-573c-4d7c-bf7f-234cf9f1ed45','Debbie Gutmann','Monte_Abshire94@hotmail.com','5/31/2023','Investor Solutions Assistant',1,'+34-770-408-942'),('285f6ba8-130f-4eb4-9cbd-e911b966ee76','Mercedes Carroll','Giovanny29@hotmail.com','5/31/2023','Investor Mobility Director',0,'+34-924-298-147'),('3090fff5-386b-45d1-9d6b-6fc8420b9fb0','Nick Parisian','Oswaldo.Ondricka39@gmail.com','5/31/2023','Global Mobility Analyst',0,'+34-385-143-296'),('4332b69d-62e3-4488-9b7c-b7ffc5c348de','Nick Renner','Layla8@hotmail.com','5/31/2023','Human Factors Specialist',0,'+34-010-735-181'),('4d793451-ff7c-4c0b-87c8-d74e2d0fd19b','Shannon Volkman','Brook99@yahoo.com','5/31/2023','Customer Directives Liaison',1,'+34-517-270-553'),('52591b43-e558-4576-9146-4a4c4f582093','Mr. Kerry Simonis MD','Jeff.Gibson@yahoo.com','5/31/2023','Regional Program Coordinator',1,'+34-029-437-946'),('5479180a-218d-4232-8441-96085a56cf29','May Gorczany','Rickey_Dicki@gmail.com','5/30/2023','Investor Mobility Executive',0,'+34-232-221-028'),('559216d4-bd99-4a51-b0c7-d654e6ce0dcf','Laurence Klocko','Alberto_Davis89@hotmail.com','5/30/2023','Investor Communications Planner',1,'+34-146-542-095'),('5774bbcc-7048-42d7-94ac-b7d936486d66','Wesley Barrows','Giovanna_Dach18@yahoo.com','5/31/2023','Human Branding Liaison',0,'+34-563-929-280'),('5944caeb-b1ca-49c9-9c1b-80a1606cd80c','Ernesto Dickinson','Myrtis.Emard40@gmail.com','5/31/2023','Customer Assurance Supervisor',1,'+34-366-599-064'),('59567601-06c0-4371-a7c2-0495cd6fe2e3','Doyle Sanford MD','Norene87@gmail.com','5/31/2023','Chief Marketing Architect',0,'+34-058-817-223'),('5e4258a8-05cc-4b36-8a9c-b7b00645a363','Gordon Herman','Darius.Abshire79@gmail.com','5/31/2023','Direct Metrics Liaison',0,'+34-651-503-240'),('78f7c298-199d-46d0-9af7-fc1b54fe6cb3','Della Gerlach','Norris_Bashirian@gmail.com','5/31/2023','Lead Research Agent',1,'+34-130-901-022'),('833962d1-c8c4-42bb-ace0-c61f59d33ea0','Rolando Witting','Audie.Shanahan@yahoo.com','5/31/2023','Senior Research Coordinator',0,'+34-842-908-844'),('8392eac7-d91d-4ec5-b208-95f75a5beef4','Susan Schmitt','Hailie_Bins@gmail.com','5/31/2023','Forward Markets Engineer',0,'+34-902-846-189'),('85c6d279-0027-49d6-b281-993b7d065cf1','Ivan Becker Sr.','Wilber_Green@gmail.com','5/31/2023','National Tactics Officer',0,'+34-670-917-016'),('8865de5c-4b25-42ca-93d4-cb21355f9795','Julie Boyle','Verda_Hermiston@yahoo.com','5/31/2023','National Mobility Coordinator',1,'+34-877-639-564'),('8e093679-3acd-4010-a110-46df05fa9da9','Wilma Jacobson','Javier_Strosin52@hotmail.com','5/30/2023','Internal Paradigm Facilitator',0,'+34-711-436-075'),('91e46521-2142-4192-a8b0-4bda04ce96e2','Darnell Wunsch','Talon21@gmail.com','5/31/2023','Forward Brand Representative',1,'+34-225-846-953'),('960a476b-ac81-4396-86d5-387bc4347672','Dr. Maurice Cummerata','Camron24@hotmail.com','5/31/2023','National Usability Coordinator',0,'+34-132-912-020'),('97b8333c-e7b0-476e-8eee-6055173b4805','Miss Daisy Gorczany','Gilda.Russel@gmail.com','5/30/2023','Chief Optimization Orchestrator',1,'+34-541-013-892'),('9858b68f-e8d4-4696-8a96-8ec04f01433d','Joyce Grant','Lisette_Crona82@hotmail.com','5/31/2023','Lead Security Specialist',0,'+34-526-140-542'),('98cddd90-8b5e-4237-bb2c-2619cf3b14eb','Nathaniel Bosco','Kenneth64@gmail.com','5/30/2023','Central Division Assistant',1,'+34-778-651-907'),('9fe07dd2-a5a1-4b87-8c5c-ae18ef6599c5','Jessica Gutkowski','Pat39@yahoo.com','5/31/2023','Principal Tactics Manager',1,'+34-590-414-832'),('a76925ea-64f4-4dcf-8d9a-5221909dafe6','Peggy Hackett','Tanya59@hotmail.com','5/31/2023','Principal Usability Agent',0,'+34-204-832-915'),('a84637c0-30e9-4ce1-a8a1-83f753ccd7c0','Tomas Fisher','Reggie_Kemmer@gmail.com','5/31/2023','International Operations Administrator',0,'+34-134-327-394'),('be2fccf3-6786-44d8-9dbd-cc53bf3cf061','Morris Jacobson','Hermann29@gmail.com','5/31/2023','Global Group Executive',1,'+34-389-896-429'),('ca3cb549-1828-49dd-93b4-8b5c396027f7','Tricia Haley','Robyn52@gmail.com','5/30/2023','Product Division Supervisor',0,'+34-609-601-911'),('cd718840-4986-4a25-b1dd-3bdae4c23c8b','Eddie Hauck Sr.','Declan_Rau35@yahoo.com','5/31/2023','Product Marketing Planner',1,'+34-560-719-613'),('cdfa8b3b-ea58-4352-a770-f8d71e4e5eed','Rachel Sauer','Dereck78@yahoo.com','5/31/2023','Legacy Web Assistant',0,'+34-600-071-336'),('d1d099be-8203-4e2f-b943-05625d15846d','Tonya Kertzmann','Kay.Dare@yahoo.com','5/31/2023','Customer Assurance Consultant',0,'+34-166-282-621'),('d405bc0b-3dc1-4df5-95c6-469eddd85c06','Harvey Kerluke','Brandon28@yahoo.com','5/31/2023','International Mobility Orchestrator',1,'+34-088-166-384'),('d74fc780-92ea-4e78-aa12-bfc05273758a','Maxine Reilly','Wilfredo_Schroeder@yahoo.com','5/30/2023','International Accountability Specialist',1,'+34-726-686-707'),('d937ce20-02bb-4193-b391-7f176e988d03','Justin Ratke','Mireille_Strosin95@gmail.com','5/31/2023','Dynamic Applications Assistant',1,'+34-148-436-811'),('dbf27058-c577-43cd-aded-390166403b3e','Darrell Runolfsson','Kennedi_Lang@gmail.com','5/31/2023','Principal Research Architect',1,'+34-798-714-715'),('ed76a27e-bdc0-40e3-a6ed-b3593d197a15','Salvador Donnelly','Meagan.Lesch@hotmail.com','5/31/2023','Direct Creative Developer',1,'+34-153-939-141');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-05 17:23:13
