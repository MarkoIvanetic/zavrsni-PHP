-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 10:56 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pitanja`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `answer` varchar(512) COLLATE cp1250_croatian_ci NOT NULL,
  `value` int(5) NOT NULL,
  `tips` varchar(65000) COLLATE cp1250_croatian_ci NOT NULL,
  `question_id` int(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `value`, `tips`, `question_id`) VALUES
(1, 'I''m a huge fan of the Yankees and avid softball player with the gift of gab; I''m usually the life of the party and fun to hang aroundâ€¦', 25, 'There is no need to discuss spouses, partners, children, or any other strictly personal information.', 1),
(2, 'I consider myself a good listener who can usually read people well, at my last job retention rate of my hires was 20 percent above the department average.', 50, 'Be ready to share three or four of the personal qualities, skills and/or areas of expertise which would help you to excel in the job for which you are interviewing. Ultimately, you will want to share several other strengths before the interview is over.', 1),
(3, 'I am a seasoned Retail Manager strong in developing training programs and loss prevention techniques that have resulted in huge revenue savings for my last employer. In my free time I hold lectures at local community...', 75, 'Hiring manager already has your resume, so they also want to know a little more about you.', 1),
(4, 'Well I am creative, dependable, efficient, enthusiastic, motivated and open minded individual. I also feel that my communication skills are top notch. ', 25, '<b>Think Quality, Not Quantity</b><br>\r\nDon''t just list a bunch of nice adjectives to describe yourself. Sure, you want to sell yourself as the right man or woman for the job, but you''re going to be much more compelling if you cut the buzzwords and speak genuinely about your strengths.', 2),
(5, 'I have an extremely strong work ethic. I prefer to complete the project well ahead of schedule. Last year, I even earned a bonus for completing my three most recent reports one week ahead of time.', 50, '<b>Back Strengths Up With Stories</b><br>\r\nThat said, what''s more important than the strengths you choose is being able to back up your claims-don''t just expect the interviewer to believe you without some evidence. Start off by answering the question directly, and then segue into a story that shows off your skills.', 2),
(6, 'I pride myself on my customer service skills and my ability to resolve what could be difficult situations. With five years of experience as a customer service associate, I have learned to effectively understand and resolve customer issues. My research showed that one of your customers is "XXX" which I already met on my previous job.', 75, '<b>Mention specific opportunity skills</b><br>\r\nDon''t forget your skills that apply specifically to this opportunity, like your experience with or education in:<br>\r\n<ul>\r\n<li>A type of customer</li>\r\n<li>A type of business</li>\r\n<li>An aspect of business (marketing, finance, law, and so on)</li>\r\n<li>A skill (writing great blog posts, selling a specific product, writing great proposals, designing excellent products, etc.)</li>\r\n<li>A technology (OS10, Bluetooth, AWS, CISSP, and so on)</li>\r\n</ul><br>\r\nDon''t limit yourself to the skills you have developed only in school or in a job. You may have also developed skills in any volunteering you may have done, too.', 2),
(7, 'Honestly I don''t have any weakness that would compromise my efficiency.', 25, '<b>Yes, You Do Have a Weakness!</b><br>\r\nThe employer is trying to figure out if your weakness will make it hard for you to do a good job or fit into the organization. They are also interested in how you handle a tough question like this one', 3),
(8, 'I tend to lose my patience with incompetent people. Also, sometimes I have trouble getting up in the morning and getting to work on time. ', 50, '<b>Don''t be too honest.</b><br>\r\nAnother mistake is to be too candid and confess to a weakness that would hinder your ability to excel in the role. Don''t let your real weakness be â€?too honestâ€?.', 3),
(9, 'I used to wait until the last minute to set appointments for the coming week, but I realized     that scheduling in advance makes much more sense.', 50, '<b>The smart two-part answer: confession and recovery. Turn a negative into a positive.</b><br>\r\n<b>The confession</b> of the weakness, and...<br>\r\n<b>The recovery</b> - how you manage yourself to minimize the impact of the weakness, or the plan you have for recovery.\r\nBe sure to present these weaknesses in terms of how they impact the employer. \r\n', 3),
(10, 'I have no idea who you are competing with for this particular job so I can''t answer this question with certainty. Feel free to cross-reference my resume with others.', 25, '<b>What makes you the best candidate for this job?</b><br>\r\nIn most cases, you will have no idea who you are competing with for a particular job, so this type of question is really an invitation to summarize your strengths as a candidate with an emphasis on any assets that might separate you from the typical applicant.', 4),
(11, 'I am sure there are lots of talented people applying for such a position. However, given my unique background and experiences, I think I would be a strong candidate for this position', 50, '<b>Make a List of the Priority Job Requirements</b><br>\r\nStart preparing by analyzing the requirements for the job that seem to have the highest priority.  A detailed job description within the listing for the position will give you some cues about what the organization values most from candidates. ', 4),
(12, 'Of course, I am not aware of the other candidates but I created complex Excel macros to track seasonal variations in sales and expenses. I believe I could do something similar with your systems.', 50, '<b>Try to add a strength that is relatively unique, and would add value</b><br>\r\nFor example, although foreign language skills might not be listed in the job advertisement, you might mention that your Spanish language skills would enable you to establish rapport with Spanish-speaking clients.', 4),
(13, 'I am looking for a position that would improve my writing, media relations, event planning skills, and public relations expertise but your salary in accounting is much more attractive.', 25, '<b>Avoid superficial goals as your primary answer.</b><br>\r\nThis type of question presents some potential pitfalls for candidates if they are not careful. Avoid answers that place emphasis on salary, location, and even the company, since employers typically want a candidate who is well qualified for and motivated to pursue the job itself.', 5),
(14, 'This position fits that for me because it''s a growth role that will benefit me professionally because I''m going to be able to learn and develop more skills.', 50, '<b>Consider Why You Want the Job</b><br>\r\nBefore the interview, think carefully about your career aspirations. Then, reread the job listing, and think of ways in which the requirements and responsibilities of the job will prepare you for those goals. You will need to make a strong case for what appeals to you about the job for which you are interviewing, while also addressing your future aspirations', 5),
(15, 'I plan to add value in this position, develop my skills to help grow the company, and eventually move into roles of greater responsibility.', 50, '<b>Explain why this particular job would help you develop.</b><br>\r\nIf you have a general end destination in mind, that''s great. Talk about how this job is going to help you meet that goal. But only in the most general terms.', 5),
(16, 'Stress is not the issue for me. I am a very calm person by nature and I don''t get stressed at all.', 25, '<b>Desired answer to this question is not "I do not get stressed".</b><br>\r\nEveryone feels pressure and stress, the interviewing person or panel wants to know your approach to the inevitable feelings that come with most jobs at some point or another.', 6),
(17, 'At my last job I used to walk the line with deadlines which caused me a lot of stress. I learned not to worry about too much.', 50, '<b>Avoid mentioning a situation when you put yourself in a needlessly stressful situation.</b><br>\r\nIgnoring stress is not a stress-relieving method. ', 6),
(18, 'Yes, I manage pressure very well.  When I work under pressure, I tend to be focused and motivated. \r\nOn my last job stress was very common, but I learned to turn it into a boost.', 50, '<b>Show that stressful conditions will be a motivator for you to thrive and give examples.</b>', 6),
(19, 'My spouse and I are looking for a larger home, and the only way we can afford it is if I start making more money.', 25, '<b>Whatever you do, don''t say it''s money.</b><br>\r\nOne surefire way to abort an otherwise flowing conversation is to say your biggest motivator is money. Compensation is important to everyone, but making it your number one focus will turn off employers. Address the bigger picture of your career fulfillment.', 7),
(20, 'I''m motivated by personal achievements, I like to work hard and achieve the goals that I set out for myself. That keeps me going and motivate me to do more.', 50, '<b>Avoid generalized responses.</b><br>\r\nBe careful about supplying clich?© answers, they are easy to detect. You will be best served in the short and long term if you present your genuine "self" and interests in the interview.', 7),
(21, 'I have always wanted to ensure that my company''s clients get the best customer service I can provide. My drive to constantly develop my customer service skills is the reason I earned top sales at my company two quarters in a row.', 50, '<b>Tie in your successes.</b><br>\r\nYour best answer will emphasize that the quality of the position and its tasks/responsibilities, along with the quality of the organization have always been your best motivators. Also, nothing beats and example - on this and any question.', 7),
(22, 'My boss always tent to nag about me going home early. He just didn''t understand my focus issues.', 25, '<b>Don''t panic and rush the response.</b><br>\r\nIf you did not prepare an answer for this question it can lead the interview in unwanted direction. Don''t be too honest. If you recall a situation where your previous boss was yelling at you for coming to business meeting in shorts - don''t mention it.', 8),
(23, 'Well, since I always double-checked my reports my performance was never an issue. You can verify that information with my previous manager, he''ll be happy to respond.', 50, '<b>Perfectionist answer.</b><br>\r\nYou may be surprised that this is considered a valid answer. If you are in the unusual situation where your performance reviews have been flawless, then you can mention that fact and even offer to provide evidence of your stellar reviews.', 8),
(24, 'I try to see criticism as an opportunity to improve my work.  I was once asked to make a presentation for the entire team and my superiors were not impressed by it. I was open minded about their criticism and became really good presenter after that. ', 50, '<b>The good old confession and recovery.</b><br>\r\nConstructive criticism is an important part of professional growth, and this is a good chance to show your employer you are striving to be the best and are open to improvement. Share and experience from your previous job and explain how it helped you become a better employee.', 8),
(25, 'This job is definitely something I''ve been dreaming about for a long time. I will be perfectly happy if I get this position.', 25, '<b>Don''t Undersell Yourself</b><br>\r\nDon''t say your dream job is the one you''re applying for, or even the one above that. While a business will want someone who''s happy doing the job they''re being hired for, they also want someone with drive and ambition â€“ and this must be demonstrated in the interview.', 9),
(26, 'My dream job would be Head of Department of Google or Microsoft. I know it sounds ambitious but my sheer confidence if my key strength.', 50, '<b>Avoid Mentioning Job Titles</b><br>\r\nSaying you want to be CEO or Head of Department during an interview can set you step back in the interview. Instead focus on job responsibilities that you would enjoy carrying out, skills you''d like to develop and passions you''d enjoy making the most of in day-to-day working life.', 9),
(27, 'What I look for in a job is the ability to utilize my communication and customer service skills. Ultimately, I would like to work in public relations department and this job would be my first step towards it.', 50, '<b>Focus on the Present and the Future</b><br>\r\nMention a certain goal you would like to reach through your â€?dream job.â€? Ultimately, the key to is to convey your long-term interest in a high-level position, without overshadowing your interest in the job you''re applying for.', 9),
(28, 'What really gets me is when people don''t know how to do their work. I get the urge to kick them out myself.', 25, '<b>If you have anger problems, attend them before coming to interview.</b><br>\r\nInterviewer is trying to determine how you might react to stressful situations in the workplace, and how you might handle your personal emotions without letting them affect your performance. If anger is really a problem you may not be suited for the position.', 10),
(29, 'My previous employer did not grant me bonus for my extra work. We ended up in loud discussion but managed to resolve it in mutual benefit.', 50, '<b>Avoid bringing up a situation that involves a supervisor</b><br>\r\nEmployers tend to side with management and may perceive you as an easily disgruntled employee. Try to present yourself as someone who, like most people, occasionally gets annoyed by certain situations, but doesn''t lash out in an outburst of anger.', 10),
(30, 'When I''m on a tight deadline and working to finish a project, I get frustrated if I run into roadblocks, like if my Internet won''t load. I realized it''s my fault for not preparing properly. I learned to be ready for worst case scenarios.', 50, '<b>Confession and recovery</b><br>\r\nMost valued answer should contain two components: first a description of the situation that angered you, and then a reference to how you processed the event and handled your anger.', 10),
(31, 'I tend not to dwell in the past and I''ll rather focus on the future job. There is not much that I''ll miss from my last job.', 25, '<b>Keep your answer positive</b><br>\r\nYou do not want to bring any negative issues into your answer. This is a great opportunity to express something positive about your character.', 11),
(32, 'I''ll sure miss the breakfast in the cafeteria  and the unlimited coffee in the office. We often received really nice presents from partners.', 50, '<b>Focus on the non-material.</b><br>\r\nResist the urge to all the material bonuses that came with the job as your primary pick. Focus on relations, knowledge, environment etc.', 11),
(33, 'Other from the great environment and amazing co-workers; I will definitely miss talking to clients in a friendly tone. I  hope I will have customers as good as then.', 50, '<b>This is where is gets amazing.</b><br>\r\nCarefully mention object of your to establish a clear connection between the previous job and the currently available position. For example, talking about missing the former co workers opens the door for expressing eagerness at the prospect of forging new professional relationships.<br>\r\nI know what you''re asking yourself and the answer is: Yes, there is always more than meets the eye in a job interview.', 11),
(34, 'I am absolutely certain I won''t miss that arrogant lady that works at help desk. She could totally ruin my day.', 25, '<b>Again - Keep It Positive!</b><br>\r\nI can''t stress enough that you avoid any negative experience with your previous employer.', 12),
(35, 'I''ll be honest I really did not like filling the order papers for office supplies Thank God you have a designated partner for that.', 50, '<b>Pick Things That Are Not a Priority</b><br>\r\nPick aspects of your past or current job that held the least interest to you. Make sure that any tasks you mention are not likely to be prioritized by your target employer, nor should they be frequently performed or highly important aspects of the position. ', 12),
(36, 'I certainly won''t miss that old 3PAR server my employer used. It was really buggy sometimes. Luckily for me you upgraded to Blade storage,  I''m sure it''s a beauty.', 50, '<b>Compare Your Job to the New Job</b><br>\r\nExamine the job you''re interviewing and notice the upgrades in the technology or workflow that your previous job did not implement. BONUS: Use this information to impress the interviewer.', 12),
(37, 'I don''t think me and my manager were getting along. He always tend to pick on me the most and give me the hardest tasks. He got really angry after I complained to his boss.', 25, '<b>Forget about your emotions</b><br>\r\nAn emotional answer can backfire and reflect poorly on you. It is far better to look at past situations objectively and analyze what needed to be solved and the outcome. Think about what you dealt with from a business perspective, not a personal one.', 13),
(38, 'I had a manager I didn''t get along with early in my career. Because of that experience, today I always make it a point to find common ground with anyone I work with and ask questions immediately if I need to clarify something.', 50, '<b>Site a specific example.</b><br>\r\nKeep your answer short and concise. Remember not to go into too many details. You are there to analyze the situation professionally. Spilling irrelevant details can cause negative language to seep into your answer.', 13),
(39, 'I had a rocky start with a manager once, because we had different expectations for the flow of the workday. Once we talked about it, we realized that our goals were very compatible, and we were able to work very successfully together for several years.', 50, '<b>Focus on positive results.</b><br>\r\nMake sure to limit your responses to situations where you took positive action that ended with a positive result. You can use buzzwords in these types of question such as respect, solution, identify, listen, resolve, and so on.', 13),
(40, 'Unlike my previous boss;  my dream boss would be someone who allows you the freedom to do your job with minimal supervision', 25, '<b>Never, under any circumstances, should you criticize a past supervisor.</b><br>\r\nYour prospective employer will likely assume you are a difficult employee and side with your former employer.', 14),
(41, 'The only thing that matters to me is that he treats people at all levels with courtesy and respect.\r\nI appreciate diversity in people so I will accept all kinds of people as long as there is mutual respect.', 50, '<b>Emphasize your adaptability </b><br>\r\nby sharing how you have thrived with a variety of supervisory styles in your past. Be prepared to give examples of how you have been productive with different types of bosses. ', 14),
(42, 'I always imagined my ideal boss to be respectful, even-tempered, knowledgeable, and professional. These are the values that are important to you so it''s important for your boss to have these as well.', 50, '<b>Show that you have character. </b><br>\r\nIt''s okay to say things such as you want a boss that you can respect and respects you back. You don''t want to come across as a pushover who lets people walk all over you. So you can list out some of your positive characteristics which your ideal boss would also share.', 14),
(43, 'The company hired a new Executive VP and he decided he wanted to bring in his own people from his previous organization.  I was really depressed, it took me a while to get back to my feet.', 25, '<b>Keep it positive when talking about why you left your job before the gap.</b><br>\r\nExplanations that scream: â€?I didn''t like my previous employerâ€? don''t look good. Hiring managers might just ask why you didn''t wait to find a new job before quitting your old one, especially because it''s easier to find a new job when you''re already working.', 15),
(44, 'The company was forced to make budget cuts and lay off two from the department - unfortunately, I was the last member of the team they hired . However, I''m proud of the work that I did at Company X and can provide a positive recommendation from my former manager.', 50, '<b>Be Confident</b><br>\r\nWhile the thought of discussing how you came to be unemployed, especially if you were let go or fired, might make you uneasy, don''t panic. Resume gaps are not as uncommon as job seekers might think, show that you survived this period and are now stronger.', 15),
(45, 'After most of the company had been outsourced  I took some time before searching for another job.  I had enough funds on my account and I wanted to fill the gaps in my knowledge by taking some courses my busy schedule  would not allow. ', 50, '<b>Emphasize any activities you undertook during the gap to improve your professional standing.</b><br>\r\nThis is a huge one. Make sure to mention:<br>\r\n<ul>\r\n<li>Any certifications or courses you''ve done during the gap.</li>\r\n<li>Any consulting, freelance or contract work you''ve done. Consulting is a huge sign that you''ve taken your career in your hands. However, it''s not just enough to say you''re a consultant. New employers will want to know about what actual consulting work you did in the interim.</li>\r\n<li>Any other valuable experiences, for example volunteers or major personal projects.\r\nIf you were in fact dismissed from a previous job for some individual reason, unfortunately there''s nothing to do except wait to explain it in an interview. Just make sure you have a good explanation to provide in the interview.\r\n</li>\r\n</ul>', 15),
(46, 'I have done my research  and I believe that $1500 would suffice considering my skills and experience. ', 25, '<b>Give a number.</b><br>\r\nAvoid this as much as you can, this should not be your primary answer. Give a number only if they insist on it, but be sure you researched salaries for this position. It is also better to go under than above with the number.', 16),
(47, 'I understand that positions similar to this one pay in the range of $1000 to $1200 in our region. Something in that range would be acceptable.', 50, '<b>Give a range.</b><br>\r\nThis should be your answer if they are not happy with you being unspecific.  be sure to name a lower number that you''d be comfortable with, since that''s probably where the hiring manager will start your offer.', 16),
(48, 'I am sure if you pick me as the best candidate for the job I have no doubt we can agree on a fair number.', 50, '<b>Don''t answer.</b><br>\r\nThere are ways to get around this question, if you really don''t want to give a number right off the bat. One good tactic is to say that you want to learn more about the job first, before you think about the salary that would go with it. Except the employer to push you into giving the number. Just move to lower scored answer.', 16),
(49, 'Well, I guess because I''m smart and I work hard and I''m absolutely willing to do whatever you need and I love everything I''m going to do here and really want to be a part of this company.', 25, '<b>Don''t seem desperate nor overconfident.</b><br>\r\nEnough with the desperation! Also avoid false modesty or being too self-deprecating. If you applied for this job then you must have a value that employer wants to hear about.', 17),
(50, 'As you can see by my resume, the majority of my employment history has been as a construction manager, a role which has given me a good understanding of how regulated businesses, including banks, work. I am certain you can benefit from someone with that skills. ', 50, '<b>"Tailorâ€? Your Answer</b><br>\r\nEvery organization has a specific set of Qualities that the potential hire needs to have in order to be successful in the position.  It''s up to you to demonstrate that you have these Qualities, and the most important place to do this is in your answers to the interview questions!', 17),
(51, 'When I read the job posting I noticed that you specifically mentioned you were looking for someone with project management experience. As you can see on my resume I have over 10 years of experience as a project manager, but what I think really sets me apart from other candidates.', 50, '<b>Focus on your Uniqueness</b><br>\r\nThe interviewer wants to know how you stand out amongst the other applicants. Therefore, focus on one or two qualities you possess that might be unique, or more difficult to find, in other interviewees. For example, if you are very experienced with a certain skill that the job requires, say so.', 17),
(52, 'Because I know I can make a really good contribution and your benefits are more than attractive.', 25, '<b>It''s Not About You</b><br>\r\nDon''t focus on the benefit to you of the job. While the employer probably wants you to be happy in the job, they don''t care about the benefit to you at this point. They want to know the benefit to them if they hire you.', 18),
(53, 'This company is internationally known for its products, and my experience in marketing has me intrigued by the opportunity this position presents.', 50, '<b>Know the Position and the Department (if possible)</b><br>\r\nGet to know the company you will be talking to. When you know details about them, their culture, their goals, their products, and their challenges, you are then able to talk about yourself and your fit into the company.', 18),
(54, 'It would be a great honor to work in a reputed company like yours. I get a chance to work between the skilled people this will help me to test my knowledge and skills and to know self ability.', 50, '<b>Compare Your Goals to the Job</b><br>\r\nOnce you have done all your pre-interview homework, you will never again find yourself blundering on critical questions like this. Instead, you will be prepared to talk knowledgeably about the company and position, why they interest you, and how you will fit in with your skill set, personality, and experience.', 18);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `question` varchar(256) COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci COMMENT='Containt questions duh!' AUTO_INCREMENT=19 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`) VALUES
(1, 'Tell us about yourself.'),
(2, 'What is your greatest strength?'),
(3, 'What is your greatest weakness? '),
(4, 'What makes you the best candidate for this job?'),
(5, 'How does this job fit in with your career plan?'),
(6, 'How do you handle stress and pressure? '),
(7, 'What motivates you?'),
(8, 'What is the biggest criticism you received from your boss?'),
(9, 'What is your dream job? '),
(10, 'What makes you angry?'),
(11, 'What will you miss most about your last job?'),
(12, 'What won''t you miss about your last job?'),
(13, 'Have you ever had difficulty working with a manager?'),
(14, 'Describe your ideal boss.'),
(15, 'Describe the gap in your employment history.'),
(16, 'What are your salary expectations?'),
(17, 'Why should we hire you?'),
(18, 'Why do you want to work here? ');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE IF NOT EXISTS `tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(512) COLLATE cp1250_croatian_ci NOT NULL,
  `tip` text COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
