-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 07:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(255) NOT NULL,
  `Admin_Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`Admin_Id`, `Admin_Name`, `Admin_Email`, `Password`) VALUES
(1, 'Owais', 'owais@gmail.com', '$2y$10$NvNT1O5ESm.5t.Lip3lqSuah4o/c1thuJiqj55M/tAg7liA2X4796'),
(2, 'Huda', 'huda@gmail.com', '$2y$10$jXxTnmEsJNXgwQ9BbO/fluLbFhBPDa6CEveOTrDyXRJh8CeTlDK.C'),
(3, 'Ammar', 'ammar@gmail.com', '$2y$10$Zglc2Yz5Zm3Ul2RIwKggX.xARBpgnH7FfnFjFzgQ/1RSI6oYHw85m'),
(4, 'Pakiza', 'pakiza@gmail.com', '$2y$10$rZJ3cWrRcnMJns7UuozoIOu.p7fyF4xRWa0VHWn2Ckd1F6p9ARcbK');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `Artist_Id` int(11) NOT NULL,
  `Artist_Name` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Description` longtext NOT NULL,
  `Nationality` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`Artist_Id`, `Artist_Name`, `Img`, `Date_of_birth`, `Description`, `Nationality`) VALUES
(1, 'Atif Aslam', 'Atif Aslam 2.jpg', '1983-03-12', 'Atif Aslam (born 12 March 1983) is a Pakistani playback singer, songwriter, composer, and actor. Aslam predominantly sings in Urdu, but has also sung in Hindi, Punjabi, Bengali, and Pashto. In 2008, he received the Tamgha-e-Imtiaz, the fourth-highest civilian honor award from the Pakistani government. He is also a recipient of several Lux Style Awards.', 164),
(2, 'Asim Azhar', 'asim3.jfif', '1996-10-29', 'Asim Azhar (born 29 October 1996) is a Pakistani singer, songwriter, musician and an actor. He started his career as a singer on YouTube, covering contemporary Western songs before he became a public figure. In 2019, Azhar also had an album with an Indian record company and a Bollywood single planned for release. ', 164),
(3, 'Ali Zafar', 'ali zafar 2.jpg', '1980-05-18', 'Ali Zafar  (born 18 May 1980) is a Pakistani singer-songwriter, model, actor, producer, screenwriter and painter. He started out on Pakistani television before becoming a popular musician, later also established a career in Bollywood and his success led many Pakistani actors to venture into Hindi films.[1] He has received five Lux Style Awards and a Filmfare Award nomination. ', 164),
(4, 'Farhan Saeed', 'farhan saeed 2.jpeg', '1984-09-14', 'Farhan Saeed Butt (born 14 September 1984) better known by his stage name Farhan Saeed is a Pakistani singer-songwriter, actor and entrepreneur. Saeed is the former lead vocalist of the Pakistani band Jal and owns the restaurant Cafe Rock in Lahore. He sings in Urdu and Punjabi. He made his acting debut with the drama De Ijazat Jo Tu (2014).', 164),
(5, 'Momina Mustehsan', 'momina.jfif', '1992-09-05', 'Momina Mustehsan (born 5 September 1992) is a Pakistani singer-songwriter and musician. Mustehsan has become one of the most popular and high-profile celebrities of Pakistan. In 2017, BBC named her one of the 100 most influential women, and the following year, Forbes featured her among its \"30 Under 30\" Asia list along with nine other Pakistani individuals. ', 164),
(6, 'Arijit Singh', 'arijit.jpg', '1987-04-25', 'Arijit Singh (born 25 April 1987) is an Indian playback singer and music composer. The recipient of several accolades including a National Film Award and seven Filmfare Awards, he has recorded songs in several Indian languages.', 101),
(7, 'G-Dragon', 'gdragon.jpg', '1987-08-18', 'Kwon Ji-yong, also known by his stage name G-Dragon, is a South Korean rapper, singer, songwriter, record producer, entrepreneur and fashion designer, known as the \"King of K-pop\". \r\nBorn and raised in Seoul, South Korea, G-Dragon officially debuted in 2006 and rose to prominence as the leader of the South Korean group Big Bang, which went on to become one of the best-selling boy bands in the world. \r\nBorn: August 18, 1988 (age 34 years), Seoul, South Korea\r\nRecord labels: YG Entertainment, Warner Music Group\r\nMusic groups: BIGBANG (Since 2006), GD X Taeyang, YG Family\r\n', 115),
(8, 'Ko Woo Rim', 'ko woo rim.jpg', '1995-07-10', 'Ko Woo Rim (고우림) is a South Korean singer under Beat Interactive. He is the youngest member of the crossover vocal quartet Forestella. Ko Woo Rim was musically-inclined as a child, due to his mother being a classically-trained former singer. He first learned to play the piano and initially thought of becoming a pianist instead of a singer due to his shyness, until his middle school homeroom teacher persuaded him to take voice lessons after hearing him sing.\r\nBorn: July 10, 1995 (age 28 years)\r\nSpouse: Kim Yu-na (m. 2022)\r\nMusic group: Forestella\r\nGenre: Crossover music, Classical, Soundtracks\r\nBirth place\r\nSangju, Gyeongsangbuk-do, South Korea\r\nHometown\r\nDaegu, South Korea\r\n', 115),
(9, 'Jung Kook', 'jungkook.jpg', '1997-09-01', 'Jeon Jung-kook, known mononymously as Jungkook, is a South Korean singer. He is a member and vocalist of the South Korean boy band BTS. He also recorded the soundtrack song \"Stay Alive\" for the BTS-based webtoon 7Fates: Chakho.  he became the first South Korean artist to release an official song for the FIFA World Cup soundtrack with \"Dreamers\", which he subsequently performed at the 2022 FIFA World Cup Opening Ceremony. Jungkook initially had dreams of becoming a badminton player when he was younger, but after seeing G-Dragon perform \"Heartbreaker\" on television, it influenced him to want to become a singer.Born: September 1, 1997 (age 25 years), Mandeok-dong, Busan, South Korea', 115),
(10, 'Kim Tae-hyung', 'taehyung.jpg', '1995-12-30', 'Kim Tae-hyung, also known professionally as V, is a South Korean singer and a member of the boy band BTS. Since his debut with the group in 2013. He appeared on the soundtrack for the television series Hwarang: The Poet Warrior Youth in 2016 and released his first independent song, the self-composed Scenery, in 2019. \r\nBorn: December 30, 1995 (age 27 years), Bisan-dong\r\nFull name: Kim Tae-hyung\r\nAwards: Hwagwan Order of Cultural Merit (2018)\r\nEducation: Korean Arts High School; Global Cyber University\r\nInstrument(s): Vocals', 115),
(11, 'Felix Lee', 'Felix Lee.jpg', '2000-09-15', 'Rapper, dancer, and singer Lee Felix is one of the rising K-pop stars in the world. Born Lee Yong Bok on September 15, 2000, in Sydney, Australia, his sun sign is Virgo. His parents are Korean immigrants, and he has two siblings, an older sister, Rachel or Jisue Lee, and a younger sister, Olivia. In Sydney, Felix attended St. Patrick’s Marist College and was a champion swimmer and taekwondo practitioner. When he was young, his father chose the westernized name ‘Felix’ for him, which means ‘happiness,’ and was an apt moniker for the energetic, bubbly kid he was. He also played the piano from a young age and loved to sing and dance. Along with fellow bandmates Lee Know and Hyunjin, he endorsed sneakers for the Italian brand Etro. His quiet nature and deep voice endear him to fans who eagerly await his recovery and new music. Born: September 15, 2000 (age 23 years), Sydney, Australia Full Name: Lee Yong Bok Music group: Stray Kids (Since 2018) Nationality: Australian', 13),
(12, 'Saad Lamjarred', 'Saad Lamjarred.jpg', '1985-04-07', 'Saad Lamjarred is a Moroccan rapper, actor, singer-songwriter, multi-instrumentalist, dancer, and record producer. His official music video for \"LM3ALLEM\" has received over 1 billion views on YouTube; he has had over 4 billion views and 14 millions subscribers on his YouTube channel.  \r\nBorn: April 7, 1985 (age 38 years), Rabat, Morocco\r\nSpouse: Ghita El Allaki (m. 2022)\r\nNationality: Moroccan', 146),
(13, 'Mohamed Ramadan', 'Mohamed Ramadan.jpg', '1988-05-23', 'Mohamed Ramadan is an Egyptian actor, singer, rapper, dancer and producer. Ramadan has married twice. He has a daughter named Haneen from his first marriage. Then he married Nesreen El Sayed Abd El Fattah, with whom he has two children: Ali and Kenz. \r\nBorn: May 23, 1988 (age 35 years), Qena, Egypt\r\nSpouse: Nesrine El Sayed Abdel Fattah (m. 2012)\r\n', 64),
(14, 'Amr Diab', 'Amr Diab.jpg', '1961-10-11', 'Amr Diab is an Egyptian singer, composer and actor. He has established himself as a globally acclaimed recording artist and author. He is a Guinness World Record holder, the best selling Middle Eastern artist, a seven-times winner of World Music Awards and five-times winner of Platinum Records. Wikipedia\r\nBorn: October 11, 1961 (age 61 years), Port Said, Egypt\r\nChildren: Nour Diab, Abdallah Diab, Kinzy Diab, Jana Diab\r\nSpouse: Dina El Sherbiny (m. 2018–2020), Zinah Ashour (m. 1994), Shereen Reda (m. 1989–1992)\r\nSiblings: Imad Abdel Baset Diab', 64),
(15, 'Tamer Hosny', 'Tamer Hosny.jpg', '1977-08-16', 'Tamer Hosny Sherif Abbas Farghaly, known by his artistic name Tamer Hosny, is an Egyptian singer, actor, composer, director and songwriter. He first came to public attention when he appeared on mixed tapes with other Egyptian artists. Wikipedia\r\nBorn: August 16, 1977 (age 45 years), Cairo, Egypt\r\nSpouse: Bassma Boussel (m. 2012–2023)\r\nSiblings: Hossam Hosny\r\nParents: Fatma Al-Sabagh, Hosny Sherif Abbas', 64),
(16, 'Fahad Bin Fasla', 'Fahad Bin Fasla.jpg', '1986-10-21', '\r\n\r\nFahad Bin Fasla (فهد بن فصلا) is a 36-year-old up and coming artist from the Middle East. He is quickly making waves in the region with his unique blend of musical styles, which combine traditional Arabic sounds with modern elements.\r\nSort name: Fasla, Fahad Bin\r\nGender: Male\r\nBorn:1986-10-21 (36 years ago)\r\nBorn in: Saudi Arabia\r\nArea: Saudi Arabia', 186),
(17, 'Alfredo Kraus Trujillo', 'Alfredo Kraus Trujillo.jpg', '1927-11-24', 'Alfredo Kraus Trujillo was a distinguished Spanish tenor from the Canary islands particularly known for the artistry. He was also considered an outstanding interpreter of the title role in Massenets opera Werther and especially of its famous aria. \r\n Born: November 24-1927  Municipality of Las Palmas Spain \r\nDied: September 10-1999 Madrid Spain \r\nChildren: Patricia Kraus', 197),
(18, 'Carlos Marin', 'Carlos Marin.jpg', '1968-10-13', 'Carlos Marín Menchero was a Spanish baritone and a member of the classical crossover group Il Divo, which has sold over 28 million records worldwide.  \r\nBorn: October 13, 1968, Rüsselsheim, Germany\r\nDied: December 19, 2021, Manchester Royal Infirmary, Manchester, United Kingdom\r\nSpouse: Innocence (m. 2006–2009)\r\nPlace of burial: OFICINAS del cementerio de la Almudena (SFM), Madrid, Spain\r\nParents: Magdalena Menchero, Carlos Marín\r\nSiblings: Rosemary Eberhart', 82),
(19, 'Shakira', 'shakira.jpg', '1977-02-02', 'Shakira Isabel Mebarak Ripoll, known mononymously as Shakira, is a Colombian singer and songwriter. Born and raised in Barranquilla, she has been referred to as the \"Queen of Latin Music\" and is praised for her musical versatility. She made her recording debut with Sony Music Colombia at the age of 13.  \r\nBorn: February 2, 1977 (age 46 years), Barranquilla, Colombia\r\nSiblings: Patricia Mebarak, Tonino Mebarak, Lucy Mebarak, MORE\r\nFull name: Shakira Isabel Mebarak Ripoll\r\nNationality: Colombian', 47),
(20, 'Celia Cruz', 'Celia Cruz.jpg', '1925-10-21', 'Úrsula Hilaria Celia de la Caridad Cruz Alfonso, known as Celia Cruz, was a Cuban singer and one of the most popular Latin artists of the 20th century. Cruz rose to fame in Cuba during the 1950s as a singer of guarachas, earning the nickname \"La Guarachera de Cuba\". Wikipedia\r\nBorn: October 21, 1925, Havana, Cuba\r\nDied: July 16, 2003, Fort Lee, New Jersey, United States\r\nNationality: American, Cuban\r\nSpouse: Pedro Knight (m. 1962–2003)\r\nFull name: Úrsula Hilaria Celia de la Caridad Cruz Alfonso\r\nParents: Catalina Alfonso, Simon Cruz', 4),
(21, 'Carlos Santana', 'Carlos Santana.jpg', '1947-07-20', 'Carlos Humberto Santana Barragán is an American guitarist who rose to fame in the late 1960s and early 1970s with his band Santana, which pioneered a fusion of rock and roll and Latin American jazz. Wikipedia\r\nBorn: July 20, 1947 (age 76 years), Autlán, Mexico\r\nSpouse: Cindy Blackman (m. 2010), Deborah Santana (m. 1973–2007)\r\nChildren: Salvador Santana, Stella Santana, Angelica Santana\r\nParents: Josefina Barragan de Santana, José Santana	\r\nNationality: American, Mexican', 140),
(22, 'Ap Dhillon', 'Ap Dhillon.jpeg', '1993-01-10', 'Amritpal Singh Dhillon, known professionally as AP Dhillon, is an Indo-Canadian singer, rapper and record producer associated with Punjabi music. Five of his singles have peaked on the Official Charts Company UK Asian and Punjabi charts. Dhillon started his career in 2019. In September 2020, he released \"Brown munde\" with Gurinder Gill, Gminxr, and Shinda Kahlon. Born: January 10, 1993 (age 30 years), Gurdaspur, India Albums: BEST, Majhail Group, Two Hearts Never Break The Same, Not by Chance Genre: Hip hop music, Pop music, Contemporary R&B, Dance/Electronic, Hip-Hop/Rap Members: Gurinder Gill; Shinda Kahlon; Gminxr', 38),
(23, 'Jass Manak', 'Jass Manak.jpg', '1999-02-12', 'Jaspreet Singh Manak is an Indian singer-songwriter He is also called Jass Manak.. He is known predominantly for the songs \"Prada\", \"Suit Punjaabi\", \"Lehanga\", \"Viah\" and \"Boss\". His single \"Lehanga\" has featured on the UK Asian Music Chart and also the Global YouTube weekly chart. Jass Manak started his singing career with his debut song \"U-Turn\" in 2017.His single \"Lehanga\" was ranked No. 22 and No. 5 on the Global and Indian YouTube music weekly charts respectively.Manak also become one of the most-listened-to artists in Punjab on YouTube.\r\nBorn: February 12, 1999 (age 24 years), Jalandhar, India\r\nFull name: Jaspreet Singh Manak\r\nGenres: Punjabi; pop; romantic; bhangra\r\nLabels: Geet MP3', 101),
(24, 'Guri Khattra', 'Guri Khattra.jpg', '1993-11-24', 'Guri Khattra is a rising Punjabi Singer in Punjabi Music Industry. He was born in Patiala, Punjab, India. Guri basically works in Punjabi Music business. He has done his initial studies from Government Multi-Purpose Senior Secondary School Patiala, India. Guri Khattra built up himself as a main and business fruitful Singer of Punjab Media. Guri Khattra has started his singing introduction in Song Mashooq Fatte Chakri in 2016. \r\nBorn: November 24, 1993 (age 29 years), Patiala, India\r\nNick name: Guri \r\nNationality: Indian', 101),
(25, 'Dilijit Dosanjh', 'Dilijit Dosanjh.jpg', '1984-01-06', 'Diljit Dosanjh, mononymously as Diljit, is an Indian singer-songwriter, actor, film producer and television personality. He works in Punjabi Music and subsequently in Punjabi and Hindi cinema. Dosanjh entered Social 50 chart by Billboard in 2020.  \r\nBorn: January 6, 1984 (age 39 years), Dosanjh Kalan, India\r\nAwards: Filmfare Award for Best Male Debut, MORE\r\nParents: S. Balbir Singh Dosanjh, Sukhwinder Kaur\r\nSiblings: Manjeet Singh\r\nGenres: Pop; R&B; Hip-hop', 101),
(26, 'Guru Randhawa', 'Guru-Randhawa.jpg', '1991-08-30', 'Gursharanjot Singh Randhawa is an Indian singer, songwriter and music composer associated with Punjabi Bhangra, Indi-pop and Bollywood music. He is known for songs like (Lahore), (Ishare Tere), (Slowly Slowly) and (Tere Te). Guru debut single was (Same Girl) in collaboration with Arjun. \r\nBorn: August 30, 1991 (age 31 years), Dera Baba Nanak, India\r\nFull name: Gursharanjot Singh Randhawa\r\nNick name: Guru\r\nGenres: Bhangra; Indi-pop', 101),
(27, 'Sonu Nigam', 'sonu 2.jpg', '1973-07-30', 'Sonu Nigam born on 30 July 1973 is an Indian playback singer, music director, dubbing artist and actor. He has been described in the media as one of the best, the most popular and successful playback singers in Hindi and Kannada cinema. In 2022, he was honoured by the Government of India with the Padma Shri, the countrys fourth-highest civilian honour for his contribution in the field of arts. Nigam has released a number of non-film albums and acted in some Hindi films. He is known as the Modern Rafi a title given to him after his musical idol Mohammad Rafi.', 101),
(34, 'Neha Kakkar ', 'neha kakkar.jpg', '1988-06-06', 'Neha Kakkar Singh Kakkar born on 6 June 1988, is an Indian playback singer. She is the younger sister of playback singers Tony Kakkar and Sonu Kakkar. She began performing at a very early age at religious events. In 2005 she participated in the second season of the singing reality show Indian Idol. She made her Bollywood debut as a chorus singer in the film Meerabai Not Out. She rose to prominence with the release of the dance track (Second Hand Jawaani) from Cocktail 2012 which was followed by several popular party songs including (Sunny Sunny) from Yaariyan and (London Thumakda) from the 2014 soundtrack album Queen. Apart from playback singing Kakkar has appeared in several music videos and as a judge on several television reality shows including (Indian Idol). In January 2021 she became the first Indian singer to win a YouTube Diamond Award. She is the most followed female Indian artist.', 101),
(35, 'Armaan Malik', 'armaan.jpg', '1995-07-22', 'Apart from playback singing, Ghoshal has appeared as a judge on several television reality shows and in music videos. She has been honoured by the state of Ohio in the United States, where Governor Ted Strickland declared 26 June 2010 as \"Shreya Ghoshal Day\". In April 2013, she was honoured in London by the selected members of the House of Commons of the United Kingdom. She has been featured five times in the Forbes list of the top 100 celebrities from India. In 2017, Ghoshal became the first Indian singer to have her wax figure displayed in the Indian wing of Madame Tussauds Museum in Delhi.', 101),
(39, 'Shreya Ghoshal', 'shreya 2.jpg', '1984-03-12', 'Shreya Ghoshal born 12 March 1984 is an Indian singer. Noted for her wide vocal range and versatility she is one of the most prolific and popular singers of India. She has recorded songs for films and albums in various Indian and international languages and received numerous accolades including four National Film Awards four Kerala State Film Awards two Tamil Nadu State Film Award two BFJA Awards seven Filmfare Awards and ten Filmfare Awards South.', 101),
(40, 'Honey Singh', 'honey.jpg', '1983-03-15', 'Hirdesh Singh (born 15 March 1983), known professionally as Yo Yo Honey Singh or simply Honey Singh, is an Indian music producer, rapper, singer, songwriter and an actor. He started in 2003 as a session and recording artist, and became a bhangra and hip hop music producer. Later, he became successful with his songs and started making songs for Bollywood films.', 101),
(41, 'Badshah', 'badshah.jpg', '1985-11-19', 'Aditya Prateek Singh Sisodia, (born 19 November 1985), known by his stage name Badshah, is an Indian rapper, singer, film producer and businessman known for his Hindi, Haryanvi, and Punjabi music. He started his career in 2006 alongside Yo Yo Honey Singh in his Hip Hop group Mafia Mundeer. He split from Honey in 2012 and released his independent Haryanvi song Kar Gayi Chull, which was later adopted into the 2016 Bollywood movie, Kapoor & Sons. His music has been featured in Bollywood soundtracks for films such as 2014 films Humpty Sharma Ki Dulhania and Khoobsurat. He is also considered one of the highest-paid artists and also a controversial rapper of India, for his songs like Genda Phool and Pagal.', 101),
(42, 'Dua Lipa', 'dua lipa.jpg', '1995-08-22', 'Dua Lipa (born 22 August 1995) is an English and Albanian singer and songwriter. Her mezzo-soprano vocal range and disco-influenced production have received critical acclaim and media coverage. She has received numerous accolades throughout her career including six Brit Awards, three Grammy Awards, two MTV Europe Music Awards, an MTV Video Music Award, two Billboard Music Awards, an American Music Award, and two Guinness World Records. She was included on the Time 100 Next list in 2021.', 2),
(43, 'Ed Sheeran', 'ed sheeran.jpg', '1991-02-17', 'Edward Christopher Sheeran MBE born 17 February 1991 is an English singer songwriter. Born in Halifax, West Yorkshire, and raised in Framlingham, Suffolk, he began writing songs around the age of eleven. In early 2011, Sheeran independently released the extended play No. 5 Collaborations Project. He signed with Asylum Records the same year.\r\nSheerans debut album, Plus, was released in September 2011 and topped the UK Albums Chart. It contained his first hit single The A Team. In 2012, Sheeran won the Brit Awards for Best British Male Solo Artist and British Breakthrough Act. Sheeran s second studio album, (Multiply), topped charts around the world upon its release in June 2014. It was named the second best selling album worldwide of 2015. In the same year,  won Album of the Year at the 2015 Brit Awards, and he received the Ivor Novello Award for Songwriter of the Year from the British Academy of Songwriters, Composers and Authors. A single from Thinking Out Loud, earned him the 2016 Grammy Awards for Song of the Year and Best Pop Solo Performance.', 224),
(44, 'Justin Bieber', 'juctin.jpg', '1994-03-11', 'Justin Drew Bieber (born March 1, 1994) is a Canadian singer. He is recognized for his genre melding musicianship and global influence in modern-day popular music. Bieber was discovered by American record executive Scooter Braun and signed with RBMG Records in 2008, gaining recognition with the release of his debut seven track EP My World (2009) and soon establishing himself as a teen idol. Bieber achieved commercial success with his teen pop driven debut studio album My World 2.0 (2010), which debuted atop the US Billboard 200, making him the youngest solo male act to top the chart in 47 years. The album spawned the internationally successful single Baby (featuring Ludacris), which became one of the best selling singles of all time in the US.', 38),
(45, 'Taylor Swift', 'taylor.jpg', '1989-12-13', 'Taylor Alison Swift (born December 13, 1989) is an American singer-songwriter. Recognized for her songwriting, musical versatility, artistic reinventions, and influence on the music industry, she is a prominent cultural figure of the 21st century. Swift began songwriting professionally at age 14 and signed with Big Machine Records in 2005 to become a country musician. Under Big Machine, she released six studio albums, four of them to country radio, starting with her self titled album (2006). Her next record, Fearless (2008), explored country pop, and its singles Love Story and You Belong with Me catapulted her to mainstream fame. Speak Now (2010) incorporated rock influences, and Red (2012) experimented with electronic elements and featured Swift s first Billboard Hot 100 number-one song, We Are Never Ever Getting Back Together. She forwent her country image with 1989 (2014), a synth pop album supported by chart-topping songs Shake It Off, Blank Space, and Bad Blood. Media scrutiny inspired her next album, the hip hop flavored Reputation (2017), and its number-one single Look What You Made Me Do.', 225),
(46, 'Zain Malik', 'zain.jpg', '1993-01-12', 'Zain Javadd Malik (born 12 January 1993), known professionally as Zayn Malik or simply Zayn, is a British singer. Malik auditioned as a solo contestant for the British music competition television series The X Factor in 2010. After being eliminated, he was brought back to the competition to form the five piece boy band One Direction, which went on to become one of the best selling boy bands of all time. He left the group in March 2015 and signed a solo recording contract with RCA Records. Adopting a more alternative R&B music style on his first solo studio album, Mind of Mine (2016), and its lead single, Pillowtalk, he became the first British male artist to debut at number one in both the UK and US with his debut single and album. His subsequent collaborative singles I Dont Wanna Live Forever with Taylor Swift and Dusk Till Dawn featuring Sia were met with international success. He released his second studio album, Icarus Falls, in 2018, followed by his third album, Nobody Is Listening, in 2021.', 224);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `Genre_Id` int(11) NOT NULL,
  `Genre_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`Genre_Id`, `Genre_type`) VALUES
(1, 'Blues'),
(2, 'Classic Rock'),
(3, 'Country'),
(4, 'Dance'),
(5, 'Disco'),
(6, 'Funk'),
(7, 'Grunge'),
(8, 'Hip-Hop'),
(9, 'Jazz'),
(10, 'Metal'),
(11, 'New Age'),
(12, 'Oldies'),
(13, 'Other'),
(14, 'Pop'),
(15, 'R&B'),
(16, 'Rap'),
(17, 'Reggae'),
(18, 'Rock'),
(19, 'Techno'),
(20, 'Industrial'),
(21, 'Alternative'),
(22, 'Ska'),
(23, 'Death Metal'),
(24, 'Pranks'),
(25, 'Soundtrack'),
(26, 'Euro-Techno'),
(27, 'Ambient'),
(28, 'Trip-Hop'),
(29, 'Vocal'),
(30, 'Jazz+Funk'),
(31, 'Fusion'),
(32, 'Trance'),
(33, 'Classical'),
(34, 'Instrumental'),
(35, 'Acid'),
(36, 'House'),
(37, 'Game'),
(38, 'Sound Clip'),
(39, 'Gospel'),
(40, 'Noise'),
(41, 'AlternRock'),
(42, 'Bass'),
(43, 'Soul'),
(44, 'Punk'),
(45, 'Space'),
(46, 'Meditative'),
(47, 'Instrumental Pop'),
(48, 'Instrumental Rock'),
(49, 'Ethnic'),
(50, 'Gothic'),
(51, 'Darkwave'),
(52, 'Techno-Industrial'),
(53, 'Electronic'),
(54, 'Pop-Folk'),
(55, 'Eurodance'),
(56, 'Dream'),
(57, 'Southern Rock'),
(58, 'Comedy'),
(59, 'Cult'),
(60, 'Gangsta'),
(61, 'Top 40'),
(62, 'Christian Rap'),
(63, 'Pop/Funk'),
(64, 'Jungle'),
(65, 'Native American'),
(66, 'Cabaret'),
(67, 'New Wave'),
(68, 'Psychadelic'),
(69, 'Rave'),
(70, 'Showtunes'),
(71, 'Trailer'),
(72, 'Lo-Fi'),
(73, 'Tribal'),
(74, 'Acid Punk'),
(75, 'Acid Jazz'),
(76, 'Polka'),
(77, 'Retro'),
(78, 'Musical'),
(79, 'Rock & Roll'),
(80, 'Hard Rock'),
(81, 'Folk'),
(82, 'Folk-Rock'),
(83, 'National Folk'),
(84, 'Swing'),
(85, 'Fast Fusion'),
(86, 'Bebob'),
(87, 'Latin'),
(88, 'Revival'),
(89, 'Celtic'),
(90, 'Bluegrass'),
(91, 'Avantgarde'),
(92, 'Gothic Rock'),
(93, 'Progressive Rock'),
(94, 'Psychedelic Rock'),
(95, 'Symphonic Rock'),
(96, 'Slow Rock'),
(97, 'Big Band'),
(98, 'Chorus'),
(99, 'Easy Listening'),
(100, 'Acoustic'),
(101, 'Humour'),
(102, 'Speech'),
(103, 'Chanson'),
(104, 'Opera'),
(105, 'Chamber Music'),
(106, 'Sonata'),
(107, 'Symphony'),
(108, 'Booty Bass'),
(109, 'Primus'),
(110, 'Porn Groove'),
(111, 'Satire'),
(112, 'Slow Jam'),
(113, 'Club'),
(114, 'Tango'),
(115, 'Samba'),
(116, 'Folklore'),
(117, 'Ballad'),
(118, 'Power Ballad'),
(119, 'Rhythmic Soul'),
(120, 'Freestyle'),
(121, 'Duet'),
(122, 'Punk Rock'),
(123, 'Drum Solo'),
(124, 'Acapella'),
(125, 'Euro-House'),
(126, 'Dance Hall');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `Lang_Id` int(11) NOT NULL,
  `Lang_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`Lang_Id`, `Lang_Name`) VALUES
