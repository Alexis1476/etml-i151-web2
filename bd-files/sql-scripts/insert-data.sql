/*t_user*/
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'ali', '4ciww5', '2021-11-04 04:59:16', 49, 10, 1);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'marcelia', 'CflIlbvMOnv7', '2021-11-03 17:44:11', 56, 2, 0);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'verina', 'Pupt1S5C', '2022-01-08 21:50:54', 10, 47, 1);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'inger', 'Pg4Op5Mc', '2021-04-13 17:05:12', 33, 28, 1);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'harmonia', '2qFt6nc09', '2022-01-06 11:37:44', 62, 34, 1);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'marcus', 'zaNTWz', '2021-06-27 15:45:26', 78, 37, 0);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks,/**/ useNbAppreciation, useAdmin) values (null, 'callie', '6ybuFS', '2021-09-28 06:51:57', 43, 78, 1);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'giselbert', 'JC0ubx', '2021-04-16 00:25:16', 99, 92, 1);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'yetta', 'G4rFoW6m8RV', '2021-06-19 10:08:05', 25, 69, 1);
insert into t_user (idUser, useNickname, usePassword, useCreateAt, useNbBooks, useNbAppreciation, useAdmin) values (null, 'ambrose', 'R9UzxO', '2021-09-07 16:11:32', 12, 9, 1);

/*t_editor*/
insert into t_editor (idEditor, ediName) values (null, 'Rizziello');
insert into t_editor (idEditor, ediName) values (null, 'Foxten');
insert into t_editor (idEditor, ediName) values (null, 'Lebreton');
insert into t_editor (idEditor, ediName) values (null, 'Maudsley');
insert into t_editor (idEditor, ediName) values (null, 'Sorensen');
insert into t_editor (idEditor, ediName) values (null, 'Grigorushkin');
insert into t_editor (idEditor, ediName) values (null, 'Fischer');
insert into t_editor (idEditor, ediName) values (null, 'Smalley');
insert into t_editor (idEditor, ediName) values (null, 'Baggott');
insert into t_editor (idEditor, ediName) values (null, 'Eskrigge');

/*t_category*/
insert into t_category (idCategory, catName) values (null, 'Fragrant Buttonsage');
insert into t_category (idCategory, catName) values (null, 'Boxelder');
insert into t_category (idCategory, catName) values (null, 'Ximenia');
insert into t_category (idCategory, catName) values (null, 'Watson''s Desertparsley');
insert into t_category (idCategory, catName) values (null, 'Warner Mountains Bedstraw');
insert into t_category (idCategory, catName) values (null, 'Glorybower');
insert into t_category (idCategory, catName) values (null, 'Sand Sedge');
insert into t_category (idCategory, catName) values (null, 'Pogonatum Moss');
insert into t_category (idCategory, catName) values (null, 'Big Galleta');
insert into t_category (idCategory, catName) values (null, 'Tricyrtis');

/*t_author*/
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Kuí', 'Hedney');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Stévina', 'Strettell');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Pénélope', 'Glawsop');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Adélaïde', 'Terram');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Vénus', 'Martello');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Miléna', 'Aslett');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Ophélie', 'Greenwell');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Clémentine', 'Mearns');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Marie-thérèse', 'Oscroft');
insert into t_author (idAuthor, autFirstName, autLastName) values (null, 'Renée', 'MacCleod');

/*t_book*/
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Jimi: All Is by My Side', 135, 'http://', 'in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula', '2022-01-25 15:07:10', 2.1, 'http://dummyimage.com/156x100.png/5fa2dd/ffffff', 8.6, 2.6, 5.4, 2.1);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Gabriel Over the White House', 273, 'https://', 'adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam', '2022-02-16 10:34:43', 1.7, 'http://dummyimage.com/149x100.png/dddddd/000000', 4.0, 7.6, 7.5, 4.7);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Soap and Water', 269, 'http://', 'in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam', '2021-09-08 16:44:03', 2.2, 'http://dummyimage.com/121x100.png/ff4444/ffffff', 5.8, 10.0, 7.7, 1.6);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Lightning Strikes Twice', 249, 'http://', 'eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris', '2021-08-05 15:48:59', 1.7, 'http://dummyimage.com/201x100.png/5fa2dd/ffffff', 2.1, 3.9, 5.0, 1.7);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Autumn Heart, The', 353, 'http://', 'integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac', '2021-10-02 11:52:31', 4.5, 'http://dummyimage.com/188x100.png/5fa2dd/ffffff', 9.2, 4.8, 2.9, 6.9);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Call Me Crazy: A Five Film', 222, 'http://', 'commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor', '2021-12-04 07:56:48', 1.3, 'http://dummyimage.com/223x100.png/cc0000/ffffff', 7.1, 1.7, 9.8, 9.5);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Last Hurrah for Chivalry (Hao xia)', 262, 'https://', 'accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat', '2021-12-20 00:00:13', 4.1, 'http://dummyimage.com/207x100.png/ff4444/ffffff', 5.3, 8.1, 8.9, 3.6);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'It Runs in the Family (My Summer Story)', 350, 'http://', 'sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna', '2022-02-27 23:26:22', 4.6, 'http://dummyimage.com/174x100.png/cc0000/ffffff', 7.7, 9.9, 1.1, 5.8);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Lonely Passion of Judith Hearne, The', 10, 'https://', 'habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut', '2021-06-14 01:44:49', 2.0, 'http://dummyimage.com/205x100.png/5fa2dd/ffffff', 4.6, 6.4, 5.5, 7.8);
insert into t_book (idBook, booTitle, booNbPages, booPreview, booResume, booPublishingDate, booNoteAverage, booCoverName, idAuthor, idEditor, idCategory, idUser) values (null, 'Baby... Secret of the Lost Legend', 76, 'https://', 'luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est', '2022-01-15 23:49:22', 4.3, 'http://dummyimage.com/203x100.png/dddddd/000000', 8.5, 5.0, 3.3, 4.9);

/*t_appreciate*/
insert into t_appreciate (idBook, idUser, appNote) values (6, 3, 2.9);
insert into t_appreciate (idBook, idUser, appNote) values (1, 1, 3.1);
insert into t_appreciate (idBook, idUser, appNote) values (4, 7, 3.6);
insert into t_appreciate (idBook, idUser, appNote) values (1, 4, 2.0);
insert into t_appreciate (idBook, idUser, appNote) values (3, 1, 2.8);
insert into t_appreciate (idBook, idUser, appNote) values (7, 5, 4.1);
insert into t_appreciate (idBook, idUser, appNote) values (6, 7, 3.2);
insert into t_appreciate (idBook, idUser, appNote) values (8, 8, 2.7);
insert into t_appreciate (idBook, idUser, appNote) values (3, 9, 3.7);
insert into t_appreciate (idBook, idUser, appNote) values (1, 8, 2.5);



