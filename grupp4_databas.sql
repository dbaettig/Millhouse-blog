-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2017 at 02:25 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektarbete`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `postID`, `userID`, `name`, `email`, `comment`, `created`) VALUES
(21, 17, 2, ' cattapr', ' catalina.pradilla@medieinstitutet.se ', 'Really love this outfit, specially the coat. Olivia Palamero did it again!', '2017-11-30 21:13:00'),
(22, 15, 0, 'Manuela', 'manuela@m.se', 'My brother would love this suit, would it be for sales on Black Friday?', '2017-11-30 21:14:21'),
(23, 15, 2, ' cattapr', ' catalina.pradilla@medieinstitutet.se ', 'Sorry to tell you that it wont. As it is the New Collecton. However, have a look at the Millhouse shop, cause there will be some cool suits on sells on Black Friday!', '2017-11-30 21:15:56'),
(24, 14, 2, ' cattapr', ' catalina.pradilla@medieinstitutet.se ', 'Maybe a blue dress is what is left in the closet.', '2017-11-30 21:16:30'),
(25, 19, 2, ' cattapr', ' catalina.pradilla@medieinstitutet.se ', 'Beautiful, love the this collection! Can\'t wait', '2017-11-30 21:25:24'),
(26, 19, 0, 'Eric', 'eric@yes.se', 'Omg!!!! Millhouse I love you!!', '2017-11-30 21:26:21'),
(27, 19, 0, 'David', 'david@david.se', 'Totally agree with coloring up the streets. What a piece of art! I am already planing on buy the yellow suit.', '2017-11-30 21:27:49'),
(28, 19, 0, 'Naomi', 'naomi@naomi.se', 'My boyfriend loves colors, this will be the perfect birthdaypresent!!', '2017-11-30 21:28:51'),
(29, 19, 2, ' cattapr', ' catalina.pradilla@medieinstitutet.se ', 'We are excited too for this new colorful collection! And we are really happy that you are LOVING it! /Millhouse', '2017-11-30 21:29:49'),
(36, 1, 0, 'Catalina', 'cata@hotmail.com', 'Testing if email validates', '2017-12-05 09:02:11'),
(37, 20, 0, 'Linda', 'linda@linda.se', 'Colorful runway!', '2017-12-05 09:08:53'),
(38, 20, 0, 'Mandy', 'mandy@mandy.se', 'I agree, really beautiful!', '2017-12-05 09:20:37'),
(39, 20, 2, ' cattapr', ' catalina.pradilla@medieinstitutet.se ', 'Nice!', '2017-12-06 12:13:42'),
(40, 20, 0, 'Cata', 'cata.hotmail.com', 'Amazing!', '2017-12-06 12:14:03'),
(41, 20, 0, 'Nicole', 'nicole@hotmail.se', 'Can\'t wait for the next runway', '2017-12-06 15:47:57'),
(42, 20, 0, 'sam', 'sam@hotmail.se', 'Cool stuff!', '2017-12-06 15:56:19'),
(44, 20, 0, 'Lui', 'lui@lui.se', 'When will the next runway be?', '2017-12-06 16:13:34'),
(45, 20, 0, 'Lucinda', 'lucinda@luci.se', 'It was lots of fun being there', '2017-12-06 16:14:28'),
(46, 17, 0, 'tessa', 'tessa@tessa.se', 'Nice shoes', '2017-12-07 12:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `post` text NOT NULL,
  `created` datetime NOT NULL,
  `category` varchar(200) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `alt_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `userID`, `title`, `post`, `created`, `category`, `image`, `alt_text`) VALUES
