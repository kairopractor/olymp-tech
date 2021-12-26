<?php 
require_once '../config/connect.php';

//mysqli_query($connect, query: "INSERT INTO `project` (`idproject`, `name`, `materials`, `titli`) VALUES (NULL, '$name', '$link', '$category')");


$project = array(
  array('idproject' => '1','name' => 'МОДЕЛЬ ПРОГРАММИРУЕМОГО ЛАЗЕРТАГА НА БАЗЕ МИКРОКОНТРОЛЛЕРА ARDUINO','materials' => 'https://docs.google.com/document/d/1Fa9wXzGOPVqz5XsKfTC33A682-PaNwYf/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => '3D-моделирование и печать'),
  array('idproject' => '3','name' => 'Торшер','materials' => 'https://docs.google.com/document/d/1btuUoBQ5b24tH_T_g7pIdExv11k7XFno/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '4','name' => 'Набор кубков','materials' => 'https://docs.google.com/document/d/13kVsyO8KNR599fdpZ025nVRW2nzkwga6/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Механическая деревообработка'),
  array('idproject' => '5','name' => 'Детский стульчик','materials' => '','titli' => 'Ручная деревообработка'),
  array('idproject' => '6','name' => 'Ящик для мелочей. Обработка древесины','materials' => 'https://docs.google.com/document/d/14dDgNnie2bdZgAurJYFoaxXR6_Y32jFD/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '7','name' => 'Макет Автомата Калашникова','materials' => 'https://docs.google.com/document/d/1ObNKmAAizQGksUPaEMKvuQdZSrEuLCMu/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '8','name' => 'ДВИГАТЕЛЬ СТИРЛИНГА','materials' => 'https://docs.google.com/document/d/1rb22q16tkTMx2D5BqdLdnXiayXs_gENa/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '9','name' => 'Вышибайка','materials' => '','titli' => 'Ручная металлообработка'),
  array('idproject' => '10','name' => 'Задача – пистолет-резинкострел','materials' => '','titli' => 'Ручная деревообработка'),
  array('idproject' => '11','name' => 'ГУСЛИ','materials' => 'https://drive.google.com/file/d/17OmtRIluEUIJ2_vZGQ7laurjGivbxU0-/view?usp=sharing
','titli' => 'Механическая деревообработка'),
  array('idproject' => '12','name' => 'Подводная лодка К-21','materials' => 'https://docs.google.com/document/d/14gn4TJUITOoQrEAWQvBuJzu-i_Y-WevU/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '13','name' => 'ЛОБЗИКОВЫЙ СТАНОК','materials' => 'https://docs.google.com/document/d/13kVsyO8KNR599fdpZ025nVRW2nzkwga6/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '14','name' => 'Уютный уголок','materials' => '','titli' => 'Ручная деревообработка'),
  array('idproject' => '15','name' => 'Изготовление модели  автомобиля  МАЗ-500а','materials' => '','titli' => 'Ручная деревообработка'),
  array('idproject' => '16','name' => 'ЦИРКУЛЬ ДЛЯ МАРКЕРНОЙ ДОСКИ','materials' => 'https://docs.google.com/document/d/1BhXCTQ0-9iIPtjlUHh3kA_y9YDwUnYyh/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '17','name' => 'Макет автомата Калашникова АКМ','materials' => 'https://docs.google.com/document/d/1qsU0Q8PxoN9qKaxgJFTy88O-y7TY31bG/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '18','name' => 'Проект 206 “Шторм”','materials' => 'https://docs.google.com/document/d/1alWtocNKsmWTmZ09n_5_e4ayUM_2YOQO/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '19','name' => 'Изготовление модели Малого ракетного корабля','materials' => 'https://docs.google.com/document/d/1O8ECfcnM2f1eNUj_I80PDPNLRW-W20sf/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '20','name' => 'Акустическая система из древесины','materials' => 'https://docs.google.com/document/d/1suiiQQedrmH6W2Y1kIuCXKQ0yZHMqD5E/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '21','name' => 'Прототип бионического протеза кисти руки','materials' => '','titli' => 'Робототехника'),
  array('idproject' => '22','name' => 'МАКЕТ САМОЛЕТА А.И. ПОКРЫШКИНА BELLP-39 AIRACOBRA','materials' => 'https://docs.google.com/document/d/1lOZkM77dBCRyDPl9-ktDWkRRg0V9XaYT/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '23','name' => 'Подарочный набор в стиле «Лофт»«Подсвечник и светильник»','materials' => 'https://docs.google.com/document/d/1ZVRlIU3MTFXSVCwcdJbwmRKxgr7Ox7CJ/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '24','name' => 'Токарный станок','materials' => 'https://docs.google.com/document/d/1xnaWOA14qoMomp_xziBfgRknzD_C7vOS/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная металлообработка'),
  array('idproject' => '25','name' => 'ГЛИНЯНАЯ СВИСТУЛЬКА «РУССКИЙ БОГАТЫРЬ»','materials' => 'https://docs.google.com/document/d/1wg8aiXeZj92xOXPc11z5_uIybfQY1VCw/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '26','name' => 'Измеритель скорости пули. Оружейный хронограф','materials' => 'https://docs.google.com/document/d/1FBFfHIrKlUiaKR1YdKqUWOUgsb5KwMCQ/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Механическая деревообработка'),
  array('idproject' => '27','name' => 'Набор органайзеров “Ежик“','materials' => 'https://docs.google.com/document/d/1UmdwSe-0eJD2fsndoUFZ_L2FGDLEmTpA/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '28','name' => 'переносная пушка Гаусса','materials' => 'https://docs.google.com/document/d/1lbI10Wyvx9zE-VT2LRSrVQ3mJIGeGeie/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '29','name' => 'Гараж-мастерская своими руками','materials' => 'https://drive.google.com/file/d/1a_Yz-_UvQGDNgV53nNaEMm8V4YWVuEdc/view?usp=sharing
','titli' => 'Механическая деревообработка'),
  array('idproject' => '30','name' => 'ИЗГОТОВЛЕНИЕ ГОЛОГРАФИЧЕСКОГОПРОЕКТОРА','materials' => 'https://docs.google.com/document/d/14z0wVvLZt7qK54gjAMrQXXNT0F4gJcU1/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '31','name' => 'Безопасная умная площадка для детей, в том числе с ограниченными возможностями здоровья (ОВЗ)','materials' => 'https://docs.google.com/document/d/1w94RC-wYwCZ1-gPcnmeTuO0MV9uK-480/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '32','name' => 'ТАКТИЛЬНАЯ НАВИГАЦИОННАЯ КАРТА ДЛЯ ЛЮДЕЙ С ОГРАНИЧЕННЫМИ ВОЗМОЖНОСТЯМИ ЗРЕНИЯ','materials' => 'https://docs.google.com/document/d/1_2hThEOyzXCEzlQuSta0-VRN--MEMGl2/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => '3D-моделирование и печать'),
  array('idproject' => '33','name' => 'Шкатулка','materials' => 'https://docs.google.com/document/d/1seuaWm7LiCyyspUqgdejbiw3xuH5EoKz/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '34','name' => 'Складной стул','materials' => 'https://docs.google.com/presentation/d/1omLqHTHa_UtFjmIyMQ8hRdxFjIXh-Wr8/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '35','name' => 'Вечный календарь','materials' => 'https://docs.google.com/document/d/1VJIrqH82kDa_4szGOEzpNlOuWPSpwgYg/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '36','name' => 'Способы крепления скворечников (Новые решения в рамках старинной народной традиции привлечения птиц)','materials' => 'https://docs.google.com/document/d/1st-89wvKm0SBMTWrfH0JlNQJmLEJJqDF/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '37','name' => 'ТЕЛЕСКОПИЧЕСКАЯ КАФЕДРА','materials' => 'https://drive.google.com/file/d/1zS-BDo-PZCecN9LSTuLla8kC6Abzkxx4/view?usp=sharing
','titli' => 'Механическая деревообработка'),
  array('idproject' => '38','name' => 'Гидроизоляция и пароизоляция. Мифы и реальность. Практическое применение','materials' => 'https://docs.google.com/document/d/1pES8ZVdTmK_T-YeprF8C7NAY2SFbXpM-/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '39','name' => 'Кордовая пилотажная модель самолёта с двигателем внутреннего сгорания','materials' => 'https://docs.google.com/presentation/d/1DiJ7uxINTf6RVce3yCDFoCzO4zdBhKFB/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '40','name' => 'Ящик для инструментов','materials' => 'https://docs.google.com/document/d/1106c_zv0_Yl0h0-UaZF6JyZJO82nXwcj/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '41','name' => 'Вертикальный плоттер','materials' => 'https://docs.google.com/document/d/1ukhEpPtDumpPzm3NbpBgOF3LcRRac5r7/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '42','name' => 'Пулемёт «Максим»','materials' => 'https://docs.google.com/document/d/1QXvWgtePIcBA2EZrBvQlc6P1LxLWnt-5/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '43','name' => 'ИЗГОТОВЛЕНИЕ РАЗВИВАЮЩЕГО ДЕТСКОГО УГОЛКА','materials' => 'https://docs.google.com/document/d/1lyH8iYRrk9qBjyYT82bIN9AH8LunT_cE/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная металлообработка'),
  array('idproject' => '44','name' => 'Декоративный светильник','materials' => 'https://docs.google.com/document/d/1iIytGsoBDroW46He0h-lrX2Ii1QfLIDa/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => '3D-моделирование и печать'),
  array('idproject' => '45','name' => 'Регулируемый источник питания','materials' => 'https://docs.google.com/document/d/19xKx4ZEinKpYLFEexA_mk3N-xFByQKbf/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '46','name' => 'СТАНОК ТОЧИЛЬНО - ШЛИФОВАЛЬНЫЙ','materials' => 'https://drive.google.com/file/d/1gv8Wk9S1f_8W8sTaAw5gtqG-ZVqL1peO/view?usp=sharing
','titli' => 'Ручная деревообработка'),
  array('idproject' => '47','name' => 'Резьба по дереву «Кухонный набор»','materials' => 'https://docs.google.com/document/d/1sYCWhOluyWrjQnmARz1sGILYC-gqYQdu/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Ручная деревообработка'),
  array('idproject' => '48','name' => 'Развивающая книжка «Сказка из фетра»','materials' => 'https://docs.google.com/document/d/1FP32C20seI6_9nt88VYE9RfOnfwNETCu/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '49','name' => 'Портрет в технике флип-флоп','materials' => 'https://docs.google.com/document/d/16IjbaKJ350e9g-uMOKUfAhz2QG6uc_DR/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '50','name' => 'Подарок из конфет','materials' => 'https://docs.google.com/document/d/18TpUoGPw_AXUi_U6t4w5SnDf18Xf8vBh/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '51','name' => 'Полукомбинезоны в семейном стиле','materials' => 'https://drive.google.com/file/d/1xnOO4peIq6rCUt_yHrUqel2FHMu23y-1/view?usp=sharing
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '52','name' => 'СОЗДАНИЕ КОСТЮМА «ЛЕБЁДУШКА»  для  КОЛЛЕКЦИИ «ВЗМАХ КРЫЛА»','materials' => 'https://docs.google.com/document/d/1qMGK3POKAJ12ajijglqmFp_KMXCyNy6k/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '53','name' => 'Панно в технике канзаши','materials' => 'https://drive.google.com/file/d/19l2TVPArZE_trfgOwygGmRyKx0W5-Je6/view?usp=sharing
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '54','name' => 'Скандинавские гномы','materials' => 'https://docs.google.com/document/d/1ttg8eOMx0j-RahA4UkoTGclyDwRwM4JO/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '55','name' => 'Изготовление картин в технике вышивка','materials' => 'https://docs.google.com/document/d/1EdOoD0miCztmQwFBEzug-qFXcwegu_Io/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '56','name' => 'КОЛЛЕКЦИЯ «ВРЕМЕНА ГОДА» ИЗ ПЕРЕРАБОТАННЫХ МАТЕРИАЛОВ','materials' => 'https://docs.google.com/document/d/19uUFCYCYoCHBltAZnnLttjAaf5mj5utR/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '57','name' => 'РАЗРАБОТКА ЮБКИ ДЛЯ ДЕВОЧЕК СО СВЕТОДИОДНОЙ ПОДСВЕТКОЙ','materials' => 'https://docs.google.com/document/d/1I9KXcL1LvAxg-WpQFAOCKo4nRkWwzoz-/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '58','name' => 'Бизиборд для маленькой принцессы','materials' => 'https://docs.google.com/document/d/1rHhe4cTw2jygYn5k6skC_Vb3tX0Fp7KR/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '59','name' => 'Коллекция экскурсионных костюмов','materials' => 'https://docs.google.com/document/d/1fJLfj0BJMQ55p3_bLzgTwL3U9-IGaxW-/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '60','name' => 'ОДЕЖДА ДЛЯ МАЛЕНЬКОГО ДРУГА','materials' => 'https://docs.google.com/document/d/1XIBFkwspCqrEP84S4TBXuA6WizaAzts4/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '61','name' => 'Изготовление выпускного платья с отделкой и аксессуарами','materials' => 'https://docs.google.com/document/d/1dgquSBjGAHiASNKkxJS2pn2CTrtljERg/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '62','name' => 'Швейное изделие «Жакет с декоративной отделкой лазером»','materials' => 'https://docs.google.com/document/d/1MWWYWE166y11c5BoG_GQlkUC3Hj4sP16/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '63','name' => 'Светильник "Совушка – умная головушка" из изолона','materials' => 'https://docs.google.com/document/d/1v8trRp3-9wL1G_GVfFWlwZVBjWw_oF8-/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '64','name' => 'Создание новогоднего платья на новый год','materials' => 'https://docs.google.com/document/d/1oiefhflzUBmb4Goy8D_YpjCz0bf7vM6n/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '65','name' => 'Декоративный шар (3-D моделирование, лазерная резка)','materials' => 'https://docs.google.com/document/d/1Z07oloFftv84vdkJGcRajgqRpxfMskTK/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '66','name' => 'Школьный сарафан','materials' => 'https://docs.google.com/document/d/1d8qDZZkiThlHe5SIP8TWB7PgzccQv0lk/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '67','name' => 'Интерьерные куклы-птицы','materials' => 'https://docs.google.com/document/d/1Igu63B0N_6NH9XqRfh-zkr7MUA1lO7T6/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '68','name' => 'ПОДАРОК ДЛЯ ЛЮБИМОЙ  МАМОЧКИ','materials' => 'https://docs.google.com/document/d/1wr_8s-2XOElXq0lsVZObhyzRQAOdX-k2/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '69','name' => 'Костюм осени в комбинированной технике шитья','materials' => 'https://docs.google.com/document/d/1uaxGWdWiho0_9Ch0A6gkit1zONBMCrgb/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '70','name' => 'ИЗДЕЛИЕ С ЭЛЕМЕНТАМИ ДЕКОРИРОВАНИЯ','materials' => 'https://docs.google.com/document/d/1yduMbCv-Ctol3xvBS_g74XIG6sf9sS7b/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '71','name' => 'ЖИЛЕТ С АЖУРНЫМ УЗОРОМ, СВЯЗАННЫЙ КРЮЧКОМ','materials' => 'https://docs.google.com/document/d/1E3LRfX1uBhLSBN5cPDzGJAm8qzvsqv6c/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '72','name' => 'ВЫПУСКНОЙ ОБРАЗ','materials' => 'https://docs.google.com/document/d/1X2jH1GpRrQ97tAIkuBe8bji-V7GLOqOn/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '73','name' => 'Кукла рукотворная моя','materials' => 'https://docs.google.com/document/d/1P_5NV0SAOffrYAwoEtvu4yzdELZDvrr-/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '74','name' => 'ЧУДОРУЧКИ','materials' => 'https://docs.google.com/document/d/1qVk1UJA1t1SVhrNVLYjgRrQLA1m7_TIp/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '75','name' => 'Коллекция «Курортный роман»','materials' => 'https://docs.google.com/document/d/1tqC_m_wFfdNb-5HGrhmRuJu7b4s06Zgo/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '76','name' => 'Создание пространственных форм на основе метода трансформационной реконструкции одежды','materials' => 'https://docs.google.com/document/d/1-VDSJsQtZLhujn1jULf_17XF1eXuSozF/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '77','name' => 'Изготовление мужского демисезонного пальто','materials' => 'https://docs.google.com/document/d/1KO8U8QSvFBhWaN59qEdUoByhudIUVLNb/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '78','name' => 'Мода и стиль','materials' => 'https://drive.google.com/file/d/10Bhvx_U30yqjxtnO-QZtTOyubfrnEa9-/view?usp=sharing
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '79','name' => 'Экспедиционный костюм','materials' => 'https://docs.google.com/document/d/1UBLnzmw8RpebKS1srDbU0N32AN41DK1A/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '80','name' => 'ЮБКА В ВИКТОРИАНСКОМ СТИЛЕ','materials' => 'https://docs.google.com/document/d/14eaGPz4ZQfJVWB6dy_5ecRblFcBsyd0T/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '81','name' => 'Женский украинский костюм','materials' => 'https://docs.google.com/document/d/1XHiso2vhMOCjG86CF2TtblNpeFebhCp2/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '82','name' => 'Изготовление вышивки крестиком «Овечка»','materials' => 'https://docs.google.com/document/d/13fYLk47vppeBYeR0qO0ZwWZM-OEdPJww/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '83','name' => 'Лежанка: Бархатный сон','materials' => 'https://docs.google.com/document/d/1kLH-QY3JUXY6ds5rFnFiN6ukpUiRjPKb/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '84','name' => 'АВТОРСКАЯ ХУДОЖЕСТВЕННАЯ КУКЛА – КРАСНАЯ КОРОЛЕВА','materials' => 'https://docs.google.com/document/d/1LbDDwf9deoxPei7J0BNKpEZnXy96FAPJ/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '85','name' => 'Коллекция моделей по мотивам традиционных костюмов Азии «Японские мифы»','materials' => 'https://docs.google.com/document/d/1UHDheH_XTWvlD6fXHjjD_96_p6qgJNKq/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '86','name' => 'Модное вязание','materials' => 'https://docs.google.com/document/d/1TVEQi8qz6vcmzzqqKalduAvegj83gwVG/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '87','name' => 'СОЗДАНИЕ ЛОСКУТНОГО ОДЕЯЛА В ТЕХНИКЕ ПЭЧВОРК','materials' => 'https://docs.google.com/document/d/1Ku0S645_vdy3zyEaGAFqpHdRmXBtm3wX/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '88','name' => 'Мозаика из яичной скорлупы в технике яичное кракле','materials' => 'https://docs.google.com/document/d/1dhYOMjls5N9qFOT2TWMOlZtb9DCGSYMH/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '89','name' => '«Ура мечте» (Костюм для героини мультфильма в стиле Каваи.)','materials' => 'https://docs.google.com/document/d/1oss10oMrMfAvKxdJhf6C9He4c0yFh36Q/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '90','name' => 'Стильно и просто','materials' => 'https://docs.google.com/document/d/1-AoDRp2wjDJyZN3H1OxjARZrCZmNgv_w/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '91','name' => 'Разработка и создание образа из коллекции «Взмах Крыла»','materials' => 'https://docs.google.com/document/d/1uz6cYmS8Q6miqG2p4qXkSiJRn9QnTE4b/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '92','name' => 'Ключница в технике изонить','materials' => 'https://docs.google.com/document/d/1AP8rdTQdexnQzxaOeWanLLTQuIXUTM_v/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '93','name' => 'Поясное изделие. Прямая юбка','materials' => 'https://docs.google.com/document/d/1967jz3um-FJu1YGRJuwG5X3fVVapH-iR/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '94','name' => 'Ханьфу. Традиционная китайская одежда','materials' => 'https://docs.google.com/document/d/1TUVM4gt4qtgBsgwh2F6diwL6dHvty1FM/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '95','name' => 'ИЗГОТОВЛЕНИЕ ИНТЕРЬЕРНОЙ КУКЛЫ','materials' => 'https://docs.google.com/document/d/1qOybwfdEuIX_xdM1gaqw8jefhkZDM0dT/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '96','name' => 'ЭЛЕГАНТНЫЙ ЛЕТНИЙ КОСТЮМ','materials' => 'https://docs.google.com/document/d/1rzy6qxBZKS_dYYyfGW4XCD73aY9OfdCJ/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '97','name' => 'ПРИКРОВАТНЫЙ СВЕТИЛЬНИК ИЗ ИЗОЛОНА','materials' => 'https://docs.google.com/document/d/1Nx0IO2V9chT28QAQ0lnhV0TJ4W-R756T/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '98','name' => 'КОРЗИНКА С ЦВЕТАМИ ИЗ ДЖУТА, МЕШКОВИНЫ И КОФЕЙНЫХ ЗЁРЕН','materials' => 'https://docs.google.com/document/d/1tiHtNXHVdYDC9Typ0Bx_mvW7M_pJ7hRF/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '99','name' => 'ШВЕЙНОЕ ИЗДЕЛИЕ «РУБАШКА»','materials' => 'https://drive.google.com/file/d/1CEwFAitLnesm61hMK1Vubol682Kk2nii/view?usp=sharing
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '100','name' => 'Вторая жизнь старых вещей','materials' => 'https://docs.google.com/document/d/1CUw2cqau-k7BQI-veeAceTnYXKuofnKM/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '101','name' => 'Платье «Инь-Янь»  ','materials' => 'https://docs.google.com/document/d/1pMJYzTKf8x-axvJMlhIMmOaqBKx-wiyo/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '102','name' => 'Витраж «Цветочное настроение»','materials' => 'https://docs.google.com/document/d/1464vF9dpYJLMVDtpPK4ZIki8nK7iMokZ/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
  array('idproject' => '103','name' => 'Декорирование кружки композицией из полимерной глины','materials' => 'https://docs.google.com/document/d/1Tv1oQUpE2N6Ieh3YI_6yuQ9FZJkx01I9/edit?usp=sharing&ouid=104908206132436926355&rtpof=true&sd=true
','titli' => 'Обработка  швейного изделия и моделирование'),
);


for ($i = 0; $i < count($project); $i++) {
        
                $idproject = $project[$i]["idproject"];
                $name = $project[$i]["name"];
                $materials = $project[$i]["materials"];
                $titli = $project[$i]["titli"];
                var_dump($name) ;
                var_dump($materials) ;



                mysqli_query($connect, query: "INSERT INTO `project` (`idproject`, `name`, `materials`, `titli`) VALUES (NULL, '$name', '$materials', '$titli')");
            }