(1, 'Afrikaans'),
(2, 'Albanian'),
(3, 'Amharic'),
(4, 'Arabic'),
(5, 'Aragonese'),
(6, 'Armenian'),
(7, 'Asturian'),
(8, 'Azerbaijani'),
(9, 'Basque'),
(10, 'Belarusian'),
(11, 'Bengali'),
(12, 'Bosnian'),
(13, 'Breton'),
(14, 'Bulgarian'),
(15, 'Catalan'),
(16, 'Central Kurdish'),
(17, 'Chinese'),
(18, 'Chinese (Hong Kong)'),
(19, 'Chinese (Simplified)'),
(20, 'Chinese (Traditional)'),
(21, 'Corsican'),
(22, 'Croatian'),
(23, 'Czech'),
(24, 'Danish'),
(25, 'Dutch'),
(26, 'English'),
(27, 'English (Australia)'),
(28, 'English (Canada)'),
(29, 'English (India)'),
(30, 'English (New Zealand)'),
(31, 'English (South Africa)'),
(32, 'English (United Kingdom)'),
(33, 'English (United States)'),
(34, 'Esperanto'),
(35, 'Estonian'),
(36, 'Faroese'),
(37, 'Filipino'),
(38, 'Finnish'),
(39, 'French'),
(40, 'French (Canada)'),
(41, 'French (France)'),
(42, 'French (Switzerland)'),
(43, 'Galician'),
(44, 'Georgian'),
(45, 'German'),
(46, 'German (Austria)'),
(47, 'German (Germany)'),
(48, 'German (Liechtenstein)'),
(49, 'German (Switzerland)'),
(50, 'Greek'),
(51, 'Guarani'),
(52, 'Gujarati'),
(53, 'Hausa'),
(54, 'Hawaiian'),
(55, 'Hebrew'),
(56, 'Hindi'),
(57, 'Hungarian'),
(58, 'Icelandic'),
(59, 'Indonesian'),
(60, 'Interlingua'),
(61, 'Irish'),
(62, 'Italian'),
(63, 'Italian (Italy)'),
(64, 'Italian (Switzerland)'),
(65, 'Japanese'),
(66, 'Kannada'),
(67, 'Kazakh'),
(68, 'Khmer'),
(69, 'Korean'),
(70, 'Kurdish'),
(71, 'Kyrgyz'),
(72, 'Lao'),
(73, 'Latin'),
(74, 'Latvian'),
(75, 'Lingala'),
(76, 'Lithuanian'),
(77, 'Macedonian'),
(78, 'Malay'),
(79, 'Malayalam'),
(80, 'Maltese'),
(81, 'Marathi'),
(82, 'Mongolian'),
(83, 'Nepali'),
(84, 'Norwegian'),
(85, 'Norwegian Bokmål'),
(86, 'Norwegian Nynorsk'),
(87, 'Occitan'),
(88, 'Oriya'),
(89, 'Oromo'),
(90, 'Pashto'),
(91, 'Persian'),
(92, 'Polish'),
(93, 'Portuguese'),
(94, 'Portuguese (Brazil)'),
(95, 'Portuguese (Portugal)'),
(96, 'Punjabi'),
(97, 'Quechua'),
(98, 'Romanian'),
(99, 'Romanian (Moldova)'),
(100, 'Romansh'),
(101, 'Russian'),
(102, 'Scottish Gaelic'),
(103, 'Serbian'),
(104, 'Serbo - Croatian'),
(105, 'Shona'),
(106, 'Sindhi'),
(107, 'Sinhala'),
(108, 'Slovak'),
(109, 'Slovenian'),
(110, 'Somali'),
(111, 'Southern Sotho'),
(112, 'Spanish'),
(113, 'Spanish (Argentina)'),
(114, 'Spanish (Latin America)'),
(115, 'Spanish (Mexico)'),
(116, 'Spanish (Spain)'),
(117, 'Spanish (United States)'),
(118, 'Sundanese'),
(119, 'Swahili'),
(120, 'Swedish'),
(121, 'Tajik'),
(122, 'Tamil'),
(123, 'Tatar'),
(124, 'Telugu'),
(125, 'Thai'),
(126, 'Tigrinya'),
(127, 'Tongan'),
(128, 'Turkish'),
(129, 'Turkmen'),
(130, 'Twi'),
(131, 'Ukrainian'),
(132, 'Urdu'),
(133, 'Uyghur'),
(134, 'Uzbek'),
(135, 'Vietnamese'),
(136, 'Walloon'),
(137, 'Welsh'),
(138, 'Western Frisian'),
(139, 'Xhosa'),
(140, 'Yiddish'),
(141, 'Yoruba'),
(142, 'Zulu');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `Nationality_Id` int(11) NOT NULL,
  `Nationality_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`Nationality_Id`, `Nationality_Name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antarctica'),