(1, 2, 'A picture', '<p>Can say a thousand words. But style can say it all.</p><p>As we’ve come to expect, street stylists were already ahead of the trend. From puffer scarves so long you could use them on your bed to embroidered ruanas that are oh so fashionable, blanket scarves are a chic way to beat the chill this season.</p><p>How to wear a blanket scarf depends on the style of the scarf. If it’s literally the size of a blanket, look for tailored pieces to cut down on the bulk. You could also favor athletic elements, such as slim hoodies and sneakers. Puffer-type scarves call for a tougher getup, like bombers and combat boots.</p>', '2017-11-10 10:15:55', 'style', 'resized/photo1.jpg', 'Clothes and accessories'),
(10, 2, 'Fabulous on Winter', '<p>The winter season brings with it all kinds of wonderful things, like gatherings with friends and family, gifts, time off from work. But it’s also a time of year when our wardrobes can slip into a bit of a rut and, well, fade into neutral. But just because temps are dropping and skies are kind of grayer, it doesn’t mean you can’t inject some cheerful color — or better yet, <a href=\"http://www.thefashionspot.com/style-trends/739349-color-trends/\">color combos</a>&nbsp;— into your outfits. In fact, that’s exactly what you should do, at least if the street style set has anything to say about it.</p><p>Perhaps it’s all the camera courting, but the insider crowd has a way of putting together standout looks you’ve never thought of before. That includes pairing colors that were previously considered clashing (pink and red) or holiday-centric (red and green) or juvenile (purple and pink). It seems that everywhere we turn these days, some showgoer is decked out in a masterful mix of hues that we want to try out ourselves.</p><p>And the runways, of course, have been following suit — or perhaps it’s the other way around. Despite which chicken or egg came first, bold color pairings are still going strong for Spring 2018 with designers from <a href=\"http://www.thefashionspot.com/runway-news/763827-calvin-klein-spring-2018-runway/\">Calvin Klein</a> to <a href=\"http://www.thefashionspot.com/runway-news/765951-gucci-spring-2018-runway/#/slide/1\">Gucci</a> to <a href=\"http://www.thefashionspot.com/runway-news/764521-oscar-de-la-renta-spring-2018-runway/\">Oscar de la Renta</a> offering up clashy combos we can totally get behind.</p>', '2017-11-21 13:34:07', 'style', 'resized/photo5.jpg', 'Black trenchcoat woman collection'),
(13, 2, 'To be or not to be - Glamorous.', '<p>What\'s more glamorous than a pair of oversized sunglasses? On your face, they give you a mysterious, movie-star look. On top of the head, they serve as a chic headband. Look for sunglasses with frame shapes to flatter your face. In general, choose the opposite of your face shape: rectangle for a round face and round shades for an angular face. However, large oval frames look good on most face shapes. Black or tortoise frames are classics and look good on almost everyone.</p><p>There’s no better time than the&nbsp;new season&nbsp;to get yourself a new pair of cool glasses. And while we’re on the subject, don’t go shopping without being in the know about&nbsp;<strong>what are the latest&nbsp;eyewear&nbsp;trends!</strong></p><p>We rounded up <strong>the upcoming frame trends</strong> <strong>of 2017, so you know what’s stylish and.. what’s out.&nbsp;</strong>If you’re looking for some&nbsp;<strong>stylish glasses</strong>&nbsp;to go with new office outfits&nbsp;or a pair of great&nbsp;sunglasses to style while strolling the city, we’ve got you covered.</p>', '2017-11-27 11:18:45', 'style', 'resized/photo4.jpg', 'Vintage round glasses'),
(14, 2, 'Look for the woman in the dress', '<p>Electric and bold, cobalt blue is a fashion trend that has no boundaries, taking women from season to season, and looking great when teamed with a variety of accents and colors. Make it fun by adding a kick of color in <a href=\"http://www.ebay.com/sch/stiletto-heels\">sharp stilettos</a> or bright flats, adding a contrasting scarf, belt, or blazer. No matter how you look at it, a <a href=\"http://www.ebay.com/bhp/cobalt-blue-dress\">cobalt blue dress</a> is simply delightful. Many women accessorize their electric blue clothing with blacks, grays, and whites, but those who know how to style a cobalt blue dress discover why this color holds so much influence over the fashion world. But a woman knows - \"if there is no woman, there is no dress\".</p>', '2017-11-28 11:04:00', 'style', 'resized/style6.jpg', 'Two women in blue dress'),
(15, 2, 'What mood are you in?', '<p>If you’re starting to look at your closet with the same level of&nbsp;enthusiasm as a Tinder date, it’s time for an intervention. Luckily, climbing out of a sartorial rut is a lot easier than navigating the dating landscape. All you have to do&nbsp;is&nbsp;tap a new source of inspiration. It’s that easy. So whether you’re in the mood to try a new style or maybe just accessorize it we round up the must have of the month!&nbsp;</p><p>Unlike the sportier models of watches you’ll find from OMEGA today, a <a href=\"https://www.crownandcaliber.com/search/age/vintage/sort-by/created_at/sort-direction/desc?q=omega+seamaster\">vintage Seamaster</a> makes an unexpected but fantastic man\'s watch. Why? Easy. It’s a watch that pairs well with a suit, a dress shirt, or even just a casual outfit. If you feel for stepping up the game then this whole suit the one.</p>', '2017-11-30 20:38:38', 'style', 'resized/style4.jpg', 'Suits oldfashion-purple'),
(17, 2, 'She got a spell on me', '<p><a href=\"http://www.whowhatwear.co.uk/olivia-palermo-style\">Olivia Palermo</a> has a knack for making everything look expensive, and her latest winning Millhouse outfit involves a patchwork faux-fur jacket, which is only £80. She paired it with velvet embellished platform heels, nude culottes and a white circular bag from her collection with <a href=\"https://click.linksynergy.com/deeplink?id=2P555SNI1Kc&amp;mid=38736&amp;murl=https%3A%2F%2Fwww.melimelo.com%2Fcollections%2Fthe-severine-collection%2Fproducts%2Flimited-edition-op-hue-severine-bucket-bag-bianca-white-signed-by-olivia-palermo\">Meli Melo</a>. When it comes to finding the best pieces in Millhouse, <a href=\"http://www.whowhatwear.co.uk/olivia-palermo-style\">OP previously told us</a>: \"I think, as with anything, when you shop, you should go in with an open mind. See what could work in your closet, and create a look on the spot—be open-minded. I\'m not one to go in with a specific agenda.\" The best piece she has ever found in here, although she has \"many,\" is a \"light flesh spring overcoat—I\'ve have had it for many years, and it\'s great.\"</p><p>1 / 4</p><figure class=\"image\"><img src=\"https://cdn.cliqueinc.com/posts/243468/olivia-palermo-zara-fur-coat-243468-1512037226394-image.640x0c.jpg\" alt=\"Olivia Palermo Meli Melo\"></figure><p>PHOTO:</p><p>Meli Melo</p><p><strong>On Olivia Palermo: Millhouse</strong> <a href=\"https://www.zara.com/uk/en/patchwork-effect-fabric-jacket-p04341281.html?v1=4767540&amp;v2=990504\">Patchwork Effect Fabric Jacket</a> (£80); Meli Melo Severine Bag (£600); Sebastian Shoes.</p><p>SHOP&nbsp;THE&nbsp;LOOK</p><p>2 / 4</p><figure class=\"image\"><img src=\"https://cdn.cliqueinc.com/posts/243468/olivia-palermo-zara-fur-coat-243468-1512037539006-product.640x0c.jpg\" alt=\"Zara Patchwork Effect Fabric Jacket\"></figure><p><a href=\"https://www.zara.com/uk/en/patchwork-effect-fabric-jacket-p04341281.html?v1=4767540&amp;v2=990504\">SHOP</a></p><p>Millhouse <a href=\"https://www.zara.com/uk/en/patchwork-effect-fabric-jacket-p04341281.html?v1=4767540&amp;v2=990504\">Patchwork Effect Fabric Jacket</a> (£80)</p><p>3 / 4</p><figure class=\"image\"><img src=\"https://cdn.cliqueinc.com/posts/243468/olivia-palermo-zara-fur-coat-243468-1512037843097-product.640x0c.jpg\" alt=\"Meli Melo Severine Bucket Bag\"></figure><p><a href=\"https://click.linksynergy.com/deeplink?id=2P555SNI1Kc&amp;mid=38736&amp;murl=https%3A%2F%2Fwww.melimelo.com%2Fcollections%2Fthe-severine-collection%2Fproducts%2Flimited-edition-op-hue-severine-bucket-bag-bianca-white-signed-by-olivia-palermo\">SHOP</a></p><p>Meli Melo <a href=\"https://click.linksynergy.com/deeplink?id=2P555SNI1Kc&amp;mid=38736&amp;murl=https%3A%2F%2Fwww.melimelo.com%2Fcollections%2Fthe-severine-collection%2Fproducts%2Flimited-edition-op-hue-severine-bucket-bag-bianca-white-signed-by-olivia-palermo\">Severine Bucket Bag</a> (£600)</p><p>4 / 4</p><figure class=\"image\"><img src=\"https://cdn.cliqueinc.com/posts/243468/olivia-palermo-zara-fur-coat-243468-1512038034885-product.640x0c.jpg\" alt=\"Saint Laurent Farrah Bow-Embellished Velvet Platform Sandals\"></figure><p><a href=\"https://click.linksynergy.com/deeplink?id=25ZRSXYPVYg&amp;mid=24448&amp;murl=https%3A%2F%2Fwww.net-a-porter.com%2Fgb%2Fen%2Fproduct%2F916516%3FresType%3Dsingle%26keywords%3Dred%2520velvet%2520platform%26enableAjaxRequest%3Dfalse\">SHOP</a></p><p>Saint Laurent <a href=\"https://click.linksynergy.com/deeplink?id=25ZRSXYPVYg&amp;mid=24448&amp;murl=https%3A%2F%2Fwww.net-a-porter.com%2Fgb%2Fen%2Fproduct%2F916516%3FresType%3Dsingle%26keywords%3Dred%2520velvet%2520platform%26enableAjaxRequest%3Dfalse\">Farrah Bow-Embellished Velvet Platform Sandals</a> (£600)</p><ul><li>&nbsp;</li><li>&nbsp;</li></ul>', '2017-11-30 21:04:27', 'style', 'resized/style7.jpg', 'streetstyle with Olivia Palamero'),
(18, 2, 'Make a room come to life with plants', '<p>An affordable way to bring a room to life&nbsp;is with indoor plants. A pop of green with an interesting texture can make a lifeless corner or shelf feel complete. I like to think of them as nature’s art, and although they take a little more care than a new watercolor, they are certainly more affordable than an original art piece. Today I am sharing some recent spaces where an indoor plant has made the difference, how styling your plants in groups or with a unique planter can make a major statement, and ideas for using plants all throughout your home.&nbsp;</p>', '2017-11-30 21:11:25', 'interior', 'resized/vaxttrender-2017.jpg', 'Plantsdecor'),
(19, 2, 'Color up our next collection', '<p>Underscoring colors continued influence when it comes to trend, the PANTONE Fashion Color Trend Report London Fashion Week Spring 2018 features the top 12 colors for men’s and women’s fashion. Celebrating exploration, experimentation and the consumers desire to mix, blend and create the unexpected, the Spring 2018 palette showcases the unique nuances of color expression for the London market. The report also includes 4 core classics. Transcending seasons and providing a foundation to any wardrobe, these core shades can be built upon in tonal stories or amplified with contrasting hues to create a new level of energy for the Spring 2018 season. And if we may, next collection will look something like this!</p><p>The desire for colorful self-expression is a key take away for Spring 2018. Similar to observations made by Pantone Color Institute’s Executive Director Leatrice Eiseman in our NY PANTONE Fashion Color Trend Report, designers for the UK market are comparably responding to the consumer’s growing appetite for flexibility in color expression by introducing more unusual colors and color stories in their collections for Spring 2018. Overall there is a feeling of optimism and confidence driving a new vitality into fashion trends.</p><p>Unique shades for the London runway convey themes of energy, sophistication and serenity. There are multi-dimensional and grounded hues, while others exude a vibrant breath of fresh air. The color story is wildly divergent and we see a kaleidoscopic bounty of uplifting shades and feel-good tones. That doesn’t mean that we don’t continue to look for more neutral or classic shades. Whether on their own or providing the landscape for complex color mixes, core basics are an essential for any season.</p><p>Along with this recognized freedom to explore and experiment with more color, fashion, and the people who interact with it, no longer want to feel limited by traditional color guidelines. Gender and seasonal borders continue to be non-issues when it comes to color. Untypical spring shades that make for complex and original combinations, communicates the consumer’s desire to experiment with color all year round without any restrictions. The color story for Spring 2018 is a perfect reflection of this new sentiment.</p>', '2017-11-30 21:23:35', 'news', 'resized/fashion.jpg', 'Colorfull suits mancollection'),
(20, 2, 'What Je Ne Sais Quoi Really Means When We\'re Talking About Fashion', '<p>Unless you speak French, it’s probably a little hard to fully understand exactly what je ne sais quoi really means. But we can help, thanks to the internet. According to the online dictionary, the phrase translates to “a pleasant quality that is hard to describe.” Pretty vague, right? But it’s uttered all the time in the fashion industry. Said in your best French accent, it can <i>almost</i>be used to refer to anything—from insanely covetable style to the way a woman walks.</p><p>Luckily, I just so happen to know a couple of French people to give me a bit more insight into what it really means. The first, who is also my neighbour, said that it always depends on the context when using the phrase, but essentially it means “a little something” (although its literal translation means “I don’t know what”). The second French friend told me that the phrase means “something that someone (or something) might have over other people/things.” Essentially, it’s an indescribable quality in a person or item that is desirable. While that makes things a little clearer, she also said that French people don’t really use it that often and that it’s more a phrase that non-French people like to use. Oh.</p>', '2017-11-30 21:35:47', 'featured', 'resized/news3.jpg', 'fashion runway ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `profilepic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `profilepic`) VALUES
(1, 'test1', '$2y$10$3nKKIQ9AVhZP/wv3BZbl3eTlGU0nE8i2Xqh.ebycPbggiK2PuRwt2', '', ''),
(2, 'cattapr', '$2y$10$je5PdOMlfD3fRRdDBzO4..13gMpgcwE9CeTYYs/QU7HuFwRwoI1s.', 'catalina.pradilla@medieinstitutet.se ', 'profilepics/style2.jpeg'),
(3, '', '$2y$10$m2IEyRXThT9X6t8Z..EJA.katnBFg.5.Y9PLqpt7VsNPi8rR698w.', '', ''),
(5, 'lucia', '$2y$10$AXZf4A6pja6jDk2ItngVU.Cn0Zfj0YGOhfukzVzxRNgMWJScjGUVC', 'catalina.pradilla@test.se', 'img/glasses1.jpeg'),
(6, 'Naomi', '$2y$10$SrR/eSHozvx9lzfXr3dPeuak5yGf5JJmeXq/jjdMYtsQwJmn4iV0e', 'naomi@test.se', 'img/glasses1.jpeg'),
(7, 'cat', '$2y$10$bG1YNiH96iBDv1An5cxcv.AAmhoGL1h39OG991EIcMNJYkNllV1G6', 'cata@hotmail.com', 'profilepics/profilepig.jpg'),
(8, 'cata', '$2y$10$CaeakCrxrnuSwd2RoLYJiupyPu/AzBwrnxvhAC20TxnbhGEX4G0wy', 'catalina@hotmail.com', 'profilepics/profilepig.jpg'),
(9, 'catpr', '$2y$10$1YNXQ4Pcw7z04qzs.QRQV.zvR3nLEWk/uzszaO1nX2GOIrt4Uy57e', 'cat@hotmail.com', 'profilepics/profilepig.jpg'),
(10, 'admin', '$2y$10$RFNTQuA8XTec4rssGTine.ovbUqlSdKBl0LGes/SF0kahqI3di36y', 'cool@hotmail.com', 'profilepics/profilepig.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