(9, 'Antigua and Barbuda'),
(10, 'Argentina'),
(11, 'Armenia'),
(12, 'Aruba'),
(13, 'Australia'),
(14, 'Austria'),
(15, 'Azerbaijan'),
(16, 'Bahamas'),
(17, 'Bahrain'),
(18, 'Bangladesh'),
(19, 'Barbados'),
(20, 'Belarus'),
(21, 'Belgium'),
(22, 'Belize'),
(23, 'Benin'),
(24, 'Bermuda'),
(25, 'Bhutan'),
(26, 'Bolivia'),
(27, 'Bosnia and Herzegovina'),
(28, 'Botswana'),
(29, 'Bouvet Island'),
(30, 'Brazil'),
(31, 'British Indian Ocean Territory'),
(32, 'Brunei Darussalam'),
(33, 'Bulgaria'),
(34, 'Burkina Faso'),
(35, 'Burundi'),
(36, 'Cambodia'),
(37, 'Cameroon'),
(38, 'Canada'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Chile'),
(44, 'China'),
(45, 'Christmas Island'),
(46, 'Cocos (Keeling) Islands'),
(47, 'Colombia'),
(48, 'Comoros'),
(49, 'Congo'),
(50, 'Congo, the Democratic Republic of the'),
(51, 'Cook Islands'),
(52, 'Costa Rica'),
(53, 'Cote d\'Ivoire'),
(54, 'Croatia (Hrvatska)'),
(55, 'Cuba'),
(56, 'Cyprus'),
(57, 'Czech Republic'),
(58, 'Denmark'),
(59, 'Djibouti'),
(60, 'Dominica'),
(61, 'Dominican Republic'),
(62, 'East Timor'),
(63, 'Ecuador'),
(64, 'Egypt'),
(65, 'El Salvador'),
(66, 'Equatorial Guinea'),
(67, 'Eritrea'),
(68, 'Estonia'),
(69, 'Ethiopia'),
(70, 'Falkland Islands (Malvinas)'),
(71, 'Faroe Islands'),
(72, 'Fiji'),
(73, 'Finland'),
(74, 'France'),
(75, 'France Metropolitan'),
(76, 'French Guiana'),
(77, 'French Polynesia'),
(78, 'French Southern Territories'),
(79, 'Gabon'),
(80, 'Gambia'),
(81, 'Georgia'),
(82, 'Germany'),
(83, 'Ghana'),
(84, 'Gibraltar'),
(85, 'Greece'),
(86, 'Greenland'),
(87, 'Grenada'),
(88, 'Guadeloupe'),
(89, 'Guam'),
(90, 'Guatemala'),
(91, 'Guinea'),
(92, 'Guinea-Bissau'),
(93, 'Guyana'),
(94, 'Haiti'),
(95, 'Heard and Mc Donald Islands'),
(96, 'Holy See (Vatican City State)'),
(97, 'Honduras'),
(98, 'Hong Kong'),
(99, 'Hungary'),
(100, 'Iceland'),
(101, 'India'),
(102, 'Indonesia'),
(103, 'Iran (Islamic Republic of)'),
(104, 'Iraq'),
(105, 'Ireland'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Japan'),
(110, 'Jordan'),
(111, 'Kazakhstan'),
(112, 'Kenya'),
(113, 'Kiribati'),
(114, 'Korea, Democratic People\'s Republic of'),
(115, 'Korea, Republic of'),
(116, 'Kuwait'),
(117, 'Kyrgyzstan'),
(118, 'Lao, People\'s Democratic Republic'),
(119, 'Latvia'),
(120, 'Lebanon'),
(121, 'Lesotho'),
(122, 'Liberia'),
(123, 'Libyan Arab Jamahiriya'),
(124, 'Liechtenstein'),
(125, 'Lithuania'),
(126, 'Luxembourg'),
(127, 'Macau'),
(128, 'Macedonia, The Former Yugoslav Republic of'),
(129, 'Madagascar'),
(130, 'Malawi'),
(131, 'Malaysia'),
(132, 'Maldives'),
(133, 'Mali'),
(134, 'Malta'),
(135, 'Marshall Islands'),
(136, 'Martinique'),
(137, 'Mauritania'),
(138, 'Mauritius'),
(139, 'Mayotte'),
(140, 'Mexico'),
(141, 'Micronesia, Federated States of'),
(142, 'Moldova, Republic of'),
(143, 'Monaco'),
(144, 'Mongolia'),
(145, 'Montserrat'),
(146, 'Morocco'),
(147, 'Mozambique'),
(148, 'Myanmar'),
(149, 'Namibia'),
(150, 'Nauru'),
(151, 'Nepal'),
(152, 'Netherlands'),
(153, 'Netherlands Antilles'),
(154, 'New Caledonia'),
(155, 'New Zealand'),
(156, 'Nicaragua'),
(157, 'Niger'),
(158, 'Nigeria'),
(159, 'Niue'),
(160, 'Norfolk Island'),
(161, 'Northern Mariana Islands'),
(162, 'Norway'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Palau'),
(166, 'Panama'),
(167, 'Papua New Guinea'),
(168, 'Paraguay'),
(169, 'Peru'),
(170, 'Philippines'),
(171, 'Pitcairn'),
(172, 'Poland'),
(173, 'Portugal'),
(174, 'Puerto Rico'),
(175, 'Qatar'),
(176, 'Reunion'),
(177, 'Romania'),
(178, 'Russian Federation'),
(179, 'Rwanda'),
(180, 'Saint Kitts and Nevis'),
(181, 'Saint Lucia'),
(182, 'Saint Vincent and the Grenadines'),
(183, 'Samoa'),
(184, 'San Marino'),
(185, 'Sao Tome and Principe'),
(186, 'Saudi Arabia'),
(187, 'Senegal'),
(188, 'Seychelles'),
(189, 'Sierra Leone'),
(190, 'Singapore'),
(191, 'Slovakia (Slovak Republic)'),
(192, 'Slovenia'),
(193, 'Solomon Islands'),
(194, 'Somalia'),
(195, 'South Africa'),
(196, 'South Georgia and the South Sandwich Islands'),
(197, 'Spain'),
(198, 'Sri Lanka'),
(199, 'St. Helena'),
(200, 'St. Pierre and Miquelon'),
(201, 'Sudan'),
(202, 'Suriname'),
(203, 'Svalbard and Jan Mayen Islands'),
(204, 'Swaziland'),
(205, 'Sweden'),
(206, 'Switzerland'),
(207, 'Syrian Arab Republic'),
(208, 'Taiwan, Province of China'),
(209, 'Tajikistan'),
(210, 'Tanzania, United Republic of'),
(211, 'Thailand'),
(212, 'Togo'),
(213, 'Tokelau'),
(214, 'Tonga'),
(215, 'Trinidad and Tobago'),
(216, 'Tunisia'),
(217, 'Turkey'),
(218, 'Turkmenistan'),
(219, 'Turks and Caicos Islands'),
(220, 'Tuvalu'),
(221, 'Uganda'),
(222, 'Ukraine'),
(223, 'United Arab Emirates'),
(224, 'United Kingdom'),
(225, 'United States'),
(226, 'United States Minor Outlying Islands'),
(227, 'Uruguay'),
(228, 'Uzbekistan'),
(229, 'Vanuatu'),
(230, 'Venezuela'),
(231, 'Vietnam'),
(232, 'Virgin Islands (British)'),
(233, 'Virgin Islands (U.S.)'),
(234, 'Wallis and Futuna Islands'),
(235, 'Western Sahara'),
(236, 'Yemen'),
(237, 'Yugoslavia'),
(238, 'Zambia'),
(239, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `ost`
--

CREATE TABLE `ost` (
  `Ost_Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ost` varchar(255) NOT NULL,
  `Genre` int(11) NOT NULL,
  `Artist` int(11) NOT NULL,
  `Drama` varchar(255) NOT NULL,
  `Release_date` date NOT NULL,
  `Writer` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'placeholder.gif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ost`
--

INSERT INTO `ost` (`Ost_Id`, `Name`, `ost`, `Genre`, `Artist`, `Drama`, `Release_date`, `Writer`, `thumbnail`) VALUES
(1, 'Fraud', 'yt1s.com - Fraud OST  Ali Zafar  Hina Nasrullah  Saba Qamar  Ahsan Khan  Mikaal Zulfiqar ARYDigital.mp4', 13, 3, 'Fraud', '2022-05-14', 'Ali Zafar', 'fraud.jpg'),
(2, 'Ishqiya', 'yt1s.com - Ishqiya OST  Asim Azhar  Feroze Khan  Ramsha Khan  Hania Amir  ARY Digital Drama.mp4', 13, 2, 'Ishqiya', '2020-02-03', 'Asim Azhar', 'ishqiya.jpg'),
(3, 'Meri Matti', 'yt1s.com - Meri Matti  Jhok Sarkar Original Sound Track  Singer Farhan Saeed.mp4', 13, 4, 'Jhok Sarkaar', '2023-06-06', 'Adrian David Emmanuel', 'jhok sarkar.jpg'),
(4, 'Paristaan', 'yt1s.com - Paristan   Lyrical OST   Singer Asim Azhar  HUM TV.mp4', 13, 2, 'Paristaan', '2022-04-03', 'Naveed Nashad', 'paristan.jpg'),
(5, 'Pehli si Muhabbat', 'yt1s.com - Ali Zafar  Pehli Si Muhabbat OST  ARY Digital  Sheheryar Munawar  Maya Ali  HSY.mp4', 13, 3, 'Pehli si Muhabbat', '2021-01-23', 'Gohar Mumtaz', 'phli c muhbbt.jpg'),
(6, 'Sang-e-Mah', 'yt1s.com - OST   SangeMah  With Lyrics  Singer Atif Aslam  HUM Music.mp4', 13, 1, 'Sang-e-Mah', '2022-01-06', 'Sahir Ali Bagga', 'sang e mah.jpg'),
(7, 'Sila', 'yt1s.com - Silah  OST by Farhan Saeed  HUM Music_v720P.mp4', 13, 4, 'Sila', '2016-10-28', 'Abbas Ali Khan', 'sila.jpg'),
(8, 'Sinf-e-Ahan', 'yt1s.com - Sinf E Aahan  OST  Ft Asim Azhar  ARY Digital.mp4', 13, 2, 'Sinf-e-Ahan', '2021-11-27', 'Asim Azhar', 'sinf e ahan.jpg'),
(9, 'Suno Chanda', 'yt1s.com - Suno Chanda  Hum TV Drama  OST  Farhan Saeed.mp4', 13, 4, 'Suno Chanda', '2018-05-17', 'Naveed Nashad', 'suno chanda.jpg'),
(10, 'Udaari', 'yt1s.com - Udaari  OST by Hadiqa Kiani  Farhan Saeed  HUM Music_v720P.mp4', 13, 4, 'Udaari', '2016-04-10', 'Sahir Ali Bagga', 'udaari.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ost-review`
--

CREATE TABLE `ost-review` (
  `rating` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ost_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rating` int(11) NOT NULL DEFAULT 0,
  `feedback` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `Song_Id` int(11) NOT NULL,
  `Song_Name` varchar(255) NOT NULL,
  `Songs` longtext NOT NULL,
  `Artist` int(11) NOT NULL,
  `Language` int(11) NOT NULL,
  `Genre` int(11) NOT NULL,
  `Release_date` date NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'placeholder.gif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`Song_Id`, `Song_Name`, `Songs`, `Artist`, `Language`, `Genre`, `Release_date`, `thumbnail`) VALUES
(1, 'tera yaar hun mai', 'yt1s.com - Full Video Tera Yaar Hoon Main  Sonu Ke Titu Ki Sweety  Arijit Singh Rochak Kohli  Song 2018.mp4', 6, 56, 13, '2018-03-07', 'tera yaar hun mai.jpg'),
(2, 'Hamari adhuri khani', 'yt1s.com - Hamari Adhuri Kahani Title Track Full Video  Emraan HashmiVidya BalanArijit Singh.mp4', 6, 56, 13, '2015-06-12', 'hamari adhuri khaani.jpg'),
(3, 'Mai dhondhne ko zamane', 'yt1s.com - Heartless Main Dhoondne Ko Zamaane Mein Full Song  Arijit Singh  Adhyayan Suman Ariana Ayam.mp4', 6, 56, 13, '2014-01-08', 'mai dhondhne ko zamane.jpg'),
(4, 'Galti se mistake', 'yt1s.com - Jagga Jasoos Galti Se Mistake Video Song  Ranbir Katrina  Pritam Arijit Amit  Amitabh B.mp4', 6, 56, 13, '2017-06-19', 'galti se mistake.jpg'),
(5, 'Jhoome jo pathan', 'yt1s.com - Jhoome Jo Pathaan Song  Shah Rukh Khan Deepika  Vishal  Sheykhar Arijit Singh Sukriti Kumaar.mp4', 6, 56, 13, '2022-12-22', 'jhoome jo pathan.jpg'),
(6, 'Bol do na zara', 'yt1s.com - BOL DO NA ZARA Full Video Song  AZHAR  Emraan Hashmi Nargis Fakhri  Armaan Malik Amaal Mallik.mp4', 35, 56, 13, '2021-02-16', 'bol do na zara.jpg'),
(7, 'Bhuddhu sa mann', 'yt1s.com - Buddhu Sa Mann Lyric Video  Kapoor  Sons  Sidharth  Alia  Fawad  Rishi Kapoor  Armaan  Amaal.mp4', 35, 56, 13, '2016-07-15', 'bhuddhu sa mann.jpg'),
(8, 'Hua hai aj phli baar', 'yt1s.com - Hua Hain Aaj Pehli Baar FULL VIDEO  SANAM RE  Pulkit Samrat Urvashi Rautela  Divya Khosla Kumar.mp4', 35, 56, 13, '2016-02-26', 'hua hai aj phli bar.jpg'),
(9, 'Dil mai ho tum', 'yt1s.com - Lyrical Dil Mein Ho Tum WHY CHEAT INDIA  Emraan H Shreya DRochak K Armaan M Bappi L Manoj M.mp4', 35, 56, 13, '2018-12-28', 'dil mai ho tum.jpg'),
(10, 'Waja tum ho', 'yt1s.com - WAJAH TUM HO Full Video Song  HATE STORY 3 Songs  Zareen Khan Karan Singh Grover  TSeries.mp4', 35, 56, 13, '2015-12-15', 'waja tum ho.jpg'),
(11, 'Dil ko karaar aya', 'yt1s.com - DIL KO KARRAR AAYA Reprise  Neha Kakkar  Rajat Nagpal  Rana  Anshul Garg  Hindi Song 2021.mp4', 34, 56, 13, '2020-07-31', 'dil ko karaar aya.jpg'),
(12, 'Dilbar', 'yt1s.com - DILBAR Lyrical  Satyameva Jayate John Abraham Nora FatehiTanishk B Neha KakkarDhvani Ikka.mp4', 34, 56, 13, '2018-08-27', 'dilbar.jpg'),
(13, 'Saki o saki', 'yt1s.com - Full Song O SAKI SAKI  Batla House  Nora Fatehi Tanishk BNeha KTulsi K B PraakVishalShekhar.mp4', 34, 56, 13, '2019-07-15', 'saki o saki.jpg'),
(14, 'Barish mai tum', 'yt1s.com - Neha Kakkar Rohanpreet Baarish Mein Tum  Gauahar K Zaid D  Showkidd Harsh Samay  Bhushan K.mp4', 34, 56, 13, '2022-09-05', 'barish mai tum.jpg'),
(15, 'Tu cheez bari hai mast', 'yt1s.com - Tu Cheez Badi Hai Mast Mast Neha Kakkar.mp4', 34, 56, 13, '2017-03-10', 'cheez bari.jpg'),
(16, 'Abi mujh mai kahin', 'yt1s.com - AjayAtul  Abhi Mujh Mein Kahin Best LyricAgneepathPriyanka ChopraHrithikSonu Nigam.mp4', 27, 56, 13, '2011-12-16', 'abi mujh mai khi.jpg'),
(17, 'Mere hath mai', 'yt1s.com - Mere Haath Mein  Full Song  Fanaa  Aamir Khan  Kajol  Sonu Nigam  Sunidhi Chauhan.mp4', 27, 56, 13, '2006-04-12', 'mere hath mai.jpg'),
(18, 'Pyaar ki ek khaani', 'yt1s.com - Pyaar Ki Ek Kahani Lyrical Video Song  Krrish  Sonu NigamShreya Ghosal  Hrithik RoshanPriyanka.mp4', 27, 56, 13, '2006-06-20', 'pyaar ki ek khaani.jpg'),
(19, 'Sun zara', 'yt1s.com - Sun Zara Full Song  Lucky  Salman Khan Sneha Ullal  Sonu Nigam  Adnan Sami.mp4', 27, 56, 13, '2006-01-01', 'sun zara.jpg'),
(20, 'Suraj hua maddham', 'yt1s.com - Suraj Hua Maddham Full Video  K3GShah Rukh Khan Kajol Sonu Nigam Alka Yagnik.mp4', 27, 56, 13, '2001-12-14', 'Suraj hua maddham.jpg'),
(21, 'Allay munja', 'allay munja.mp4', 3, 106, 13, '2020-11-29', 'Allay munja.jpg'),
(22, 'Jhoom', 'jhoom.mp4', 3, 56, 13, '2011-02-14', 'Jhoom.jpg'),
(23, 'Laila o Laila', 'laila o laila.mp4', 3, 106, 13, '2019-10-11', 'Laila o Laila.jpg'),
(24, 'Nahi maloom', 'Total Siyapaa  Nahin Maloom  Full Video Song  Ali Zafar Yami Gautam.mp4', 3, 56, 13, '2014-02-25', 'Nahi maloom.jpg'),
(25, 'Tu hi hai', 'Tu Hi Hai Full Video  Dear ZindagiAlia BhattAli ZafarArijit SinghAmit Trivedi.mp4', 3, 56, 13, '2016-11-15', 'Tu hi hai.jpg'),
(26, 'Dard', 'Asim Azhar  Dard Official Video Durefishan Saleem  Kunaal Vermaa.mp4', 2, 132, 13, '2023-01-12', 'Dard.jpg'),
(27, 'Bulleya', 'bulleya.mp4', 2, 132, 13, '2023-05-30', 'Bulleya.jpg'),
(28, 'Jo tu na mila', 'jo tu na mila.mp4', 2, 132, 13, '2018-11-20', 'Jo tu na mila.jpg'),
(29, 'Galat fehmi', 'yt1s.com - Ghalat Fehmi Song  Superstar  Mahira Khan  Bilal Ashraf  Asim  Zenab  Azaan  Saad.mp4', 2, 132, 13, '2019-07-25', 'Galat fehmi.jpg'),
(30, 'Humraah', 'yt1s.com - Humraah Official Music Video  Asim Azhar  Malang  Disha Patani Aditya Roy Kapur.mp4', 2, 132, 13, '2020-05-26', 'Humraah.jpg'),
(31, 'Kuch is tarah', 'kuch is tarha.mp4', 1, 132, 13, '2006-12-22', 'Kuch is tarah.jpg'),
(32, 'Mai rang sharbaton ka ', 'm rang sharbaton ka.mp4', 1, 132, 13, '2013-08-26', 'Mai rang sharbaton ka.jpg'),
(33, 'Rafta rafta', 'rafta rafta.mp4', 1, 132, 13, '2021-07-21', 'Rafta rafta.jpg'),
(34, 'Tere sang yara', 'tere sang yara.mp4', 1, 132, 13, '2016-07-06', 'Tere sang yara.jpg'),
(35, 'Tu chahye', 'tu chahye.mp4', 1, 132, 13, '2015-06-17', 'Tu chahye.jpg'),
(36, 'Lathay di chadar', 'yt1s.com - Coke Studio Season 10 Latthay Di Chaadar Quratulain Balouch  Farhan Saeed.mp4', 4, 96, 13, '0017-09-12', 'Lathay di chadar.jpg'),
(37, 'Pi jaun', 'yt1s.com - Farhan Saeed  Pi Jaun Official Video.mp4', 4, 56, 13, '2012-04-07', 'Pi jaun.jpg'),
(38, 'Roiyaan', 'yt1s.com - Roiyaan  Farhan Saeed Official Music Video.mp4', 4, 132, 13, '2015-11-29', 'Roiyaan.jpg'),
(39, 'Thori dair', 'yt1s.com - Tu Thori Dair  Farhan Saeed ISPR Official Video.mp4', 4, 56, 13, '2017-04-25', 'Thori dair.jpg'),
(40, 'Halka halka suroor', 'yt1s.com - Ye Jo Halka Halka Suroor Hai   Farhan Saeed.mp4', 4, 56, 13, '2011-08-27', 'Halka halka suroor.jpg'),
(41, 'Aya na tu', 'yt1s.com - Arjun Kanungo Momina Mustehsan  Aaya Na Tu.mp4', 5, 132, 13, '2018-06-20', 'Aya na tu.jpg'),
(42, 'Awaari', 'yt1s.com - Awari Full Video Song  Ek Villain  Sidharth Malhotra  Shraddha Kapoor.mp4', 5, 132, 13, '2014-07-11', 'Awaari.jpg'),
(43, 'Ishq hua jo taari', 'yt1s.com - Ishq Hoa Jo Tari  Momina Mustehsan  Jawani Phir Nahi Ani 2  ARY Films.mp4', 5, 56, 13, '2018-08-18', 'Ishq hua jo taari.jpg'),
(44, 'Jee Liya', 'yt1s.com - Jee Liya By Momina Mustehsan CornettoPopRock2.mp4', 5, 56, 13, '2017-10-31', 'Jee Liya.jpg'),
(45, 'Uchiyan deewaran', 'yt1s.com - Uchiyaan Dewaraan Baari 2 Bilal Saeed  Momina Mustehsan  Rahim Pardesi  Music Video.mp4', 5, 96, 13, '2020-11-29', 'Uchiyan deewaran.jpg'),
(46, 'Bas ke bahar', 'yt1s.com - Badshah  Bas Ke Bahar  300 AM Sessions  2022.mp4', 41, 56, 13, '2022-12-19', 'Bas ke bahar.jpg'),
(47, 'Jugnu', 'yt1s.com - Badshah  Jugnu Official Video  Nikhita Gandhi  Akanksha Sharma.mp4', 41, 56, 13, '2021-10-26', 'Jugnu.jpg'),
(48, 'Tabahi', 'yt1s.com - Badshah  Tabahi Official Video  Tamannaah  Retropanda Part 1.mp4', 41, 56, 13, '2022-03-08', 'Tabahi.jpg'),
(49, 'Dotara', 'yt1s.com - Dotara Video Jubin Nautiyal Mouni Roy Payal Dev  Darsh KothariVayu BLM Studios Bhushan Kumar.mp4', 41, 56, 13, '2023-03-26', 'Dotara.jpg'),
(50, 'Sab gazab', 'yt1s.com - Sab Gazab  Goldkartz  Badshah  Ileana DCruz  New Hindi Songs 2023  New Songs 2023 sagahits.mp4', 41, 56, 13, '2023-04-12', 'Sab gazab.jpg'),
(51, 'Kanna vich waaliyan', 'yt1s.com - Kanna Vich Waaliyan  Yo Yo Honey Singh  Hommie Dilliwala  Full Song  Namoh Studios.mp4', 40, 96, 13, '2023-02-27', 'kanna wich waliyaan.jpg'),
(52, 'Naagan', 'yt1s.com - Naagan  Honey 30  Yo Yo Honey Singh  Zee Music Originals.mp4', 40, 56, 13, '2023-04-15', 'Naagan.jpg'),
(53, 'Tell me once', 'yt1s.com - Tell Me Once  Alfaaz x Yo Yo Honey Singh  Full Video.mp4', 40, 56, 13, '2023-03-24', 'Tell me once.jpg'),
(54, 'Tujh p pyaar', 'yt1s.com - Tujh Pe Pyaar  Honey 30  Yo Yo Honey Singh  Zee Music Originals.mp4', 40, 56, 13, '2023-05-15', 'Tujh p pyaar.jpg'),
(55, 'Who knows', 'yt1s.com - Who Knows  So Dee  Yo Yo Honey Singh   Full Song.mp4', 40, 56, 13, '2023-06-18', 'Who knows.jpg'),
(56, 'Chikni chameli', 'yt1s.com - Chikni Chameli Best Video  Agneepath  Katrina Hrithik  Shreya  AjayAtul.mp4', 39, 56, 13, '2011-12-16', 'Chikni chameli.jpg'),
(57, 'Hangover', 'yt1s.com - Hangover Full Video Song  Kick  Salman Khan Jacqueline Fernandez  Meet Bros Anjjan.mp4', 39, 56, 13, '2014-07-07', 'Hangover.jpg'),
(58, 'Pal pal har pal', 'yt1s.com - Pal Pal Har Pal Lyrical Video Song  Lage Raho Munnabhai  Sanjay Dutt Vidya Balan.mp4', 39, 56, 13, '2006-07-24', 'Pal pal har pal.jpg'),
(59, 'Mast mast do nain', 'yt1s.com - Tere Mast Mast Do Nain  With Lyrics Full Song Dabangg  Salman Khan.mp4', 39, 56, 13, '2010-08-20', 'Mast mast do nain.jpg'),
(60, 'Break my heart', 'yt1s.com - Dua Lipa  Break My Heart Official Video.mp4', 42, 26, 14, '2020-03-25', 'Break my heart.jpg'),
(61, 'Dance the night', 'yt1s.com - Dua Lipa  Dance The Night From Barbie The Album Official Music Video.mp4', 42, 26, 5, '2023-05-25', 'Dance the night.jpg'),
(62, 'Dont start now', 'yt1s.com - Dua Lipa  Dont Start Now Official Music Video.mp4', 42, 26, 5, '2019-10-31', 'Dont start now.jpg'),
(63, 'Cold heart', 'yt1s.com - Elton John Dua Lipa  Cold Heart PNAU Remix Official Video.mp4', 42, 26, 14, '2021-08-13', 'Cold heart.jpg'),
(64, 'Sweetest pie', 'yt1s.com - Megan Thee Stallion  Dua Lipa  Sweetest Pie Official Video.mp4', 42, 26, 16, '2022-03-11', 'Sweetest pie.jpg'),
(65, 'End of youth', 'yt1s.com - Ed Sheeran  End Of Youth Official Video.mp4', 43, 26, 13, '2023-05-05', 'End of youth.jpg'),
(66, 'Eyes closed', 'yt1s.com - Ed Sheeran  Eyes Closed Official Video.mp4', 43, 26, 81, '2023-03-24', 'Eyes closed.jpg'),
(67, 'Life goes on', 'yt1s.com - Ed Sheeran  Life Goes On Official Video.mp4', 43, 26, 14, '2023-05-05', 'Life goes on.jpg'),
(68, 'Photograph', 'yt1s.com - Ed Sheeran  Photograph Official Music Video.mp4', 43, 26, 81, '2014-06-23', 'Photograph.jpg'),
(69, 'shape of you', 'yt1s.com - Ed Sheeran  Shape of You Official Music Video.mp4', 43, 26, 126, '2017-01-06', 'shape of you.jpg'),
(70, 'Anyone', 'yt1s.com - Justin Bieber  Anyone.mp4', 44, 26, 13, '2019-07-12', 'Anyone.jpg'),
(71, 'Hold on', 'yt1s.com - Justin Bieber  Hold On.mp4', 44, 26, 13, '2020-12-21', 'Hold on.jpg'),
(72, 'Honest', 'yt1s.com - Justin Bieber  Honest ft Don Toliver.mp4', 44, 26, 13, '2023-05-08', 'Honest.jpg'),
(73, 'I feel funny', 'yt1s.com - Justin Bieber  I Feel Funny Shot on iPhone by Cole Bennett.mp4', 44, 26, 13, '2014-06-20', 'I feel funny.jpg'),
(74, 'Stay', 'yt1s.com - The Kid LAROI Justin Bieber  STAY Official Video.mp4', 44, 26, 14, '2021-07-09', 'Stay.jpg'),
(75, 'Castless crumbling', 'yt1s.com - Castles Crumbling Taylors Version From The Vault Lyric Video.mp4', 45, 26, 13, '2023-07-07', 'Castless crumbling.jpg'),
(76, 'Anti hero', 'yt1s.com - Taylor Swift  AntiHero Official Music Video.mp4', 45, 26, 18, '2022-10-24', 'Anti hero.jpg'),
(77, 'Bejeweled', 'yt1s.com - Taylor Swift  Bejeweled Official Music Video (1).mp4', 45, 26, 5, '2022-10-25', 'Bejeweled.jpg'),
(78, 'I can see you', 'yt1s.com - Taylor Swift  I Can See You Taylors Version From The Vault Official Video.mp4', 45, 26, 18, '2023-07-07', 'I can see you.jpg'),
(79, 'Timeless', 'yt1s.com - Taylor Swift  Timeless Taylors Version From The Vault Lyric Video.mp4', 45, 26, 13, '2023-07-07', 'Timeless.jpg'),
(80, 'To begin again', 'yt1s.com - Ingrid Michaelson ZAYN  To Begin Again Official Video.mp4', 46, 26, 13, '2021-03-17', 'To begin again.jpg'),
(81, 'Better', 'yt1s.com - ZAYN  Better Official Video.mp4', 46, 26, 13, '2020-09-25', 'Better.jpg'),
(82, 'Love like this', 'yt1s.com - ZAYN  Love Like This Official Music Video.mp4', 46, 26, 13, '2023-07-21', 'Love like this.jpg'),
(83, 'Outside', 'yt1s.com - ZAYN  Outside Audio.mp4', 46, 26, 13, '2023-02-16', 'Outside.jpg'),
(84, 'Vibez', 'yt1s.com - ZAYN  Vibez Official Video.mp4', 46, 26, 13, '2021-01-08', 'Vibez.jpg'),
(85, 'Kehndi hundi si', 'Kehndi Hundi Si Chan Tak Raah Bana De (Official Song) AP Dhillon _ Gurinder Gill I Shinda Kahlon I (1080p).mp4', 22, 96, 13, '2022-02-27', 'Kehndi hundi si.jpg'),
(86, 'Gaani', 'yt1s.com - AP Dhillon  Gaani New Song Chad Gussa Hun Jaan De  AP Dhillon New Song  Gaaniyan.mp4', 22, 96, 13, '2022-03-24', 'Gaani.jpg'),
(87, 'Brown munde', 'yt1s.com - BROWN MUNDE  AP DHILLON  GURINDER GILL  SHINDA KAHLON  GMINXR.mp4', 22, 96, 13, '2020-09-18', 'Brown munde.jpg'),
(88, 'Dil nu', 'yt1s.com - DIL NU  AP DHILLON  SHINDA KAHLON.mp4', 22, 96, 15, '2022-10-07', 'Dil nu.jpg'),
(89, 'Insane', 'yt1s.com - INSANE  AP DHILLON  GURINDER GILL  SHINDA KAHLON  GMINXR.mp4', 22, 96, 13, '2021-04-16', 'Insane.jpg'),
(90, ' 5 Taara', 'yt1s.com - 5 Taara Full Song  Diljit Dosanjh  Latest Punjabi Songs 2015  Speed Records.mp4', 25, 96, 13, '2015-12-18', '5 Taara.jpg'),
(91, 'Chan wargi', 'yt1s.com - Chan Wargi  Diljit Dosanjh  Nimrat Khaira  Jodi  Releasing 5th May.mp4', 25, 96, 13, '2023-05-05', 'chan wargi.jpg'),
(92, 'Do you know', 'yt1s.com - Diljit Dosanjh  Do You Know.mp4', 25, 96, 13, '2016-09-23', 'do you know.jpg'),
(93, 'Hass k kude', 'yt1s.com - Hass K Kude  Diljit Dosanjh  Sargun Mehta Avvy Sra Babe Bhangra Paunde NeNew Punjabi Songs 2022.mp4', 25, 96, 13, '2022-10-05', 'hass k kude.jpg'),
(94, 'Proper patola', 'yt1s.com - Proper Patola  Official Video  Diljit Dosanjh  Badshah.mp4', 25, 96, 13, '2013-08-09', 'proper patola.jpg'),
(95, 'Begin from the wings', 'yt1s.com - BTS Jungkook  Begin from The Wings tour 2017 ENG SUBFull HD_720pFHR.mp4', 9, 69, 16, '2016-10-10', 'begin from the wing.jpg'),
(96, 'Stay alive', 'yt1s.com - BTS Jungkook  Stay Alive Prod SUGA of BTS MV.mp4', 9, 69, 14, '2022-02-11', 'stay alive.jpg'),
(97, 'Euphoria ', 'yt1s.com - BTS 방탄소년단 Euphoria  Theme of LOVE YOURSELF 起 Wonder.mp4', 9, 69, 14, '2018-08-24', 'euphoria.jpg'),
(98, 'My time', 'yt1s.com - BTS 방탄소년단 My Time 시차 MV.mp4', 9, 69, 15, '2020-02-21', 'my time.jpg'),
(99, 'Still with you', 'yt1s.com - BTS 방탄소년단 Still With You MV.mp4', 9, 69, 14, '2023-07-31', 'still with you.jpg'),
(100, 'A boy', 'yt1s.com - GDRAGON  A BOY소년이여 MV.mp4', 7, 69, 13, '2009-08-18', 'a boy.jpg'),
(101, 'Heartbreaker', 'yt1s.com - GDRAGON  HEARTBREAKER MV.mp4', 7, 69, 8, '2019-08-18', 'heartbreaker.jpg'),
(102, 'One of a kind', 'yt1s.com - GDRAGON  ONE OF A KIND MV.mp4', 7, 90, 14, '2012-08-15', 'one of a kind.jpg'),
(103, 'Who you', 'yt1s.com - GDRAGON  니가 뭔데WHO YOU MV.mp4', 7, 69, 14, '2013-11-13', 'who you.jpg'),
(104, 'Untitled', 'yt1s.com - GDRAGON  무제無題 Untitled 2014 MV.mp4', 7, 9, 117, '2017-06-08', 'untitled.jpg'),
(105, 'Maldita sea mi', 'yt1s.com - 180610 팬텀싱어 페스티벌 포레스텔라 Maldita Sea Mi Suerte_v720P.mp4', 8, 69, 13, '2019-05-22', 'maldita sea mi.jpg'),
(106, 'One million roses', 'yt1s.com - FMVOne Million Roses 백_l만송이 장미 Ko Woo Rim My Mister OST part5_v720P.mp4', 8, 69, 13, '2018-04-18', 'one million roses.jpg'),
(107, 'shape of you phantom', 'yt1s.com - Forestella  Shape Of You Phantom Singer All Stars.mp4', 8, 69, 13, '2021-07-13', 'shape of you phantom.jpg'),
(108, 'Forestella', 'yt1s.com - Ko Woo Rim  별 헤는 밤  Forestella Phantom Singer 2_720p.mp4', 8, 69, 33, '2017-08-12', 'forestella.jpg'),
(109, 'Pierrot', '삐에로(Pierrot)-고우림(Ko Woorim).mp4', 8, 69, 13, '2022-10-16', 'Pierrot.jpg'),
(110, 'Singularity', 'yt1s.com - BTS V  Singularity 2018 KBS Song Festival  20181228.mp4', 10, 69, 8, '2018-05-07', 'singularity.jpg'),
(111, 'Inner child', 'yt1s.com - BTS 방탄소년단 Inner Child MV.mp4', 10, 69, 14, '2020-02-21', 'inner child.jpg'),
(112, 'Sweet night', 'yt1s.com - BTS 방탄소년단 V Sweet Night MV.mp4', 10, 69, 14, '2020-03-13', 'sweet night.jpg'),
(113, 'Le jazz de v', 'yt1s.com - Le Jazz de V Live Clip 2023BTSFESTA.mp4', 10, 69, 13, '2023-06-16', 'le jazz de v.jpg'),
(114, 'Winter bear', 'yt1s.com - Winter Bear by V.mp4', 10, 69, 117, '2019-08-09', 'winter bear.jpg'),
(115, 'Latin medley', 'Carlos Marin - Latin medley.mp4', 18, 112, 13, '2022-08-28', 'latin medley.jpg'),
(116, 'Sueno impossible', 'Carlos Marin - Sueno imposible.mp4', 18, 112, 13, '2018-10-12', 'sueno impossible.jpg'),
(119, 'Granada', 'yt1s.com - Carlos Marin  Granada_v720P.mp4', 18, 112, 13, '2017-04-15', 'granada.jpg'),
(120, 'The man with the beautiful spanish eyes', 'yt1s.com - CARLOS MARIN THE MAN WITH THE BEAUTIFUL SPANISH EYESwmv_v720P.mp4', 18, 112, 13, '2006-11-21', 'the man with the beautiful spanish eyes.jpg'),
(121, ' Almost paradise', 'yt1s.com - Innocence  Almost Paradise ft Carlos Marín_v720P.mp4', 18, 112, 13, '2020-10-14', 'aladdin lamp.jpg'),
(122, 'Que le den candela', 'CELIA CRUZ - Que le den candela.mp4', 20, 112, 87, '1994-10-20', 'Que le den candela.jpg'),
(123, 'La Negra Tiene Tumbao', 'yt1s.com - Celia Cruz  La Negra Tiene Tumbao Official Video.mp4', 20, 112, 14, '2002-12-30', 'La Negra Tiene Tumbao.jpg'),
(124, 'Oye como va', 'yt1s.com - Celia Cruz  Oye Como Va Video Version.mp4', 20, 112, 87, '1971-09-22', 'oye como va.jpg'),
(125, 'Rie Y Llora', 'yt1s.com - Celia Cruz  Rie Y Llora Video.mp4', 20, 112, 87, '2003-04-06', 'rie y llora.jpg'),
(126, 'Yo Viviré I Will Survive', 'yt1s.com - Celia Cruz  Yo Viviré I Will Survive.mp4', 20, 112, 53, '2000-09-22', 'Yo Viviré I Will Survive.jpg'),
(127, 'Corazon Espinado', 'yt1s.com - Santana  Corazon Espinado ft Mana Official Video.mp4', 21, 112, 2, '2000-05-30', 'corazon espinado.jpg'),
(128, 'Cry Baby Cry', 'yt1s.com - Santana  Cry Baby Cry ft Sean Paul Joss Stone_360p.mp4', 21, 112, 18, '2006-04-04', 'cry baby cry.jpg'),
(129, 'Saideira', 'yt1s.com - Santana  Saideira ft Samuel Rosa Version en Español_v720P.mp4', 21, 112, 13, '2014-05-06', 'saidiera.jpg'),
(130, 'Salvador ', 'yt1s.com - Santana Jose Santana Salvador Santana  Energia Video_v720P.mp4', 21, 112, 34, '1987-10-01', 'salvador.jpg'),
(131, 'Besos de Lejos', 'yt1s.com - Santanas Besos de Lejos featuring Gloria Estefan.mp4', 21, 112, 13, '2014-05-06', 'besos de lejos.jpg'),
(132, 'La bicicleta', 'yt1s.com - Carlos Vives Shakira  La Bicicleta.mp4', 19, 112, 17, '2016-05-27', 'la bicicleta.jpg'),
(133, 'Loca', 'yt1s.com - Shakira  Loca Spanish Version ft El Cata (1).mp4', 19, 112, 87, '2010-09-10', 'loca.jpg'),
(134, 'Whenever whereever', 'yt1s.com - Shakira  Suerte Whenever Wherever.mp4', 19, 112, 14, '2001-06-15', 'whenever wherever.jpg'),
(135, 'Waka waka', 'yt1s.com - Waka Waka Esto es Africa Cancion Oficial de la Copa Mundial de la FIFA Sudafrica 2010.mp4', 19, 112, 13, '2010-05-07', 'waka waka.jpg'),
(136, 'Amarain', 'yt1s.com - Amr Diab  Amarain  Official Music Video  HD Version  عمرو دياب  قمرين.mp4', 14, 4, 14, '1999-07-28', 'amarine.jpg'),
(137, 'Ana ayesh', 'yt1s.com - Amr Diab  Ana Ayesh  Official Music Video  HD Version   عمرو دياب  أنا عايش_v720P.mp4', 14, 4, 14, '2003-02-04', 'ana ayesh.jpg'),
(138, 'El leila', 'yt1s.com - Amr Diab  El Leila  Video Clip  عمرو دياب  الليلة  فيديو كليب.mp4', 14, 72, 14, '2007-07-16', 'el leila.jpg'),
(139, 'Nour El Ein', 'yt1s.com - Amr Diab  Nour El Ein  Official Music Video  HD Version  عمرو دياب  نور العين.mp4', 14, 4, 13, '1996-01-12', 'nour el ain.jpg'),
(140, 'Tammally maak', 'yt1s.com - Tamally Maak  AmrDiab   Official Music Video  تملى معاك  عمرو دياب.mp4', 14, 4, 14, '2000-06-10', 'tamally maat.jpg'),
(141, 'Aladdin lamp', 'yt1s.com - Mohamed Ramadan  Aladdin Lamp  Official Music Video     محمد رمضان  مصباح علاء الدين.mp4', 13, 4, 13, '2021-01-23', 'aladdin lamp.jpg'),
(142, 'Bum bum', 'yt1s.com - Mohamed Ramadan  BUM BUM  Official Music Video   محمد رمضان  رايحين نسهر.mp4', 13, 4, 13, '2020-01-01', 'bum bum.jpg'),
(143, 'Ya habibi', 'yt1s.com - Mohamed Ramadan  Gims  YA HABIBI Official Music Video محمد رمضان و ميتري جيمس  يا حبيبي.mp4', 13, 4, 13, '2020-09-06', 'ya habibi.jpg'),
(144, 'Mafia', 'yt1s.com - Mohamed Ramadan  Mafia  Official Music Video   محمد رمضان  مافيا_v720P.mp4', 13, 4, 13, '2019-01-01', 'mafia.jpg'),
(145, 'Number one ', 'yt1s.com - Mohamed Ramadan  NUMBER ONE Official Music Video  محمد رمضان  نمبر وان.mp4', 13, 4, 13, '2018-06-22', 'number one.jpg'),
(146, 'Guli mata', 'yt1s.com - Guli Mata  Saad Lamjarred  Shreya Ghoshal  Jennifer Winget  Anshul Garg.mp4', 12, 4, 13, '2023-07-12', 'guli mata.jpg'),
(147, 'Ghaltana', 'yt1s.com - Saad Lamjarred  GHALTANA EXCLUSIVE Music Video  سعد لمجرد  غلطانة فيديو كليب حصري.mp4', 12, 4, 13, '2016-08-25', 'ghaltana.jpg'),
(148, 'LM3ALLEM', 'yt1s.com - Saad Lamjarred  LM3ALLEM Exclusive Music Video   سعد لمجرد  لمعلم فيديو كليب حصري.mp4', 12, 4, 14, '2015-05-05', 'lm3allem.jpg'),
(149, 'Mal habibi', 'yt1s.com - Saad Lamjarred  MAL HBIBI MALOU  Music Video   سعد لمجرد  مال حبيبي مالو  فيديو كليب.mp4', 12, 4, 13, '2016-09-17', 'mal habibi.jpg'),
(150, 'Aashaangy', 'yt1s.com - Tamer Hosny  Aashaangy  Video Clip  تامر حسني  عشأنجي  فيديو كليب.mp4', 15, 4, 14, '2020-07-22', 'aashaangy.jpg'),
(151, 'Ya ana ya mafesh', 'yt1s.com - Tamer Hosny  Ya Ana Ya Mafesh  يا انا يا مفيش  تامر حسني.mp4', 15, 4, 14, '2010-06-23', 'ya ana ya mafesh.jpg'),
(152, 'Tag', 'yt1s.com - اغنية تاج من فيلم تاج من البوم هرمون السعاده  تامرحسني.mp4', 15, 4, 14, '2023-06-28', 'tag.jpg'),
(153, 'Hadl3any', 'yt1s.com - اغنية هدلعني  تامر حسني من فيلم بحبك  Hadl3any Tamer Hosny.mp4', 15, 4, 14, '2022-07-06', 'hadl3any.jpg'),
(154, 'Naseny leh', 'yt1s.com - ڤيديو كليب ناسيني ليه  تامر حسني  Naseny Leh  Music video 4K  Tamer Hosny.mp4', 15, 4, 13, '2019-02-17', 'naseny leh.jpg'),
(155, 'Khawet Thekrah', 'yt1s.com - فهد بن فصلا  خاويت ذكراه حصريا  2023.mp4', 16, 4, 13, '2023-04-23', 'khawet thekrah.jpg'),
(156, 'Gharam athneen', 'yt1s.com - فهد بن فصلا  غرام اثنين حصريا  2022.mp4', 16, 4, 13, '2022-06-27', 'ghrama athneen.jpg'),
(157, 'Mathoqah', 'yt1s.com - فهد بن فصلا  ماذوقه حصريا  2023.mp4', 16, 4, 13, '2023-06-17', 'mathoqah.jpg'),
(158, 'Marhaba bek', 'yt1s.com - فهد بن فصلا  مرحبا بك حصريا  2020_v720P.mp4', 16, 4, 13, '2020-07-05', 'marhaba bek.jpg'),
(159, 'Hada alsaudie foq foq', 'yt1s.com - كليب  هذا السعودي فوق  فوق  فهد بن فصلا حصريا 2018.mp4', 16, 4, 13, '2018-09-23', 'hada al saudi fok fok.jpg'),
(160, 'Amaplola', 'yt1s.com - Alfredo Kraus  Amapola con letra  lyrics video_v720P.mp4', 17, 112, 13, '1968-11-26', 'amapola.jpg'),
(161, 'Jurame ', 'yt1s.com - Júrame_v720P.mp4', 17, 112, 13, '1968-11-26', 'jurame.jpg'),
(162, 'Mi viejo remastered', 'yt1s.com - Mi Viejo Amor Remastered_v720P.mp4', 17, 112, 13, '1958-11-26', 'Mi Viejo Amor.jpg'),
(164, 'Serenata Napolitana', 'yt1s.com - Serenata Napolitana_v720P.mp4', 17, 112, 13, '1999-04-27', 'Serenata Napolitana.jpg'),
(165, 'No Problem', 'yt1s.com - NAYEON NO PROBLEM feat Felix of Stray Kids MV.mp4', 11, 69, 14, '2022-06-24', 'no problem.jpg'),
(166, 'Deep End', 'yt1s.com - Stray Kids Felix Deep End  MV.mp4', 11, 69, 53, '2022-12-21', 'deep end.jpg'),
(167, 'Hellevator', 'yt1s.com - Stray Kids Hellevator MV.mp4', 11, 69, 8, '2020-03-18', 'hellevator.jpg'),
(168, 'Youtiful', 'yt1s.com - Stray Kids Youtiful Video.mp4', 11, 69, 8, '2023-06-02', 'youtiful.jpg'),
(169, 'Any', 'yt1s.com - Stray Kids 아니 Any Video.mp4', 11, 69, 14, '2023-06-27', 'any.jpg'),
(170, 'Door ho gya', 'yt1s.com - Door Ho Geya  Guri Tanya Official Song Kartar Cheema  Latest Punjabi Songs 2019_v720P.mp4', 24, 96, 13, '2019-07-24', 'door ho gya.jpg'),
(171, 'Dooriyan', 'yt1s.com - GURI   OFFICIAL VIDEO  DOORIYAN  NEW PUNJABI SONG  GEET MP3.mp4', 24, 96, 13, '2017-06-26', 'dooriyan.jpg'),
(172, 'Billian Billian', 'yt1s.com - GURI  Billian Billian Official Video Sukhe  Satti Dhillon  GkDigital  Geet MP3.mp4', 24, 96, 13, '2018-09-26', 'billian billian.jpg'),
(173, 'Mill lo na', 'yt1s.com - Mill Lo Na  Guri Ft Sukhe Official Video Jaani  Satti Dhillon  Latest Punjabi Songs  Geet MP3.mp4', 24, 96, 13, '2018-02-26', 'mil lo na.jpg'),
(174, 'Nira Ishq', 'yt1s.com - NIRA ISHQ  GURI Official Song Satti Dhillon  GKDIGITAL  Latest Songs  Geet MP3.mp4', 24, 96, 13, '2018-09-26', 'nira ishq.jpg'),
(175, 'Tere karke', 'yt1s.com - Tere Karke  GURI Official Video Satti Dhillon  MixSingh  Punjabi Song  Geet MP3.mp4', 24, 96, 13, '2018-05-26', 'tere karke.jpg'),
(176, 'High Rated Gabru', 'yt1s.com - Guru Randhawa High Rated Gabru Official Song  DirectorGifty  Bhushan Kumar  TSeries.mp4', 26, 96, 13, '2017-07-04', 'high rated gabru.jpg'),
(177, 'Ishq Tera', 'yt1s.com - Guru Randhawa Ishq Tera Official Video  Nushrat Bharucha  Bhushan Kumar  TSeries.mp4', 26, 96, 13, '2020-09-04', 'ishq tera.jpg'),
(178, 'Lahore', 'yt1s.com - Guru Randhawa Lahore Official Video Bhushan Kumar  Vee  DirectorGifty  TSeries.mp4', 26, 96, 13, '2017-12-13', 'lahore.jpg'),
(179, 'Ishare Tere', 'yt1s.com - ISHARE TERE Song  Guru Randhawa Dhvani Bhanushali  DirectorGifty  Bhushan Kumar.mp4', 26, 96, 13, '2019-07-24', 'ishare tere.jpg'),
(180, 'Suit', 'yt1s.com - Suit Full Video Song  Guru Randhawa Feat Arjun  TSeries.mp4', 26, 96, 13, '2018-01-01', 'suit.jpg'),
(181, 'Boss', 'yt1s.com - Boss  Jass Manak Official Video Satti Dhillon  Ri  Latest Punjabi Songs  GKDIGITAL  Geet MP3.mp4', 23, 96, 13, '2018-07-27', 'boss.jpg'),
(182, 'Lehanga', 'yt1s.com - Lehanga  Jass Manak Official Video Satti Dhillon  Punjabi Songs  GK Digital  Geet MP3.mp4', 23, 96, 13, '2019-08-13', 'lehanga.jpg'),
(183, 'MoonRoof', 'yt1s.com - MoonRoof Official Video   Jass Manak  Sukh e Latest Punjabi Song 2019  Geet MP3 Gk Digital.mp4', 23, 96, 13, '2019-02-13', 'moonroof.jpg'),
(184, 'Prada', 'yt1s.com - Prada  Jass Manak Official Video Satti Dhillon  Superhit Romantic Song  GK Digital  Geet MP3.mp4', 23, 96, 13, '2018-06-13', 'prada.jpg'),
(185, 'Suit Punjabi', 'yt1s.com - SUIT PUNJABI  JASS MANAK Official Video Satti Dhillon  New Songs 2018  GKDIGITAL  Geet MP3.mp4', 23, 96, 13, '2018-09-13', 'suit punjabi.jpg'),
(186, 'Tera Mera Viah', 'yt1s.com - Tera Mera Viah  Jass Manak  KV Dhillon Marriage  Davy  Wedding Video.mp4', 23, 96, 13, '2019-11-23', 'tera mera viah.jpg'),
(187, 'Viah', 'yt1s.com - VIAH  JASS MANAK Official Video Satti Dhillon  Punjabi Song 2019  GKDIGITAL  Geet MP3.mp4', 23, 96, 13, '2019-04-13', 'viah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `User_id` int(11) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `Contact_No` varchar(13) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Date` datetime NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`User_id`, `User_Name`, `User_Email`, `Contact_No`, `Gender`, `Date`, `Address`, `Password`, `status`) VALUES
(1, 'Owais', 'owais@gmail.com', '03070226540', 'M', '0000-00-00 00:00:00', 'xyz', '$2y$10$0ePUYh4RrAXqBS76cmxjeeqyUQ3MQHzew9Gs2uf6HiZWDCzYvgNvu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Artist_Id`),
  ADD KEY `FK_nationality` (`Nationality`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`Genre_Id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`Lang_Id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`Nationality_Id`);

--
-- Indexes for table `ost`
--
ALTER TABLE `ost`
  ADD PRIMARY KEY (`Ost_Id`),
  ADD KEY `FK_ogenre` (`Genre`),
  ADD KEY `FK_oartist` (`Artist`);

--
-- Indexes for table `ost-review`
--
ALTER TABLE `ost-review`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_ost_review` (`ost_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD UNIQUE KEY `user_id` (`user_id`,`song_id`),
  ADD KEY `fk_song_review` (`song_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`Song_Id`),
  ADD KEY `FK_sartist` (`Artist`),
  ADD KEY `FK_lang` (`Language`),
  ADD KEY `FK_gen` (`Genre`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `Artist_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `Genre_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `Lang_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `Nationality_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `ost`
--
ALTER TABLE `ost`
  MODIFY `Ost_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `Song_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `FK_nationality` FOREIGN KEY (`Nationality`) REFERENCES `nationality` (`Nationality_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ost`
--
ALTER TABLE `ost`
  ADD CONSTRAINT `FK_oartist` FOREIGN KEY (`Artist`) REFERENCES `artist` (`Artist_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ogenre` FOREIGN KEY (`Genre`) REFERENCES `genre` (`Genre_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ost-review`
--
ALTER TABLE `ost-review`
  ADD CONSTRAINT `fk_ost_review` FOREIGN KEY (`ost_id`) REFERENCES `ost` (`Ost_Id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`User_id`) ON DELETE NO ACTION;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_song_review` FOREIGN KEY (`song_id`) REFERENCES `song` (`Song_Id`),
  ADD CONSTRAINT `fk_user_review` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`User_id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `FK_gen` FOREIGN KEY (`Genre`) REFERENCES `genre` (`Genre_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_lang` FOREIGN KEY (`Language`) REFERENCES `language` (`Lang_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_sartist` FOREIGN KEY (`Artist`) REFERENCES `artist` (`Artist_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
